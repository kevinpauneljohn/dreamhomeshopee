@if($type === "search-1")
    <form>
        @csrf
        <div class="clearfix"></div>
        <div class="inline-search-area isa-4 clearfix">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <select class="selectpicker search-fields" name="status">
                        <option>Any Status</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <select class="selectpicker search-fields" name="type">
                        <option>All Type</option>
                        <option>Apartments</option>
                        <option>Shop</option>
                        <option>Restaurant</option>
                        <option>Villa</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <select class="selectpicker search-fields" name="bedrooms">
                        <option>Bedrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <select class="selectpicker search-fields" name="bathrooms">
                        <option>Bathrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <select class="selectpicker search-fields" name="location">
                        <option>location</option>
                        <option>United States</option>
                        <option>American Samoa</option>
                        <option>Belgium</option>
                        <option>Canada</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                    <button class="btn button-theme btn-search btn-block">
                        <i class="fa fa-search"></i><strong>Search</strong>
                    </button>
                </div>
            </div>
        </div>
        <div class="inline-search-area isa-3 clearfix">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-6">
                    <select class="selectpicker search-fields" name="any-status">
                        <option>Any Status</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <select class="selectpicker search-fields" name="all-type">
                        <option>All Type</option>
                        <option>Apartments</option>
                        <option>Shop</option>
                        <option>Restaurant</option>
                        <option>Villa</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <select class="selectpicker search-fields" name="bedrooms">
                        <option>Bedrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <select class="selectpicker search-fields" name="bathrooms">
                        <option>Bathrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <select class="selectpicker search-fields mb-0" name="location">
                        <option>location</option>
                        <option>United States</option>
                        <option>American Samoa</option>
                        <option>Belgium</option>
                        <option>Canada</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <button type="submit" class="btn button-theme btn-search btn-block mb-0">
                        <i class="fa fa-search"></i><strong>Search</strong>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endif

