@include('front.ad.head_body')

<div class="add_ad_feilds">
    <div class="add_ad_feilds__line">
        @include('front.ad.add_body.body_include.title')
    </div>
    <div class="add_ad_feilds__line">
        @include('front.ad.add_body.body_include.photo_block')
    </div>
    <div class="add_ad_feilds__line">
        @include('front.ad.add_body.body_include.description')
    </div>
</div>

<div class="add_ad_price">
    @include('front.ad.add_body.body_include.price', array('ad_negotiable'=>1, 'ad_exchange'=>0, 'ad_free'=>0))
</div>

<div class="add_ad_option add_ad_option_top-border">
    <div class="row">
		<div class="add_ad_option__line">
			<div class="col-md-45">
				<!-- Furnished -->
				@include('front.ad.add_body.body_include.option_property_furnished')
			</div>
            <div class="col-md-60">
                <!-- bathroom_attached -->
                @include('front.ad.add_body.body_include.option_property_bathroom_attached')
			</div>
            <div class="col-md-60 col-md-offset-10">
		</div>
    </div>
    
</div>

@include('front.ad.owner')
