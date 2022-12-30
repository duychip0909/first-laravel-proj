<section class="text-center container my-5">
    <div class="information-receive">
        <div class="top d-flex align-items-center justify-content-between">
            <div class="input-wrap">
                <label for="checkin-date">Check-in</label>
                <input type="date" class="w-100">
            </div>
            <div class="input-wrap">
                <label for="checkout-date">Check-out</label>
                <input type="date" class="w-100">
            </div>
            <div class="input-wrap">
                <label for="adult-quantity">Adult</label>
                <select name="adult-quantity" id="" class="w-100">
                    @for ($i = 0; $i <= 30; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="input-wrap">
                <label for="children-quantity">Children</label>
                <select name="children-quantity" id="" class="w-100">
                    @for($i = 0; $i <= 10; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="bottom d-block my-4">
            <div class="input-wrap w-100">
                <label for="Location">Location</label>
                <select name="location" id="" class="w-100">
                    @foreach($locationList as $location)
                        <option value="{{$location->name}}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <a href="#" class="learnmore-btn">Search</a>
    </div>
</section>
