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
        <div v-if="step !== 9">
            <h1><strong>Wichtig</strong></h1>
            <h2><strong>DIES IST KEINE DATING-SEITE. DU SCHREIBST EINE <br> <span class="clr-yellow">NACHRICHT</span> UND <span class="clr-yellow">FICKST</span>, DAS WAR'S.</strong></h2>
            <p v-if="step !== 5 && step !== 6 &&  step !== 7 && step !== 8 && step !== 9" class="mb-10">Wir haben 551 weibliche Mitglieder im Umkreis von 10 Meilen um Ihren aktuellen Standort. Diese Frauen suchen NUR nach ungezwungenen sexuellen Begegnungen. Sie haben Glück, im Moment ist die KOSTENLOSE Registrierung für Männer für weitere @{{ minutes }} Minuten und @{{ seconds }} Sekunden geöffnet... Alles, was wir von Ihnen verlangen, ist die Beantwortung von drei einfachen Fragen, um zu sehen, ob Sie sich für unsere exklusive Website qualifizieren. Viel Glück</p>
            <img src="{{asset('images/titleGap.png')}}" width="534" height="50" alt="">
        </div>
        <article v-if="step === 1">
            <h2 class="mb-10 clr-yellow"><strong>Bist du älter als 24?</strong></h2>

            <p class="mb-30">Die Frauen haben uns gebeten, Personen unter 24 Jahren keinen Kontakt zu ihnen zu erlauben, da sich jüngere Männer in der Vergangenheit unhöflich verhalten haben.</p>

            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 2" class="btn ">Nein</a>
                <a href="javascript:;" @click="step = 2" class="btn ">Ja</a>
            </div>

        </article>
        <article v-if="step === 2">

            <h2 class="clr-yellow mb-30"><strong>Diese Frauen haben uns gebeten, Männer, die eine „Beziehung“ suchen, NICHT zuzulassen. Sie wünschen sich NUR schnellen Sex. NICHT VERABREDEN. Stimmen Sie dieser Bitte zu?</strong></h2>

            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 3" class="btn ">Nein</a>
                <a href="javascript:;" @click="step = 3" class="btn ">Ja</a>
            </div>

        </article>
        <article v-if="step === 3">

            <h2 class="clr-yellow mb-30"><strong>Hatten Sie jemals sexuell übertragbare Krankheiten (STDs)?</strong></h2>

            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 4" class="btn ">Nein</a>
                <a href="javascript:;" @click="step = 4" class="btn ">Ja</a>
            </div>

        </article>
        <article v-if="step === 4">

            <h2 class="clr-yellow mb-30"><strong>Würden Sie beim Sex mit einem Partner, den Sie auf unserer Website kennengelernt haben, ein Kondom benutzen?</strong></h2>

            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 5" class="btn ">Nein</a>
                <a href="javascript:;" @click="step = 5" class="btn ">Ja</a>
            </div>

        </article>
        <article v-if="step === 5">

            <h2 class="clr-yellow mb-10"><strong>Welche Art von Mädchen macht dich an?</strong></h2>
            <p class="mb-20">(Bitte wählen Sie bis zu 3 Antworten aus)</p>
            <ul class="checkbox-wrapper">
                <li class="checkbox">
                    <input type="checkbox" id="check1">
                    <label for="check1">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Asiaten</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check2">
                    <label for="check2">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Freundlich</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check3">
                    <label for="check3">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Teenager</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check4">
                    <label for="check4">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Pervers</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check5">
                    <label for="check5">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Latinas</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check6">
                    <label for="check6">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">MILFs</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check7">
                    <label for="check7">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Spritzer</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check8">
                    <label for="check8">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Fetisch</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check9">
                    <label for="check9">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">BBW</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check10">
                    <label for="check10">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Omas</p>
                    </label>
                </li>
            </ul>
            <br>
            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 6" class="btn ">Weitermachen <span><svg width="10" viewBox="0 0 256 512"><path fill="#f18f01" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375-12.5-12.5-12.5-32.75 0-45.25L178.8 256 41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg></span></a>
            </div>

        </article>
        <article class="step-6" v-if="step === 6">

            <h2 class="clr-yellow mb-10"><strong>Welche Art von Körper macht dich an?</strong></h2>
            <p class="mb-20">Bitte wählen Sie bis zu 3 Antworten aus</p>
            <ul class="checkbox-wrapper">
                <li class="checkbox">
                    <input type="checkbox" id="check1">
                    <label for="check1">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Schlank</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check2">
                    <label for="check2">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Regulär</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check3">
                    <label for="check3">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">BBW</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check4">
                    <label for="check4">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Große Titten sind ein Muss</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check5">
                    <label for="check5">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Ein sexy Arsch ist ein Muss</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check6">
                    <label for="check6">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Ist es wirklich wichtig</p>
                    </label>
                </li>
            </ul>
            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 7" class="btn ">Weitermachen<span><svg width="10" viewBox="0 0 256 512"><path fill="#f18f01" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375-12.5-12.5-12.5-32.75 0-45.25L178.8 256 41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg></span></a>
            </div>

        </article>
        <article class="step-7" v-if="step === 7">
            <h2 class="clr-yellow mb-10"><strong>Benutzen Sie Messaging-Apps?</strong></h2>
            <p class="mb-20">Muchos de nuestros miembros usan Whatsapp, Snapchat, Viber o Skype <br> para intercambiar mensajes y fotos.</p>
            <ul class="checkbox-wrapper">
                <li class="checkbox">
                    <input type="checkbox" id="check1">
                    <label for="check1">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Skype</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check2">
                    <label for="check2">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Andere</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check3">
                    <label for="check3">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Keiner</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check4">
                    <label for="check4">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">WhatsApp</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check5">
                    <label for="check5">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Snapchat</p>
                    </label>
                </li>
                <li class="checkbox">
                    <input type="checkbox" id="check6">
                    <label for="check6">
                        <span class="square-check"><svg fill="#000" width="14" viewBox="0 0 18 15"><path d="M6 10.7 1.8 6.5.4 7.9 6 13.5l12-12L16.6.1 6 10.7Z" fill-rule="evenodd"/></svg></span>
                        <p class="mb-0">Viber</p>
                    </label>
                </li>
            </ul>
            <div class="btn-wrapper">
                <a href="javascript:;" @click="step = 8" class="btn ">Weitermachen<span><svg width="10" viewBox="0 0 256 512"><path fill="#f18f01" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375-12.5-12.5-12.5-32.75 0-45.25L178.8 256 41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg></span></a>
            </div>

        </article>
        <article v-if="step === 8">

            <h2 class="clr-yellow" v-if="progressWidth === 1 || progressWidth === 0"><strong>Überprüfen Sie Ihre Antworten…</strong>
            </h2>
            <h2 class="clr-yellow" v-if="progressWidth === 2"><strong>Prüfen, ob Freikarten verfügbar sind</strong></h2>
            <h2 class="clr-yellow mb-20" v-if="progressWidth === 3 || progressWidth === 4"><strong>Doppelte Anmeldungen werden überprüft</strong></h2>
            <div class="progressbar">
                <span class="bar" :style="'width:' + width + '%'"></span>
            </div>
            <p>
                Prüfen, ob Freikarten verfügbar sind. <br>
                Doppelte Anmeldungen werden überprüft. <br>
                Auf der Suche nach kostenlosen Registrierungsmöglichkeiten.
            </p>

        </article>
        <article v-if="step === 9" class="step-9">

            <h1 class="mb-40"><strong>Glückwunsch</strong></h1>
            <h2 class="mb-30">SIE SIND FÜR UNSERE WEBSITE <span class="clr-yellow">BERECHTIGT!</span></h2>
            <p><strong>Überprüfen Sie unsere Datenbank auf passende Profile.</strong></p>
            <p class="mb-30">Basierend auf Ihren Antworten gibt es <strong>216</strong> weibliche Mitglieder in Ihrer Nähe</p>
            <h3 class="mb-40"><strong>Sie sind zur Anmeldung berechtigt</strong></h3>
            <img class="mb-30" src="images/titleGap.png" width="260" alt="">
            <h2 class="clr-yellow mb-0"><strong>Bitte lesen Sie jetzt unsere 3 Regeln</strong></h2>

            <p class="mb-0">Bevor Sie sich anmelden, müssen Sie den folgenden Regeln zustimmen:</p>

            <ul>
                <li><span>1.</span> Wenn Sie jemanden sehen, den Sie kennen, dürfen Sie dies nicht veröffentlichen! Verbreiten Sie keine Gerüchte.</li>
                <li><span>2.</span> Wenn Sie Sex mit einem unserer Mitglieder haben, liegt es in IHRER Verantwortung, sich vor sexuell übertragbaren Krankheiten zu schützen.</li>
                <li><span>3.</span> Respektieren Sie die sexuellen Wünsche anderer Mitglieder. Unsere Benutzer sind normale Frauen, keine Prostituierten oder Pornostars.</li>
            </ul>

            <p>Die Nichteinhaltung dieser Regeln führt zur sofortigen Kündigung Ihres Kontos!
                Wenn Sie allen oben genannten Punkten zustimmen, klicken Sie unten auf die Schaltfläche „Ich stimme zu“, um zur KOSTENLOSEN Registrierungsseite zu gelangen.
            </p>

            <br>
            <br>
            <br>

            <a href="{{$_ENV['REDIRECT_URL']}}" class="btn ">ZUSTIMMEN</a>

        </article>
    </section>

</main>

<script>
    const { createApp } = Vue

    createApp({
        delimiters: ['@{{', '}}'],
        data() {
            return {

                step:1,
                progressWidth: 0,
                width: 0,
                targetTime: new Date().getTime() + 15 * 60 * 1000,
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