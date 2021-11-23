@if(session("update_data_error"))
    @include("app.partials.error")
@endif
<form class="card" action="/{{ $lang }}/user/updateData" method="post">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" name="surname" class="input-regular" placeholder="{{ __("default.forms.surname") }}"
               required
               value="{{ old("surname") ? old("surname") : $item->surname  }}">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.surname")]) }}</li>
            </ul>
        </div>
    </div>
    <div class="input-group">
        <input type="text" name="name" class="input-regular" placeholder="{{ __("default.forms.name") }}" required
               value="{{ old("name") ? old("name") : $item->name  }}">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.name")]) }}</li>
            </ul>
        </div>
    </div>
    <div class="input-group">
        <input type="text" name="patronymic" class="input-regular"
               placeholder="{{ __("default.forms.patronymic") }}" required
               value="{{ old("patronymic") ? old("patronymic") : $item->patronymic  }}">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.patronymic")]) }}</li>
            </ul>
        </div>
    </div>
    <div class="input-group">
        <input type="text" name="iin" class="input-regular" placeholder="{{ __("default.forms.iin") }}" required
               value="{{ old("iin") ? old("iin") : $item->iin  }}"
               maxlength="12" minlength="12" data-validate="iin">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.iin")]) }}</li>
                <li class="length">{{ __("validation.size.string",["attribute" => __("default.forms.iin"),"size" => 12]) }}</li>
            </ul>
        </div>
    </div>
    <div class="input-group">
        <input type="tel" name="phone" class="input-regular" placeholder="{{ __("default.forms.phone") }}" required
               value="{{ old("phone") ? old("phone") : $item->phone  }}"
               onfocus="$(this).inputmask('+7 999 999 99 99')"
               data-validate="phone">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.phone")]) }}</li>
                <li class="correct">{{ __("validation.tel",["attribute" => __("default.forms.phone")]) }}</li>
            </ul>
        </div>
    </div>
    <div class="input-group">
        <input type="email" name="email" class="input-regular" placeholder="{{ __("default.forms.email") }}"
               required
               value="{{ old("email") ? old("email") : $item->email  }}" data-validate="email">
        <div class="alert alert-danger">
            <ul>
                <li class="required">{{ __("validation.required",["attribute" => __("default.forms.email")]) }}</li>
                <li class="correct">{{ __("validation.email",["attribute" => __("default.forms.email")]) }}</li>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn">{{ __("default.labels.save") }}</button>
    </div>
</form>
