<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Galería Xecas</title>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,500,600,700" rel="stylesheet" type="text/css">
    <style>
        html, body {
            margin:0;
            padding:0;
        }
        
        html {
            font-size: 62.5%;
        }

        body {
            font-family: 'Open Sans', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            font-size: 1.8rem;
            background-color: #f3f3f3;
        }

        header {
            text-align: center;
        }
        
        main > header {
            background-color: #02223a;
        }

        h1 {
            color:#003366;
            font-size: 30px;
            font-size:3rem;
            -webkit-column-span:all;
            -moz-column-span:all;
            column-span:all;
        }

        a {
            text-decoration: none;
            color:#036;
        }

        #galeria {
            margin: 1rem auto;
            width:100%;
            max-width:960px;
            padding:0 20px 20px;
            box-sizing: border-box;
            column-count: 3;

            /* Espacio entre columnas */
            -moz-column-gap:20px;
            -webkit-column-gap: 20px;
            column-gap: 20px;
            
            /* Filete entre columnas */
            /*-moz-column-rule: 1px solid #bbb;
            -webkit-column-rule: 1px solid #bbb;
            column-rule: 1px solid #bbb;*/


        }
        
        #galeria header {
            -webkit-column-span:all;
            column-span:all;
        }

        article {
            background:#FFFF;
            border-radius:5px;
            border:1px solid #ccc;
            margin:0 0 20px 0px;
            text-align: center;
            max-width: 100%;
            filter: opacity(100%);

            /*Evitamos que se corte al cambiar de columna*/
            break-inside: avoid;
            page-break-inside: avoid;         
       
        }
        
        article img {
            width:100%;
            margin:10px auto;
        }

        article:hover {
            transition: .5s ease;
            filter: opacity(100%);
        }

      

 
        /* Móviles en horizontal o tablets en vertical */
        @media (max-width: 767px) { 
            #galeria {
                columns:2;
            }

        }
        
        /* Móviles en vertical */

        @media (max-width: 480px) {
            #galeria {
                columns: 1;
            }
        }

    </style>
</head>

<body>
    <main>
     
        <section id="galeria">
        <header>
            <h1>Panes de Xelapan</h1>
        </header>
        <article>
       
                <figure>
                    <img src="imagenes/2.png"/>
                </figure>
        </article>
        <article>
                    <figure>
                        <img src="imagenes/3.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/4.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/5.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/6.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/7.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/8.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/9.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/10.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/11.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/12.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/13.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/14.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/15.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/16.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/17.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/18.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/19.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/20.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/21.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/22.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/23.png" />
                    </figure>
                
        </article>
        <article>
                    <figure>
                        <img src="imagenes/24.png" />
                    </figure>
                
        </article>



        </section>
    </main>
</body>

</html>