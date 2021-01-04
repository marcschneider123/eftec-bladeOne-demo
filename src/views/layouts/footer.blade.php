<footer>

    <div class="container d-flex flex-md-row flex-column justify-content-md-between">
        <div class="">
            <ul class="list-inline">
                <li class="list-inline-item">&copy; {{date('Y')}} <a href="{{$config['company']['url']}}" target="_blank">{{$config['company']['name']}}</a></li>
            </ul>
        </div>
        <div>
            <a class="bewertungen" itemscope="" itemtype="http://schema.org/Service" href="{{$config['company']['url']}}">
                <span itemprop="name"> Nutzerbewertungen: </span> <span style="display: inline-block;" itemprop="aggregateRating" itemscope=""
                                                                        itemtype="http://schema.org/AggregateRating"><div> <span
                                itemprop="ratingValue">5</span> von <span itemprop="bestRating">5</span> bei <span itemprop="ratingCount">117</span> Bewertungen</div> </span></a>
        </div>
        <div class="">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="/kontakt">Kontakt</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$config['company']['url']}}/datenschutz/" target="_blank">Datenschutz</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$config['company']['url']}}/agb/" target="_blank">AGB</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$config['company']['url']}}/impressum/" target="_blank">Impressum</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<svg width="0" height="0">
    <linearGradient id="linearGradient" x1="0" x2="1" y1="0" y2="1">
        <stop stop-color="#0054a6" offset="0%"/>
        <stop stop-color="#5acfe3" offset="100%"/>
    </linearGradient>
</svg>