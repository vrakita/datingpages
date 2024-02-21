<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dating sugardaddy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

<main id="app">

    <section class="content">

        <img class="main-img" v-if="step === 1" src="{{asset('images/croppedbackgroundImage.png')}}" alt="">

        <article class="step-1" v-if="step === 1">
            <div class="box">
                <svg version="1.1" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
                            <g><g><path fill="#fff" d="M201.8,98.5h-59.5L162,22.7c0.3-0.9,0.4-1.9,0.4-3c0-5.3-4.3-9.7-9.7-9.7c-3,0-5.8,1.4-7.5,3.6l-98.7,128c-1.3,1.7-2.1,3.8-2.1,6.1c0,5.4,4.4,9.8,9.8,9.8h59.6L94,233.3c-0.3,0.9-0.4,1.9-0.4,2.9c0,5.4,4.3,9.7,9.7,9.7c3.1,0,5.8-1.4,7.5-3.6l98.7-128c1.3-1.7,2.1-3.8,2.1-6.1C211.6,102.9,207.2,98.5,201.8,98.5z"/></g></g>
                            </svg>
                Aufmerksamkeit!!
            </div>

            <h1>Sie sind dabei, die NEUE <strong class="clr-pink">„FIND-MILF-- <br>SEX-SEITE“</strong> zu entdecken, über die alle <br> reden ...</h1>

            <h2>Besser als <span class="clr-pink">Dating</span></h2>

            <ul>
                <li>* Keine gefälschten Profile</li>
                <li>* Kein Schwachsinn</li>
            </ul>

            <p class="footer">Geben Sie einfach Ihre <strong class="clr-purple">Postleitzahl</strong> ein und ficken Sie lokale <strong class="clr-purple">MILFS!</strong></p>

            <div class="text-center">
                <a href="javascript:;" @click="step = 2" class="btn">WEITERMACHEN<svg viewBox="0 0 1792 1792" width="30"><path fill="#fff" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
            </div>


        </article>
        <article v-if="step !== 1">

            <div class="step">
                <h1 class="clr-purple">MILF FUCKBOOK IST ZURÜCK <br> WAHRSCHEINLICH WERDEN SIE AUF DIESER SEITE NACKTFOTOS <br> VON LOKALEN MILFS SEHEN, DIE SIE KENNEN
                </h1>
                <h2>Bevor wir Ihnen eine Liste und Fotos von MILFs zeigen können, die in Ihrer Nähe wohnen und gerade zum Sex bereit sind, müssen wir ein paar kurze Fragen stellen. </h2>

                <div class="step-box" v-if="step === 2 || step === 3 || step === 4 || step === 5">
                    <div class="step-header">
                        <p class="mb-0"><strong>Frage</strong></p>
                        <ul class="mb-0">
                            <li :class="step === 2 ? 'active': ''">1</li>
                            <li :class="step === 3 ? 'active': ''">2</li>
                            <li :class="step === 4 ? 'active': ''">3</li>
                            <li :class="step === 5 ? 'active': ''">4</li>
                        </ul>
                    </div>
                    <div class="step-content" v-if="step === 2">
                        <p class="text-left">Viele dieser MILFs sind verzweifelte alleinerziehende Mütter und betrügerische Ehefrauen auf der Suche nach etwas Spaß. Es könnten Ihre Nachbarn oder jemand sein, den Sie kennen. Sind Sie damit einverstanden, die Identität dieser MILFs geheim zu halten?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" @click="step = 3" class="btn-step">JA</a>
                            <a href="javascript:;" @click="step = 3" class="btn-step">NEIN</a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 3">
                        <p class="text-left">Diese MILFs haben uns gebeten, keine Männer zuzulassen, die eine „Beziehung“ suchen. Sie sehnen sich nur nach schnellem Sex. Nicht verabreden. Stimmen Sie dieser Bitte zu?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" @click="step = 4" class="btn-step">JA</a>
                            <a href="javascript:;" @click="step = 4" class="btn-step">NEIN</a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 4">
                        <p class="text-left">Sind Sie damit einverstanden, beim Sex mit einem Partner, den Sie auf unserer Website treffen, ein Kondom zu verwenden?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" @click="step = 5" class="btn-step">JA</a>
                            <a href="javascript:;" @click="step = 5" class="btn-step">NEIN</a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 5">
                        <p class="text-left">An jedem Tag, an dem Sie Ihr Konto überprüfen, werden Sie wahrscheinlich mehrere Sexanfragen von MILFs auf unserer Website erhalten. Sind Sie damit einverstanden?</p>
                        <div class="btn-wrapper">
                            <a href="javascript:;" @click="step = 6" class="btn-step">JA</a>
                            <a href="javascript:;" @click="step = 6" class="btn-step">NEIN</a>
                        </div>
                    </div>
                </div>

                <div class="step-box" v-if="step === 6 || step === 7 || step === 8 || step === 9 || step === 10">
                    <div class="step-header">
                        <p v-if="step === 6" class="mb-0"><strong>Welche Art von Körper macht dich an?</strong></p>
                        <p v-if="step === 7" class="mb-0"><strong>Welches Alter der MILF passt am besten zu dir?</strong></p>
                        <p v-if="step === 8" class="mb-0"><strong>Welche Art von Beziehung suchen Sie?</strong></p>
                        <p  v-if="step === 9"class="mb-0"><strong>Abstand zwischen dir und ihr?</strong></p>
                        <p  v-if="step === 10"class="mb-0"><strong>Danke schön.</strong></p>
                    </div>
                    <div class="step-content" v-if="step === 6">
                        <p class="text-left"><strong>Bitte wählen Sie bis zu 3 Antworten aus</strong></p>
                        <ul>
                            <li><label for="check1"><input type="checkbox" id="check1">MILF</label></li>
                            <li><label for="check2"><input type="checkbox" id="check2">Große Brüste</label></li>
                            <li><label for="check3"><input type="checkbox" id="check3">Großer Arsch</label></li>
                            <li><label for="check4"><input type="checkbox" id="check4">BBW</label></li>
                            <li><label for="check5"><input type="checkbox" id="check5">Schlank</label></li>
                            <li><label for="check6"><input type="checkbox" id="check6">Regulär</label></li>
                            <li><label for="check7"><input type="checkbox" id="check7">Andere</label></li>
                        </ul>
                        <div class="text-center">
                            <a href="javascript:;" @click="step = 7" class="btn-step w-auto">Nächste<svg viewBox="0 0 1792 1792" width="30"><path fill="#b94287" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 7">
                        <p class="text-left"><strong>Bitte wählen Sie bis zu 3 Antworten aus</strong></p>
                        <ul>
                            <li><label for="check1"><input type="checkbox" id="check1">10-25</label></li>
                            <li><label for="check2"><input type="checkbox" id="check2">25-32</label></li>
                            <li><label for="check3"><input type="checkbox" id="check3">32-37</label></li>
                            <li><label for="check4"><input type="checkbox" id="check4">37-45</label></li>
                            <li><label for="check5"><input type="checkbox" id="check5">45 und höher</label></li>
                        </ul>
                        <div class="text-center">
                            <a href="javascript:;" @click="step = 8" class="btn-step w-auto">Nächste<svg viewBox="0 0 1792 1792" width="30"><path fill="#b94287" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 8">
                        <p class="text-left"><strong>Bitte wählen Sie bis zu 3 Antworten aus</strong></p>
                        <ul>
                            <li><label for="check1"><input type="checkbox" id="check1">One-Night-Stand</label></li>
                            <li><label for="check2"><input type="checkbox" id="check2">Sex bei mehreren Gelegenheiten</label></li>
                            <li><label for="check3"><input type="checkbox" id="check3">Regelmäßiger Sex</label></li>
                            <li><label for="check4"><input type="checkbox" id="check4">Dating</label></li>
                            <li><label for="check5"><input type="checkbox" id="check5">Hochzeit</label></li>
                        </ul>
                        <div class="text-center">
                            <a href="javascript:;" @click="step = 9" class="btn-step w-auto">Nächste<svg viewBox="0 0 1792 1792" width="30"><path fill="#b94287" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 9">
                        <p class="text-left"><strong>Bitte wählen Sie bis zu 3 Antworten aus</strong></p>
                        <ul>
                            <li><label for="check1"><input type="checkbox" id="check1">Zu Fuß erreichbar</label></li>
                            <li><label for="check2"><input type="checkbox" id="check2">Selbe Stadt</label></li>
                            <li><label for="check3"><input type="checkbox" id="check3">Städte in der Nähe sind in Ordnung</label></li>
                            <li><label for="check4"><input type="checkbox" id="check4">Gleiches Land</label></li>
                            <li><label for="check5"><input type="checkbox" id="check5">Spielt keine Rolle</label></li>
                        </ul>
                        <div class="text-center">
                            <a href="javascript:;" @click="step = 10" class="btn-step w-auto">Nächste<svg viewBox="0 0 1792 1792" width="30"><path fill="#b94287" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                        </div>
                    </div>
                    <div class="step-content" v-if="step === 10">
                        <p class="text-left mb-20">Basierend auf Ihren Antworten können Sie nun unsere Liste und Fotos von MILFs sehen, die sich in Ihrer Nähe befinden. Bitte halten Sie ihre Identität geheim</p>
                        <p class="text-left mb-20">Klicken Sie unten auf die Schaltfläche „Weiter“, um unserer Website beizutreten und mit der Suche nach MILFs zu beginnen, die in Ihrer Nähe wohnen</p>

                        <div class="text-center">
                            <a href="{{$_ENV['REDIRECT_URL']}}" class="btn-step w-auto">Weitermachen<svg viewBox="0 0 1792 1792" width="30"><path fill="#b94287" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>

        </article>

    </section>

</main>

<script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
                step:1,
            }
        },

    }).mount('#app')
</script>

</body>

</html>