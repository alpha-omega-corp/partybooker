<ul class="usp-content-card">
    @foreach($usps as $usp)
        <div class="usp-card shadow-lg">
            <div class="usp-card-header">
                <li>
                    <h6 class="usp-card-title">
                        {{$usp->locale->title}}
                    </h6>
                </li>
            </div>


            <p>{{$usp->locale->description}}</p>

        </div>
    @endforeach
</ul>
