<div class="c-size-md c-overflow-hide c-bs-grid-small-space m-top-20 m-bot-20">
    <div class="container">
        <div class="row">
            <article class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="owl-carousel-1">
                    @themeSlide('promo-1', 'promo')
                </div>
            </article>
            <!-- /.entry-item -->

            <article class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div>
                    @themeSlide('promo-2', 'promo-row')
                </div>
            </article>
            <!-- /.entry-item -->

            <article class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                <div class="owl-carousel-2">
                    @themeSlide('promo-3', 'promo')
                </div>
            </article>
            <!-- /.entry-item -->
        </div>
    </div>
</div>


@push('scripts')
<script>
    $(document).ready(function(){
        $(".owl-carousel-1").owlCarousel({
            items : 1,
            pagination: false,
            autoPlay: 5000,
            transitionStyle: "backSlide",
            itemsCustom : false,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [980,1],
            itemsTablet: [768,1],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : true,
            itemsScaleUp : true,
            margin:0
        });
        $(".owl-carousel-2").owlCarousel({
            items : 1,
            pagination: false,
            autoPlay: 5000,
            transitionStyle: "goDown",
            itemsCustom : false,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [980,2],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : true,
            itemsScaleUp : true,
            margin:0
        });
    });
</script>
@endpush