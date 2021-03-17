<section id="features" class="services-area pt-120" style="z-index:100">
    <div class="container">
        <div class='row'>
            <div class="col-12">
               <!--====== TEAM PART START ======-->
    
                <section id="team" class="team-area ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="section-title text-left pb-30">
                                    <h3 class="title text-white">Profile:</h3>
                                </div> <!-- section title -->
                            </div>
                        </div> <!-- row -->

                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-7 col-sm-8">
                                <div style="background: #00000020" class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="team-image">
                                        <img src="assets/images/no_image_user_profile.png" alt="Team">
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h5 class="holder-name text-white" style="text-shadow: 1px 1px 2px #ffffff"><a href="#"><?php echo $user["nameUser"] ?></a></h5>
                                        <p class="text">Founder and CEO</p>
                                    </div>
                                </div> <!-- single team -->
                            </div>
                            <ul class=" col-12 list-group list-group-horizontal mt-5">
                                <li class="col list-group-item">
                                    <a href="<?php echo base_url() . '/Account/FormAnnonce'?>" class="btn btn-primary">Créer une nouvelle Annonce</a>
                                </li>
                                <li class="col list-group-item">
                                    <a href="#" class="btn btn-primary">Modifier mon Profil</a>
                                </li>
                            </ul>

                            <div class="section-title text-center pb-30">
                                <div class="line m-auto"></div>
                                <h3 class="title"><span>Liste</span> des mes Annonces</h3>
                            </div> <!-- section title -->

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Categoty</th>
                                        <th scope="col">More</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">picture</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">Toyota</th>
                                        <td>Auto</td>
                                        <td><?php echo  substr("Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente, id repellat optio enim tenetur.", 0, 40) ?>...</td>
                                        <td>77€</td>
                                        <td>
                                            <div>
                                                <img src="assets/images/not-available.jpg" width="45px" alt="imageProduct">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"><i class="lni lni-pencil"></i></a>
                                            <a href="#"><i class="lni lni-trash"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div> <!-- row -->
                    </div> <!-- container -->
                </section>
                
                <!--====== TEAM PART ENDS ======-->
            </div>
        </div>
    </div>
</section>