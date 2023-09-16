<style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--battleship-gray: hsl(0, 0%, 53%);
--viridian-green: hsl(180, 98%, 31%);
--silver-chalice: hsl(0, 0%, 69%);
--mikado-yellow: hsl(47, 98%, 50%);
--granite-gray: hsl(0, 0%, 40%);
--independence: hsl(219, 20%, 32%);
--spanish-gray: hsl(0, 0%, 61%);
--oxford-blue: hsl(222, 46%, 17%);
--black-coral: hsl(223, 8%, 44%);
--eerie-black: hsl(210, 11%, 15%);
--light-gray: hsl(0, 0%, 80%);
--white-2: hsl(0, 0%, 98%);
--white-1: hsl(0, 0%, 100%);
--black: hsl(0, 0%, 0%);
--jet: hsl(0, 0%, 20%);

/**
 * typography
 */

--ff-abril-fatface: 'Abril Fatface', cursive;
--ff-comforter-brush: 'Comforter Brush', cursive;
--ff-heebo: 'Heebo', sans-serif;

--fs-1: 3.4rem;
--fs-2: 3.2rem;
--fs-3: 3rem;
--fs-4: 2.4rem;
--fs-5: 1.8rem;
--fs-6: 1.7rem;
--fs-7: 1.4rem;
--fs-8: 1.2rem;

--fw-400: 400;
--fw-500: 500;
--fw-600: 600;
--fw-700: 700;

/**
 * border radius
 */

--radius-6: 6px;

/**
 * spacing
 */

--section-padding: 40px;

/**
 * transition
 */

--transition-1: 0.15s ease;
--transition-2: 0.35s ease;
--cubic-out: cubic-bezier(0.33, 0.85, 0.56, 1.02);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a { text-decoration: none; }

a,
img,
span,
input,
button,
ion-icon { display: block; }

input,
button {
border: none;
background: none;
font: inherit;
}

button { cursor: pointer; }

input { width: 100%; }

img { height: auto; }

address { font-style: normal; }

:focus-visible { outline-offset: 5px; }

html {
font-family: var(--ff-heebo);
font-size: 10px;
scroll-behavior: smooth;
}

body {
background: var(--white-1);
font-size: 1.6rem;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background: hsl(0, 0%, 95%); }

::-webkit-scrollbar-thumb { background: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.btn {
background: var(--background, var(--white-1));
color: var(--color, var(--viridian-green));
font-weight: var(--fw-700);
width: max-content;
padding: 10px 25px;
border: 2px solid var(--border-color, var(--white-1));
border-radius: var(--radius-6);
}

.btn-secondary:is(:hover, :focus) {
--background: transparent;
--color: var(--white-1);
}

.btn-primary {
--background: var(--viridian-green);
--color: var(--white-1);
--border-color: var(--viridian-green);
}

.btn-primary:is(:hover, :focus) {
--background: transparent;
--color: var(--viridian-green);
}

.btn-outline {
--color: var(--oxford-blue);
--border-color: var(--silver-chalice);
}

.btn-outline:is(:hover, :focus) {
--color: var(--viridian-green);
--border-color: var(--viridian-green);
}

.section { padding-block: var(--section-padding); }

.section-subtitle {
font-family: var(--ff-comforter-brush);
color: var(--mikado-yellow);
font-size: var(--fs-3);
}

.w-100 { width: 100%; }

.h2 {
color: var(--jet);
font-size: var(--fs-3);
font-weight: var(--fw-500);
}

.h3 {
font-size: var(--fs-4);
font-weight: var(--fw-400);
}

.section-title { font-family: var(--ff-abril-fatface); }

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.card-banner { background: var(--silver-chalice); }

:is(.popular, .blog) .section-subtitle {
text-align: center;
margin-bottom: 10px;
}

:is(.popular, .blog) .section-title {
text-align: center;
margin-bottom: 50px;
}

.popular-list,
.blog-list {
display: grid;
gap: 30px;
}

.popular-card,
.blog-card {
box-shadow: 0 10px 30px hsla(0, 0%, 0%, 0.1);
border-radius: var(--radius-6);
overflow: hidden;
}

:is(.popular, .blog) .card-banner { position: relative; }

.card-badge {
position: absolute;
top: 10px;
left: 10px;
background: var(--mikado-yellow);
color: var(--white-1);
padding: 14px 10px;
border-radius: var(--radius-6);
}

.card-badge ion-icon {
--ionicon-stroke-width: 60px;
font-size: 20px;
margin-inline: auto;
}

.card-badge time { font-weight: var(--fw-700); }

:is(.popular, .blog) .card-content { padding: 30px 15px; }

.card-wrapper {
display: flex;
justify-content: flex-start;
align-items: center;
gap: 20px;
}

:is(.popular, .blog) .card-title {
color: var(--granite-gray);
font-size: var(--fs-5);
margin-block: 20px;
}

:is(.popular, .blog) .card-title > a { color: inherit; }

:is(.popular, .blog) .card-title > a:is(:hover, :focus) { color: var(--viridian-green); }





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header {
background: var(--viridian-green);
padding-block: 20px;
height: 88px;
overflow: hidden;
transition: 0.25s var(--cubic-out);
}

.header.active {
height: 425px;
transition-duration: 0.35s;
}

.header .container {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
align-items: center;
}

.logo {
color: var(--white-1);
font-size: var(--fs-2);
font-weight: var(--fw-600);
}

.nav-toggle-btn.active .open,
.nav-toggle-btn .close { display: none; }

.nav-toggle-btn .open,
.nav-toggle-btn.active .close { display: block; }

.nav-toggle-btn ion-icon {
color: var(--white-1);
font-size: 35px;
--ionicon-stroke-width: 40px;
}

.navbar {
width: 100%;
padding: 20px 10px;
opacity: 0;
visibility: hidden;
transition: var(--transition-1);
}

.header.active .navbar {
opacity: 1;
visibility: visible;
}

.navbar-list { margin-bottom: 15px; }

.navbar-link {
color: var(--white-1);
font-size: var(--fs-5);
font-weight: var(--fw-500);
padding-block: 10px 0;
border-bottom: 2px solid transparent;
width: max-content;
}

.navbar-link:is(:hover, :focus) { border-color: var(--white-1); }





/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.shape { display: none; }

.hero {
background-repeat: no-repeat, no-repeat;
background-position: bottom left, top right;
}

.hero-content { margin-bottom: 50px; }

.hero .section-subtitle { margin-bottom: 15px; }

.hero-title {
color: var(--oxford-blue);
font-size: var(--fs-1);
font-family: var(--ff-abril-fatface);
font-weight: var(--fw-500);
line-height: 1.2;
max-width: 11ch;
margin-bottom: 15px;
}

.hero-text {
color: var(--black-coral);
font-size: var(--fs-7);
line-height: 1.7;
margin-bottom: 15px;
}

.btn-group {
display: flex;
flex-wrap: wrap;
gap: 15px;
}





/*-----------------------------------*\
#DESTINATION
\*-----------------------------------*/

.destination .section-subtitle {
text-align: center;
margin-bottom: 15px;
}

.destination .section-title {
text-align: center;
margin-bottom: 60px;
}

.destination-list {
display: flex;
flex-wrap: wrap;
gap: 30px;
}

.destination-card {
position: relative;
border-radius: var(--radius-6);
overflow: hidden;
}

.destination-card::after {
content: "";
position: absolute;
inset: 0;
background: linear-gradient(hsla(222, 46%, 17%, 0), hsla(222, 46%, 17%, 0.7));
}

.destination-card img { transition: var(--transition-2); }

.destination-card:is(:hover, :focus) img { transform: scale(1.1); }

.destination-card .card-content {
position: absolute;
bottom: 0;
left: 0;
width: 100%;
padding: 30px;
z-index: 1;
}

.destination-card .card-subtitle {
color: var(--mikado-yellow);
font-family: var(--ff-comforter-brush);
font-size: var(--fs-5);
}

.destination-card .card-title {
color: var(--white-1);
font-family: var(--ff-abril-fatface);
}





/*-----------------------------------*\
#POPULAR
\*-----------------------------------*/

.popular-card :is(.card-price, .card-rating) {
color: var(--white-1);
font-size: var(--fs-8);
padding: 5px 8px;
border-radius: var(--radius-6);
}

.popular-card .card-price { background: var(--viridian-green); }

.popular-card .card-rating {
background: var(--mikado-yellow);
display: flex;
align-items: center;
gap: 2px;
}

.popular-card .card-rating ion-icon { font-size: 17px; }

.popular-card .card-rating data { margin-left: 4px; }

.popular-card .card-location { color: var(--spanish-gray); }





/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about-content { margin-bottom: 50px; }

.about .section-subtitle { margin-bottom: 10px; }

.about .section-title { margin-bottom: 20px; }

.about-text,
.about-item-text {
color: var(--battleship-gray);
font-size: var(--fs-6);
line-height: 1.7;
}

.about-text { margin-bottom: 30px; }

.about-list {
display: grid;
gap: 20px;
margin-bottom: 40px;
}

.about-item {
display: flex;
align-items: flex-start;
gap: 15px;
}

.about-item-icon {
background: var(--viridian-green);
color: var(--white-1);
font-size: 26px;
padding: 16px;
border-radius: 50%;
margin-top: 5px;
}

.about-item-title {
color: var(--granite-gray);
font-weight: var(--fw-600);
margin-bottom: 5px;
}





/*-----------------------------------*\
#BLOG
\*-----------------------------------*/

.blog { padding-bottom: 100px; }

.blog-card .author-wrapper {
display: flex;
align-items: center;
gap: 15px;
}

.blog-card .card-wrapper {
color: var(--spanish-gray);
font-size: var(--fs-8);
justify-content: space-between;
}

.author-name {
color: var(--granite-gray);
font-weight: var(--fw-500);
}

.btn-link {
color: var(--viridian-green);
font-weight: var(--fw-700);
display: flex;
justify-content: flex-end;
align-items: center;
gap: 5px;
}

.btn-link ion-icon { font-size: 20px; }

.btn-link:is(:hover, :focus) { color: var(--oxford-blue); }





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer {
background-color: var(--oxford-blue);
background-repeat: no-repeat;
background-size: cover;
background-position: center;
color: var(--light-gray);
padding-block: 60px;
}

.footer a:not(.logo) { color: inherit; }

.footer-top {
display: grid;
gap: 30px;
margin-bottom: 40px;
}

.footer-list-title {
color: var(--white-1);
font-size: var(--fs-4);
font-weight: var(--fw-600);
margin-bottom: 15px;
}

.footer-link {
font-size: var(--fs-7);
padding-block: 5px;
}

.footer .footer-link:is(:hover, :focus) { color: var(--white-1); }

.newsletter-text {
font-size: var(--fs-7);
margin-bottom: 30px;
line-height: 1.7;
}

.newsletter-form { position: relative; }

.newsletter-input {
background: var(--white-1);
border-radius: var(--radius-6);
padding: 24px;
color: var(--eerie-black);
}

.newsletter-input:focus {
outline: none;
box-shadow: 0 0 0 5px hsla(216, 98%, 52%, 0.25);
}

.newsletter-form .btn-primary {
position: absolute;
top: 0;
right: 0;
bottom: 0;
}

.newsletter-form .btn-primary:is(:hover, :focus) {
--background: var(--viridian-green);
--color: var(--white-1);
}

.footer-bottom .logo {
text-align: center;
margin-bottom: 20px;
}

.copyright {
text-align: center;
margin-bottom: 20px;
font-size: var(--fs-7);
}

.copyright-link {
display: inline-block;
text-decoration: underline;
}

.copyright-link:is(:hover, :focus) { text-decoration: none; }

.social-list {
display: flex;
justify-content: center;
align-items: center;
gap: 10px;
}

.social-link {
font-size: 17px;
background: var(--independence);
padding: 10px;
border-radius: 50%;
}

.social-link:is(:hover, :focus) { background: var(--viridian-green); }





/*-----------------------------------*\
#GO TO TOP
\*-----------------------------------*/

.go-top {
position: fixed;
bottom: 0;
right: 15px;
background: var(--viridian-green);
color: var(--white-1);
font-size: 20px;
padding: 10px;
border-radius: var(--radius-6);
visibility: hidden;
opacity: 0;
transition: var(--transition-1);
}

.go-top.active {
visibility: visible;
opacity: 1;
transform: translateY(-15px);
}

.go-top:is(:hover, :focus) { transform: translateY(-25px); }





/*-----------------------------------*\
#RESPONSIVE
\*-----------------------------------*/

/**
* responsive for larger than 575px screen 
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 5rem;
  --fs-3: 4rem;
  --fs-8: 1.4rem;

}



/**
 * HERO
 */

.hero-text { --fs-7: 1.8rem; }



/**
 * FOOTER
 */

.footer-top { grid-template-columns: 1fr 1fr; }

}





/**
* responsive for larger than 768px screen 
*/

@media (min-width: 768px) {

/**
 * REUSED STYLE
 */

.container {
  max-width: 750px;
  margin-inline: auto;
}

.popular-list,
.blog-list { grid-template-columns: 1fr 1fr; }



/**
 * HERO
 */

.hero {
  min-height: 550px;
  display: grid;
  place-items: center;
}

.hero .container {
  display: flex;
  align-items: center;
  gap: 40px;
}



/**
 * DESTINATION
 */

.destination-list > li { width: calc(33.33% - 20px); }

.destination-list .w-50 { width: calc(50% - 20px); }



/**
 * FOOTER
 */

.footer { --fs-7: 1.6rem; }

.footer-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer-bottom .logo,
.copyright { margin-bottom: 0; }

}





/**
* responsive for larger than 992px screen 
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 3.5rem;
  --fs-3: 4.4rem;

  /**
   * spacing
   */

  --section-padding: 60px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 980px; }

.popular-list,
.blog-list { grid-template-columns: repeat(3, 1fr); }



/**
 * HEADER
 */

.nav-toggle-btn { display: none; }

.header,
.header.active { height: unset; }

.navbar {
  all: unset;
  display: flex;
  align-items: center;
  flex-grow: 1;
}

.navbar-list {
  margin-bottom: 0;
  margin-inline: auto;
  display: flex;
  align-items: center;
  gap: 30px;
}

.navbar-link {
  font-weight: var(--fw-700);
  margin-bottom: 8px;
}



/**
 * HERO
 */

.hero {
  position: relative;
  min-height: 680px;
}

.hero-title,
.hero-text { margin-bottom: 35px; }

.shape {
  display: block;
  position: absolute;
  animation: rotate 8s linear infinite;
}

.shape-1 {
  top: 60px;
  left: 47%;
}

.shape-2 {
  top: 20%;
  right: 50px;
  animation-delay: 0.25s;
}

.shape-3 {
  left: 40%;
  bottom: 20%;
  animation-delay: 0.5s;
}

@keyframes rotate {
  0% { transform: rotate(0); }
  100% { transform: rotate(1turn); }
}



/**
 * DESTINATION
 */

.destination {
  --fs-4: 3.2rem;
  --fs-5: 2.6rem;
}



/**
 * ABOUT
 */

.about .container {
  display: grid;
  grid-template-columns: 0.8fr 1fr;
  align-items: center;
  gap: 30px;
}

.about-content { margin-bottom: 0; }



/**
 * FOOTER
 */

.footer-top { grid-template-columns: 1fr 1fr 1fr 2fr; }

}





/**
* responsive for larger than 1200px screen 
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 6rem;

}



/**
 * REUSED STYLE
 */

.container { max-width: 1150px; }

:is(.popular, .blog) .card-content { padding: 30px; }



/**
 * HEADER
 */

.navbar-list { gap: 50px; }



/**
 * ABOUT
 */

.about .container { grid-template-columns: 0.7fr 1fr; }

}

</style>