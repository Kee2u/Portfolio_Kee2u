<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Roboto:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="assets/css/app.css" rel="stylesheet" />
    <title>Keerthana Jayakumar | Portfolio</title>
</head>

<body>

    <!-- No defined header section -->

    <!-- Main content goes here split into sections/fragments -->
    <main>

        <!-- Utilizes flexbox styling not taught in class -->
        <section id="trunk-vanta">
            <section class="fragment fragment-one">
                <div class="headers">
                    <h1> keetu. </h1>
                    <h3> data analyst | data engineer | software developer</h3>
                </div>

                <div class="learn">

                    <!-- You could hyperlink this down with a smooth scroll -->
                    <a href="#Click_to_learn_more" style = "color: rgb(194, 194, 194)">
                        <p><strong>learn more</strong></p>
                        <i class="fas fa-chevron-down" style = "color: rgb(194, 194, 194)"></i>
                    </a>
                </div>
            </section>
        </section>
        <section class="fragment fragment-two">
            <a id="Click_to_learn_more">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Edit this text with a brief intoduction / brand statement etc. -->
                            <h4>
                                Keerthana (Keetu) is a Mechatronics Engineer and Data Analyst with strong math and statistics skills. 
                                She has a background in Python, SQL, VBA, Javascript and Machine Learning from the University of Toronto's Data Analytics Bootcamp. 
                                
                            </h5>
                        </div>
                    </div>
                </div>
            </a>

            <div class="learn">
                <!-- You could hyperlink this down with a smooth scroll -->
                <a href="#Click_for_projects" style = "color: rgb(21, 85, 50)">
                <p>click for projects </p>
                <i class="fas fa-chevron-down"></i>
                </a>
            </div>

        </section>
        <section class="fragment fragment-two-point-five">
            <a id="featured_project">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">

                            <!-- Edit this text with a brief intoduction / brand statement etc. -->
                            <h3>
                                FEATURED PROJECT                           
                            </h3>
                            <h4>
                                Deciphering the Indus script using Natural Language Processing, Machine Learning, ETL and Statistical Analysis                           
                            </h4>
                            <a class="btn btn-primary" href = " https://deciphering-indus-script.herokuapp.com/" role = "button">Click for website</a>
                            <a class="btn btn-primary" href = " https://github.com/Kee2u/Deciphering_the_Indus_Valley_Script" role = "button">Click for Github</a>
                        </div>
                        <div class="col-md-7">
                            <img src="assets/images/Unicorn3.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </a>

        </section>
        <section class="fragment fragment-three">
            <a id="Click_for_projects">
            <h3>Things I've Made</h3>
            <hr class="title-underline">
            <div class="container carousel-container">

                <!-- begin carousel -->
                <!-- you should replace the placeholder images with actual images from your projects -->
                <!-- images should be 800*600 or a matching ratio for best results -->
                <div id="portfolioCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#portfolioCarousel" data-slide-to="0" class="active custom-indicator">
                        </li>
                        <li data-target="#portfolioCarousel" data-slide-to="1" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="2" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="3" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="4" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="5" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="6" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="7" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="8" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="9" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="10" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="11" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="12" class="custom-indicator"></li>
                        <li data-target="#portfolioCarousel" data-slide-to="13" class="custom-indicator"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            

                            <!--image here -->
                            <img src="assets/images/earth.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Mapping Earthquakes</h4>
                                <p>Created an interactive map using javascript, leaflet, D3 library and Mapbox.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Mapping_Earthquakes" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/plotly.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Plotly Diversity</h4>
                                <p>Used Javascript, plotly, html and bootstrap to create a dynamic web visualization dashboard.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Election_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/mars1.jpg" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Mission to Mars</h4>
                                <p>Collected information on Mars from four websites using web scraping tools. Used chrome developer tools to read HTML, Beautiful Soup and Splinter to automate the scrape, Mongo to store the data and Flask to display the scraped content.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Mission-to-Mars" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/top-cryptocurrencies.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Cryptocurrencies</h4>
                                <p>Using unsupervised methods namely Sklearn's standardization functions, PCA and K means algorithm to create a cryptocurrency investment portfolio.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Cryptocurrencies" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/tableau.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Bikesharing</h4>
                                <p>Using Tableau to create visualizations of New York ridesharing data.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/bikesharing" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/WM.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>World Weather Analysis</h4>
                                <p>Created an app using Google maps and Open Weather Map APIS. Can be used to recommend hotels based on traveller's weather preferences.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/World_Weather_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/Surfs_up1.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Surfs Up</h4>
                                <p>Used Pandas and SQLite to study temperature and precipitation data in Oahu. Results from data analysis used to decide if opening a Surf Shop in the location is feasible.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Surfs_Up" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/Movies_ETL1.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Movies ETL</h4>
                                <p>Scraped movie data from Wikipedia, Kaggle and MovieLens. Created a data pipeline to clean the data using ETL and Pandas with Jupyter Notebooks. Uploaded the cleaned data to SQL tables for further analysis.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Movies-ETL" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/DB1.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Employee Database</h4>
                                <p>Used PostgreSQL and PGAdmin4 to determine the impact of retiring employees on a fictional company.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Pewlett-Hackard-Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/s1.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>School District Analysis</h4>
                                <p>Used python on Jupyter notebooks to analyze test scores.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/School_District_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/pol1.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Election Analysis</h4>
                                <p>Used Python to assist a Colorado board of elections by calculating election poll results and county with highest voter turnout.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Election_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                        
                            <!--image here -->
                            <img src="assets/images/R.PNG" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Mechacar Statistical Analysis</h4>
                                <p>Statistical Analysis of car manufacturing data using R. Tests include t-tests, ANOVA, and regression analysis.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/MechaCar_Statistical_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            
                            <!--image here -->
                            <img src="assets/images/Vine-header.jpg" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Amazon Vine Analysis</h4>
                                <p>Using Pyspark, AWS RDS and PGAdmin to analyze amazon reviews.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Amazon_Vine_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--image here -->
                            <img src="assets/images/network.png" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Neural Network Charity Analysis</h4>
                                <p>Creating neural networks with Scikit-Learn, Tensorflow and Keras to determine if organizations that received funding, used their resources effectively.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Neural_Network_Charity_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <!--image here -->
                            <img src="assets/images/ta.jpg" class="img-fluid" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>Credit Risk Analysis</h4>
                                <p>Predicting credit risk using logisitic regression machine learning model.</p>
                                <a class="btn btn-primary" href = "https://github.com/Kee2u/Credit_Risk_Analysis" role = "button">View Code</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                           
                        </div>
                    </div>

                </div>
            </div>
            </a>

        </section>
        <section class="fragment fragment-four">

            <h3>Technology I Use</h3>
            <hr class="title-underline">
            <div class="container">
                <div class="labels">
                    <div class="tech">Python</div>
                    <div class="tech">R</div>
                    <div class="tech">SQL</div>
                    <div class="tech">JavaScript</div>
                    <div class="tech">HTML/CSS</div>
                    <div class="tech">Tableau</div>
                    <div class="tech">Big Data</div>
                    <div class="tech">Machine Learning</div>
                    <div class="tech">MATLAB</div>
                    <div class="tech">C / C++</div>
                </div>
            </div>

        </section>
        <section class="fragment fragment-five">
            <h3>My Education</h3>
            <hr class="title-underline">

            <!-- Don't forget to swap out the universities and education to match your own-->
            <div class="container">
                <h5> University of Toronto</h5>
                <p class="credential"> Data Analytics Bootcamp | 2021</p>
                <h5> University of Toronto</h5>
                <p class="credential"> B.A. Applied Science and Engineering | 2013 - 2018</p>

            </div>
        </section>

    </main>

    <footer>
        <section class="fragment fragment-six">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6>keerthana jayakumar</h6>

                        <!--update these links to match your own social media profiles -->
                        <a href="https://www.instagram.com/artbykeetu/" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/keerthanajayakumar/" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/Kee2u" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="mailto:<keetu.jk@gmail.com>" class="social-icon"><i class="fas fa-envelope"></i></a>
                        <p class="text-muted copyright">Keerthana Jayakumar &copy; 2021 - 2022 </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script src="assets/js/vanta.js"></script>


</body>

</html>