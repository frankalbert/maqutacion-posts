<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

<title>Maquetación de Posts</title>

<style>
	.contenedor__cuerpo__making{
		float: left;
		width: 100%;
		background: #c7c7c7;
	}
	
	.contenedor__listado__posts{
		float: left;
		width: 100%;
		background: #fff;
		padding: 15px;
	}
	
	.contenedor__post__individual{
		border: 1px solid #c7c7c7;
		padding: 0 15px 15px;
	}
    
</style>

</head>

<body>

		<div class="contenedor__cuerpo__making">
        	
            <div class="container">
        		<h1>Posts</h1>
                	
                <div class="row">
                
	                <div class="contenedor__listado__posts">
                		
                        <?php $totalPosts = 10; $colOcho = 4; $colQuinta = 5; $colSexta = 6; for($i = 1; $i <= $totalPosts; $i++) { ?>
                        	
                            <?php if($i != $colSexta) { ?>
                            	<div class="contenedor__post__individual <?php if($i == $colOcho) { $colOcho += 6; ?> col-md-8 <?php }else { ?> col-md-4 <?php } ?>"> 
                            <?php } ?>    
									<?php if(($i == $colQuinta) || ($i == $colSexta)) { ?>
                                        <div class="row" <?php if($i == $colSexta) { ?> style=" border-top: 1px solid #c7c7c7;" <?php } ?>>
                                            <div class="col-md-12">
                                    <?php } ?>    
                                            <h3>T&iacute;tulo del Post <?php echo $i;?></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, pariatur porro dolores incidunt officiis placeat reiciendis itaque eum atque hic cum magnam doloribus dignissimos iste sunt doloremque beatae laudantium aliquam!</p>
                                    
                                    <?php if(($i == $colQuinta) || ($i == $colSexta)) { ?>
                                    	 	</div>
                                        </div>
                                    <?php } ?>
                                    
                             <?php if($i != $colQuinta) { ?>
                                    
                            	</div>
                                
                             <?php } ?>
                              
                        	<?php if($i == $colQuinta){ $colQuinta+= 6;}else if($i == $colSexta){ $colSexta+=6;}; 
							
						} ?>
                        
                        <?php if(($totalPosts % 6) == 5) { ?>
                        
                        	</div>
                            
                        <?php } ?>
                        
					</div>
                                    
                </div>
        	</div>
        </div>
            

<!-- JQuery -->
<script type="text/javascript" src="/js/jquery.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

        
</body>

</html>