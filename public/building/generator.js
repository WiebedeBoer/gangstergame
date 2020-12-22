function BuildingGenerator(name,front,equipment,labour,state,xloc,yloc,economy,income,building_size,neighbourhood,building_type,building_category,owner) {

    var grid_size = 150;
    //location size
    if(building_size =="1x1"){
        var generatedbuilding_x = grid_size * (xloc - 61);
        var generatedbuilding_y = grid_size * (yloc - 61); 
        var x_size = grid_size;
        var y_size = grid_size;
    }
    else if(building_size =="1x2"){
        var generatedbuilding_x = grid_size * (xloc - 61);
        var generatedbuilding_y = grid_size * (yloc - 61) + grid_size; 
        var x_size = grid_size;
        var y_size = grid_size * 2;
    }
    else if(building_size =="2x2"){
        var generatedbuilding_x = grid_size * (xloc - 61) + grid_size;
        var generatedbuilding_y = grid_size * (yloc - 61) + grid_size; 
        var x_size = grid_size * 2;
        var y_size = grid_size * 2;
    }
    else if(building_size =="2x5"){
        var generatedbuilding_x = grid_size * (xloc - 61) + grid_size;
        var generatedbuilding_y = grid_size * (yloc - 61) + (grid_size * 2.5); 
        var x_size = grid_size * 2;
        var y_size = grid_size * 5;
    }
    else if(building_size =="5x2"){
        var generatedbuilding_x = grid_size * (xloc - 61) + (grid_size * 2.5);
        var generatedbuilding_y = grid_size * (yloc - 61) + grid_size; 
        var x_size = grid_size * 5;
        var y_size = grid_size * 2;
    }
    else if(building_size =="5x5"){
        var generatedbuilding_x = grid_size * (xloc - 61) + (grid_size * 2.5);
        var generatedbuilding_y = grid_size * (yloc - 61) + (grid_size * 2.5); 
        var x_size = grid_size * 5;
        var y_size = grid_size * 5;
    }
    else {
        var generatedbuilding_x = grid_size * (xloc - 61);
        var generatedbuilding_y = grid_size * (yloc - 61); 
        var x_size = grid_size;
        var y_size = grid_size;
    }

    //equipment
    if(equipment =="gun"){

    }
    else if(equipment =="car"){

    }
    else {

    }

    //labour
    if(labour =="gangsters"){

    }
    else if(labour =="accountants"){

    }
    else if(labour =="lawyers"){

    }
    else {

    }

    //front
    if(front =="numbers racket"){

    }
    else if(front =="casino"){

    }
    else if(front =="moonshine still"){

    }
    else if(front =="speakeasy"){

    }
    else if(front =="brothel"){

    }
    else if(front =="counterfeit press"){

    }
    else if(front =="loanshark"){

    }
    else if(front =="teamsters"){

    }
    else {

    }

    //owner
    if(owner !=0){

    }
    else {

    }


    //building type generating
    if(building_category =="residential"){
        var house1 = new House(generatedbuilding_x,generatedbuilding_y,culture_name,state,economy,building_type);
        scene.add( house1 );  
    }
    else if(building_category =="tenement"){
        var tenement2 = new Tenement(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( tenement2 );
    }
    else if(building_category =="industrial"){

        if(building_type =="warehouse"){
            var warehouse3 = new Warehouse(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( warehouse3 );
        }
        else if(building_type =="docks"){
            var docks4 = new Docks(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( docks4 );
        }
        else if(building_type =="freight forwarding"){
            var freight5 = new Freight(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( freight5 );
        }
        else {
            var industrial6 = new Industrial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( industrial6 );
        }

    }
    else if(building_category =="media"){
        if(building_type =="newspaper"){
            var newspaper7 = new Newspaper(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( newspaper7 );
        }
        else if(building_type =="radio"){
            var radio8 = new Radio(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( radio8 );
        }
    }
    else if(building_category =="municipal"){
        if(building_type =="railroad station"){
            var railroad9 = new Railroad(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( railroad9 );
        }
        else if(building_type =="fire department"){
            var firedepartment10 = new FireDepartment(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( firedepartment10 );   
        }
        else if(building_type =="hospital"){
            var hospital11 = new Hospital(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( hospital11 );    
        }
        else if(building_type =="school"){
            var school12a = new Education(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( school12a );    
        }
        else if(building_type =="highschool"){
            var school12b = new Education(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( school12b ); 
        }
        else if(building_type =="post office"){
            var postal13a = new Postal(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( postal13a );    
        }
        else if(building_type =="telegraph office"){
            var postal13b = new Postal(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( postal13b );    
        }
        else if(building_type =="stock exchange"){
            var financial14a = new Financial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( financial14a );  
        }
        else if(building_type =="labor exchange"){
            var financial14b = new Financial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( financial14b );  
        }
        else if(building_type =="public baths"){
            var baths15 = new Baths(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( baths15 );  
        }
        else if(building_type =="museum"){
            var cultural16a = new Cultural(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( cultural16a );   
        }
        else if(building_type =="opera hall"){
            var cultural16b = new Cultural(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( cultural16b );  
        }
        else if(building_type =="orchestra hall"){
            var cultural16c = new Cultural(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( cultural16c ); 
        }
        else if(building_type =="theatre"){
            var cultural16d = new Cultural(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( cultural16d ); 
        }
        else if(building_type =="electric company"){
            var utilities17a = new Utilities(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( utilities17a ); 
        }
        else if(building_type =="water company"){
            var utilities17b = new Utilities(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( utilities17b ); 
        }

    }
    else if(building_category =="university"){
        var university18 = new University(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( university18 ); 
    }
    else if(building_category =="army"){
        var army19 = new Army(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( army19 ); 
    }
    else if(building_category =="court"){
        var court20 = new Court(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( court20 ); 
    }
    else if(building_category =="FBI"){
        var fbi21 = new FBIbureau(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( fbi21 ); 
    }
    else if(building_category =="prison"){
        var prison22 = new Prison(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( prison22 ); 
    }
    else if(building_category =="police"){
        var policedepartment23 = new PoliceDepartment(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( policedepartment23 ); 
    }
    else if(building_category =="city hall"){
        var cityhall24 = new CityHall(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
        scene.add( cityhall24 ); 
    }
    else if(building_category =="charity"){
        if(building_type =="church"){
            var church25 = new Church(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( church25 ); 
        }
        else if(building_type =="synagogue"){
            var synagogue26 = new Synagogue(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( synagogue26 );    
        }
        else if(building_type =="orphanage"){
            var orphanage27 = new Orphanage(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( orphanage27 );   
        }
    }
    else if(building_category =="commercial"){

        if(building_type =="gunsmith"){
            var gunsmith28 = new Gunsmith(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( gunsmith28 ); 
        }
        else if(building_type =="auto dealer"){
            var autodealer29 = new AutoDealer(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( autodealer29 ); 
        }
        else if(building_type =="movie theatre"){
            var movietheatre30 = new MovieTheatre(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( movietheatre30 ); 
        }
        else if(building_type =="cab company"){
            var cabcompany31 = new CabCompany(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( cabcompany31 ); 
        }
        else if(building_type =="removal company"){
            var removalcompany32 = new RemovalCompany(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( removalcompany32 ); 
        }
        else if(building_type =="bank" && building_size =="2x2"){
            var bank33 = new Bank(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( bank33 ); 
        }
        else if(building_type =="bank" && building_size =="1x2"){
            var bank34 = new SmallBank(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( bank34 ); 
        }
        else if(building_type =="hotel" && building_size =="2x2"){
            var hotel35 = new Hotel(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( hotel35 ); 
        }
        else if(building_type =="hotel" && building_size =="1x2"){
            var hotel36 = new SmallHotel(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( hotel36 ); 
        }
        else if(building_type =="department store" && building_size =="2x2"){
            var departmentstore37 = new DepartmentStore(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( departmentstore37 ); 
        }
        else if(building_type =="department store" && building_size =="1x2"){
            var departmentstore38 = new SmallDepartmentStore(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( departmentstore38 ); 
        }
        else if(building_type =="local store"){
            var store39a = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39a ); 
        }
        else if(building_type =="convenience store"){
            var store39b = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39b ); 
        }
        else if(building_type =="auction room"){
            var store39c = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39c ); 
        }
        else if(building_type =="restaurant"){
            var store39d = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39d ); 
        }
        else if(building_type =="carpet store"){
            var store39e = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39e ); 
        }
        else if(building_type =="furniture store"){
            var store39f = new MediumCommercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( store39f ); 
        }
        else {
            var commercial40 = new Commercial(generatedbuilding_x,generatedbuilding_y,x_size,y_size,culture_name,state,economy,building_type);
            scene.add( commercial40 );
        }

    }



}