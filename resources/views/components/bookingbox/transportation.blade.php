<form id="transportation-bookingbox">
    <div class="top">
        <div>
            <input class="form-check-input" type="radio" name="xyz-input-service-type" id="xyz-input-service-type-one" value="OW">
            <label class="form-check-label" for="xyz-input-service-type-one">@lang('transportation/bookingbox.one_way')</label>
        </div>
        <div>
            <input class="form-check-input" type="radio" name="xyz-input-service-type" id="xyz-input-service-type-two" value="RT" checked>
            <label class="form-check-label" for="xyz-input-service-type-two">@lang('transportation/bookingbox.round_trip')</label>
        </div>
    </div>
    <div class="middle">
        <div class="one">
            <div class="items">
                <div class="input">
                    <input type="text" placeholder="@lang('transportation/bookingbox.from_place_holder')" id="xyz-input-from">
                    <div id="xyz-input-from-items"></div>
                </div>                
                <div class="line"></div>
                <div class="input">
                    <input type="text" placeholder="@lang('transportation/bookingbox.to_place_holder')" id="xyz-input-to">
                    <div id="xyz-input-to-items"></div>
                </div>
            </div>
            <div class="items-placeholders">
                
                
            </div>
        </div>
        <div class="two"><input type="text" id="xyz-input-from-date"></div>
        <div class="three"><input type="text" id="xyz-input-to-date"></div>
        <div class="four">
            <div class="pax"></div>
            <select class="form-control" id="xyz-input-passengers">
                <option value="0" disabled>@lang('transportation/bookingbox.pax')</option>
                @for($i=1; $i<=20; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <div class="arrow"></div>
        </div>
        <button class="btn" id="xyz-btn-book">@lang('transportation/bookingbox.search')</button>
    </div>
    <div id="xyz-bookingbox-errors"></div>
</form>