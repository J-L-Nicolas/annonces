<section id="features" class="services-area pt-120" style="z-index:100">
    <div class="container">
        <div class='row'>
            <div class="col-12">

            <!--  -->
                <div class="section-title text-center pb-30">
                    <div class="line m-auto"></div>
                    <h3 class="title text-white">Creer <span>votre Nouvelle annonce</span></h3>
                </div> <!-- section title -->
                <form action="<?php echo base_url(); ?>/Account/FormAnnonce" method="Post" enctype="multipart/form-data">
                    
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example1" class="form-control" name="name"/>
                        <label class="form-label cust-textVisible" for="form6Example1">Titre Annonce
                            <?php if (!empty($errors["name"]) && $errortype == 'register') {?>
                                <p class="text-danger"><?php echo $errors["name"] ?></p>
                            <?php } ?>
                        </label>
                    </div>  

                    <div class="form-group">
                        <textarea class="form-control" id="Textarea1" rows="3" name="more"></textarea>
                        <label for="Textarea1" class="cust-textVisible">Détail
                            <?php if (!empty($errors["name"]) && $errortype == 'register') {?>
                                <p class="text-danger"><?php echo $errors["name"] ?></p>
                            <?php } ?>
                        </label>
                    </div>
                    
                   
                    <div class="form-group">
                        <input type="number" id="form6Example6" class="form-control" step=0.01 value="0.00" min="0" name="price" />
                        <label class="form-label cust-textVisible" for="form6Example6">Price
                            <?php if (!empty($errors["tel"]) && $errortype == 'register') {?>
                                <p class="text-danger"><?php echo $errors["tel"] ?></p>
                            <?php } ?>
                        </label>
                    </div>

                    <div class="input-group mb-3 clo">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name='image'>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                  
                    <div class="form-group mb-4">
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="h" >auto</option>
                            <option value="f">vetement</option>
                            <option value="f">maison</option>
                        </select>
                        <label class="cust-textVisible" for="exampleFormControlSelect1">Category</label>
                    </div>

                    <input type="hidden" value="newAnnonce" name='form'>

                    <!-- Submit button -->
                    <div class="col-12 col-md-4">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Publier</button>
                    </div>

                </form>

            <!--  -->
            </div>
        </div>
    </div>
</section>