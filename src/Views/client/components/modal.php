<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                    <?php
                        $i = 0;
                        $img_path = '/assets/img/product/';
                        foreach ($Getone_product as $product) {
                            extract($product);
                            $img = $img_path . $image;
                            echo '<div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="'.$img.'" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>'.$product_name.'</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">'.$price.'</span>
                                </div>
                                <div class="modal_content mb-10">
                                    <p>'.$description.'</p>
                                </div>
                                <div class="modal_size mb-15">
                                    <h2>size</h2>
                                    <ul>
                                        <li><a href="#">'.$size.'</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">xxl</a></li>
                                    </ul>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="#">
                                        <input min="0" max="100" step="2" value="1" type="number">
                                        <button type="submit">add to cart</button>
                                    </form>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>'.$description.'</p>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
                        $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>