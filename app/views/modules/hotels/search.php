<div class="tab fade">
    <div class="row no-gutters row-rtl search_area main_search">
        <div class="row">
            <div class="c12 data-input">
                <div class="input-wrapper">
                    <span class="input-label"><i class="mdi mdi-flight-takeoff"></i> From Origin</span>
                    <div class="input-items">
                       <input autocomplete="off" type="search" placeholder="Destination" name="destination" value="Dubai - United Arab Emarates" class=""/>
                    </div>
                </div>
            </div>
            <div class="c12 data-input">
                <div class="input-wrapper">
                    <div class="row no-gutters items-center">
                        <div class="c3 c-sm-3">
                            <span class="input-label"><i class="mdi mdi-calendar"></i> Checkin</span>
                            <div class="input-items">
                                <input
                                    id=""
                                    name="depart"
                                    class="depart"
                                    type="text"
                                    placeholder="19/03/2020"
                                    value="20/06/2020"
                                    />
                            </div>
                        </div>
                        <div class="c3 c-sm-3">
                            <span class="input-label"><i class="mdi mdi-calendar"></i> Checkout</span>
                            <div class="input-items">
                                <span class="dashed hide show-md">-</span>
                                <input
                                    name="return"
                                    class="returning"
                                    id=""
                                    type="text"
                                    placeholder="20/03/2020"
                                    value="24/06/2020"
                                    />
                            </div>
                        </div>
                        <div class="c6 row-rtl pt-15">
                            <div class="row">
                                <div class="c4 room-row flex-content-between row-rtl text-center">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> Adults </span>
                                        <span class="text-muted ml-5"> <small>(+12)</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <button class="decrease" id="decrease">-</button>
                                        <span id="adult">1</span>
                                        <button class="increase" id="increase">+</button>
                                    </div>
                                </div>
                                <div class="c4 room-row flex-content-between items-center row-rtl text-center">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> Children</span>
                                        <span class="text-muted ml-5"><small>(+2/+11)</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <button class="decrease" id="decreasee">-</button>
                                        <span id="children">0</span>
                                        <button class="increase" id="increasee">+</button>
                                    </div>
                                </div>
                                <div class="c4 room-row flex-content-between items-center row-rtl text-center">
                                    <div class="passenger-dropdown-left">
                                        <span><i class="mdi mdi-directions-walk"></i> Rooms</span>
                                        <span class="text-muted ml-5"><small>&nbsp;</small></span>
                                    </div>
                                    <div class="passenger-dropdown-right">
                                        <button class="decrease" id="decreasee">-</button>
                                        <span id="intant">0</span>
                                        <button class="increase" id="increasee">+</button>
                                    </div>
                                </div>
                                <div class="passenger-dropdown pb-20">
                                    <div class="passenger-dropdown-head rtl-align-right">
                                        <span >Options</span>
                                    </div>
                                    <div class="class_type">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_bottom">
            <div class="c12">
                <button type="submit" id="submit" class="f-right btn prime m"><i class="mdi mdi-search"></i> Search Hotels</button>
                <label for="direct" class="direct f-right btn m"><input type="checkbox" id="direct" class="mr-10">Direct Flights</label>
            </div>
        </div>
    </div>
</div>














<!--<div class="tab fade">
<div class="row no-gutters list row-rtl">
<div class="c4 data-input">
    <div class="input-wrapper">
        <span class="input-label"><i class="mdi mdi-my-location"></i> Going to</span>
        <div class="input-items">
            <input
                autocomplete="off"
                type="text"
                placeholder="Destination or Hotel"
                />
        </div>
    </div>
</div>
<div class="c4 data-input">
    <div class="input-wrapper">
        <div class="row no-gutters items-center">
            <div class="c6 c-sm-6">
                <span class="input-label"><i class="mdi mdi-calendar"></i> Check In</span>
                <div class="input-items">
                    <input
                        class="checkin"
                        type="text"
                        placeholder="10/13/2020"
                        value=""
                        />
                </div>
            </div>
            <div class="c6 c-sm-6">
                <span class="input-label"><i class="mdi mdi-calendar"></i> Check Out</span>
                <div class="input-items">
                    <span class="dashed hide show-md">-</span>
                    <input
                        class="checkout"
                        type="text"
                        placeholder="12/13/2020"
                        value=""
                        />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="c4 data-input flex  row-rtl">
<div class="dropshow">
    <div class="input-wrapper travelers drophover">
        <span class="input-label"><i class="mdi mdi-directions-walk"></i> Travelers</span>
        <div class="input-items passenger-info rtl-align-right">
        <input type="" value="1 Traveler, 1 Room" readonly />
        </div>
    </div>
    </div>
    <div class="passenger-dropdown pb-20">
        <div class="passenger-dropdown-head rtl-align-right">
            <span >Options</span>
        </div>
        <div class="flex room-row flex-content-between row-rtl">
            <div class="passenger-dropdown-left">
                <span>Adult </span>
                <span class="text-muted ml-5"> ( +12 )</span>
            </div>
            <div class="passenger-dropdown-right">
                <button class="decrease">-</button>
                <span>1</span>
                <button class="increase">+</button>
            </div>
        </div>
        <div class="flex room-row flex-content-between items-center row-rtl">
            <div class="passenger-dropdown-left">
                <span>Children</span>
                <span class="text-muted ml-5">( 2y to 11y )</span>
            </div>
            <div class="passenger-dropdown-right">
                <button class="decrease">-</button>
                <span>1</span>
                <button class="increase">+</button>
            </div>
        </div>
        <button class="add-room mt-20" type="button">Add room +</button>
    </div>
    <div class="searchbutton">
        <button type="submit">
        <span class="icon-search"><i class="mdi mdi-search"></i></span>
        </button>
    </div>
  </div>
</div>
</div>-->