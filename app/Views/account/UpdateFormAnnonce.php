<section id="features" class="services-area pt-120" style="z-index:100">
    <div class="container">
        <div class='row'>
            <div class="col-12">
            <!--  -->
                <div class="jumbotron cust-formupdateannonce">
                    <h1 class="display-4">Editer votre Annonce</h1>
                    <hr class="my-4">
                    <form action="<?php echo base_url(); ?>/Account/updateformAnnonce/<?php echo $urldata; ?>" method="Post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-12 col-md-6 text-center">
                                <label for="inputGroupFile01" class="cust-labelimage">
                                    <img id="preview" src="<?php echo $annonce['pictureAnnonce'] == '' ? base_url() . '/assets/images/not-available.jpg' :  base_url() . '/assets/images/annonce/cover/' . $annonce['pictureAnnonce']  ; ?>" class='cust-pitureForm' alt="piture">
                                    <span class="cust-font"></span>
                                    <span class="cust-button">Changer</span>
                                </label>
                                <div class='text-center'>
                                    <p id="name-picture"></p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">

                                <div class="form-outline col-12">
                                    <input type="text" id="form6Example1" class="form-control" value="<?php echo $annonce['nameAnnonce'] ?>" name="name" />
                                    <label class="form-label cust-textVisible" for="form6Example1">Titre Annonce
                                        <?php if (!empty($errors["name"])) {?>
                                            <p class="text-danger"><?php echo $errors["name"] ?></p>
                                        <?php } ?>
                                    </label>

                                </div>

                                <div class="form-group col-12">
                                    <input type="number" id="form6Example6" class="form-control" step=0.01  min="0" value="<?php echo $annonce['priceAnnonce'] ?>" name="price" />
                                    <label class="form-label cust-textVisible" for="form6Example6">Price
                                        <?php if (!empty($errors["price"])) {?>
                                            <p class="text-danger"><?php echo $errors["price"] ?></p>
                                        <?php } ?>
                                    </label>
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                                        <?php if (!empty($categorys)) {
                                                foreach($categorys as $item){ ?>
                                                    <option value="<?php echo $item['idcategory']?>" <?php echo $annonce['idCategoryAnnonce'] == $item['idcategory']? 'selected' : '' ; ?> ><?php echo $item['nameCategory']?></option>
                                        <?php   }
                                            } ?>
                                    </select>
                                    <label class="cust-textVisible" for="exampleFormControlSelect1">Category</label>
                                </div>

                            </div>

                            <div class="form-group col-12 mt-3">
                                    <textarea class="form-control" id="Textarea1" rows="3" name="more"><?php echo $annonce['moreAnnonce']; ?></textarea>
                                    <label for="Textarea1" class="cust-textVisible">Détail
                                        <?php if (!empty($errors["more"])) {?>
                                            <p class="text-danger"><?php echo $errors["more"] ?></p>
                                        <?php } ?>
                                    </label>
                            </div>
                            
                            <!-- picture input -->
                            <input type="file"  id="inputGroupFile01"  name='image' style="position: absolute; visibility: hidden;">
                            <!--  -->

                            <div class="offset-8 col-4 col-md-4">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Modifier</button>
                            </div>

                        </div>
                    </form>

                </div>
            <!--  -->
            </div>
        </div>
    </div>
</section>

<script>
   
    
</script>