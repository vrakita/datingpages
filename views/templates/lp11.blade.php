<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dating sugardaddy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

<main id="app">
    <section class="hero">

        <div class="wrapper">
            <div class="content">
                <h1 v-if="step !== 9"><strong>Wichtig</strong></h1>
                <h2 v-if="step !== 9"><strong>DIES IST KEINE DATING-SITE. DU SCHREIBST EINE NACHRICHT UND FICKST, DAS WAR'S.</strong></h2>
                <p v-if="step !== 8 && step !== 9">Wir haben <strong class="clr-light-blue">551 weibliche Mitglieder</strong> im Umkreis von <strong class="clr-light-blue">10 Meilen</strong> um Ihren aktuellen Standort. Diese Frauen suchen <strong class="clr-light-blue">NUR nach ungezwungenen sexuellen Begegnungen</strong>. Sie haben Glück, im Moment ist die <strong class="clr-light-blue">KOSTENLOSE Registrierung für Männer</strong> für weitere <strong class="clr-light-blue">@{{ minutes }}</strong> Minuten und <strong class="clr-light-blue">@{{ seconds }}</strong> Sekunden geöffnet... Alles, was wir von Ihnen verlangen, ist die Beantwortung von drei einfachen Fragen, um zu sehen, ob Sie sich für unsere exklusive Website qualifizieren. <strong class="clr-light-blue">Viel Glück</strong></p>
                <article v-if="step === 1">
                    <h2 class="text-center"><strong>Bist du älter als 24?</strong></h2>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 2" class="btn btn--primary">Ja<svg fill="#fff" width="18" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></a>
                        <a href="javascript:;" @click="step = 2" class="btn btn--secondary">Nein<svg fill="#fff" width="18" viewBox="0 0 16 16"><path fill-rule="evenodd" d="m8 9.414-4.293 4.293-1.414-1.414L6.586 8 2.293 3.707l1.414-1.414L8 6.586l4.293-4.293 1.414 1.414L9.414 8l4.293 4.293-1.414 1.414L8 9.414z"/></svg></a>
                    </div>

                </article>

                <article v-if="step === 2">

                    <h2><strong>Diese Frauen haben uns gebeten, Männer, die eine „Beziehung“ suchen, NICHT zuzulassen. Sie wünschen sich NUR schnellen Sex. NICHT VERABREDEN. Stimmen Sie dieser Bitte zu?</strong></h2>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 3" class="btn btn--primary">Ja<svg fill="#fff" width="18" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></a>
                        <a href="javascript:;" @click="step = 3" class="btn btn--secondary">Nein<svg fill="#fff" width="18" viewBox="0 0 16 16"><path fill-rule="evenodd" d="m8 9.414-4.293 4.293-1.414-1.414L6.586 8 2.293 3.707l1.414-1.414L8 6.586l4.293-4.293 1.414 1.414L9.414 8l4.293 4.293-1.414 1.414L8 9.414z"/></svg></a>
                    </div>

                </article>
                <article v-if="step === 3">

                    <h2 class="text-center"><strong>Hatten Sie jemals sexuell übertragbare Krankheiten (STDs)?</strong></h2>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 4" class="btn btn--primary">Ja<svg fill="#fff" width="18" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></a>
                        <a href="javascript:;" @click="step = 4" class="btn btn--secondary">Nein<svg fill="#fff" width="18" viewBox="0 0 16 16"><path fill-rule="evenodd" d="m8 9.414-4.293 4.293-1.414-1.414L6.586 8 2.293 3.707l1.414-1.414L8 6.586l4.293-4.293 1.414 1.414L9.414 8l4.293 4.293-1.414 1.414L8 9.414z"/></svg></a>
                    </div>

                </article>
                <article v-if="step === 4">

                    <h2 class="text-left"><strong>Würden Sie beim Sex mit einem Partner, den Sie auf unserer Website kennengelernt haben, ein Kondom benutzen?</strong></h2>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 5" class="btn btn--primary">Ja<svg fill="#fff" width="18" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></a>
                        <a href="javascript:;" @click="step = 5" class="btn btn--secondary">Nein<svg fill="#fff" width="18" viewBox="0 0 16 16"><path fill-rule="evenodd" d="m8 9.414-4.293 4.293-1.414-1.414L6.586 8 2.293 3.707l1.414-1.414L8 6.586l4.293-4.293 1.414 1.414L9.414 8l4.293 4.293-1.414 1.414L8 9.414z"/></svg></a>
                    </div>

                </article>
                <article v-if="step === 5">

                    <h2 class="text-center"><strong>Welche Art von Mädchen macht dich an?</strong></h2>

                    <ul>
                        <li><label for="check1"><input type="checkbox" id="check1">Asiaten</label></li>
                        <li><label for="check2"><input type="checkbox" id="check2">Großer Arsch</label></li>
                        <li><label for="check3"><input type="checkbox" id="check3">Schlank</label></li>
                        <li><label for="check4"><input type="checkbox" id="check4">Andere</label></li>
                        <li><label for="check5"><input type="checkbox" id="check5">Große Brüste</label></li>
                        <li><label for="check6"><input type="checkbox" id="check6">BBW</label></li>
                        <li><label for="check7"><input type="checkbox" id="check7">Regulär</label></li>
                    </ul>

                    <p class="text-small">Bitte wählen Sie bis zu 3 Antworten aus</p>
                    <br>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 6" class="btn btn--primary">Weitermachen<svg width="20" viewBox="0 0 1792 1792"><path fill="#fff" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                    </div>

                </article>
                <article v-if="step === 6">

                    <h2 class="text-center"><strong>Welche Art von Körper macht dich an?</strong></h2>

                    <ul>
                        <li><label for="check8"><input type="checkbox" id="check8">Schlank</label></li>
                        <li><label for="check9"><input type="checkbox" id="check9">Regulär</label></li>
                        <li><label for="check10"><input type="checkbox" id="check10">BBW</label></li>
                        <li><label for="check11"><input type="checkbox" id="check11">Große Titten sind ein Muss</label></li>
                        <li><label for="check12"><input type="checkbox" id="check12">Ein sexy Arsch ist ein Muss</label></li>
                    </ul>

                    <p class="text-small">Bitte wählen Sie bis zu 3 Antworten aus</p>
                    <br>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 7" class="btn btn--primary">Weitermachen<svg width="20" viewBox="0 0 1792 1792"><path fill="#fff" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                    </div>

                </article>

                <article v-if="step === 7">

                    <h2 class="text-center"><strong>Welche Art von Körper macht dich an?</strong></h2>

                    <ul>
                        <li><label for="check13"><input type="checkbox" id="check13">Skype</label></li>
                        <li><label for="check14"><input type="checkbox" id="check14">Andere</label></li>
                        <li><label for="check15"><input type="checkbox" id="check15">Keiner</label></li>
                        <li><label for="check16"><input type="checkbox" id="check16">WhatsApp</label></li>
                        <li><label for="check17"><input type="checkbox" id="check17">Snapchat</label></li>
                        <li><label for="check18"><input type="checkbox" id="check18">Viber</label></li>
                    </ul>

                    <p class="text-small">Bitte wählen Sie bis zu 3 Antworten aus</p>
                    <br>

                    <div class="btn-wrapper">
                        <a href="javascript:;" @click="step = 8" class="btn btn--primary">Weitermachen<svg width="20" viewBox="0 0 1792 1792"><path fill="#fff" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                    </div>

                </article>

                <article v-if="step === 8">

                    <div class="progressbar-wrapper">
                        <p class="clr-white" v-if="progressWidth === 0"><strong>Construyendo tu perfil...</strong></p>
                        <p class="clr-white" v-if="progressWidth === 1"><strong>Überprüfen Sie Ihre Antworten…</strong>
                        </p>
                        <p class="clr-white" v-if="progressWidth === 2"><strong>Prüfen, ob Freikarten verfügbar sind</strong></p>
                        <p class="clr-white" v-if="progressWidth === 3 || progressWidth === 4"><strong>Doppelte Anmeldungen werden überprüft</strong></p>
                        <div class="progressbar">
                            <span class="bar" :style="'width:' + width + '%'"></span>
                        </div>
                    </div>

                </article>

                <article v-if="step === 9" class="text-left step-9">

                    <h1><strong>Glückwunsch</strong></h1>
                    <h2 class="clr-red mb-0"><strong>SIE SIND FÜR UNSERE WEBSITE BERECHTIGT!</strong></h2>
                    <p class="clr-white"><strong>Überprüfen Sie unsere Datenbank auf passende Profile.</strong></p>
                    <p class="mb-10 clr-blue">Basierend auf Ihren Antworten gibt es <strong>216</strong> weibliche Mitglieder in Ihrer Nähe</p>
                    <h2 class="clr-red mb-10"><strong>Sie sind zur Anmeldung berechtigt</strong></h2>
                    <h2 class="clr-white"><strong>Bitte lesen Sie jetzt unsere 3 Regeln</strong></h2>

                    <ul>
                        <li class="clr-yellow"><svg viewBox="0 0 512 512" width="24"><path fill="#c1b861" d="M335 175 224 286.1 176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zm0 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208-93.3 208-208 208z"/></svg>Wenn Sie jemanden sehen, den Sie kennen, dürfen Sie dies nicht veröffentlichen! Verbreiten Sie keine Gerüchte.</li>
                        <li class="clr-yellow"><svg viewBox="0 0 512 512" width="24"><path fill="#c1b861" d="M335 175 224 286.1 176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zm0 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208-93.3 208-208 208z"/></svg>Wenn Sie Sex mit einem unserer Mitglieder haben, liegt es in IHRER Verantwortung, sich vor sexuell übertragbaren Krankheiten zu schützen.</li>
                        <li class="clr-yellow"><svg viewBox="0 0 512 512" width="24"><path fill="#c1b861" d="M335 175 224 286.1 176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zm0 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208-93.3 208-208 208z"/></svg>Respektieren Sie die sexuellen Wünsche anderer Mitglieder. Unsere Benutzer sind normale Frauen, keine Prostituierten oder Pornostars.</li>
                    </ul>

                    <p class="clr-white">Die Nichteinhaltung dieser Regeln führt zur sofortigen Kündigung Ihres Kontos!
                        Wenn Sie allen oben genannten Punkten zustimmen, klicken Sie unten auf die Schaltfläche „Ich stimme zu“, um zur KOSTENLOSEN Registrierungsseite zu gelangen.
                    </p>

                    <br>

                    <div class="text-center">
                        <a href="{{$_ENV['REDIRECT_URL']}}" class="btn btn--primary">Ich stimme zu<svg width="20" viewBox="0 0 1792 1792"><path fill="#fff" d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></a>
                    </div>


                </article>
            </div>
            <div class="slider" v-if="slides.length !== 0">
                <div v-for="(slide, index) in slides" :key="index" class="slide" :class="{ active: index === currentIndex }">
                    <img :src="slide" :alt="`Slide${ index + 1 }`">
                </div>
            </div>
        </div>
        <br>
        <transition name="fade" mode="out-in">
            <p class="footer-text" v-if="step === 1">Die Frauen haben uns gebeten, Personen unter 24 Jahren keinen Kontakt zu ihnen zu erlauben, da sich jüngere Männer in der Vergangenheit unhöflich verhalten haben.</p>
        </transition>

    </section>
</main>

<script>
    const { createApp } = Vue

    createApp({
        delimiters: ['@{{', '}}'],
        data() {
            return {
                slides: [
                    'assets/lp11/images/img1.jpg',
                    'assets/lp11/images/img2.jpg',
                    'assets/lp11/images/img3.jpg',
                ],
                currentIndex: 0,
                step:1,
                progressWidth: 0,
                width: 0,
                targetTime: new Date().getTime() + 15 * 60 * 1000, // 12 minutes from now
                minutes: 12,
                seconds: 0,
            }
        },
        watch: {
            step(newValue, oldValue) {
                if(newValue === 8)
                {
                    this.progress()
                }
            },
        },
        methods: {
            startSlider() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                }, 5000);
            },

            progress() {
                setInterval(() => {

                    if(this.progressWidth < 4) {
                        this.progressWidth++;
                        this.width = (this.progressWidth * 100) / 4
                    }else {
                        this.step = 9;
                        clearInterval();
                    }
                }, 1000);
            },

            updateCountdown() {
                const currentTime = new Date().getTime();
                const remainingTime = Math.max(0, this.targetTime - currentTime);

                this.minutes = Math.floor(remainingTime / (60 * 1000));
                this.seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);

                if (remainingTime === 0) {
                    clearInterval(this.intervalId);
                }
            },
        },
        mounted() {
            this.startSlider();

            this.intervalId = setInterval(() => {
                this.updateCountdown();
            }, 1000);

            this.updateCountdown();
        },

        beforeDestroy() {
            clearInterval(this.intervalId);
        },
    }).mount('#app')
</script>

</body>

</html>