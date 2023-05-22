<footer>
    @php
        $links = [
           [ 'title' => 'digital comics',
            'img' => 'digital-comics.png'
            ],
            [
                'title' => 'dc merchandise',
                'img' => 'merchandise.png'
            ],
            [
                'title' => 'subscription',
                'img' => 'subscriptions.png'
            ],
            [
                'title' => 'comic shop locator',
                'img' => 'shop-locator.png'
            ],
            [
                'title' => 'dc power visa',
                'img' => 'power-visa.svg'
            ]
        ]
    @endphp
    <div class="bg-primary py-5">
        <div class="container">
            <div class="row row-cols-5 mx-auto">
                @foreach ($links as $item)
                    <div class="col d-flex align-items-center justify-content-start">

                            <img class="footer-icon img-fluid" src="/images/buy-comics-{{$item['img']}}" alt="{{$item['img']}}">
                            <small class="ms-4 text-uppercase text-white">{{$item['title']}}</small>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
</footer>
