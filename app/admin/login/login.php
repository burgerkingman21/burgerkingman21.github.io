<?php
session_start();
?>

<link href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en" style="color-scheme: dark;" class="dark">
    <head>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Sign in | Panel</title>
        <link data-savepage-href="/static/favicons/favicon@57x57.png" href="" rel="apple-touch-icon" sizes="57x57">
        <link data-savepage-href="/static/favicons/favicon@60x60.png" href="" rel="apple-touch-icon" sizes="60x60">
        <link data-savepage-href="/static/favicons/favicon@72x72.png" href="" rel="apple-touch-icon" sizes="72x72">
        <link data-savepage-href="/static/favicons/favicon@76x76.png" href="" rel="apple-touch-icon" sizes="76x76">
        <link data-savepage-href="/static/favicons/favicon@114x114.png" href="" rel="apple-touch-icon" sizes="114x114">
        <link data-savepage-href="/static/favicons/favicon@120x120.png" href="" rel="apple-touch-icon" sizes="120x120">
        <link data-savepage-href="/static/favicons/favicon@144x144.png" href="" rel="apple-touch-icon" sizes="144x144">
        <link data-savepage-href="/static/favicons/favicon@152x152.png" href="" rel="apple-touch-icon" sizes="152x152">
        <link data-savepage-href="/static/favicons/favicon@180x180.png" href="" rel="apple-touch-icon" sizes="180x180">
        <link data-savepage-href="/static/favicons/favicon.ico" href="" rel="icon shortcut" type="image/x-icon">
  
        <meta name="next-head-count" content="15">
        <link rel="preload" data-savepage-href="/_next/static/media/c9a5bc6a7c948fb0-s.p.woff2" href="" as="font" type="font/woff2" crossorigin="anonymous" data-next-font="size-adjust">
        <link rel="preload" data-savepage-href="/_next/static/media/988ffee4f1b4b3a7-s.p.woff2" href="" as="font" type="font/woff2" crossorigin="anonymous" data-next-font="size-adjust">
        <link rel="preload" data-savepage-href="/_next/static/css/f7e4733a1a9d174c.css" href="" as="style">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
        <style data-savepage-href="/_next/static/css/f7e4733a1a9d174c.css">
            body {
                background-image: url("/app/admin/dashboard/background.png");
                background-color: #141414; /* Fallback color */
                background-size: cover;
                background-position: center;
                height: 100vh;
                height: 100vh;
                margin: 0;
                color: #e0e0e0;
                font-family: 'Roboto Mono', Tahoma, Geneva, Verdana, sans-serif;
            }

                    
            body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(13, 19, 26, 0.952); /* Semi-transparent black overlay */
                z-index: -1; /* Places the overlay behind content */
            }

            :root {
                --black-a1: rgba(0,0,0,.05);
                --black-a2: rgba(0,0,0,.1);
                --black-a3: rgba(0,0,0,.15);
                --black-a4: rgba(0,0,0,.2);
                --black-a5: rgba(0,0,0,.3);
                --black-a6: rgba(0,0,0,.4);
                --black-a7: rgba(0,0,0,.5);
                --black-a8: rgba(0,0,0,.6);
                --black-a9: rgba(0,0,0,.7);
                --black-a10: rgba(0,0,0,.8);
                --black-a11: rgba(0,0,0,.9);
                --black-a12: rgba(0,0,0,.95)
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    :root {
                        --black-a1:color(display-p3 0 0 0/0.05);
                        --black-a2: color(display-p3 0 0 0/0.1);
                        --black-a3: color(display-p3 0 0 0/0.15);
                        --black-a4: color(display-p3 0 0 0/0.2);
                        --black-a5: color(display-p3 0 0 0/0.3);
                        --black-a6: color(display-p3 0 0 0/0.4);
                        --black-a7: color(display-p3 0 0 0/0.5);
                        --black-a8: color(display-p3 0 0 0/0.6);
                        --black-a9: color(display-p3 0 0 0/0.7);
                        --black-a10: color(display-p3 0 0 0/0.8);
                        --black-a11: color(display-p3 0 0 0/0.9);
                        --black-a12: color(display-p3 0 0 0/0.95)
                    }
                }
            }

            :root {
                --white-a1: hsla(0,0%,100%,.05);
                --white-a2: hsla(0,0%,100%,.1);
                --white-a3: hsla(0,0%,100%,.15);
                --white-a4: hsla(0,0%,100%,.2);
                --white-a5: hsla(0,0%,100%,.3);
                --white-a6: hsla(0,0%,100%,.4);
                --white-a7: hsla(0,0%,100%,.5);
                --white-a8: hsla(0,0%,100%,.6);
                --white-a9: hsla(0,0%,100%,.7);
                --white-a10: hsla(0,0%,100%,.8);
                --white-a11: hsla(0,0%,100%,.9);
                --white-a12: hsla(0,0%,100%,.95)
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    :root {
                        --white-a1:color(display-p3 1 1 1/0.05);
                        --white-a2: color(display-p3 1 1 1/0.1);
                        --white-a3: color(display-p3 1 1 1/0.15);
                        --white-a4: color(display-p3 1 1 1/0.2);
                        --white-a5: color(display-p3 1 1 1/0.3);
                        --white-a6: color(display-p3 1 1 1/0.4);
                        --white-a7: color(display-p3 1 1 1/0.5);
                        --white-a8: color(display-p3 1 1 1/0.6);
                        --white-a9: color(display-p3 1 1 1/0.7);
                        --white-a10: color(display-p3 1 1 1/0.8);
                        --white-a11: color(display-p3 1 1 1/0.9);
                        --white-a12: color(display-p3 1 1 1/0.95)
                    }
                }
            }

            .light,.light-theme,:root {
                --slate-a1: #00005503;
                --slate-a2: #00005506;
                --slate-a3: #0000330f;
                --slate-a4: #00002d17;
                --slate-a5: #0009321f;
                --slate-a6: #00002f26;
                --slate-a7: #00062e32;
                --slate-a8: #00083046;
                --slate-a9: #00051d74;
                --slate-a10: #00071b7f;
                --slate-a11: #0007149f;
                --slate-a12: #000509e3
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --slate-a1:color(display-p3 0.024 0.024 0.349/0.012);
                        --slate-a2: color(display-p3 0.024 0.024 0.349/0.024);
                        --slate-a3: color(display-p3 0.004 0.004 0.204/0.059);
                        --slate-a4: color(display-p3 0.012 0.012 0.184/0.091);
                        --slate-a5: color(display-p3 0.004 0.039 0.2/0.122);
                        --slate-a6: color(display-p3 0.008 0.008 0.165/0.15);
                        --slate-a7: color(display-p3 0.008 0.027 0.184/0.197);
                        --slate-a8: color(display-p3 0.004 0.031 0.176/0.275);
                        --slate-a9: color(display-p3 0.004 0.02 0.106/0.455);
                        --slate-a10: color(display-p3 0.004 0.027 0.098/0.499);
                        --slate-a11: color(display-p3 0 0.02 0.063/0.62);
                        --slate-a12: color(display-p3 0 0.012 0.031/0.887)
                    }
                }
            }

            .dark,.dark-theme {
                --slate-a1: #00000000;
                --slate-a2: #d8f4f609;
                --slate-a3: #ddeaf814;
                --slate-a4: #d3edf81d;
                --slate-a5: #d9edfe25;
                --slate-a6: #d6ebfd30;
                --slate-a7: #d9edff40;
                --slate-a8: #d9edff5d;
                --slate-a9: #dfebfd6d;
                --slate-a10: #e5edfd7b;
                --slate-a11: #f1f7feb5;
                --slate-a12: #fcfdffef
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --slate-a1:color(display-p3 0 0 0/0);
                        --slate-a2: color(display-p3 0.875 0.992 1/0.034);
                        --slate-a3: color(display-p3 0.882 0.933 0.992/0.077);
                        --slate-a4: color(display-p3 0.882 0.953 0.996/0.111);
                        --slate-a5: color(display-p3 0.878 0.929 0.996/0.145);
                        --slate-a6: color(display-p3 0.882 0.949 0.996/0.183);
                        --slate-a7: color(display-p3 0.882 0.929 1/0.246);
                        --slate-a8: color(display-p3 0.871 0.937 1/0.361);
                        --slate-a9: color(display-p3 0.898 0.937 1/0.42);
                        --slate-a10: color(display-p3 0.918 0.945 1/0.475);
                        --slate-a11: color(display-p3 0.949 0.969 0.996/0.708);
                        --slate-a12: color(display-p3 0.988 0.992 1/0.937)
                    }
                }
            }

            .light,.light-theme,:root {
                --crimson-a1: #ff005503;
                --crimson-a2: #e0004008;
                --crimson-a3: #ff005216;
                --crimson-a4: #f8005123;
                --crimson-a5: #e5004f31;
                --crimson-a6: #d0004b41;
                --crimson-a7: #bf004753;
                --crimson-a8: #b6004a6c;
                --crimson-a9: #e2005bc2;
                --crimson-a10: #d70056cb;
                --crimson-a11: #c4004fe2;
                --crimson-a12: #530026e9
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --crimson-a1:color(display-p3 0.675 0.024 0.349/0.012);
                        --crimson-a2: color(display-p3 0.757 0.02 0.267/0.032);
                        --crimson-a3: color(display-p3 0.859 0.008 0.294/0.083);
                        --crimson-a4: color(display-p3 0.827 0.008 0.298/0.134);
                        --crimson-a5: color(display-p3 0.753 0.008 0.275/0.189);
                        --crimson-a6: color(display-p3 0.682 0.004 0.247/0.244);
                        --crimson-a7: color(display-p3 0.62 0.004 0.251/0.318);
                        --crimson-a8: color(display-p3 0.6 0.004 0.251/0.408);
                        --crimson-a9: color(display-p3 0.776 0 0.298/0.702);
                        --crimson-a10: color(display-p3 0.737 0 0.275/0.734);
                        --crimson-a11: color(display-p3 0.731 0.195 0.388);
                        --crimson-a12: color(display-p3 0.352 0.111 0.221)
                    }
                }
            }

            .dark,.dark-theme {
                --crimson-a1: #f4126709;
                --crimson-a2: #f22f7a11;
                --crimson-a3: #fe2a8b2a;
                --crimson-a4: #fd158741;
                --crimson-a5: #fd278f51;
                --crimson-a6: #fe459763;
                --crimson-a7: #fd559b7f;
                --crimson-a8: #fe5b9bab;
                --crimson-a9: #fe418de8;
                --crimson-a10: #ff5693ed;
                --crimson-a11: #ff92ad;
                --crimson-a12: #ffd5eafd
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --crimson-a1:color(display-p3 0.984 0.071 0.463/0.03);
                        --crimson-a2: color(display-p3 0.996 0.282 0.569/0.055);
                        --crimson-a3: color(display-p3 0.996 0.227 0.573/0.148);
                        --crimson-a4: color(display-p3 1 0.157 0.569/0.227);
                        --crimson-a5: color(display-p3 1 0.231 0.604/0.286);
                        --crimson-a6: color(display-p3 1 0.337 0.643/0.349);
                        --crimson-a7: color(display-p3 1 0.416 0.663/0.454);
                        --crimson-a8: color(display-p3 0.996 0.427 0.651/0.614);
                        --crimson-a9: color(display-p3 1 0.345 0.596/0.832);
                        --crimson-a10: color(display-p3 1 0.42 0.62/0.853);
                        --crimson-a11: color(display-p3 1 0.56 0.66);
                        --crimson-a12: color(display-p3 0.966 0.834 0.906)
                    }
                }
            }

            .light,.light-theme,:root {
                --violet-a1: #5500aa03;
                --violet-a2: #4900ff07;
                --violet-a3: #4400ee0f;
                --violet-a4: #4300ff1b;
                --violet-a5: #3600ff26;
                --violet-a6: #3100fb35;
                --violet-a7: #2d01dd4a;
                --violet-a8: #2b00d066;
                --violet-a9: #2400b7a9;
                --violet-a10: #2300abb2;
                --violet-a11: #1f0099af;
                --violet-a12: #0b0043d9
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --violet-a1:color(display-p3 0.349 0.024 0.675/0.012);
                        --violet-a2: color(display-p3 0.161 0.024 0.863/0.028);
                        --violet-a3: color(display-p3 0.204 0.004 0.871/0.059);
                        --violet-a4: color(display-p3 0.196 0.004 1/0.102);
                        --violet-a5: color(display-p3 0.165 0.008 1/0.15);
                        --violet-a6: color(display-p3 0.153 0.004 0.906/0.208);
                        --violet-a7: color(display-p3 0.141 0.004 0.796/0.287);
                        --violet-a8: color(display-p3 0.133 0.004 0.753/0.397);
                        --violet-a9: color(display-p3 0.114 0 0.675/0.659);
                        --violet-a10: color(display-p3 0.11 0 0.627/0.695);
                        --violet-a11: color(display-p3 0.383 0.317 0.702);
                        --violet-a12: color(display-p3 0.179 0.15 0.359)
                    }
                }
            }

            .dark,.dark-theme {
                --violet-a1: #4422ff0f;
                --violet-a2: #853ff916;
                --violet-a3: #8354fe36;
                --violet-a4: #7d51fd50;
                --violet-a5: #845ffd5f;
                --violet-a6: #8f6cfd6d;
                --violet-a7: #9879ff83;
                --violet-a8: #977dfea8;
                --violet-a9: #8668ffcc;
                --violet-a10: #9176fed7;
                --violet-a11: #baa7ff;
                --violet-a12: #e3deff
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --violet-a1:color(display-p3 0.282 0.141 0.996/0.055);
                        --violet-a2: color(display-p3 0.51 0.263 1/0.08);
                        --violet-a3: color(display-p3 0.494 0.337 0.996/0.202);
                        --violet-a4: color(display-p3 0.49 0.345 1/0.299);
                        --violet-a5: color(display-p3 0.525 0.392 1/0.353);
                        --violet-a6: color(display-p3 0.569 0.455 1/0.408);
                        --violet-a7: color(display-p3 0.588 0.494 1/0.496);
                        --violet-a8: color(display-p3 0.596 0.51 1/0.631);
                        --violet-a9: color(display-p3 0.522 0.424 1/0.769);
                        --violet-a10: color(display-p3 0.576 0.482 1/0.811);
                        --violet-a11: color(display-p3 0.72 0.65 1);
                        --violet-a12: color(display-p3 0.883 0.867 0.986)
                    }
                }
            }

            .light,.light-theme,:root {
                --mauve-a1: #55005503;
                --mauve-a2: #2b005506;
                --mauve-a3: #30004010;
                --mauve-a4: #20003618;
                --mauve-a5: #20003820;
                --mauve-a6: #14003527;
                --mauve-a7: #10003332;
                --mauve-a8: #08003145;
                --mauve-a9: #05001d73;
                --mauve-a10: #0500197d;
                --mauve-a11: #0400119c;
                --mauve-a12: #020008e0
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --mauve-a1:color(display-p3 0.349 0.024 0.349/0.012);
                        --mauve-a2: color(display-p3 0.184 0.024 0.349/0.024);
                        --mauve-a3: color(display-p3 0.129 0.008 0.255/0.063);
                        --mauve-a4: color(display-p3 0.094 0.012 0.216/0.095);
                        --mauve-a5: color(display-p3 0.098 0.008 0.224/0.126);
                        --mauve-a6: color(display-p3 0.055 0.004 0.18/0.153);
                        --mauve-a7: color(display-p3 0.067 0.008 0.184/0.197);
                        --mauve-a8: color(display-p3 0.02 0.004 0.176/0.271);
                        --mauve-a9: color(display-p3 0.02 0.004 0.106/0.451);
                        --mauve-a10: color(display-p3 0.012 0.004 0.09/0.491);
                        --mauve-a11: color(display-p3 0.016 0 0.059/0.612);
                        --mauve-a12: color(display-p3 0.008 0 0.027/0.879)
                    }
                }
            }

            .dark,.dark-theme {
                --mauve-a1: #00000000;
                --mauve-a2: #f5f4f609;
                --mauve-a3: #ebeaf814;
                --mauve-a4: #eee5f81d;
                --mauve-a5: #efe6fe25;
                --mauve-a6: #f1e6fd30;
                --mauve-a7: #eee9ff40;
                --mauve-a8: #eee7ff5d;
                --mauve-a9: #eae6fd6e;
                --mauve-a10: #ece9fd7c;
                --mauve-a11: #f5f1ffb7;
                --mauve-a12: #fdfdffef
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --mauve-a1:color(display-p3 0 0 0/0);
                        --mauve-a2: color(display-p3 0.996 0.992 1/0.034);
                        --mauve-a3: color(display-p3 0.937 0.933 0.992/0.077);
                        --mauve-a4: color(display-p3 0.957 0.918 0.996/0.111);
                        --mauve-a5: color(display-p3 0.937 0.906 0.996/0.145);
                        --mauve-a6: color(display-p3 0.953 0.925 0.996/0.183);
                        --mauve-a7: color(display-p3 0.945 0.929 1/0.246);
                        --mauve-a8: color(display-p3 0.937 0.918 1/0.361);
                        --mauve-a9: color(display-p3 0.933 0.918 1/0.424);
                        --mauve-a10: color(display-p3 0.941 0.925 1/0.479);
                        --mauve-a11: color(display-p3 0.965 0.961 1/0.712);
                        --mauve-a12: color(display-p3 0.992 0.992 1/0.937)
                    }
                }
            }

            .light,.light-theme,:root {
                --green-a1: #00c04004;
                --green-a2: #00a32f0b;
                --green-a3: #00a43319;
                --green-a4: #00a83829;
                --green-a5: #019c393b;
                --green-a6: #00963c52;
                --green-a7: #00914071;
                --green-a8: #00924ba4;
                --green-a9: #008f4acf;
                --green-a10: #008647d4;
                --green-a11: #00713fde;
                --green-a12: #002616e6
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --green-a1:color(display-p3 0.024 0.757 0.267/0.016);
                        --green-a2: color(display-p3 0.024 0.565 0.129/0.036);
                        --green-a3: color(display-p3 0.012 0.596 0.145/0.087);
                        --green-a4: color(display-p3 0.008 0.588 0.145/0.142);
                        --green-a5: color(display-p3 0.004 0.541 0.157/0.204);
                        --green-a6: color(display-p3 0.004 0.518 0.157/0.283);
                        --green-a7: color(display-p3 0.004 0.486 0.165/0.389);
                        --green-a8: color(display-p3 0 0.478 0.2/0.55);
                        --green-a9: color(display-p3 0 0.455 0.165/0.667);
                        --green-a10: color(display-p3 0 0.416 0.153/0.691);
                        --green-a11: color(display-p3 0.19 0.5 0.32);
                        --green-a12: color(display-p3 0.132 0.228 0.18)
                    }
                }
            }

            .dark,.dark-theme {
                --green-a1: #00de4505;
                --green-a2: #29f99d0b;
                --green-a3: #22ff991e;
                --green-a4: #11ff992d;
                --green-a5: #2bffa23c;
                --green-a6: #44ffaa4b;
                --green-a7: #50fdac5e;
                --green-a8: #54ffad73;
                --green-a9: #44ffa49e;
                --green-a10: #43fea4ab;
                --green-a11: #46fea5d4;
                --green-a12: #bbffd7f0
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --green-a1:color(display-p3 0 0.992 0.298/0.017);
                        --green-a2: color(display-p3 0.341 0.98 0.616/0.043);
                        --green-a3: color(display-p3 0.376 0.996 0.655/0.114);
                        --green-a4: color(display-p3 0.341 0.996 0.635/0.173);
                        --green-a5: color(display-p3 0.408 1 0.678/0.232);
                        --green-a6: color(display-p3 0.475 1 0.706/0.29);
                        --green-a7: color(display-p3 0.514 1 0.706/0.362);
                        --green-a8: color(display-p3 0.529 1 0.718/0.442);
                        --green-a9: color(display-p3 0.502 0.996 0.682/0.61);
                        --green-a10: color(display-p3 0.506 1 0.682/0.66);
                        --green-a11: color(display-p3 0.434 0.828 0.573);
                        --green-a12: color(display-p3 0.747 0.938 0.807)
                    }
                }
            }

            .light,.light-theme,:root {
                --red-a1: #ff000003;
                --red-a2: #ff000008;
                --red-a3: #f3000d14;
                --red-a4: #ff000824;
                --red-a5: #ff000632;
                --red-a6: #f8000442;
                --red-a7: #df000356;
                --red-a8: #d2000571;
                --red-a9: #db0007b7;
                --red-a10: #d10005c1;
                --red-a11: #c40006d3;
                --red-a12: #55000de8
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --red-a1:color(display-p3 0.675 0.024 0.024/0.012);
                        --red-a2: color(display-p3 0.863 0.024 0.024/0.028);
                        --red-a3: color(display-p3 0.792 0.008 0.008/0.075);
                        --red-a4: color(display-p3 1 0.008 0.008/0.134);
                        --red-a5: color(display-p3 0.918 0.008 0.008/0.189);
                        --red-a6: color(display-p3 0.831 0.02 0.004/0.251);
                        --red-a7: color(display-p3 0.741 0.016 0.004/0.33);
                        --red-a8: color(display-p3 0.698 0.012 0.004/0.428);
                        --red-a9: color(display-p3 0.749 0.008 0/0.675);
                        --red-a10: color(display-p3 0.714 0.012 0/0.714);
                        --red-a11: color(display-p3 0.744 0.234 0.222);
                        --red-a12: color(display-p3 0.36 0.115 0.143)
                    }
                }
            }

            .dark,.dark-theme {
                --red-a1: #f4121209;
                --red-a2: #f22f3e11;
                --red-a3: #ff173f2d;
                --red-a4: #fe0a3b44;
                --red-a5: #ff204756;
                --red-a6: #ff3e5668;
                --red-a7: #ff536184;
                --red-a8: #ff5d61b0;
                --red-a9: #fe4e54e4;
                --red-a10: #ff6465eb;
                --red-a11: #ff9592;
                --red-a12: #ffd1d9
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --red-a1:color(display-p3 0.984 0.071 0.071/0.03);
                        --red-a2: color(display-p3 0.996 0.282 0.282/0.055);
                        --red-a3: color(display-p3 1 0.169 0.271/0.156);
                        --red-a4: color(display-p3 1 0.118 0.267/0.236);
                        --red-a5: color(display-p3 1 0.212 0.314/0.303);
                        --red-a6: color(display-p3 1 0.318 0.38/0.374);
                        --red-a7: color(display-p3 1 0.4 0.424/0.475);
                        --red-a8: color(display-p3 1 0.431 0.431/0.635);
                        --red-a9: color(display-p3 1 0.388 0.384/0.82);
                        --red-a10: color(display-p3 1 0.463 0.447/0.853);
                        --red-a11: color(display-p3 1 0.57 0.55);
                        --red-a12: color(display-p3 0.971 0.826 0.852)
                    }
                }
            }

            .light,.light-theme,:root {
                --amber-a1: #c0800004;
                --amber-a2: #f4d10016;
                --amber-a3: #ffde003d;
                --amber-a4: #ffd40063;
                --amber-a5: #f8cf0088;
                --amber-a6: #eab5008c;
                --amber-a7: #dc9b009d;
                --amber-a8: #da8a00c9;
                --amber-a9: #ffb300c2;
                --amber-a10: #ffb300e7;
                --amber-a11: #ab6400;
                --amber-a12: #341500dd
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --amber-a1:color(display-p3 0.757 0.514 0.024/0.016);
                        --amber-a2: color(display-p3 0.902 0.804 0.008/0.079);
                        --amber-a3: color(display-p3 0.965 0.859 0.004/0.22);
                        --amber-a4: color(display-p3 0.969 0.82 0.004/0.35);
                        --amber-a5: color(display-p3 0.933 0.796 0.004/0.475);
                        --amber-a6: color(display-p3 0.875 0.682 0.004/0.495);
                        --amber-a7: color(display-p3 0.804 0.573 0/0.557);
                        --amber-a8: color(display-p3 0.788 0.502 0/0.699);
                        --amber-a9: color(display-p3 1 0.686 0/0.742);
                        --amber-a10: color(display-p3 0.945 0.643 0/0.726);
                        --amber-a11: color(display-p3 0.64 0.4 0);
                        --amber-a12: color(display-p3 0.294 0.208 0.145)
                    }
                }
            }

            .dark,.dark-theme {
                --amber-a1: #e63c0006;
                --amber-a2: #fd9b000d;
                --amber-a3: #fa820022;
                --amber-a4: #fc820032;
                --amber-a5: #fd8b0041;
                --amber-a6: #fd9b0051;
                --amber-a7: #ffab2567;
                --amber-a8: #ffae3587;
                --amber-a9: #ffc53d;
                --amber-a10: #ffd60a;
                --amber-a11: #ffca16;
                --amber-a12: #ffe7b3
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --amber-a1:color(display-p3 0.992 0.298 0/0.017);
                        --amber-a2: color(display-p3 0.988 0.651 0/0.047);
                        --amber-a3: color(display-p3 1 0.6 0/0.118);
                        --amber-a4: color(display-p3 1 0.557 0/0.185);
                        --amber-a5: color(display-p3 1 0.592 0/0.24);
                        --amber-a6: color(display-p3 1 0.659 0.094/0.299);
                        --amber-a7: color(display-p3 1 0.714 0.263/0.383);
                        --amber-a8: color(display-p3 0.996 0.729 0.306/0.5);
                        --amber-a9: color(display-p3 1 0.769 0.259);
                        --amber-a10: color(display-p3 1 0.871 0.149);
                        --amber-a11: color(display-p3 1 0.8 0.29);
                        --amber-a12: color(display-p3 0.984 0.909 0.726)
                    }
                }
            }

            .light,.light-theme,:root {
                --blue-a1: #0080ff04;
                --blue-a2: #008cff0b;
                --blue-a3: #008ff519;
                --blue-a4: #009eff2a;
                --blue-a5: #0093ff3d;
                --blue-a6: #0088f653;
                --blue-a7: #0083eb71;
                --blue-a8: #0084e6a1;
                --blue-a9: #0090ff;
                --blue-a10: #0086f0fa;
                --blue-a11: #006dcbf2;
                --blue-a12: #002359ee
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --blue-a1:color(display-p3 0.024 0.514 1/0.016);
                        --blue-a2: color(display-p3 0.024 0.514 0.906/0.04);
                        --blue-a3: color(display-p3 0.012 0.506 0.914/0.087);
                        --blue-a4: color(display-p3 0.008 0.545 1/0.146);
                        --blue-a5: color(display-p3 0.004 0.502 0.984/0.212);
                        --blue-a6: color(display-p3 0.004 0.463 0.922/0.291);
                        --blue-a7: color(display-p3 0.004 0.431 0.863/0.393);
                        --blue-a8: color(display-p3 0 0.427 0.851/0.55);
                        --blue-a9: color(display-p3 0 0.412 0.961/0.753);
                        --blue-a10: color(display-p3 0 0.376 0.886/0.765);
                        --blue-a11: color(display-p3 0.15 0.44 0.84);
                        --blue-a12: color(display-p3 0.102 0.193 0.379)
                    }
                }
            }

            .dark,.dark-theme {
                --blue-a1: #004df211;
                --blue-a2: #1166fb18;
                --blue-a3: #0077ff3a;
                --blue-a4: #0075ff57;
                --blue-a5: #0081fd6b;
                --blue-a6: #0f89fd7f;
                --blue-a7: #2a91fe98;
                --blue-a8: #3094feb9;
                --blue-a9: #0090ff;
                --blue-a10: #3b9eff;
                --blue-a11: #70b8ff;
                --blue-a12: #c2e6ff
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --blue-a1:color(display-p3 0 0.333 1/0.059);
                        --blue-a2: color(display-p3 0.114 0.435 0.988/0.085);
                        --blue-a3: color(display-p3 0.122 0.463 1/0.219);
                        --blue-a4: color(display-p3 0 0.467 1/0.324);
                        --blue-a5: color(display-p3 0.098 0.51 1/0.4);
                        --blue-a6: color(display-p3 0.224 0.557 1/0.475);
                        --blue-a7: color(display-p3 0.294 0.584 1/0.572);
                        --blue-a8: color(display-p3 0.314 0.592 1/0.702);
                        --blue-a9: color(display-p3 0.251 0.573 0.996/0.967);
                        --blue-a10: color(display-p3 0.357 0.631 1/0.971);
                        --blue-a11: color(display-p3 0.49 0.72 1);
                        --blue-a12: color(display-p3 0.788 0.898 0.99)
                    }
                }
            }

            .light,.light-theme,:root {
                --orange-a1: #c0400004;
                --orange-a2: #ff8e0012;
                --orange-a3: #ff9c0029;
                --orange-a4: #ff91014a;
                --orange-a5: #ff8b0065;
                --orange-a6: #ff81007d;
                --orange-a7: #ed6c008c;
                --orange-a8: #e35f00aa;
                --orange-a9: #f65e00ea;
                --orange-a10: #ef5f00;
                --orange-a11: #cc4e00;
                --orange-a12: #431200e2
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .light,.light-theme,:root {
                        --orange-a1:color(display-p3 0.757 0.267 0.024/0.016);
                        --orange-a2: color(display-p3 0.886 0.533 0.008/0.067);
                        --orange-a3: color(display-p3 0.922 0.584 0.008/0.15);
                        --orange-a4: color(display-p3 1 0.604 0.004/0.314);
                        --orange-a5: color(display-p3 1 0.569 0.004/0.416);
                        --orange-a6: color(display-p3 0.949 0.494 0.004/0.455);
                        --orange-a7: color(display-p3 0.839 0.408 0/0.514);
                        --orange-a8: color(display-p3 0.804 0.349 0/0.62);
                        --orange-a9: color(display-p3 0.878 0.314 0/0.8);
                        --orange-a10: color(display-p3 0.843 0.29 0/0.836);
                        --orange-a11: color(display-p3 0.76 0.34 0);
                        --orange-a12: color(display-p3 0.323 0.185 0.127)
                    }
                }
            }

            .dark,.dark-theme {
                --orange-a1: #ec360007;
                --orange-a2: #fe6d000e;
                --orange-a3: #fb6a0025;
                --orange-a4: #ff590039;
                --orange-a5: #ff61004a;
                --orange-a6: #fd75045c;
                --orange-a7: #ff832c75;
                --orange-a8: #fe84389d;
                --orange-a9: #fe6d15f7;
                --orange-a10: #ff801f;
                --orange-a11: #ffa057;
                --orange-a12: #ffe0c2
            }

            @supports (color: color(display-p3 1 1 1)) {
                @media (color-gamut:p3) {
                    .dark,.dark-theme {
                        --orange-a1:color(display-p3 0.961 0.247 0/0.022);
                        --orange-a2: color(display-p3 0.992 0.529 0/0.051);
                        --orange-a3: color(display-p3 0.996 0.486 0/0.131);
                        --orange-a4: color(display-p3 0.996 0.384 0/0.211);
                        --orange-a5: color(display-p3 1 0.455 0/0.265);
                        --orange-a6: color(display-p3 1 0.529 0.129/0.332);
                        --orange-a7: color(display-p3 1 0.569 0.251/0.429);
                        --orange-a8: color(display-p3 1 0.584 0.302/0.572);
                        --orange-a9: color(display-p3 1 0.494 0.216/0.895);
                        --orange-a10: color(display-p3 1 0.522 0.235/0.979);
                        --orange-a11: color(display-p3 1 0.63 0.38);
                        --orange-a12: color(display-p3 0.98 0.883 0.775)
                    }
                }
            }

            /*
! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com
*/
            *,:after,:before {
                box-sizing: border-box;
                border: 0 solid #e5e7eb
            }

            :after,:before {
                --tw-content: ""
            }

            :host,html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: var(--font-inter),ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                text-decoration: underline dotted
            }

            h1,h2,h3,h4,h5,h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,strong {
                font-weight: bolder
            }

            code,kbd,pre,samp {
                font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,input,optgroup,select,textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,select {
                text-transform: none
            }

            [type=button],[type=reset],[type=submit],button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre {
                margin: 0
            }

            fieldset {
                margin: 0
            }

            fieldset,legend {
                padding: 0
            }

            menu,ol,ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::placeholder,textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,canvas,embed,iframe,img,object,svg,video {
                display: block;
                vertical-align: middle
            }

            img,video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,:after,:before {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgba(59,130,246,.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgba(59,130,246,.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia:
            }

            .container {
                width: 100%
            }

            @media (min-width: 640px) {
                .container {
                    max-width:640px
                }
            }

            @media (min-width: 768px) {
                .container {
                    max-width:768px
                }
            }

            @media (min-width: 1024px) {
                .container {
                    max-width:1024px
                }
            }

            @media (min-width: 1280px) {
                .container {
                    max-width:1280px
                }
            }

            @media (min-width: 1536px) {
                .container {
                    max-width:1536px
                }
            }

            @media (min-width: 1920px) {
                .container {
                    max-width:1920px
                }
            }

            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0,0,0,0);
                white-space: nowrap;
                border-width: 0
            }

            .pointer-events-none {
                pointer-events: none
            }

            .visible {
                visibility: visible
            }

            .invisible {
                visibility: hidden
            }

            .collapse {
                visibility: collapse
            }

            .static {
                position: static
            }

            .fixed {
                position: fixed
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .sticky {
                position: sticky
            }

            .inset-0 {
                inset: 0
            }

            .inset-px {
                inset: 1px
            }

            .inset-y-0 {
                top: 0;
                bottom: 0
            }

            .-bottom-40 {
                bottom: -10rem
            }

            .-left-0 {
                left: 0
            }

            .-left-0\.5 {
                left: -.125rem
            }

            .-left-1\/2 {
                left: -50%
            }

            .-left-20 {
                left: -5rem
            }

            .-left-\[\.1875rem\] {
                left: -.1875rem
            }

            .-left-\[\.3125rem\] {
                left: -.3125rem
            }

            .-left-\[\.375rem\] {
                left: -.375rem
            }

            .-left-\[9\.5px\] {
                left: -9.5px
            }

            .-right-0 {
                right: 0
            }

            .-right-0\.5 {
                right: -.125rem
            }

            .-right-\[300px\] {
                right: -300px
            }

            .-top-0 {
                top: 0
            }

            .-top-0\.5 {
                top: -.125rem
            }

            .-top-1 {
                top: -.25rem
            }

            .-top-1\/2 {
                top: -50%
            }

            .-top-12 {
                top: -3rem
            }

            .-top-20 {
                top: -5rem
            }

            .-top-4 {
                top: -1rem
            }

            .bottom-0 {
                bottom: 0
            }

            .bottom-1 {
                bottom: .25rem
            }

            .bottom-2 {
                bottom: .5rem
            }

            .bottom-6 {
                bottom: 1.5rem
            }

            .bottom-\[3px\] {
                bottom: 3px
            }

            .left-0 {
                left: 0
            }

            .left-0\.5 {
                left: .125rem
            }

            .left-1\/2 {
                left: 50%
            }

            .left-10 {
                left: 2.5rem
            }

            .left-2 {
                left: .5rem
            }

            .left-2\/4 {
                left: 50%
            }

            .left-8 {
                left: 2rem
            }

            .left-96 {
                left: 24rem
            }

            .left-\[-80px\] {
                left: -80px
            }

            .left-\[1\.5rem\] {
                left: 1.5rem
            }

            .left-\[2\.563rem\] {
                left: 2.563rem
            }

            .left-\[200px\] {
                left: 200px
            }

            .left-\[calc\(100\%\+\.25rem\)\] {
                left: calc(100% + .25rem)
            }

            .left-full {
                left: 100%
            }

            .right-0 {
                right: 0
            }

            .right-1 {
                right: .25rem
            }

            .right-12 {
                right: 3rem
            }

            .right-2 {
                right: .5rem
            }

            .right-4 {
                right: 1rem
            }

            .right-6 {
                right: 1.5rem
            }

            .right-\[2\.5rem\] {
                right: 2.5rem
            }

            .right-\[5rem\] {
                right: 5rem
            }

            .right-\[7\.5rem\] {
                right: 7.5rem
            }

            .top-0 {
                top: 0
            }

            .top-0\.5 {
                top: .125rem
            }

            .top-1\/2 {
                top: 50%
            }

            .top-1\/4 {
                top: 25%
            }

            .top-10 {
                top: 2.5rem
            }

            .top-12 {
                top: 3rem
            }

            .top-16 {
                top: 4rem
            }

            .top-2 {
                top: .5rem
            }

            .top-2\/4 {
                top: 50%
            }

            .top-20 {
                top: 5rem
            }

            .top-24 {
                top: 6rem
            }

            .top-32 {
                top: 8rem
            }

            .top-6 {
                top: 1.5rem
            }

            .top-7 {
                top: 1.75rem
            }

            .top-\[-\.1875rem\] {
                top: -.1875rem
            }

            .top-\[\.6875rem\] {
                top: .6875rem
            }

            .top-\[\.9375rem\] {
                top: .9375rem
            }

            .top-\[1\.1875rem\] {
                top: 1.1875rem
            }

            .top-\[102px\] {
                top: 102px
            }

            .top-\[15\%\] {
                top: 15%
            }

            .top-\[2\.5\] {
                top: 2.5
            }

            .top-\[2\.5rem\] {
                top: 2.5rem
            }

            .top-\[200px\] {
                top: 200px
            }

            .top-\[22px\] {
                top: 22px
            }

            .top-\[4\.5rem\] {
                top: 4.5rem
            }

            .top-\[5rem\] {
                top: 5rem
            }

            .top-\[80px\] {
                top: 80px
            }

            .top-full {
                top: 100%
            }

            .z-0 {
                z-index: 0
            }

            .z-10 {
                z-index: 10
            }

            .z-20 {
                z-index: 20
            }

            .z-30 {
                z-index: 30
            }

            .z-40 {
                z-index: 40
            }

            .z-50 {
                z-index: 50
            }

            .z-\[2\] {
                z-index: 2
            }

            .z-\[99999\] {
                z-index: 99999
            }

            .order-1 {
                order: 1
            }

            .order-2 {
                order: 2
            }

            .col-auto {
                grid-column: auto
            }

            .col-span-1 {
                grid-column: span 1/span 1
            }

            .col-span-2 {
                grid-column: span 2/span 2
            }

            .\!my-12 {
                margin-top: 3rem!important;
                margin-bottom: 3rem!important
            }

            .mx-0 {
                margin-left: 0;
                margin-right: 0
            }

            .mx-0\.5 {
                margin-left: .125rem;
                margin-right: .125rem
            }

            .mx-1 {
                margin-left: .25rem;
                margin-right: .25rem
            }

            .mx-1\.5 {
                margin-left: .375rem;
                margin-right: .375rem
            }

            .mx-2 {
                margin-left: .5rem;
                margin-right: .5rem
            }

            .mx-4 {
                margin-left: 1rem;
                margin-right: 1rem
            }

            .mx-auto {
                margin-left: auto;
                margin-right: auto
            }

            .my-0 {
                margin-top: 0;
                margin-bottom: 0
            }

            .my-1 {
                margin-top: .25rem;
                margin-bottom: .25rem
            }

            .my-10 {
                margin-top: 2.5rem;
                margin-bottom: 2.5rem
            }

            .my-2 {
                margin-top: .5rem;
                margin-bottom: .5rem
            }

            .my-24 {
                margin-top: 6rem;
                margin-bottom: 6rem
            }

            .my-36 {
                margin-top: 9rem;
                margin-bottom: 9rem
            }

            .my-4 {
                margin-top: 1rem;
                margin-bottom: 1rem
            }

            .my-6 {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem
            }

            .my-8 {
                margin-top: 2rem;
                margin-bottom: 2rem
            }

            .my-auto {
                margin-top: auto;
                margin-bottom: auto
            }

            .-ml-2 {
                margin-left: -.5rem
            }

            .-ml-2\.5 {
                margin-left: -.625rem
            }

            .-ml-3 {
                margin-left: -.75rem
            }

            .-ml-6 {
                margin-left: -1.5rem
            }

            .-ml-\[12px\] {
                margin-left: -12px
            }

            .-mr-3 {
                margin-right: -.75rem
            }

            .-mr-6 {
                margin-right: -1.5rem
            }

            .-mt-1 {
                margin-top: -.25rem
            }

            .-mt-14 {
                margin-top: -3.5rem
            }

            .-mt-16 {
                margin-top: -4rem
            }

            .-mt-5 {
                margin-top: -1.25rem
            }

            .-mt-\[14\%\] {
                margin-top: -14%
            }

            .-mt-\[1px\] {
                margin-top: -1px
            }

            .-mt-\[9vh\] {
                margin-top: -9vh
            }

            .mb-0 {
                margin-bottom: 0
            }

            .mb-0\.5 {
                margin-bottom: .125rem
            }

            .mb-1 {
                margin-bottom: .25rem
            }

            .mb-1\.5 {
                margin-bottom: .375rem
            }

            .mb-10 {
                margin-bottom: 2.5rem
            }

            .mb-12 {
                margin-bottom: 3rem
            }

            .mb-16 {
                margin-bottom: 4rem
            }

            .mb-2 {
                margin-bottom: .5rem
            }

            .mb-2\.5 {
                margin-bottom: .625rem
            }

            .mb-24 {
                margin-bottom: 6rem
            }

            .mb-3 {
                margin-bottom: .75rem
            }

            .mb-36 {
                margin-bottom: 9rem
            }

            .mb-4 {
                margin-bottom: 1rem
            }

            .mb-40 {
                margin-bottom: 10rem
            }

            .mb-48 {
                margin-bottom: 12rem
            }

            .mb-5 {
                margin-bottom: 1.25rem
            }

            .mb-6 {
                margin-bottom: 1.5rem
            }

            .mb-7 {
                margin-bottom: 1.75rem
            }

            .mb-8 {
                margin-bottom: 2rem
            }

            .mb-\[\.125rem\] {
                margin-bottom: .125rem
            }

            .mb-\[32px\] {
                margin-bottom: 32px
            }

            .ml-1 {
                margin-left: .25rem
            }

            .ml-1\.5 {
                margin-left: .375rem
            }

            .ml-2 {
                margin-left: .5rem
            }

            .ml-3 {
                margin-left: .75rem
            }

            .ml-4 {
                margin-left: 1rem
            }

            .ml-\[-64px\] {
                margin-left: -64px
            }

            .ml-\[\.375rem\] {
                margin-left: .375rem
            }

            .ml-\[10px\] {
                margin-left: 10px
            }

            .ml-auto {
                margin-left: auto
            }

            .mr-0 {
                margin-right: 0
            }

            .mr-0\.5 {
                margin-right: .125rem
            }

            .mr-1 {
                margin-right: .25rem
            }

            .mr-2 {
                margin-right: .5rem
            }

            .mr-4 {
                margin-right: 1rem
            }

            .mr-5 {
                margin-right: 1.25rem
            }

            .mr-6 {
                margin-right: 1.5rem
            }

            .mt-0 {
                margin-top: 0
            }

            .mt-0\.5 {
                margin-top: .125rem
            }

            .mt-1 {
                margin-top: .25rem
            }

            .mt-1\.5 {
                margin-top: .375rem
            }

            .mt-10 {
                margin-top: 2.5rem
            }

            .mt-12 {
                margin-top: 3rem
            }

            .mt-14 {
                margin-top: 3.5rem
            }

            .mt-16 {
                margin-top: 4rem
            }

            .mt-2 {
                margin-top: .5rem
            }

            .mt-2\.5 {
                margin-top: .625rem
            }

            .mt-20 {
                margin-top: 5rem
            }

            .mt-24 {
                margin-top: 6rem
            }

            .mt-3 {
                margin-top: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-48 {
                margin-top: 12rem
            }

            .mt-5 {
                margin-top: 1.25rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .mt-8 {
                margin-top: 2rem
            }

            .mt-\[-100px\] {
                margin-top: -100px
            }

            .mt-\[-3px\] {
                margin-top: -3px
            }

            .mt-\[100px\] {
                margin-top: 100px
            }

            .mt-\[32px\] {
                margin-top: 32px
            }

            .line-clamp-5 {
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 5
            }

            .block {
                display: block
            }

            .inline-block {
                display: inline-block
            }

            .inline {
                display: inline
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .table-cell {
                display: table-cell
            }

            .table-row {
                display: table-row
            }

            .grid {
                display: grid
            }

            .contents {
                display: contents
            }

            .hidden {
                display: none
            }

            .aspect-square {
                aspect-ratio: 1/1
            }

            .aspect-video {
                aspect-ratio: 16/9
            }

            .size-1 {
                width: .25rem;
                height: .25rem
            }

            .size-2 {
                width: .5rem;
                height: .5rem
            }

            .h-0 {
                height: 0
            }

            .h-0\.5 {
                height: .125rem
            }

            .h-1 {
                height: .25rem
            }

            .h-1\.5 {
                height: .375rem
            }

            .h-10 {
                height: 2.5rem
            }

            .h-11 {
                height: 2.75rem
            }

            .h-12 {
                height: 3rem
            }

            .h-14 {
                height: 3.5rem
            }

            .h-16 {
                height: 4rem
            }

            .h-2 {
                height: .5rem
            }

            .h-2\.5 {
                height: .625rem
            }

            .h-24 {
                height: 6rem
            }

            .h-28 {
                height: 7rem
            }

            .h-3 {
                height: .75rem
            }

            .h-32 {
                height: 8rem
            }

            .h-4 {
                height: 1rem
            }

            .h-4\/5 {
                height: 80%
            }

            .h-40 {
                height: 10rem
            }

            .h-48 {
                height: 12rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-6 {
                height: 1.5rem
            }

            .h-7 {
                height: 1.75rem
            }

            .h-8 {
                height: 2rem
            }

            .h-80 {
                height: 20rem
            }

            .h-9 {
                height: 2.25rem
            }

            .h-96 {
                height: 24rem
            }

            .h-\[\.125rem\] {
                height: .125rem
            }

            .h-\[\.625rem\] {
                height: .625rem
            }

            .h-\[\.875rem\] {
                height: .875rem
            }

            .h-\[1000dvh\] {
                height: 1000dvh
            }

            .h-\[100px\] {
                height: 100px
            }

            .h-\[120px\] {
                height: 120px
            }

            .h-\[169\%\] {
                height: 169%
            }

            .h-\[170px\] {
                height: 170px
            }

            .h-\[200dvh\] {
                height: 200dvh
            }

            .h-\[200px\] {
                height: 200px
            }

            .h-\[220dvh\] {
                height: 220dvh
            }

            .h-\[225px\] {
                height: 225px
            }

            .h-\[22px\] {
                height: 22px
            }

            .h-\[240px\] {
                height: 240px
            }

            .h-\[24px\] {
                height: 24px
            }

            .h-\[26px\] {
                height: 26px
            }

            .h-\[28rem\] {
                height: 28rem
            }

            .h-\[3\.75rem\] {
                height: 3.75rem
            }

            .h-\[300px\] {
                height: 300px
            }

            .h-\[30px\] {
                height: 30px
            }

            .h-\[324px\] {
                height: 324px
            }

            .h-\[32rem\] {
                height: 32rem
            }

            .h-\[34px\] {
                height: 34px
            }

            .h-\[350px\] {
                height: 350px
            }

            .h-\[38px\] {
                height: 38px
            }

            .h-\[450px\] {
                height: 450px
            }

            .h-\[500px\] {
                height: 500px
            }

            .h-\[58px\] {
                height: 58px
            }

            .h-\[60px\] {
                height: 60px
            }

            .h-\[800px\] {
                height: 800px
            }

            .h-\[90px\] {
                height: 90px
            }

            .h-\[calc\(100\%-12px\)\] {
                height: calc(100% - 12px)
            }

            .h-\[calc\(100\%_\+_4px\)\] {
                height: calc(100% + 4px)
            }

            .h-\[calc\(100dvh-9rem\)\] {
                height: calc(100dvh - 9rem)
            }

            .h-\[calc\(100vh-4rem\)\] {
                height: calc(100vh - 4rem)
            }

            .h-\[calc\(100vh-60px\)\] {
                height: calc(100vh - 60px)
            }

            .h-\[calc\(100vh-70px\)\] {
                height: calc(100vh - 70px)
            }

            .h-\[calc\(100vh-85px\)\] {
                height: calc(100vh - 85px)
            }

            .h-\[calc\(200dvh\+120px\)\] {
                height: calc(200dvh + 120px)
            }

            .h-\[var\(--editor-topbar-height\)\] {
                height: var(--editor-topbar-height)
            }

            .h-auto {
                height: auto
            }

            .h-fit {
                height: fit-content
            }

            .h-full {
                height: 100%
            }

            .h-px {
                height: 1px
            }

            .h-screen {
                height: 100vh
            }

            .max-h-80 {
                max-height: 20rem
            }

            .max-h-\[240px\] {
                max-height: 240px
            }

            .max-h-\[330px\] {
                max-height: 330px
            }

            .max-h-\[400px\] {
                max-height: 400px
            }

            .max-h-\[500px\] {
                max-height: 500px
            }

            .max-h-\[60vh\] {
                max-height: 60vh
            }

            .max-h-\[90vh\] {
                max-height: 90vh
            }

            .max-h-full {
                max-height: 100%
            }

            .min-h-\[100dvh\] {
                min-height: 100dvh
            }

            .min-h-\[225px\] {
                min-height: 225px
            }

            .min-h-\[24px\] {
                min-height: 24px
            }

            .min-h-\[300px\] {
                min-height: 300px
            }

            .min-h-\[30px\] {
                min-height: 30px
            }

            .min-h-\[42px\] {
                min-height: 42px
            }

            .min-h-\[450px\] {
                min-height: 450px
            }

            .min-h-\[590px\] {
                min-height: 590px
            }

            .min-h-\[80dvh\] {
                min-height: 80dvh
            }

            .min-h-\[80px\] {
                min-height: 80px
            }

            .min-h-fit {
                min-height: fit-content
            }

            .\!w-10 {
                width: 2.5rem!important
            }

            .w-0 {
                width: 0
            }

            .w-0\.5 {
                width: .125rem
            }

            .w-1 {
                width: .25rem
            }

            .w-1\.5 {
                width: .375rem
            }

            .w-1\/3 {
                width: 33.333333%
            }

            .w-10 {
                width: 2.5rem
            }

            .w-11 {
                width: 2.75rem
            }

            .w-16 {
                width: 4rem
            }

            .w-2 {
                width: .5rem
            }

            .w-2\.5 {
                width: .625rem
            }

            .w-20 {
                width: 5rem
            }

            .w-24 {
                width: 6rem
            }

            .w-28 {
                width: 7rem
            }

            .w-3 {
                width: .75rem
            }

            .w-3\/5 {
                width: 60%
            }

            .w-32 {
                width: 8rem
            }

            .w-4 {
                width: 1rem
            }

            .w-40 {
                width: 10rem
            }

            .w-48 {
                width: 12rem
            }

            .w-5 {
                width: 1.25rem
            }

            .w-5\/6 {
                width: 83.333333%
            }

            .w-52 {
                width: 13rem
            }

            .w-6 {
                width: 1.5rem
            }

            .w-60 {
                width: 15rem
            }

            .w-64 {
                width: 16rem
            }

            .w-7 {
                width: 1.75rem
            }

            .w-8 {
                width: 2rem
            }

            .w-9 {
                width: 2.25rem
            }

            .w-\[\.125rem\] {
                width: .125rem
            }

            .w-\[\.625rem\] {
                width: .625rem
            }

            .w-\[100dvw\] {
                width: 100dvw
            }

            .w-\[100px\] {
                width: 100px
            }

            .w-\[103px\] {
                width: 103px
            }

            .w-\[1070px\] {
                width: 1070px
            }

            .w-\[138\%\] {
                width: 138%
            }

            .w-\[150px\] {
                width: 150px
            }

            .w-\[160px\] {
                width: 160px
            }

            .w-\[170px\] {
                width: 170px
            }

            .w-\[174px\] {
                width: 174px
            }

            .w-\[200dvh\] {
                width: 200dvh
            }

            .w-\[200dvw\] {
                width: 200dvw
            }

            .w-\[200px\] {
                width: 200px
            }

            .w-\[200vw\] {
                width: 200vw
            }

            .w-\[206px\] {
                width: 206px
            }

            .w-\[208px\] {
                width: 208px
            }

            .w-\[216px\] {
                width: 216px
            }

            .w-\[218px\] {
                width: 218px
            }

            .w-\[220dvh\] {
                width: 220dvh
            }

            .w-\[225px\] {
                width: 225px
            }

            .w-\[22px\] {
                width: 22px
            }

            .w-\[240px\] {
                width: 240px
            }

            .w-\[24px\] {
                width: 24px
            }

            .w-\[250px\] {
                width: 250px
            }

            .w-\[275px\] {
                width: 275px
            }

            .w-\[28rem\] {
                width: 28rem
            }

            .w-\[300px\] {
                width: 300px
            }

            .w-\[302px\] {
                width: 302px
            }

            .w-\[303px\] {
                width: 303px
            }

            .w-\[304px\] {
                width: 304px
            }

            .w-\[320px\] {
                width: 320px
            }

            .w-\[32px\] {
                width: 32px
            }

            .w-\[350px\] {
                width: 350px
            }

            .w-\[399px\] {
                width: 399px
            }

            .w-\[4\.25rem\] {
                width: 4.25rem
            }

            .w-\[40\%\] {
                width: 40%
            }

            .w-\[40dvw\] {
                width: 40dvw
            }

            .w-\[465px\] {
                width: 465px
            }

            .w-\[500px\] {
                width: 500px
            }

            .w-\[58px\] {
                width: 58px
            }

            .w-\[600px\] {
                width: 600px
            }

            .w-\[70\%\] {
                width: 70%
            }

            .w-\[700px\] {
                width: 700px
            }

            .w-\[70px\] {
                width: 70px
            }

            .w-\[75\%\] {
                width: 75%
            }

            .w-\[80\%\] {
                width: 80%
            }

            .w-\[80px\] {
                width: 80px
            }

            .w-\[90\%\] {
                width: 90%
            }

            .w-\[900px\] {
                width: 900px
            }

            .w-\[90px\] {
                width: 90px
            }

            .w-\[94\%\] {
                width: 94%
            }

            .w-\[95\%\] {
                width: 95%
            }

            .w-\[calc\(100\%-3rem\)\] {
                width: calc(100% - 3rem)
            }

            .w-\[calc\(100\%-4px\)\] {
                width: calc(100% - 4px)
            }

            .w-\[calc\(100\%-4rem\)\] {
                width: calc(100% - 4rem)
            }

            .w-\[calc\(100\%_\+_4px\)\] {
                width: calc(100% + 4px)
            }

            .w-auto {
                width: auto
            }

            .w-fit {
                width: fit-content
            }

            .w-full {
                width: 100%
            }

            .w-px {
                width: 1px
            }

            .w-screen {
                width: 100vw
            }

            .min-w-\[120px\] {
                min-width: 120px
            }

            .min-w-\[160px\] {
                min-width: 160px
            }

            .min-w-\[225px\] {
                min-width: 225px
            }

            .min-w-\[24px\] {
                min-width: 24px
            }

            .min-w-\[300px\] {
                min-width: 300px
            }

            .min-w-\[48px\] {
                min-width: 48px
            }

            .min-w-\[6rem\] {
                min-width: 6rem
            }

            .min-w-full {
                min-width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-32 {
                max-width: 8rem
            }

            .max-w-3xl {
                max-width: 48rem
            }

            .max-w-4xl {
                max-width: 56rem
            }

            .max-w-5xl {
                max-width: 64rem
            }

            .max-w-6xl {
                max-width: 72rem
            }

            .max-w-7xl {
                max-width: 80rem
            }

            .max-w-\[100\%\] {
                max-width: 100%
            }

            .max-w-\[100vw\] {
                max-width: 100vw
            }

            .max-w-\[150px\] {
                max-width: 150px
            }

            .max-w-\[190px\] {
                max-width: 190px
            }

            .max-w-\[200px\] {
                max-width: 200px
            }

            .max-w-\[240px\] {
                max-width: 240px
            }

            .max-w-\[245px\] {
                max-width: 245px
            }

            .max-w-\[25\.625rem\] {
                max-width: 25.625rem
            }

            .max-w-\[250px\] {
                max-width: 250px
            }

            .max-w-\[300px\] {
                max-width: 300px
            }

            .max-w-\[302px\] {
                max-width: 302px
            }

            .max-w-\[30rem\] {
                max-width: 30rem
            }

            .max-w-\[350px\] {
                max-width: 350px
            }

            .max-w-\[354px\] {
                max-width: 354px
            }

            .max-w-\[400px\] {
                max-width: 400px
            }

            .max-w-\[420px\] {
                max-width: 420px
            }

            .max-w-\[450px\] {
                max-width: 450px
            }

            .max-w-\[480px\] {
                max-width: 480px
            }

            .max-w-\[520px\] {
                max-width: 520px
            }

            .max-w-\[550px\] {
                max-width: 550px
            }

            .max-w-\[600px\] {
                max-width: 600px
            }

            .max-w-\[60vw\] {
                max-width: 60vw
            }

            .max-w-\[720px\] {
                max-width: 720px
            }

            .max-w-\[760px\] {
                max-width: 760px
            }

            .max-w-\[860px\] {
                max-width: 860px
            }

            .max-w-\[calc\(100\%_-_18px\)\] {
                max-width: calc(100% - 18px)
            }

            .max-w-full {
                max-width: 100%
            }

            .max-w-lg {
                max-width: 32rem
            }

            .max-w-max {
                max-width: max-content
            }

            .max-w-md {
                max-width: 28rem
            }

            .max-w-sm {
                max-width: 24rem
            }

            .max-w-xl {
                max-width: 36rem
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .flex-auto {
                flex: 1 1 auto
            }

            .flex-initial {
                flex: 0 1 auto
            }

            .flex-shrink {
                flex-shrink: 1
            }

            .flex-shrink-0,.shrink-0 {
                flex-shrink: 0
            }

            .flex-grow {
                flex-grow: 1
            }

            .flex-grow-0 {
                flex-grow: 0
            }

            .grow {
                flex-grow: 1
            }

            .basis-0 {
                flex-basis: 0px
            }

            .basis-1\/2 {
                flex-basis: 50%
            }

            .basis-1\/4 {
                flex-basis: 25%
            }

            .border-separate {
                border-collapse: separate
            }

            .border-spacing-0 {
                --tw-border-spacing-x: 0px;
                --tw-border-spacing-y: 0px;
                border-spacing: var(--tw-border-spacing-x) var(--tw-border-spacing-y)
            }

            .origin-\[0_0\] {
                transform-origin: 0 0
            }

            .origin-center {
                transform-origin: center
            }

            .origin-top {
                transform-origin: top
            }

            .-translate-x-1\/2,.-translate-x-2\/4 {
                --tw-translate-x: -50%;
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .-translate-y-1\/2,.-translate-y-2\/4 {
                --tw-translate-y: -50%
            }

            .-translate-y-1\/2,.-translate-y-2\/4,.-translate-y-8 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .-translate-y-8 {
                --tw-translate-y: -2rem
            }

            .translate-x-0 {
                --tw-translate-x: 0px
            }

            .translate-x-0,.translate-x-0\.5 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .translate-x-0\.5 {
                --tw-translate-x: 0.125rem
            }

            .translate-x-\[-50\%\] {
                --tw-translate-x: -50%
            }

            .translate-x-\[-50\%\],.translate-y-1 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .translate-y-1 {
                --tw-translate-y: 0.25rem
            }

            .translate-y-4 {
                --tw-translate-y: 1rem
            }

            .translate-y-4,.translate-y-\[40\%\] {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .translate-y-\[40\%\] {
                --tw-translate-y: 40%
            }

            .-rotate-1 {
                --tw-rotate: -1deg
            }

            .-rotate-1,.rotate-0 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .rotate-0 {
                --tw-rotate: 0deg
            }

            .rotate-180 {
                --tw-rotate: 180deg
            }

            .rotate-180,.rotate-45 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .rotate-45 {
                --tw-rotate: 45deg
            }

            .skew-x-3 {
                --tw-skew-x: 3deg
            }

            .scale-x-\[1\.5\],.skew-x-3 {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .scale-x-\[1\.5\] {
                --tw-scale-x: 1.5
            }

            .scale-x-\[2\.0\] {
                --tw-scale-x: 2.0
            }

            .scale-x-\[2\.0\],.transform {
                transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .transform-gpu {
                transform: translate3d(var(--tw-translate-x),var(--tw-translate-y),0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            @keyframes animate-offset {
                0% {
                    offset-distance: 0
                }

                to {
                    offset-distance: 100%
                }
            }

            .animate-\[animate-offset_10s_linear_infinite\] {
                animation: animate-offset 10s linear infinite
            }

            @keyframes bars-bounce {
                10% {
                    transform: scaleX(.84) translateX(1px)
                }

                30% {
                    transform: scaleX(1.5) translateX(2px)
                }

                60% {
                    transform: scaleX(.84) translateX(2px)
                }

                80% {
                    transform: scaleX(.96) translateX(1px)
                }

                to {
                    transform: scaleX(1) translateX(2px)
                }
            }

            .animate-bars-bounce {
                animation: bars-bounce 2.24s ease-in-out infinite alternate
            }

            @keyframes header-slide-down-fade {
                0% {
                    opacity: 0;
                    transform: translateY(-16px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-header-slide-down-fade {
                animation: header-slide-down-fade 1s ease-in-out
            }

            @keyframes hero-text-slide-up-fade {
                0% {
                    opacity: 0;
                    transform: translateY(16px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-hero-text-slide-up-fade {
                animation: hero-text-slide-up-fade 1s ease-in-out
            }

            @keyframes open-scale-up-fade {
                0% {
                    opacity: 0;
                    transform: scale(.98) translateY(5px)
                }

                to {
                    opacity: 1;
                    transform: scale(1) translateY(0)
                }
            }

            .animate-open-scale-up-fade {
                animation: open-scale-up-fade .2s ease-in-out
            }

            @keyframes ping {
                75%,to {
                    transform: scale(2);
                    opacity: 0
                }
            }

            .animate-ping {
                animation: ping 1s cubic-bezier(0,0,.2,1) infinite
            }

            .animate-plop {
                animation: plop 1s ease-in-out .1s infinite
            }

            .animate-plop2 {
                animation: plop 1s ease-in-out .2s infinite
            }

            @keyframes plop {
                0%,to {
                    opacity: .2
                }

                20% {
                    opacity: 1
                }
            }

            .animate-plop3 {
                animation: plop 1s ease-in-out .4s infinite
            }

            @keyframes pulse {
                50% {
                    opacity: .5
                }
            }

            .animate-pulse {
                animation: pulse 2s cubic-bezier(.4,0,.6,1) infinite
            }

            @keyframes scroll-x {
                0% {
                    transform: translateX(0)
                }

                to {
                    transform: translateX(calc(-100% - 32px))
                }
            }

            .animate-scroll-x {
                animation: scroll-x 180s linear infinite
            }

            @keyframes slide-fade-in-right {
                0% {
                    opacity: 0;
                    transform: translateX(-6px)
                }

                to {
                    opacity: 1;
                    transform: translateX(0)
                }
            }

            .animate-slide-fade-in-right {
                animation: slide-fade-in-right 1s ease forwards
            }

            @keyframes spin {
                to {
                    transform: rotate(1turn)
                }
            }

            .animate-spin {
                animation: spin 1s linear infinite
            }

            @keyframes spotlight {
                0% {
                    opacity: 0;
                    transform: translate(-72%,-62%) scale(.5)
                }

                to {
                    opacity: 1;
                    transform: translate(-50%,-40%) scale(1)
                }
            }

            .animate-spotlight {
                animation: spotlight 2s ease .75s 1 forwards
            }

            @keyframes webgl-scale-in-fade {
                0% {
                    opacity: 0;
                    transform: scale(.7)
                }

                to {
                    opacity: 1;
                    transform: scale(1)
                }
            }

            .animate-webgl-scale-in-fade {
                animation: webgl-scale-in-fade 1s ease-in-out
            }

            .cursor-auto {
                cursor: auto
            }

            .cursor-default {
                cursor: default
            }

            .cursor-grab {
                cursor: grab
            }

            .cursor-help {
                cursor: help
            }

            .cursor-not-allowed {
                cursor: not-allowed
            }

            .cursor-pointer {
                cursor: pointer
            }

            .cursor-text {
                cursor: text
            }

            .cursor-wait {
                cursor: wait
            }

            .touch-none {
                touch-action: none
            }

            .select-none {
                user-select: none
            }

            .resize-none {
                resize: none
            }

            .resize {
                resize: both
            }

            .list-disc {
                list-style-type: disc
            }

            .appearance-none {
                appearance: none
            }

            .grid-cols-1 {
                grid-template-columns: repeat(1,minmax(0,1fr))
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2,minmax(0,1fr))
            }

            .grid-cols-3 {
                grid-template-columns: repeat(3,minmax(0,1fr))
            }

            .grid-cols-4 {
                grid-template-columns: repeat(4,minmax(0,1fr))
            }

            .grid-cols-\[1fr_65px\] {
                grid-template-columns: 1fr 65px
            }

            .grid-cols-\[72px_1fr\] {
                grid-template-columns: 72px 1fr
            }

            .grid-cols-\[repeat\(2\2c min-content\)\] {
                grid-template-columns: repeat(2,min-content)
            }

            .flex-row {
                flex-direction: row
            }

            .flex-col {
                flex-direction: column
            }

            .flex-col-reverse {
                flex-direction: column-reverse
            }

            .flex-wrap {
                flex-wrap: wrap
            }

            .place-content-center {
                place-content: center
            }

            .place-items-center {
                place-items: center
            }

            .items-start {
                align-items: flex-start
            }

            .items-end {
                align-items: flex-end
            }

            .items-center {
                align-items: center
            }

            .items-baseline {
                align-items: baseline
            }

            .\!justify-start {
                justify-content: flex-start!important
            }

            .justify-start {
                justify-content: flex-start
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-around {
                justify-content: space-around
            }

            .gap-0 {
                gap: 0
            }

            .gap-0\.5 {
                gap: .125rem
            }

            .gap-1 {
                gap: .25rem
            }

            .gap-1\.5 {
                gap: .375rem
            }

            .gap-10 {
                gap: 2.5rem
            }

            .gap-12 {
                gap: 3rem
            }

            .gap-14 {
                gap: 3.5rem
            }

            .gap-16 {
                gap: 4rem
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-24 {
                gap: 6rem
            }

            .gap-3 {
                gap: .75rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .gap-7 {
                gap: 1.75rem
            }

            .gap-8 {
                gap: 2rem
            }

            .gap-\[\.125rem\] {
                gap: .125rem
            }

            .gap-\[\.3125rem\] {
                gap: .3125rem
            }

            .gap-\[\.375rem\] {
                gap: .375rem
            }

            .gap-x-1 {
                column-gap: .25rem
            }

            .gap-x-2 {
                column-gap: .5rem
            }

            .gap-x-6 {
                column-gap: 1.5rem
            }

            .gap-y-6 {
                row-gap: 1.5rem
            }

            .gap-y-8 {
                row-gap: 2rem
            }

            .space-x-2>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(.5rem * var(--tw-space-x-reverse));
                margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
            }

            .space-x-4>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1rem * var(--tw-space-x-reverse));
                margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)))
            }

            .space-x-8>:not([hidden])~:not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(2rem * var(--tw-space-x-reverse));
                margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)))
            }

            .space-y-2>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
            }

            .space-y-3>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
            }

            .space-y-4>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(1rem * var(--tw-space-y-reverse))
            }

            .space-y-6>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(1.5rem * var(--tw-space-y-reverse))
            }

            .space-y-8>:not([hidden])~:not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(2rem * var(--tw-space-y-reverse))
            }

            .divide-x>:not([hidden])~:not([hidden]) {
                --tw-divide-x-reverse: 0;
                border-right-width: calc(1px * var(--tw-divide-x-reverse));
                border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
            }

            .divide-y>:not([hidden])~:not([hidden]) {
                --tw-divide-y-reverse: 0;
                border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
                border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
            }

            .divide-gray-6>:not([hidden])~:not([hidden]) {
                border-color: var(--mauve-a6)
            }

            .divide-slate-4>:not([hidden])~:not([hidden]) {
                border-color: var(--slate-a4)
            }

            .divide-slate-5>:not([hidden])~:not([hidden]) {
                border-color: var(--slate-a5)
            }

            .divide-slate-6>:not([hidden])~:not([hidden]) {
                border-color: var(--slate-a6)
            }

            .self-start {
                align-self: flex-start
            }

            .self-center {
                align-self: center
            }

            .overflow-auto {
                overflow: auto
            }

            .overflow-hidden {
                overflow: hidden
            }

            .\!overflow-visible {
                overflow: visible!important
            }

            .overflow-visible {
                overflow: visible
            }

            .overflow-x-auto {
                overflow-x: auto
            }

            .overflow-y-auto {
                overflow-y: auto
            }

            .truncate {
                overflow: hidden;
                text-overflow: ellipsis
            }

            .truncate,.whitespace-nowrap {
                white-space: nowrap
            }

            .whitespace-pre-wrap {
                white-space: pre-wrap
            }

            .text-balance {
                text-wrap: balance
            }

            .text-pretty {
                text-wrap: pretty
            }

            .break-all {
                word-break: break-all
            }

            .\!rounded-full {
                border-radius: 9999px!important
            }

            .rounded {
                border-radius: .25rem
            }

            .rounded-2xl {
                border-radius: 1rem
            }

            .rounded-3xl {
                border-radius: 1.5rem
            }

            .rounded-\[\.125rem\] {
                border-radius: .125rem
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-xl {
                border-radius: .75rem
            }

            .\!rounded-b-xl {
                border-bottom-right-radius: .75rem!important;
                border-bottom-left-radius: .75rem!important
            }

            .rounded-b-xl {
                border-bottom-right-radius: .75rem;
                border-bottom-left-radius: .75rem
            }

            .rounded-l-lg {
                border-top-left-radius: .5rem;
                border-bottom-left-radius: .5rem
            }

            .rounded-r-lg {
                border-top-right-radius: .5rem;
                border-bottom-right-radius: .5rem
            }

            .rounded-t-xl {
                border-top-left-radius: .75rem;
                border-top-right-radius: .75rem
            }

            .rounded-br-md {
                border-bottom-right-radius: .375rem
            }

            .rounded-tr-md {
                border-top-right-radius: .375rem
            }

            .\!border-0 {
                border-width: 0!important
            }

            .border {
                border-width: 1px
            }

            .border-2 {
                border-width: 2px
            }

            .border-4 {
                border-width: 4px
            }

            .border-x {
                border-left-width: 1px;
                border-right-width: 1px
            }

            .border-y {
                border-top-width: 1px
            }

            .border-b,.border-y {
                border-bottom-width: 1px
            }

            .border-b-0 {
                border-bottom-width: 0
            }

            .border-l {
                border-left-width: 1px
            }

            .border-l-2 {
                border-left-width: 2px
            }

            .border-l-4 {
                border-left-width: 4px
            }

            .border-r {
                border-right-width: 1px
            }

            .border-t {
                border-top-width: 1px
            }

            .border-solid {
                border-style: solid
            }

            .border-dashed {
                border-style: dashed
            }

            .\!border-none {
                border-style: none!important
            }

            .border-none {
                border-style: none
            }

            .\!border-slate-4 {
                border-color: var(--slate-a4)!important
            }

            .border-\[\#eaeaea\] {
                --tw-border-opacity: 1;
                border-color: rgb(234 234 234/var(--tw-border-opacity))
            }

            .border-black {
                --tw-border-opacity: 1;
                border-color: rgb(0 0 0/var(--tw-border-opacity))
            }

            .border-black\/40 {
                border-color: rgba(0,0,0,.4)
            }

            .border-blue-5 {
                border-color: var(--blue-a5)
            }

            .border-blue-9 {
                border-color: var(--blue-a9)
            }

            .border-current {
                border-color: currentColor
            }

            .border-gray-6 {
                border-color: var(--mauve-a6)
            }

            .border-green-11 {
                border-color: var(--green-a11)
            }

            .border-green-5 {
                border-color: var(--green-a5)
            }

            .border-green-6 {
                border-color: var(--green-a6)
            }

            .border-green-9 {
                border-color: var(--green-a9)
            }

            .border-orange-9 {
                border-color: var(--orange-a9)
            }

            .border-red-1 {
                border-color: var(--red-a1)
            }

            .border-red-5 {
                border-color: var(--red-a5)
            }

            .border-red-6 {
                border-color: var(--red-a6)
            }

            .border-red-9 {
                border-color: var(--red-a9)
            }

            .border-slate-1 {
                border-color: var(--slate-a1)
            }

            .border-slate-10 {
                border-color: var(--slate-a10)
            }

            .border-slate-11 {
                border-color: var(--slate-a11)
            }

            .border-slate-3 {
                border-color: var(--slate-a3)
            }

            .border-slate-4 {
                border-color: var(--slate-a4)
            }

            .border-slate-5 {
                border-color: var(--slate-a5)
            }

            .border-slate-6 {
                border-color: var(--slate-a6)
            }

            .border-slate-7 {
                border-color: var(--slate-a7)
            }

            .border-slate-700 {
                --tw-border-opacity: 1;
                border-color: rgb(51 65 85/var(--tw-border-opacity))
            }

            .border-slate-9 {
                border-color: var(--slate-a9)
            }

            .border-transparent {
                border-color: transparent
            }

            .border-violet-9 {
                border-color: var(--violet-a9)
            }

            .border-white {
                --tw-border-opacity: 1;
                border-color: rgb(255 255 255/var(--tw-border-opacity))
            }

            .border-white\/10 {
                border-color: hsla(0,0%,100%,.1)
            }

            .border-white\/20 {
                border-color: hsla(0,0%,100%,.2)
            }

            .border-white\/60 {
                border-color: hsla(0,0%,100%,.6)
            }

            .border-yellow-11 {
                border-color: var(--amber-a11)
            }

            .border-yellow-5 {
                border-color: var(--amber-a5)
            }

            .border-yellow-6 {
                border-color: var(--amber-a6)
            }

            .border-opacity-30 {
                --tw-border-opacity: 0.3
            }

            .border-opacity-5 {
                --tw-border-opacity: 0.05
            }

            .\!bg-\[\#D5DDDD\] {
                --tw-bg-opacity: 1!important;
                background-color: rgb(213 221 221/var(--tw-bg-opacity))!important
            }

            .bg-\[\#00A3FF\] {
                --tw-bg-opacity: 1;
                background-color: rgb(0 163 255/var(--tw-bg-opacity))
            }

            .bg-\[\#00B2FF\] {
                --tw-bg-opacity: 1;
                background-color: rgb(0 178 255/var(--tw-bg-opacity))
            }

            .bg-\[\#0C0C0C\] {
                --tw-bg-opacity: 1;
                background-color: rgb(12 12 12/var(--tw-bg-opacity))
            }

            .bg-\[\#3DD68C\] {
                --tw-bg-opacity: 1;
                background-color: rgb(61 214 140/var(--tw-bg-opacity))
            }

            .bg-\[\#62FFB3\] {
                --tw-bg-opacity: 1;
                background-color: rgb(98 255 179/var(--tw-bg-opacity))
            }

            .bg-\[\#Ebebeb\] {
                --tw-bg-opacity: 1;
                background-color: rgb(235 235 235/var(--tw-bg-opacity))
            }

            .bg-\[\#e7e7e7\] {
                --tw-bg-opacity: 1;
                background-color: rgb(231 231 231/var(--tw-bg-opacity))
            }

            .bg-\[\#f2f4f7\] {
                --tw-bg-opacity: 1;
                background-color: rgb(242 244 247/var(--tw-bg-opacity))
            }

            .bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0/var(--tw-bg-opacity))
            }

            .bg-black-11 {
                background-color: var(--black-a11)
            }

            .bg-black-12 {
                background-color: var(--black-a12)
            }

            .bg-black\/10 {
                background-color: rgba(0,0,0,.1)
            }

            .bg-black\/50 {
                background-color: rgba(0,0,0,.5)
            }

            .bg-black\/90 {
                background-color: rgba(0,0,0,.9)
            }

            .bg-blue-10 {
                background-color: var(--blue-a10)
            }

            .bg-blue-11 {
                background-color: var(--blue-a11)
            }

            .bg-blue-3 {
                background-color: var(--blue-a3)
            }

            .bg-green-10 {
                background-color: var(--green-a10)
            }

            .bg-green-11 {
                background-color: var(--green-a11)
            }

            .bg-green-3 {
                background-color: var(--green-a3)
            }

            .bg-orange-3 {
                background-color: var(--orange-a3)
            }

            .bg-red-10 {
                background-color: var(--red-a10)
            }

            .bg-red-11 {
                background-color: var(--red-a11)
            }

            .bg-red-3 {
                background-color: var(--red-a3)
            }

            .bg-slate-1 {
                background-color: var(--slate-a1)
            }

            .bg-slate-11 {
                background-color: var(--slate-a11)
            }

            .bg-slate-12 {
                background-color: var(--slate-a12)
            }

            .bg-slate-2 {
                background-color: var(--slate-a2)
            }

            .bg-slate-3 {
                background-color: var(--slate-a3)
            }

            .bg-slate-4 {
                background-color: var(--slate-a4)
            }

            .bg-slate-5 {
                background-color: var(--slate-a5)
            }

            .bg-slate-6 {
                background-color: var(--slate-a6)
            }

            .bg-slate-8 {
                background-color: var(--slate-a8)
            }

            .bg-transparent {
                background-color: transparent
            }

            .bg-violet-10 {
                background-color: var(--violet-a10)
            }

            .bg-violet-11 {
                background-color: var(--violet-a11)
            }

            .bg-violet-3 {
                background-color: var(--violet-a3)
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255/var(--tw-bg-opacity))
            }

            .bg-white\/10 {
                background-color: hsla(0,0%,100%,.1)
            }

            .bg-white\/70 {
                background-color: hsla(0,0%,100%,.7)
            }

            .bg-yellow-10 {
                background-color: var(--amber-a10)
            }

            .bg-yellow-11 {
                background-color: var(--amber-a11)
            }

            .bg-yellow-3 {
                background-color: var(--amber-a3)
            }

            .bg-\[linear-gradient\(-90deg\2c _\#DDD_0\%\2c _\#D2D2D2_100\%\)\] {
                background-image: linear-gradient(-90deg,#ddd,#d2d2d2)
            }

            .bg-\[linear-gradient\(180deg\2c _\#201F21_0\%\2c _\#1D1D1E_100\%\)\] {
                background-image: linear-gradient(180deg,#201f21,#1d1d1e)
            }

            .bg-\[linear-gradient\(90deg\2c _\#DDD_0\%\2c _\#D2D2D2_100\%\)\] {
                background-image: linear-gradient(90deg,#ddd,#d2d2d2)
            }

            .bg-\[linear-gradient\(90deg\2c _transparent_46\%\2c _\#000_90\%\2c _transparent_90\%\)\] {
                background-image: linear-gradient(90deg,transparent 46%,#000 90%,transparent 0)
            }

            .bg-\[linear-gradient\(90deg\2c _transparent_46\%\2c _\#FFF_90\%\2c _transparent_90\%\)\] {
                background-image: linear-gradient(90deg,transparent 46%,#fff 90%,transparent 0)
            }

            .bg-\[radial-gradient\(98\%_98\%_at_96\%_94\%\2c _rgba\(100\2c 100\2c 100\2c 0\.1\)_0\%\2c _rgba\(102\2c 102\2c 102\2c 0\)_100\%\)\2c _linear-gradient\(138deg\2c \#101010_10\%\2c \#0C0C0C_88\%\)\] {
                background-image: radial-gradient(98% 98% at 96% 94%,hsla(0,0%,39%,.1) 0,hsla(0,0%,40%,0) 100%),linear-gradient(138deg,#101010 10%,#0c0c0c 88%)
            }

            .bg-\[radial-gradient\(ellipse_at_center\2c _\#ffffff12_0\%\2c _transparent_98\%\)\] {
                background-image: radial-gradient(ellipse at center,#ffffff12 0,transparent 98%)
            }

            .box-header {
                font-weight: normal;
                font-size: 13px;
            }

            .page-header {
                font-weight: bold;
                font-size: 20px;
                padding-top: 10px;
            }

            .page-subheader {
                font-weight: normal;
                font-size: 16px;
                color: #979797;
                padding-bottom: 20px;
            }

            .form_btn {
                border: 1px solid;
                border-radius: 6px;
                padding: 10px 10px;
                width: 100%;
                font-size: 12px; 
                cursor: auto; /* Change cursor to pointer for better UX */
                transition: background-color 0.3s, border-color 0.3s; 
                display: block;
                border-color: #5f5f5f; /* Border color */
                background-color: #ffffff0e; /* Inside color */
                color: white; /* Text color */
            }

            /* Hover effect */
            .form_btn:hover {
                background-color: rgba(255, 255, 255, 0.068); /* Brighter shade on hover */
                border-color: #a0a0a0; /* Optionally lighten the border color on hover */
            }

            .btn {
                border: 1px solid;
                border-radius: 6px;
                padding: 10px 10px;
                width: 100%;
                font-size: 13px; 
                cursor: pointer;
                transition: background-color 0.3s, border-color 0.3s; 
                display: block; /* Makes the button a block-level element */
                margin-top: 20px; /* Adds space above the button */
                border-color: #5f5f5f; /* Border color */
                background-color: #0000005d; /* Inside color */
                color: white; /* Text color */
            }

            /* Hover effect */
            .btn:hover {
                background-color: #1a1a1a; /* Slightly brighter shade */
                border-color: #a0a0a0; /* Optionally lighten the border color on hover */
            }
</style>
        <noscript data-n-css=""></noscript>
        <script data-savepage-type="text/javascript" type="text/plain" async="" data-savepage-src="https://js.hs-analytics.net/analytics/1714670100000/23492618.js" id="hs-analytics"></script>
        <script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://cdn.segment.com/next-integrations/integrations/vendor/commons.a61d7bea37d2de5d4b69.js.gz" async="" status="loaded"></script>
        <script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://cdn.segment.com/next-integrations/integrations/aHVic3BvdA/2.2.4/aHVic3BvdA.dynamic.js.gz" async="" status="loaded"></script>
        <script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://cdn.segment.com/next-integrations/actions/google-analytics-4-web/f0c61fdd103acbce8883.js" async="" status="error"></script>
        <script data-savepage-type="text/javascript" type="text/plain" data-savepage-src="https://cdn.segment.com/next-integrations/actions/Z29vZ2xlLWFuYWx5dGljcy00LXdlYg/f0c61fdd103acbce8883.js" async="" status="error"></script>
        <script data-savepage-type="" type="text/plain" defer="" nomodule="" data-savepage-src="/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/webpack-6dfbf9524234c2c5.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/framework-e9ee385cb320a7c4.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/main-0e642e29103efba3.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/pages/_app-e9bf8b7d49d243b0.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/41565-e3d674d95fa86ad0.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/56679-1a598377945660e6.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/52583-62d13159c8e6b0f7.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/pages/login-6da9c16bb0751d5c.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/CDkmzsJcdupjH7HMhrXxW/_buildManifest.js" defer=""></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/CDkmzsJcdupjH7HMhrXxW/_ssgManifest.js" defer=""></script>
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/81088-1e02f65c2bc2afc0.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/40884-5c4822fc0a932ae4.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/20873-40000ae416ad98e9.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/82570-85df5a38c6cbf673.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/31536-70c13deb1e87838b.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/27851-bc8523d1fd75e0c3.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/5804-14354020d4b908d4.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/37541-2d864da9e17e1525.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/38263-6798913a462b641c.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/66573-80948356582dc032.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/12320-bd53a295b8f23f1a.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/pages/home-b0ad331e9d3fddbe.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/pages/auth/reset-password-bdffd9e7061bec6a.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/pages/signup-f62242b20ea7bfc1.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/31855-769006798206f076.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/3091-963b499ee30a8c1c.js" href="">
        <link as="script" rel="prefetch" data-savepage-href="/_next/static/chunks/pages/legal/%5Bslug%5D-749474ec41846efc.js" href="">
        <style id="savepage-cssvariables">
            :root {
            }
        </style>
        <script id="savepage-shadowloader" type="text/javascript">
            "use strict";
            window.addEventListener("DOMContentLoaded", function(event) {
                savepage_ShadowLoader(5);
            }, false);
            function savepage_ShadowLoader(c) {
                createShadowDOMs(0, document.documentElement);
                function createShadowDOMs(a, b) {
                    var i;
                    if (b.localName == "iframe" || b.localName == "frame") {
                        if (a < c) {
                            try {
                                if (b.contentDocument.documentElement != null) {
                                    createShadowDOMs(a + 1, b.contentDocument.documentElement)
                                }
                            } catch (e) {}
                        }
                    } else {
                        if (b.children.length >= 1 && b.children[0].localName == "template" && b.children[0].hasAttribute("data-savepage-shadowroot")) {
                            b.attachShadow({
                                mode: "open"
                            }).appendChild(b.children[0].content);
                            b.removeChild(b.children[0]);
                            for (i = 0; i < b.shadowRoot.children.length; i++)
                                if (b.shadowRoot.children[i] != null)
                                    createShadowDOMs(a, b.shadowRoot.children[i])
                        }
                        for (i = 0; i < b.children.length; i++)
                            if (b.children[i] != null)
                                createShadowDOMs(a, b.children[i])
                    }
                }
            }
        </script>
        
    </head>
   
    <body class="bg-root relative font-sans text-slate-12 antialiased selection:bg-[#00cc9937] selection:text-[#007763fd] dark:selection:bg-[#00fff61d] dark:selection:text-[#67ffded2]">
        <div id="__next">
            <script data-savepage-type="" type="text/plain"></script>
            <div class="__variable_469f07 __variable_bf2c8d font-sans">
                <div class="bg-root px-4">
                    
                    <div class="flex h-screen items-center justify-center">
                        <main class="mx-auto min-h-[590px] w-full max-w-[450px]">
                            <img src="/app/admin/dashboard/logo.png" alt="Logo" width="40">
                            <h1 class="page-header">
                                Panel Sign-in
                            </h1>
                            <p class="page-subheader">
                                Built by the best, for the best.
                            </p>
                            <form id="loginForm">
                                <div class="mb-4 space-y-2">
                                    <label for="username" class="box-header">USERNAME</label>
                                    <input class="form_btn" data-1p-ignore="false" type="text" autofocus="" required="" id="username" name="username" placeholder="Enter your username">
                                </div>
                                <div class="mb-6 space-y-2">
                                    <label for="password" class="text-sm text-slate-11 flex-1">PASSWORD</label>
                                    <input class="form_btn" data-1p-ignore="false" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <button class="btn" type="submit">
                                    CONTINUE
                                </button>
                        </main>
                    </div>
                </div>
            </div>
            <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events:none">
                <ol tabindex="-1" class="fixed bottom-0 right-0 z-50 flex w-[90%] gap-3 p-6 md:w-[390px]"></ol>
            </div>
            <svg height="0" viewBox="0 0 0 0" width="0">
                <defs>
                    <linearGradient gradientUnits="userSpaceOnUse" id="resend-dark-gradient" x1="13.5" x2="13.5" y1="11.328" y2="31">
                        <stop stop-color="#E5E5E5"></stop>
                        <stop offset="1" stop-color="#535353"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <script id="__NEXT_DATA__" data-savepage-type="application/json" type="text/plain"></script>
        <next-route-announcer>
            <p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p>
        </next-route-announcer>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/81088-1e02f65c2bc2afc0.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/40884-5c4822fc0a932ae4.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/82570-85df5a38c6cbf673.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/31855-769006798206f076.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/38263-6798913a462b641c.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/66573-80948356582dc032.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/3091-963b499ee30a8c1c.js"></script>
        <script data-savepage-type="" type="text/plain" data-savepage-src="/_next/static/chunks/pages/legal/%5Bslug%5D-749474ec41846efc.js"></script>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

<script>
    var notyf = new Notyf({position: {x: 'right', y: 'top'}});
    document.querySelectorAll('.input-group input').forEach(input => {
        input.addEventListener('focus', function() {
            this.style.backgroundColor = '#333';
        });
        input.addEventListener('blur', function() {
            this.style.backgroundColor = '#222';
        });
    });

    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('/admin/login-data', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                notyf.success('Login successful, redirecting in 5 seconds');
                setTimeout(() => {
                    window.location.href = '/admin';
                }, 5000);
            } else {
                notyf.error('Invalid username or password');
            }
        });
    });
</script>
