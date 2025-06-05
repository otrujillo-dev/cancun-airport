<?php
namespace App\Traits;

trait GeneralTrait
{   
    public static function phone($phone){
        $phone = str_replace("-", "", $phone);
        $phone = str_replace("(", "", $phone);
        $phone = str_replace(")", "", $phone);
        $phone = str_replace(" ", "", $phone);
        $phone = str_replace("-", "", $phone);
        return $phone;
    }

    public static function alternate($data){
        if(app()->getLocale() == "en"):
            if( isset( $data['alternate']['es'] ) ):
                return $data['alternate']['es'];
            else:
                return "/";
            endif;
        endif;
        if(app()->getLocale() == "es"):
            if( isset( $data['alternate']['en'] ) ):
                return $data['alternate']['en'];
            else:
                return "/es";
            endif;
        endif;        
    }

    public static function makeImageURI($input){
        $output = preg_replace('/^image-/', '', $input);
        $output = preg_replace('/-(?=[^-.]+$)/', '.', $output);
        return "https://cdn.sanity.io/images/".config('sanity.project_id')."/production/".$output;
    }

    
    public static function makeBlockContent($blocks) {
        $html = '';
        $currentListType = null; // Para mantener el tipo de lista actual (ul/ol)
    
        foreach ($blocks as $block) {
            // Procesar bloques de texto
            if ($block['_type'] === 'block') {
                $content = self::processChildren($block['children'], $block['markDefs']);
    
                if (isset($block['listItem'])) {
                    $listType = $block['listItem'] === 'number' ? 'ol' : 'ul';
    
                    // Abrir nueva lista si cambia el tipo o es la primera vez
                    if ($currentListType !== $listType) {
                        // Cerrar lista previa, si existe
                        if ($currentListType !== null) {
                            $html .= "</{$currentListType}>";
                        }
                        // Abrir nueva lista
                        $html .= "<{$listType}>";
                        $currentListType = $listType;
                    }
    
                    // Agregar elemento de lista
                    $html .= "<li>{$content}</li>";
                } else {
                    // Cerrar lista si estamos fuera de un contexto de lista
                    if ($currentListType !== null) {
                        $html .= "</{$currentListType}>";
                        $currentListType = null;
                    }
    
                    // Procesar estilos de bloque (h1, h2, etc.)
                    switch ($block['style']) {
                        case 'h1':
                        case 'h2':
                        case 'h3':
                        case 'h4':
                        case 'h5':
                        case 'h6':
                            $html .= "<{$block['style']}>{$content}</{$block['style']}>";
                            break;
                        case 'blockquote':
                            $html .= "<blockquote>{$content}</blockquote>";
                            break;
                        default:
                            $html .= "<p>{$content}</p>";
                            break;
                    }
                }
            }
    
            // Procesar imágenes
            if ($block['_type'] === 'image') {
                $html .= '<img src="' . self::makeImageURI($block['asset']['_ref']) . '" '
                       . 'width="' . ((isset( $block['width'] ))? $block['width'] :'100') . '" height="' . ((isset( $block['height'] ))? $block['height'] :'100') . '" '
                       . 'alt="' . htmlspecialchars($block['alt']) . '" '
                       . 'title="' . htmlspecialchars($block['title']) . '" loading="lazy">';
            }

            // Procesar tablas
            if ($block['_type'] === 'table') {
                $html .= '<table border="1" cellspacing="0" cellpadding="6">';

                foreach ($block['rows'] as $row) {
                    $html .= '<tr>';
                    foreach ($row['cells'] as $cell) {
                        $cellContent = isset($cell['content']) ? htmlspecialchars($cell['content']) : '';
                        $html .= "<td>{$cellContent}</td>";
                    }
                    $html .= '</tr>';
                }

                $html .= '</table>';
            }
        }
    
        // Cerrar lista si quedó abierta al final
        if ($currentListType !== null) {
            $html .= "</{$currentListType}>";
        }
    
        return $html;
    }
    
    // Función para procesar los spans y los enlaces dentro de los bloques
    private static function processChildren($children, $markDefs) {
        $content = '';
    
        foreach ($children as $child) {
            $text = htmlspecialchars($child['text']);
    
            // Verificar si hay marcas aplicadas al span
            if (!empty($child['marks'])) {
                foreach ($child['marks'] as $mark) {
                    $def = self::findMarkDef($mark, $markDefs);
    
                    if ($def && $def['_type'] === 'link') {
                        $text = '<a href="' . ((isset( $def['href'] ))? htmlspecialchars($def['href']) :'#') . '" '
                              . 'target="' . ($def['target'] ?? '_self') . '" '
                              . 'title="' . ((isset( $def['title'] ))? htmlspecialchars($def['title']) :'') . '">'
                              . $text . '</a>';
                    } elseif ($mark === 'em') {
                        $text = "<em>{$text}</em>";
                    } elseif ($mark === 'strong') {
                        $text = "<strong>{$text}</strong>";
                    }else{
                        $text = "{$text}";
                    }
                }
            }
    
            $content .= $text;
        }
    
        return $content;
    }
    
    // Función para encontrar las definiciones de marcas (links, etc.)
    private static function findMarkDef($key, $markDefs) {
        foreach ($markDefs as $def) {
            if ($def['_key'] === $key) {
                return $def;
            }
        }
        return null;
    }

}