<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dating sugardaddy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

<main id="app">

    <div class="background-video" :class="{'blure': !playing}">
        <video playsinline
            webkit-playsinline
            muted
            ref="videoPlayer"
            :src="videoSource"
            @play="handlePlay"
            @pause="handlePause"
        ></video>
    </div>
    <section class="hero">
        <div class="loader" v-if="playing"></div>
        <!-- <div class="loader" ><div></div><div></div></div> -->
        <transition name="fade" mode="out-in"></transition>
        <article v-if="currentStep === 1" class="step-1">
            <h1 class="clr-gold"><strong>Vicky · @{{city}}, 06</strong></h1>
            <h2>{{translate('lp2.shared_a_sexy_video')}}</h2>
            <button @click="step(2)" class="btn-circle">
                <svg width="50" style="margin-left: 5px;" viewBox="0 0 512 512"xml:space="preserve"><path fill="#fff" d="M405.2 232.9 126.8 67.2c-3.4-2-6.9-3.2-10.9-3.2-10.9 0-19.8 9-19.8 20H96v344h.1c0 11 8.9 20 19.8 20 4.1 0 7.5-1.4 11.2-3.4l278.1-165.5c6.6-5.5 10.8-13.8 10.8-23.1s-4.2-17.5-10.8-23.1z"/></svg>
            </button>
            <p>{{translate('lp2.1_sugardaddy_site')}} <br>
                {{translate('lp2.must_be_18')}}</p>
        </article>
        <transition name="fade" mode="out-in">
            <article v-if="currentStep === 2">
                <h1><strong class="clr-gold">Vicky </strong> {{translate('lp2.is_located_in')}} <strong>Novi Sad, 06.</strong></h1>
                <h2>{{translate('lp2.are_you_looking')}}</h2>
                <div class="btn-wrapper">
                    <button @click="step(3)" class="btn-circle btn-circle-white">
                        <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="40" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" stroke="none"/><path d="M18 6 6 18M6 6l12 12"/></svg>
                    </button>
                    <button @click="step(3)" class="btn-circle">
                        <svg fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="40" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>
                    </button>
                </div>
            </article>
        </transition>
        <transition name="fade" mode="out-in">
            <article v-if="currentStep === 3">
                <h1><strong class="clr-gold">Vicky {{translate('lp2.cant_wait_to_chat')}}</h1>
                <h2>{{translate('lp2.are_you_looking')}}</h2>
                <div class="btn-wrapper">
                    <a class="btn-circle btn-circle-white" href="{{$_ENV['REDIRECT_URL']}}">
                        <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="40" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" stroke="none"/><path d="M18 6 6 18M6 6l12 12"/></svg>
                    </a>
                    <a class="btn-circle" href="{{$_ENV['REDIRECT_URL']}}">
                        <svg fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="40" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>
                    </a>
                </div>
            </article>
        </transition>

        <!-- <article v-if="currentStep === 4">
            <h1>Please verify your<strong class="clr-gold"> age </strong>to continue.</h1>
            <h2>Enter your <strong class="clr-gold">age:</strong></h2>

            <div class="select-box">
                <select @change="step(5)">
                    <option selected disabled>Select your age</option>
                    <option value="65+">65+</option>
                    <option value="65">65</option>
                    <option value="64">64</option>
                    <option value="63">63</option>
                    <option value="62">62</option>
                    <option value="61">61</option>
                    <option value="60">60</option>
                    <option value="59">59</option>
                    <option value="58">58</option>
                    <option value="57">57</option>
                    <option value="56">56</option>
                    <option value="55">55</option>
                    <option value="54">54</option>
                    <option value="53">53</option>
                    <option value="52">52</option>
                    <option value="51">51</option>
                    <option value="50">50</option>
                    <option value="49">49</option>
                    <option value="48">48</option>
                    <option value="47">47</option>
                    <option value="46">46</option>
                    <option value="45">45</option>
                    <option value="44">44</option>
                    <option value="43">43</option>
                    <option value="42">42</option>
                    <option value="41">41</option>
                    <option value="40">40</option>
                    <option value="39">39</option>
                    <option value="38">38</option>
                    <option value="37">37</option>
                    <option value="36">36</option>
                    <option value="35">35</option>
                    <option value="34">34</option>
                    <option value="33">33</option>
                    <option value="32">32</option>
                    <option value="31">31</option>
                    <option value="30">30</option>
                    <option value="29">29</option>
                    <option value="28">28</option>
                    <option value="27">27</option>
                    <option value="26">26</option>
                    <option value="25">25</option>
                    <option value="24">24</option>
                    <option value="23">23</option>
                    <option value="22">22</option>
                    <option value="21">21</option>
                    <option value="20">20</option>
                    <option value="19">19</option>
                    <option value="18">18</option>
                </select>
                <p>Must be 18+</p>
            </div>
        </article>

        <article v-if="currentStep === 5">
            <h1><strong class="clr-gold">One </strong><strong>last step! </strong>Enter your <strong class="clr-gold">email </strong>to watch hot <br> webcam models.</h1>
            <h2>Enter your <strong class="clr-gold">email:</strong></h2>
        </article> -->
    </section>
</main>

<script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
                videoSource: '{{asset('videos/video.mp4')}}',
                playing: false,
                currentStep: 1,
                stepsMax: 3,
                city: "Novi Sad",
            }
        },
        delimiters: ['@{{', '}}'],
        methods: {

            handlePlay() {
                this.playing = true;
            },
            handlePause() {
                this.playing = false;
            },

            step(step) {
                const video = this.$refs.videoPlayer;
                const time = (video.duration * 1000)/this.stepsMax
                video.play();

                this.currentStep = false

                setTimeout(() => {
                    video.pause();
                    this.currentStep = step
                }, time)
            }
        },
        created() {
            const urlParams = new URLSearchParams(window.location.search);
            const city = urlParams.get('city');
            if(city) {
                this.city = city
            }
        },
    }).mount('#app')
</script>

</body>

</html>