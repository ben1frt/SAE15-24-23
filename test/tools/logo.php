<?php
/*condition pour logo page de connexion*/
if (explode('/',$_SERVER['PHP_SELF'])[2]=='loginpage.php') {
	$id='id="thalesTitle"';
};
/*condition pour logo des autres pages*/
if (explode('/',$_SERVER['PHP_SELF'])[2]!='loginpage.php') {
	$id='id="thalesTitle2"';
}

/* pour adapter en fonction du sereur
echo $_SERVER['PHP_SELF'];
*/

echo('<div ');

echo($id);
/*tracé du logo*/
echo ('style="width:180px;"><svg version="1.1" id="Calque_2_1_" viewBox="0 0 483.8 97.3" style="enable-background:new 0 0 483.8 97.3;" xml:space="preserve" focusable="false" aria-label="Thales. Building a future we can all trust." role="img">');
echo('<g><g><path class="logoSt2" d="M482,41.9c0,7.7-2.2,10-8.5,11.9c-6.7,2-18.6,3.3-25.6,3.3c-8.4,0-18.8-0.5-27.7-2.6v-9.1h49.1V33.3h-34.8c-10.4,0-14.4-2.9-14.4-13.1V15c0-8.1,2.4-10.5,8.9-12.1c6.6-1.7,17.3-2.8,24.4-2.8c8.5,0,18.8,0.7,27.7,2.6v9H433v10.3h34.8c10.4,0,14.4,2.8,14.4,13.1L482,41.9L482,41.9z"/><path class="logoSt2" d="M398.3,54.5c-10.2,2-20.4,2.6-30.4,2.6c-9.9,0-20.3-0.5-30.6-2.6V2.6c10.2-2,20.5-2.6,30.4-2.6c9.9,0,20.1,0.7,30.2,2.6v9.2h-46v10.4h30V33h-30v12.3h46.2L398.3,54.5L398.3,54.5z"/><path class="logoSt2" d="M319.8,54.5c-9.1,2-18.4,2.6-27.2,2.6c-8.9,0-18.2-0.5-27.3-2.6V1.2h14.6v43.3h39.9V54.5L319.8,54.5z"/><path class="logoSt2" d="M247.6,54.8c-4.9,1.4-11.3,1.9-16.1,2l-22.6-45.6h-1.2l-22.6,45.6c-4.8-0.1-10.5-0.6-15.3-2l28.6-53.5h20.4L247.6,54.8z"/><path class="logoSt4" d="M217.9,41.3c0,5.2-4.3,9.5-9.6,9.5c-5.2,0-9.5-4.3-9.5-9.5s4.3-9.5,9.5-9.5C213.5,31.7,217.9,36,217.9,41.3"/><path class="logoSt2" d="M152.1,54.9c-4.7,1.4-9.7,1.8-14.7,1.9V33.6H101v23.3c-5-0.1-10-0.6-14.7-1.9V2.3C91,0.9,96,0.5,101,0.4v22.4h36.4V0.4c5,0.1,10,0.6,14.7,1.9V54.9z"/><path class="logoSt2" d="M65.9,12H40.2v43.9H25.7V12H0V2.6C11.1,0.6,22.2,0,33,0s21.9,0.7,32.9,2.6V12z"/></g><g><g><path class="logoSt4" d="M12.7,80c0.3,0.1,0.5,0.2,0.5,0.6v1.8c0,0.2-0.1,0.3-0.3,0.3H8.3c-3.1,0-3.6,1.3-3.6,5.7c0,4.4,0.5,5.7,3.6,5.7h4.6c0.2,0,0.3,0.1,0.3,0.3v1.8c0,0.3-0.2,0.5-0.5,0.6c-1.1,0.2-2.4,0.3-4.4,0.3c-5.7,0-7.2-2-7.2-8.8c0-6.8,1.5-8.8,7.2-8.8C10.2,79.7,11.6,79.8,12.7,80z"/><path class="logoSt4" d="M26.3,90.9c0,5.1-1,6.4-5.7,6.4s-5.7-1.2-5.7-6.4c0-5.1,1-6.4,5.7-6.4S26.3,85.8,26.3,90.9z M18.2,90.9c0,2.8,0.3,3.5,2.4,3.5s2.4-0.7,2.4-3.5s-0.3-3.5-2.4-3.5C18.6,87.4,18.2,88.1,18.2,90.9z"/><path class="logoSt4" d="M39.7,89.9v6.9c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-6.1c0-3.2-0.3-3.3-2.4-3.3h-2v9.4c0,0.3-0.1,0.3-0.3,0.3H29c-0.2,0-0.3-0.1-0.3-0.3V85.2c0-0.3,0.1-0.3,0.3-0.3c1.5-0.3,3.7-0.4,5.4-0.4C38.6,84.5,39.7,85.3,39.7,89.9z"/><path class="logoSt4" d="M50.6,84.8c0.3,0.1,0.3,0.1,0.3,0.3v1.7c0,0.3-0.1,0.3-0.4,0.3h-4c-0.9,0-1.3,0.3-1.3,0.8v0.2c0,0.4,0.3,0.7,1,1l2.9,1.1c1.9,0.7,2.4,1.8,2.4,3.3V94c0,2.6-1.9,3.3-4.8,3.3c-2,0-3.5-0.1-4.7-0.2c-0.3,0-0.4-0.1-0.4-0.3v-1.8c0-0.3,0.1-0.3,0.4-0.3h4.6c1.2,0,1.6-0.1,1.6-0.8v-0.2c0-0.4-0.3-0.7-1.2-1l-2.8-1c-1.8-0.6-2.3-2-2.3-3.4v-0.4c0-2.4,1.8-3.2,5.1-3.2C48.1,84.5,49.3,84.6,50.6,84.8z"/><path class="logoSt4" d="M57.4,81.1c0.2-0.1,0.3,0.1,0.3,0.3v3.2h2c0.3,0,0.4,0.1,0.4,0.3v1.8c0,0.2-0.1,0.3-0.4,0.3h-2v6.1c0,1,0.3,1.1,1.3,1.1h0.9c0.3,0,0.4,0.1,0.4,0.3v1.9c0,0.3-0.1,0.4-0.3,0.4c-0.8,0.1-1.4,0.2-1.9,0.2c-1.9,0-3.7-0.1-3.7-2.9V87h-1.3c-0.3,0-0.3-0.1-0.3-0.3v-1.8c0-0.2,0.1-0.3,0.3-0.3h1.3v-2.5c0-0.2,0.1-0.3,0.3-0.3L57.4,81.1z"/><path class="logoSt4" d="M69.1,84.7c0.3,0.1,0.3,0.1,0.3,0.5V87c0,0.2-0.1,0.3-0.4,0.3H67c-1.2,0-1.6,0.2-1.6,1.1v8.3c0,0.3-0.1,0.3-0.3,0.3h-2.7c-0.2,0-0.3-0.1-0.3-0.3v-9.1c0-2.8,2-3.1,4.1-3.1C66.8,84.5,68.3,84.6,69.1,84.7z"/><path class="logoSt4" d="M81.8,84.6c0.2,0,0.3,0.1,0.3,0.3v11.5c0,0.3-0.1,0.3-0.3,0.4c-1.5,0.3-3.7,0.4-5.4,0.4c-4.3,0-5.4-0.8-5.4-5.4V85c0-0.2,0.1-0.3,0.3-0.3H74c0.2,0,0.3,0.1,0.3,0.3v6.1c0,3.2,0.3,3.4,2.4,3.4h2v-9.4c0-0.2,0.1-0.3,0.3-0.3h2.7V84.6z"/><path class="logoSt4" d="M88.4,81.1c0,1.1-0.7,1.8-1.9,1.8c-1.2,0-2-0.7-2-1.8c0-1.1,0.7-1.8,2-1.8C87.7,79.4,88.4,80,88.4,81.1zM87.7,84.6c0.2,0,0.3,0.1,0.3,0.3v11.9c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3V84.9c0-0.2,0.1-0.3,0.3-0.3H87.7z"/><path class="logoSt4" d="M99.1,84.8c0.3,0.1,0.3,0.1,0.3,0.3v1.7c0,0.3-0.1,0.3-0.4,0.3h-3.9c-0.9,0-1.3,0.3-1.3,0.8v0.2c0,0.4,0.3,0.7,1,1l2.9,1c1.9,0.7,2.4,1.8,2.4,3.3v0.3c0,2.6-1.9,3.3-4.8,3.3c-2,0-3.5-0.1-4.7-0.2c-0.3,0-0.4-0.1-0.4-0.3v-1.7c0-0.3,0.1-0.3,0.4-0.3h4.6c1.2,0,1.6-0.1,1.6-0.8v-0.2c0-0.4-0.3-0.7-1.2-1l-2.8-1c-1.8-0.6-2.3-2-2.3-3.4v-0.4c0-2.4,1.8-3.2,5.1-3.2C96.5,84.5,97.8,84.6,99.1,84.8z"/><path class="logoSt4" d="M113.1,90.9c0,5.1-1,6.4-5.7,6.4c-4.7,0-5.7-1.2-5.7-6.4c0-5.1,1-6.4,5.7-6.4S113.1,85.8,113.1,90.9zM105.1,90.9c0,2.8,0.3,3.5,2.4,3.5s2.4-0.7,2.4-3.5s-0.3-3.5-2.4-3.5C105.4,87.4,105.1,88.1,105.1,90.9z"/><path class="logoSt4" d="M126.6,89.9v6.9c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-6.1c0-3.2-0.3-3.3-2.4-3.3h-2v9.4c0,0.3-0.1,0.3-0.3,0.3h-2.7c-0.2,0-0.3-0.1-0.3-0.3V85.2c0-0.3,0.1-0.3,0.3-0.3c1.5-0.3,3.7-0.4,5.4-0.4C125.4,84.5,126.6,85.3,126.6,89.9z"/><path class="logoSt4" d="M137.5,84.8c0.3,0.1,0.3,0.1,0.3,0.3v1.7c0,0.3-0.1,0.3-0.4,0.3h-4c-0.9,0-1.3,0.3-1.3,0.8v0.2c0,0.4,0.3,0.7,1,1l2.9,1c1.9,0.7,2.4,1.8,2.4,3.3v0.3c0,2.6-1.9,3.3-4.8,3.3c-2,0-3.5-0.1-4.7-0.2c-0.3,0-0.4-0.1-0.4-0.3v-1.7c0-0.3,0.1-0.3,0.4-0.3h4.6c1.2,0,1.6-0.1,1.6-0.8v-0.2c0-0.4-0.3-0.7-1.2-1l-2.8-1c-1.8-0.6-2.3-2-2.3-3.4v-0.4c0-2.4,1.8-3.2,5.1-3.2C134.9,84.5,136.1,84.6,137.5,84.8z"/><path class="logoSt4" d="M155.8,90.8v0.7c0,0.5-0.1,0.6-0.7,0.6h-7c0.1,2,0.6,2.4,2.6,2.4h3.9c0.2,0,0.3,0.1,0.3,0.3v1.8c0,0.3-0.1,0.3-0.3,0.3c-1.2,0.3-2.8,0.3-4.3,0.3c-4.5,0-5.6-1.2-5.6-6.4c0-5.1,1.1-6.4,5.6-6.4C154.7,84.5,155.8,85.7,155.8,90.8z M148.1,89.8h4.5c0-2-0.5-2.5-2.2-2.5C148.6,87.4,148.1,87.9,148.1,89.8z"/><path class="logoSt4" d="M169,89.9v6.9c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-6.1c0-3.2-0.3-3.3-2.4-3.3h-2v9.4c0,0.3-0.1,0.3-0.3,0.3h-2.7c-0.2,0-0.3-0.1-0.3-0.3V85.2c0-0.3,0.1-0.3,0.3-0.3c1.5-0.3,3.7-0.4,5.4-0.4C167.9,84.5,169,85.3,169,89.9z"/><path class="logoSt4" d="M180,84.8c0.3,0.1,0.3,0.1,0.3,0.3v1.7c0,0.3-0.1,0.3-0.4,0.3h-4c-0.9,0-1.3,0.3-1.3,0.8v0.2c0,0.4,0.3,0.7,1,1l2.9,1c1.9,0.7,2.4,1.8,2.4,3.3v0.3c0,2.6-1.9,3.3-4.8,3.3c-2,0-3.5-0.1-4.7-0.2c-0.3,0-0.4-0.1-0.4-0.3v-1.7c0-0.3,0.1-0.3,0.4-0.3h4.6c1.2,0,1.6-0.1,1.6-0.8v-0.2c0-0.4-0.3-0.7-1.2-1l-2.8-1c-1.8-0.6-2.3-2-2.3-3.4v-0.4c0-2.4,1.8-3.2,5.1-3.2C177.3,84.5,178.6,84.6,180,84.8z"/><path class="logoSt4" d="M193.7,90.8v0.7c0,0.5-0.1,0.6-0.7,0.6h-7c0.1,2,0.6,2.4,2.6,2.4h3.9c0.2,0,0.3,0.1,0.3,0.3v1.8c0,0.3-0.1,0.3-0.3,0.3c-1.2,0.3-2.8,0.3-4.3,0.3c-4.5,0-5.6-1.2-5.6-6.4c0-5.1,1.1-6.4,5.6-6.4C192.6,84.5,193.7,85.7,193.7,90.8z M185.9,89.8h4.5c0-2-0.5-2.5-2.2-2.5C186.5,87.4,185.9,87.9,185.9,89.8z"/><path class="logoSt4" d="M213.1,89.3v7.5c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3v-6.1c0-3.2-0.3-3.3-2.1-3.3c-0.6,0-1.2,0.1-1.8,0.1c0.2,0.6,0.3,1.4,0.3,2.4v6.9c0,0.3-0.1,0.3-0.3,0.3h-2.7c-0.2,0-0.3-0.1-0.3-0.3v-6.8c0-2.5-0.4-2.6-2.2-2.6h-1.5v9.4c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3V85.1c0-0.3,0.1-0.3,0.3-0.3c1.2-0.3,3.1-0.4,4.3-0.4c1.7,0,3.1,0.3,4,0.7c1.2-0.5,2.8-0.7,3.9-0.7C211.8,84.5,213.1,85.5,213.1,89.3z"/><path class="logoSt4" d="M218.6,79.8c0.3,0,0.3,0.1,0.3,0.3v4.5c0.9-0.1,1.7-0.1,2.8-0.1c4.1,0,5.2,1.4,5.2,6.4c0,5-1.1,6.4-5.8,6.4c-1.6,0-3.1-0.1-4.9-0.4c-0.3-0.1-0.5-0.2-0.5-0.6V80.2c0-0.3,0.1-0.3,0.3-0.3L218.6,79.8L218.6,79.8z M218.9,87.4v6.8c0.7,0.1,1.6,0.1,2.2,0.1c2.2,0,2.4-0.9,2.4-3.5c0-2.9-0.3-3.5-2.6-3.5L218.9,87.4L218.9,87.4z"/><path class="logoSt4" d="M232.1,79.8c0.2,0,0.3,0.1,0.3,0.3v16.7c0,0.3-0.1,0.3-0.3,0.3h-2.6c-0.2,0-0.3-0.1-0.3-0.3V80.1c0-0.2,0.1-0.3,0.3-0.3C229.5,79.8,232.1,79.8,232.1,79.8z"/><path class="logoSt4" d="M245.9,90.8v0.7c0,0.5-0.1,0.6-0.7,0.6h-7c0.1,2,0.6,2.4,2.6,2.4h3.9c0.2,0,0.3,0.1,0.3,0.3v1.8c0,0.3-0.1,0.3-0.3,0.3c-1.2,0.3-2.8,0.3-4.3,0.3c-4.5,0-5.6-1.2-5.6-6.4c0-5.1,1.1-6.4,5.6-6.4C244.8,84.5,245.9,85.7,245.9,90.8z M238.1,89.8h4.5c0-2-0.5-2.5-2.2-2.5C238.7,87.4,238.1,87.9,238.1,89.8z"/><path class="logoSt2" d="M263.1,84.8c0.2,0,0.3,0.1,0.3,0.3v11.4c0,0.3-0.1,0.3-0.3,0.3c-1.6,0.3-3.7,0.4-5,0.4c-4.1,0-5.3-0.7-5.3-5.3v-6.8c0-0.2,0.1-0.3,0.4-0.3h2c0.2,0,0.3,0.1,0.3,0.3v6.4c0,3.3,0.5,3.5,2.6,3.5h2.6v-9.8c0-0.2,0.1-0.3,0.3-0.3H263.1z"/><path class="logoSt2" d="M277,90v6.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3v-6.4c0-3.3-0.5-3.5-2.6-3.5h-2.6v9.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V85.4c0-0.3,0.1-0.3,0.3-0.3c1.6-0.3,3.7-0.3,5-0.3C275.8,84.7,277,85.3,277,90z"/><path class="logoSt2" d="M294.1,88.3v7.8c0,0.3-0.1,0.5-0.5,0.7c-1.2,0.3-3.1,0.5-5,0.5c-3.1,0-4.7-0.5-4.7-3.7c0-2.8,1.5-3.5,4.3-3.5h3.2v-1.2c0-1.2-0.7-1.8-2.6-1.8h-3.7c-0.3,0-0.3-0.1-0.3-0.3v-1.4c0-0.3,0.1-0.3,0.3-0.3c1.3-0.3,2.6-0.3,3.7-0.3C292.8,84.7,294.1,85.9,294.1,88.3z M288.2,91.9c-1.2,0-1.7,0.4-1.7,1.5c0,1.2,0.6,1.6,2.2,1.6c0.6,0,1.8-0.1,2.6-0.3v-2.8H288.2z"/><path class="logoSt2" d="M307.3,84.8c0.3,0,0.3,0.1,0.3,0.3l-2.6,9.5c-0.6,2.4-0.8,2.6-3.3,2.6c-2.4,0-2.6-0.3-3.1-2.6l-2.6-9.5c-0.1-0.3,0.1-0.3,0.3-0.3h2.2c0.2,0,0.2,0.1,0.3,0.3L301,94c0.2,0.8,0.3,0.9,0.7,0.9c0.5,0,0.6-0.1,0.8-0.9l2.2-8.9c0.1-0.3,0.1-0.3,0.3-0.3H307.3z"/><path class="logoSt2" d="M319.6,90.8v0.7c0,0.4-0.1,0.6-0.8,0.6h-7.1c0.1,2.4,0.6,2.9,2.8,2.9h3.8c0.2,0,0.3,0.1,0.3,0.3v1.4c0,0.3-0.1,0.3-0.3,0.4c-1.2,0.2-2.6,0.3-4,0.3c-4.4,0-5.4-1.2-5.4-6.3c0-5,1-6.3,5.4-6.3C318.7,84.7,319.6,85.8,319.6,90.8zM311.8,90h5.1c0-2.4-0.5-3-2.5-3C312.4,87,311.8,87.6,311.8,90z"/><path class="logoSt2" d="M332.6,90v6.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3v-6.4c0-3.3-0.5-3.5-2.6-3.5h-2.6v9.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V85.4c0-0.3,0.1-0.3,0.3-0.3c1.6-0.3,3.7-0.3,5-0.3C331.5,84.7,332.6,85.3,332.6,90z"/><path class="logoSt2" d="M338.3,81.3c0,1-0.6,1.6-1.6,1.6s-1.6-0.6-1.6-1.6s0.6-1.6,1.6-1.6C337.8,79.7,338.3,80.3,338.3,81.3zM337.7,84.8c0.2,0,0.3,0.1,0.3,0.3v11.7c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V85.1c0-0.2,0.1-0.3,0.3-0.3H337.7z"/><path class="logoSt2" d="M347.5,84.9c0.2,0.1,0.3,0.1,0.3,0.4v1.4c0,0.3-0.1,0.3-0.4,0.3h-2c-1.3,0-1.8,0.2-1.8,1.2v8.6c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3v-9.3c0-2.7,2.1-2.9,3.8-2.9C345.4,84.7,346.9,84.7,347.5,84.9z"/><path class="logoSt2" d="M364.4,80.1c0.3,0,0.3,0.1,0.3,0.3v16c0,0.3-0.1,0.4-0.4,0.5c-1.9,0.3-3.1,0.4-4.8,0.4c-4.5,0-5.5-1.2-5.5-6.3c0-5,1-6.3,5.1-6.3c1.2,0,2.1,0.1,2.9,0.1v-4.4c0-0.3,0.1-0.3,0.3-0.3C362.3,80.1,364.4,80.1,364.4,80.1zM359.6,87c-2.5,0-2.8,0.7-2.8,3.9c0,3,0.3,3.9,2.8,3.9c0.7,0,1.7-0.1,2.5-0.2V87H359.6z"/><path class="logoSt2" d="M377.8,90.8v0.7c0,0.4-0.1,0.6-0.8,0.6h-7.1c0.1,2.4,0.6,2.9,2.8,2.9h3.8c0.2,0,0.3,0.1,0.3,0.3v1.4c0,0.3-0.1,0.3-0.3,0.4c-1.2,0.2-2.6,0.3-4,0.3c-4.4,0-5.4-1.2-5.4-6.3c0-5,1-6.3,5.4-6.3C376.8,84.7,377.8,85.8,377.8,90.8zM369.9,90h5.1c0-2.4-0.5-3-2.5-3C370.5,87,369.9,87.6,369.9,90z"/><path class="logoSt2" d="M393.5,84.9c0.2,0.1,0.3,0.1,0.3,0.4v1.4c0,0.2-0.1,0.3-0.3,0.3H390c-2.4,0-2.7,0.8-2.7,3.9s0.3,3.9,2.7,3.9h3.5c0.3,0,0.3,0.1,0.3,0.3v1.4c0,0.3-0.1,0.3-0.3,0.4c-1.2,0.2-2.6,0.3-3.5,0.3c-4.5,0-5.4-1.2-5.4-6.3c0-5,0.9-6.3,5.4-6.3C390.9,84.7,392.3,84.7,393.5,84.9z"/><path class="logoSt2" d="M406.5,91c0,5-1,6.3-5.4,6.3c-4.5,0-5.4-1.2-5.4-6.3c0-5,1-6.3,5.4-6.3C405.6,84.7,406.5,85.9,406.5,91zM398.3,91c0,3.1,0.3,3.9,2.8,3.9c2.4,0,2.8-0.8,2.8-3.9s-0.3-3.9-2.8-3.9C398.7,87,398.3,87.8,398.3,91z"/><path class="logoSt2" d="M419.7,90v6.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3v-6.4c0-3.3-0.5-3.5-2.6-3.5h-2.6v9.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V85.4c0-0.3,0.1-0.3,0.3-0.3c1.6-0.3,3.7-0.3,5-0.3C418.5,84.7,419.7,85.3,419.7,90z"/><path class="logoSt2" d="M428.8,80.1c0.2,0.1,0.3,0.1,0.3,0.4V82c0,0.2-0.1,0.3-0.3,0.3h-1.1c-1.1,0-1.6,0.1-1.6,1v1.5h7.3c0.2,0,0.3,0.1,0.3,0.3v11.7c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V87h-5v9.9c0,0.2-0.1,0.3-0.3,0.3h-2.1c-0.2,0-0.3-0.1-0.3-0.3V87h-1.5c-0.3,0-0.3-0.1-0.3-0.3v-1.4c0-0.2,0.1-0.3,0.3-0.3h1.5v-2c0-2.7,2-2.9,3.6-2.9C427.5,79.9,428.2,80,428.8,80.1z M434.1,81.3c0,1-0.6,1.6-1.6,1.6c-1,0-1.6-0.6-1.6-1.6s0.6-1.6,1.6-1.6C433.5,79.7,434.1,80.3,434.1,81.3z"/><path class="logoSt2" d="M446.2,88.3v7.8c0,0.3-0.1,0.5-0.5,0.7c-1.2,0.3-3.1,0.5-5,0.5c-3.1,0-4.7-0.5-4.7-3.7c0-2.8,1.5-3.5,4.3-3.5h3.2v-1.2c0-1.2-0.7-1.8-2.6-1.8h-3.7c-0.3,0-0.3-0.1-0.3-0.3v-1.4c0-0.3,0.1-0.3,0.3-0.3c1.3-0.3,2.6-0.3,3.7-0.3C444.9,84.7,446.2,85.9,446.2,88.3z M440.5,91.9c-1.2,0-1.7,0.4-1.7,1.5c0,1.2,0.6,1.6,2.2,1.6c0.6,0,1.8-0.1,2.6-0.3v-2.8H440.5z"/><path class="logoSt2" d="M459.6,90v6.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3v-6.4c0-3.3-0.5-3.5-2.6-3.5h-2.6v9.8c0,0.2-0.1,0.3-0.3,0.3h-2c-0.2,0-0.3-0.1-0.3-0.3V85.4c0-0.3,0.1-0.3,0.3-0.3c1.6-0.3,3.7-0.3,5-0.3C458.5,84.7,459.6,85.3,459.6,90z"/><path class="logoSt2" d="M471,84.9c0.2,0.1,0.3,0.1,0.3,0.4v1.4c0,0.2-0.1,0.3-0.3,0.3h-3.5c-2.4,0-2.7,0.8-2.7,3.9s0.3,3.9,2.7,3.9h3.5c0.3,0,0.3,0.1,0.3,0.3v1.4c0,0.3-0.1,0.3-0.3,0.4c-1.2,0.2-2.6,0.3-3.5,0.3c-4.5,0-5.4-1.2-5.4-6.3c0-5,0.9-6.3,5.4-6.3C468.4,84.7,469.8,84.7,471,84.9z"/><path class="logoSt2" d="M483.8,90.8v0.7c0,0.4-0.1,0.6-0.8,0.6h-7.1c0.1,2.4,0.6,2.9,2.8,2.9h3.8c0.2,0,0.3,0.1,0.3,0.3v1.4c0,0.3-0.1,0.3-0.3,0.4c-1.2,0.2-2.6,0.3-4,0.3c-4.4,0-5.4-1.2-5.4-6.3c0-5,1-6.3,5.4-6.3C482.8,84.7,483.7,85.8,483.8,90.8zM475.9,90h5.1c0-2.4-0.5-3-2.5-3C476.5,87,475.9,87.6,475.9,90z"/></g></g></g></svg>');


?>