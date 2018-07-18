{config_load file="test.conf" section="setup"}
{include file="$tpl/menu.tpl" title=register}

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Connection au site</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"></h3>
                                <p>Inscrit toi aujourd'hui et rejoind l'expérience.</p>
                                <form role="form" method="post" action="index.php?p=register">
                                    <div class="form-group">
                                    	<label>Email</label>
                                    	<input type="email" placeholder="Entrer votre email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    	<label>Pseudo</label>
                                    	<input type="text" placeholder="Entrer votre pseudo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    	<label>Password</label>
                                    	<input type="password" placeholder="Entrer votre mot de passe" class="form-control">
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>S'inscrire</strong></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6"><h4>Déjà inscrit ?</h4>
                                <p>Vous pouvez vous connecter ici :</p>
                                <p class="text-center">
                                    <a href="index.php?p=connect"><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{include file="$tpl/footer.tpl"}
