function Collide (){

//origin point
var originPoint = MovingCube.position.clone();
var collisionCheck = false;

collisionX = 0; //No collision in any direction
collisionZ = 0; //No collision in any direction

//collision
for (var vertexIndex = 0; vertexIndex < MovingCube.geometry.vertices.length; vertexIndex++)
{
    var localVertex = MovingCube.geometry.vertices[vertexIndex].clone();
    var globalVertex = localVertex.applyMatrix4( MovingCube.matrix );
    var directionVector = globalVertex.sub( MovingCube.position );

    var ray = new THREE.Raycaster( originPoint, directionVector.clone().normalize() );
    var collisionResults = ray.intersectObjects( collidableMeshList );
    //collisions.length > 0 && collisions[0].distance <= distance
    //if ( collisionResults.length > 0 && collisionResults[0].distance < directionVector.length() ){
    if ( collisionResults.length > 0 && collisionResults[0].distance < directionVector.length() + 0.1 ){
        collisionCheck = true;
        //If the hit is detected on ray 1, 2 or 3 the collision is in the positive X direction
        if ((vertexIndex === 1 || vertexIndex === 2 || vertexIndex === 3)) {
            collisionX = 1;                                
        }
        //If the hit is detected on ray 5, 6 or 7 the collision is in the negative X direction
        else if ((vertexIndex === 5 || vertexIndex === 6 || vertexIndex === 7)) {
            collisionX = -1;                                
        }
        //If the hit is detected on ray 0, 1 or 7 the collision is in the positive Z direction
        if ((vertexIndex === 0 || vertexIndex === 1 || vertexIndex === 7)) {
            collisionZ = 1;                                
        }
        //If the hit is detected on ray 3, 4 or 5 the collision is in the negative Z direction
        else if ((vertexIndex === 3 || vertexIndex === 4 || vertexIndex === 5)) {
            collisionZ = -1;                                
        }
    }

}

    if (!collisionCheck){
                
        //quarter name
        var x_street = Math.floor((camera.position.x + 2550) / 700) + 1;
        var z_street = Math.floor((camera.position.z + 2550) / 700) + 1;

        if (x_street >7){
            x_street =7;
        }
        else if(x_street <1){
            x_street =1;
        }
        else {
            x_street =x_street;
        }

        if (z_street >7){
            z_street =7;
        }
        else if(z_street <1){
            z_street =1;
        }
        else {
            z_street =z_street;
        }
        //map blacking
        var cb = document.getElementById("myCanvas");
        var ctxb = cb.getContext("2d");
        ctxb.fillStyle = "black";
        ctxb.fillRect(1, 1, 490, 490);
        //map pointer
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");   
        //map coord
        var x_coord = (x_street * 70) - 35;
        var z_coord = (z_street * 70) - 35;
        ctx.beginPath();
        ctx.fillStyle = "red";
        ctx.arc(x_coord, z_coord, 30, 0, 2 * Math.PI);
        ctx.fill(); 
        //msg
        clearText();
        appendText(x_street +","+z_street+" quarter");
    }
    else {
        clearText();     
        appendText(" boing, ");
    }

} 