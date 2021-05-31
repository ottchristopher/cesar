<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Scripts javascript : Aperçu</title>
</head>
<body onload="Carousel()" bgcolor="#FFFFFF">

<br /><p class="tt" >Carroussel 8 faces</p><br /><br />

<script type="text/javascript">
//http://www.dynamicdrive.com
//Traduction http://www.outils-web.com

//Taille des images, elle doivent avoir toutes les mêmes dimensions
	var Car_Image_Width=100;
	var Car_Image_Height=100;
	var Car_Border=true;		// true ou false
	var Car_Border_Color="white";
	var Car_Speed=4;
	var Car_Direction=true;		// true or false
	var Car_NoOfSides=8;		// nb de faces 4,6,8 ou 12

/* Liste des images et des liens associés 
le nb d'images à déclarer doit être la moitié du nombre de faces
ici 8 faces donc 4 images
*/
	Car_Image_Sources=new Array(
		"img/img1.gif","http://www.dynamicdrive.com",
		"img/img2.gif","http://www.javascriptkit.com",
		"img/img3.gif","", //exemple sans lien
		"img/img4.gif","http://www.codingforums.com" //pas de virgule a la derniere
		);

//ne rien modifier ci-dessous
	CW_I=new Array(Car_NoOfSides/2+1);C_ClcW=new Array(Car_NoOfSides/2);
	C_Coef=new Array(
		3*Math.PI/2,0,3*Math.PI/2,11*Math.PI/6,Math.PI/6,3*Math.PI/2,7*Math.PI/4,	0,
		Math.PI/4,3*Math.PI/2,5*Math.PI/3,11*Math.PI/6,0,Math.PI/6,Math.PI/3);
	var C_CoefOf=Car_NoOfSides==4?0:Car_NoOfSides==6?2:Car_NoOfSides==8?5:9;
	C_Pre_Img=new Array(Car_Image_Sources.length);
	var C_Angle=Car_Direction?Math.PI/(Car_NoOfSides/2):0,C_CrImg=Car_NoOfSides,C_MaxW,C_TotalW,
	C_Stppd=false,i,C_LeftOffset,C_HalfNo=Car_NoOfSides/2;

	function Carousel(){
		if(document.getElementById){
			for(i=0;i<Car_Image_Sources.length;i+=2){
				C_Pre_Img[i]=new Image();C_Pre_Img[i].src=Car_Image_Sources[i]}
			C_MaxW=Car_Image_Width/Math.sin(Math.PI/Car_NoOfSides)+C_HalfNo+1;
			Car_Div=document.getElementById("Carousel");
			for(i=0;i<C_HalfNo;i++){
				CW_I[i]=document.createElement("img");Car_Div.appendChild(CW_I[i]);	
				CW_I[i].style.position="absolute";
				CW_I[i].style.top=0+"px";
				CW_I[i].style.height=Car_Image_Height+"px";
				if(Car_Border){
					CW_I[i].style.borderStyle="solid";
					CW_I[i].style.borderWidth=1+"px";
					CW_I[i].style.borderColor=Car_Border_Color}
				CW_I[i].src=Car_Image_Sources[2*i];
				CW_I[i].lnk=Car_Image_Sources[2*i+1];
				CW_I[i].onclick=C_LdLnk;
				}
			CarImages()}}

	function CarImages(){
		if(!C_Stppd){
			C_TotalW=0;
			for(i=0;i<C_HalfNo;i++){
				C_ClcW[i]=Math.round(Math.cos(Math.abs(C_Coef[C_CoefOf+i]+C_Angle))*Car_Image_Width);
				C_TotalW+=C_ClcW[i]}
			C_LeftOffset=(C_MaxW-C_TotalW)/2;
			for(i=0;i<C_HalfNo;i++){
				CW_I[i].style.left=C_LeftOffset+"px";
				CW_I[i].style.width=C_ClcW[i]+"px";
				C_LeftOffset+=C_ClcW[i]}
			C_Angle+=Car_Speed/720*Math.PI*(Car_Direction?-1:1);
			if((Car_Direction&&C_Angle<=0)||(!Car_Direction&&C_Angle>=Math.PI/C_HalfNo)){
				if(C_CrImg==Car_Image_Sources.length)C_CrImg=0;
				if(Car_Direction){
					CW_I[C_HalfNo]=CW_I[0];
					for(i=0;i<C_HalfNo;i++)CW_I[i]=CW_I[i+1];
					CW_I[C_HalfNo-1].src=Car_Image_Sources[C_CrImg];
					CW_I[C_HalfNo-1].lnk=Car_Image_Sources[C_CrImg+1]}
				else{	for(i=C_HalfNo;i>0;i--)CW_I[i]=CW_I[i-1];
					CW_I[0]=CW_I[C_HalfNo];
					CW_I[0].src=Car_Image_Sources[C_CrImg];
					CW_I[0].lnk=Car_Image_Sources[C_CrImg+1]}
				C_Angle=Car_Direction?Math.PI/C_HalfNo:0;C_CrImg+=2}}
		setTimeout("CarImages()",50)}

	function C_LdLnk(){if(this.lnk)window.location.href=this.lnk}
</script>
	<div id="Carousel" style="position:relative">
		<img src="img/placeholder.gif" width="267" height="102">
	</div>
<!-- Les dimensions de placeholder.gif doivent être les suivantes
pour la largeur :
	4 faces : (1.42 x largeur image)+3
	6 faces : (2 x largeur image)+4
	8 faces : (2.62 x largeur image)+5
	12 faces : (3.87 x largeur image)+7
		ici 8 faces : width=2.62x100 + 5 = 267
pour la hauteur : 
	largeur image + 2
		ici : height=100+2=102 -->
<br><br><br><br><br><br><font face="Verdana" size="2" color="#000080">Carroussel 8 faces </font>

</body>
</html>