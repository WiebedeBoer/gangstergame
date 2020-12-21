<script>
var storagePath = "http://"+location.host+"/"; 
var assetBaseUrl = "{{ asset('') }}";
//collision vars
var MovingCube;
var collidableMeshList = [];
var collidableBulletMeshList = [];
//collidable props
var collidablePropMeshList = []; 
var propTypes = [];
// Bullets array
var bullets = [];
var bulletmeshes = []; 
//updater
var updateFcts = [];
//scene
var scene = new THREE.Scene();
//fog
scene.fog = new THREE.FogExp2( 0xd0e0f0, 0.0002 );
//renderer
var renderer = new THREE.WebGLRenderer( { antialias: false } );
//window
canvasWidth = window.innerWidth * 0.96;
canvasHeight = 800; 
renderer.setSize( canvasWidth, canvasHeight );      
//append object to it
document.getElementById("customcanvas").appendChild(renderer.domElement);
//camera
var camera = new THREE.PerspectiveCamera(45, canvasWidth / canvasHeight, 0.01, 7650);
camera.position.y = 12;
camera.position.z = -67;
camera.position.x = -21;
//city type
var city_type ="{{$game->ground_texture}}";
//neighbourhoods
var hoods ="{{$hoods}}";
//gangs
var gangs ="{{$gangs}}";
//buildings filling
var city_buildings =[];
@foreach($buildings as $building)
        city_buildings.push("{{$building->building_name}}"); //building name
        city_buildings.push("{{$building->front}}"); //front
        city_buildings.push("{{$building->equipment}}"); //gun, car
        city_buildings.push("{{$building->labour}}"); //gangster
        city_buildings.push("{{$building->state}}"); //building state
        city_buildings.push("{{$building->x}}"); 
        city_buildings.push("{{$building->y}}"); 
        city_buildings.push("{{$building->economy}}"); //economic state
        city_buildings.push("{{$building->income}}"); //income
        city_buildings.push("{{$building->building_size}}"); //building size
        city_buildings.push("{{$building->hood}}"); //neighbourhood
        city_buildings.push("{{$building->types->building_name}}"); //building type
        city_buildings.push("{{$building->types->category}}"); //building category
        @if($building->owner !=NULL)
            city_buildings.push("{{$building->owner}}"); //gang owner
        @else
            city_buildings.push(0);
        @endif
@endforeach
//environment
var environmentsize = 5100;
//plane
var impluve =new PartPlane(environmentsize,environmentsize,city_type,0,0,0);
scene.add( impluve );
//skybox
var skyBox = new Skybox(environmentsize,environmentsize,environmentsize);
scene.add( skyBox );
//buildings generating
buildings.forEach(function(building) {
	BuildingGenerator(building[0],building[1],building[2],building[3],building[4],building[5],building[6],building[7],building[8],building[9],building[10],building[11],building[12],building[13]);	
});
//lighting 
worldLighter();
//moving cube
var cubeGeometry = new THREE.CylinderGeometry(5,5,20,4);
var wireMaterial = new THREE.MeshBasicMaterial( { color: 0xff0000, wireframe:true, visible:false } );
MovingCube = new THREE.Mesh( cubeGeometry, wireMaterial );
MovingCube.position.set(camera.position.x, camera.position.y, camera.position.z);
scene.add( MovingCube );  
//Camera Controls
var controls = new THREE.FirstPersonControls( camera );
controls.lookSpeed = 0.05;
controls.lookVertical = false; //if true vertical look on mousemovement
/*
//Locking the pointer to the game
document.getElementById("parent").addEventListener( 'click', function ( event ) {
        lock();
}, false );
function lock(rawr) {
        document.getElementById("parent").requestPointerLock();
} 
*/
//hit registration collision
function clearText()
{   document.getElementById('message').innerHTML = '...';}
function appendText(txt)
{   document.getElementById('message').innerHTML += txt;}
//collision vars
var collisionX;
var collisionZ;	
//onload loop
function GameLoop(){
//update function
updateFcts.push(function(delta,now){
		//controls update
		controls.update( delta ); 
		//render the scene
		renderer.render( scene, camera );
		//moving cube position and rotation
		MovingCube.position.x = camera.position.x;
		MovingCube.position.y = camera.position.y;
		MovingCube.position.z = camera.position.z;
		MovingCube.rotation.y = camera.rotation.y;                             
})
//loop runner
var lastTimeMsec= null
requestAnimationFrame(function animate(nowMsec){
		// keep looping
		requestAnimationFrame( animate );
		// measure time
		lastTimeMsec = lastTimeMsec || nowMsec-1000/60
		var deltaMsec = Math.min(200, nowMsec - lastTimeMsec)
		lastTimeMsec = nowMsec
		// call each update function
		updateFcts.forEach(function(updateFn){
				updateFn(deltaMsec/1000, nowMsec/1000)
		})
})
}
</script>