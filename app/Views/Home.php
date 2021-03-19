  <!--====== SERVICES PART START ======-->
    
    <section id="features" class="services-area pt-120" style="z-index:100">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title text-light">Les meilleurs, <span> Anonces du Monde!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <ul class="col-12">
                <li class="list-group-item row">
                    <form action="<?php echo base_url() . '/' ?>" method="post" id="formcategory" class='col-3'>
                        <p>Catégorys</p>
                        <select name="categorySelected" id="categorySelected" class="form-control">
                            <option value='0'>--All--</option>
                            <?php if(!empty($listeCategory)){
                                foreach($listeCategory as $item){ ?>
                                    <option value="<?php echo $item['idcategory'] ?>" <?php echo $idcategoy == $item['idcategory']? 'Selected' : ''; ?>><?php echo  $item['nameCategory'] ?></option>
                                <?php } 
                                } ?>
                        </select>
                    </form>
                </li>
            </ul>

            <div class="row justify-content-center">
                <!-- cards  -->

                <?php if(!empty($annonces)) {
                        foreach($annonces as $item) { ?>

                            <div class="col-lg-4 col-md-7 col-sm-8">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div>
                                        
                                        <img class="cust-clikmore" id="<?php echo $item['idAnnonce'] ?>" style='box-shadow: 1px 1px 5px black; cursor: pointer; height: 286px' src="<?php echo $item['pictureAnnonce'] != ''? base_url() . "/assets/images/annonce/cover/"  . $item['pictureAnnonce'] : base_url() . '/assets/images/not-available.jpg' ?>"  />
                                        
                                        <div class='row'>
                                        <p class="text text-left col-6"><?php echo $categoryFind->where('idcategory', $item['idCategoryAnnonce'])->first()['nameCategory']?></p>
                                        <p class="text text-right col-6"><?php echo $usersFind->where('idUser', $item['idUserAnnonce'])->first()['nameUser'] ?></p>
                                        </div>
                                    </div>
                                    <div class="services-content mt-10">
                                        <h4 class="title text-left"><?php echo $item['nameAnnonce']?></h4>
                                        <p class="text text-left mt-1"><?php echo  substr($item['moreAnnonce'], 0, 35) ?>...</p>
                                        <div class="col-12 row">
                                            <h4 class="text text-center col-12"><?php echo $item['priceAnnonce'] ?>€</h4>
                                        </div>
                                        <div class="row">
                                        <a class="more text-center cust-main-btn col-6" href="#">Ajouter au panier</i></a>
                                        <span class="more text-center main-btn col-6 cust-clikmore" id="<?php echo $item['idAnnonce'] ?>" style="cursor: pointer" >détails...<i class="lni-chevron-right"></i></span>
                                        </div>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                <?php } 
                } ?>
                <!-- end cards -->
                <div class="col-12 d-flex justify-content-center">
                    <?= $pager->links('group1' , 'custom_pager') ?>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
<!-- detail more -->
<div id="detailAnnonce" class='fadeIn' style="visibility: visible; animation-duration: 0.5s; animation-name: fadeIn;">
    <div class="container">

        <div class='fadeIn row col-12 mt-5' data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-name: fadeIn;">
            <div class="alert alert-primary offset-1 col-10 cust-font-detail" role="alert">

                <div class="col-12 mt-2 mb-5">
                    <button type="button" class="btn btn-dark close_mor">
                        <i class="lni lni-close"></i>
                    </button>
                </div>

                <div class='row'>
                    <div class="col-12 col-md-6">
                        <img id='detail-more-img' class="img-thumbnail"  alt="detail-picture">
                    </div>
                    <div class="col-12 col-md-6 ">
                        <h2 id="detail-more-name">name</h2>
                        <p class="text-right" style="border-bottom: solid 1px #ffffff">Vendu par: <span class="text-white" id="detail-more-vendeur">user</span></p>
                       
                        <p id="detail-more-more" class='text-white pl-2 mt-2' style="min-height: 100px">more</p>
                        <p class='text-white text-right'> Prix: <span id="detail-more-price" class="text-danger" style="font-size: 120%">0.00$</span></p>
                        <a class="more text-center cust-main-btn col-12 col-md-6" href="#">Ajouter au panier</i></a>
                    </div>
                    
                </div>

            </div>
        </div>

    </div>
</div>