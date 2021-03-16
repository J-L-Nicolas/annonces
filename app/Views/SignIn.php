<section id="features" class="services-area pt-120" style="z-index:100">
    <div class="container">
        <div class='row'>
            <div class="col-12">
                <ul class="col-12 nav">
                    <li class="list-group-item col-12 col-md-6"><!-- ##### Login ##### -->
                        <div class="services-content mt-30 mb-2">
                            <h4 class="title text-left">Login</h4>
                        </div>
                        <form action="<?php echo base_url(); ?>/signin/setLogin" method="Post" >
                        <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form1Example1" class="form-control" name="email" />
                                <label class="form-label" for="form1Example1">Email address</label>
                                <?php if (!empty($erros["email"])) {?>
                                    <p class="text-danger"><?php echo $erros["email"] ?></p>
                                <?php } ?>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form1Example2" class="form-control" name='password'/>
                                <label class="form-label" for="form1Example2">Password</label>
                                <?php if (!empty($erros["password"])) {?>
                                    <p class="text-danger"><?php echo $erros["password"] ?></p>
                                <?php } ?>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </li>
                    <li class="list-group-item col-12 col-md-6"><!-- ##### Register ##### -->
                        <div class="services-content mt-30 mb-2">
                            <h4 class="title text-left">Register</h4>
                        </div>
                        <form action="<?php echo base_url(); ?>/signin/setRegister" method="Post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                            
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control" name="name"/>
                                <label class="form-label" for="form6Example1">Name</label>
                            </div>  

                            <div class="row mb-4">
                                <div class="col">
                                    <!-- Password input -->
                                    <div class="form-outline">
                                        <input type="password" id="orm6Example3" class="form-control" name='password'/>
                                        <label class="form-label" for="orm6Example3">Password</label>
                                        <?php if (!empty($erros["password"])) {?>
                                            <p class="text-danger"><?php echo $erros["password"] ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col">
                                     <!-- ConfPassword input -->
                                    <div class="form-outline">
                                        <input type="password" id="orm6Example4" class="form-control" name='confpassword'/>
                                        <label class="form-label" for="orm6Example4">confPassword</label>
                                        <?php if (!empty($erros["password"])) {?>
                                            <p class="text-danger"><?php echo $erros["confpassword"] ?></p>
                                        <?php } ?>
                                    </div>      
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form6Example5" class="form-control" name="email"/>
                                <label class="form-label" for="form6Example5">Email</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="form6Example6" class="form-control" name="tel" />
                                <label class="form-label" for="form6Example6">Phone</label>
                            </div>

                            <div class="form-group mb-4">
                                <select class="form-control" id="exampleFormControlSelect1" name="sex">
                                    <option value="h" >Homme</option>
                                    <option value="f">Femme</option>
                                </select>
                                <label for="exampleFormControlSelect1">Sex</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById("form1Example1").focus();
</script>
