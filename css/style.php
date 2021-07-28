<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{
    margin:0; padding:0;box-sizing: border-box; font-family: 'Open Sans', sans-serif;
}
.row{margin-left: 0!important; margin-right:0!important ;}
.nav_style{
     background-color:#8700ff!important;
}
.nav_style a{
    color: #ffffff;
}
/*////////main header\\\\\\*/
.main_header{
    height: 450px;
    width: 100%;
    padding-top: 50px;
}
.rightside h1{
    font-size: 3em;
}

.leftside img{
   animation:  heartbeat 5s linear infinite;
}
@keyframes heartbeat{
    0%{
        transform:scale(.75);
    }
    20%{
        transform:scale(1);
    }
    40%{
        transform:scale(.75);
    }
    60%{
        transform:scale(1);
    }
    80%{
        transform:scale(.75);
    }
    100%{
        transform:scale(.75);
    }
}

/********************************************corona update******************************* */

.corona_update{
    margin:0 0 30px 0
}
.corona_update h3{
    color:blue;
}
.corona_update h1{
    font-size: 2rem;
}

/****************************about section ********************/

.sub_section{
    background-color: #86eaef;
}

/************************footer ****************** */

.footer_style{
    background-color: #0eaded;
}
.footer_style{
    margin-bottom: 0 !important;

}

/***********************my button****************** */

#myBtn{
    display: block;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #091123;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover{
    background: #283556;
}


/***********************************responsive********************** */

@media(max-width:768px){
    .main_header{height: 700px; text-align: center;}

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 34px;

    }
}

/**********************responsive *********************/

.count_style{
    display: inline!important;
}
.count_style p{
    text-align: center;
}

    </style> 