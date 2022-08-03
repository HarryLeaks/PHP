<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Chess</title>
		<style media="screen">
		  table{
		      width: 540px;
		      border: 2px solid black;
		      margin-left: 30%;
		      margin-top: 5%;
		      }
		  #td1{
		     height: 60px;
		     width: 60px;
		     background-color: white;
		  }
		  #td2{
		     height: 60px;
		     width: 60px;
		     background-color: black;
		  }
		</style>
	</head>
	<body>
		<table cellspacing="0px" cellpadding="0px">
			<?php 
			
			class piece{
			    public $name;
			    public $url;
			    
			    function set_name($name){
			        $this->name = $name;
			    }
			    
			    function get_name(){
			        return $this->name;
			    }
			    
			    function set_url($url){
			        $this->url = $url;
			    }
			    
			    function get_url(){
			        return $this->url;
			    }
			}
			
			/*$array = array("/img/black_b.png", "/img/black_k.png", "/img/black_n.png", "/img/black_p.png", "/img/black_q.png", "/img/black_r.png", "/img/white_b.png", "/img/white_k.png", "/img/white_n.png", "/img/white_p.png", "/img/white_q.png", "/img/white_r.png");
			foreach($array as &$value){
			    
			}*/
			
			for($i = 1; $i <= 8; $i++){
			    echo "<tr>";
			    for($j=1; $j<=8; $j++){
			        $total = $i + $j;
			        if($total % 2 == 0){
			            echo "<td id='td1'> </td>";
			        }else{
			            echo "<td id='td2'> </td>";
			        }
			    }
			    echo"</tr>";
			}
			echo "<img src='img\black_b.png' width='60px' height='60px'/>"; 
			?>
		</table>
	</body>
</html>
