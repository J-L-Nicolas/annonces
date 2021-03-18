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
                                        <a href="#">
                                            <img style='box-shadow: 1px 1px 5px black' src="<?php echo $item['pictureAnnonce'] != ''? base_url() . "/assets/images/annonce/cover/"  . $item['pictureAnnonce'] : 'pictureAnnonce' ?>"  />
                                        </a>
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
                                        <a class="more text-left btn btn-warning col-6" href="#">Ajouter au panier</i></a>
                                        <a class="more text-right btn btn-link  col-6" href="#">détails...<i class="lni-chevron-right"></i></a>
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
<script>
    document.querySelector('#categorySelected').addEventListener('change',(e)=>{
        console.log('ok change category' );
        document.querySelector('#formcategory').submit();
    })
</script>