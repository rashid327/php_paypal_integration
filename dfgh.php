   <div class="row m-1" id="shopInfo1"> <!-->
        <div class="card col-md-12 p-0">
            <div class="card-header">
                <h4>Shop's Info</h4>
            </div>
            <div class="card-body col-md-12">
                <div class="row p-2 bg-light">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Shop Name: </b><span class="ml-2 mr-2" >{{$retailer->shop_name}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>Shop Status: </b><span class="ml-2 mr-2" >{{$retailer->shop_status}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Shop Category: </b> <span class="ml-2 mr-2" >{{$retailer->shop_category}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>Mobile Number: </b><span class="ml-2 mr-2" >{{$retailer->mobile_number}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 hov">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Retailer ID: </b><span class="ml-2 mr-2" >{{$retailer->retailer_id}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>Franchise ID: </b><span class="ml-2 mr-2" >{{$retailer->franchise_id}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>POS Number 1: </b><span class="ml-2 mr-2" >{{$retailer->pos_number1}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>POS Number 2: </b><span class="ml-2 mr-2" >{{$retailer->pos_number2}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2  bg-light">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>POS Number 3: </b><span class="ml-2 mr-2" >{{$retailer->pos_number3}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>City: </b><span class="ml-2 mr-2" >{{$retailer->city}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Region: </b><span class="ml-2 mr-2" >{{$retailer->region}}</span>
                            </div>
                            <div class="col-sm-6">
                                <b>Nearest Landmark: </b><span class="ml-2 mr-2" >{{$retailer->nearest_landmark}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 hov">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Vicinity: </b><span class="ml-2 mr-2" >{{$retailer->vicinity}}</span>
                            </div>


                            <div class="col-sm-6">
                                <b>Premises: </b><span class="ml-2 mr-2" >{{$retailer->premises}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <b>Surrounding: </b><span class="ml-2 mr-2" >{{$retailer->surrounding}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
