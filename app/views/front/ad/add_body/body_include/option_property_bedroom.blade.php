<span class="{{ $props->get(26)->icon }} add_ad_option__img">
<input name="prop[26]" type="number" class="add_ad_option__inline add_ad_field"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    maxlength = "2" placeholder='{{TransWord::getArabic($props->get(26)->name,false)}}'
    value="{{ (!empty($advert_props) && isset($advert_props[26])) ? $advert_props[26][0] : '' }}" />