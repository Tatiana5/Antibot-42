<?php
/**
 *
 * @package       Antibot 42
 * @copyright (c) 2019 Татьяна5 and Nekstati
 * @license       GNU General Public License, version 2 (GPL-2.0)
 *
 */
 namespace nekstati\antibot42; use GeoIp2\Database\Reader; class d0rOz { protected $YyTYl; protected $g3Pn2; protected $zUUep; protected $tJ4pg; protected $JsHT6; protected $FfPsk; protected $SEWwS; public $GbLow; public function __construct(\phpbb\config\config $m7oA0, \phpbb\controller\helper $h05K7, \phpbb\db\driver\driver_interface $xik6S, \phpbb\template\template $V5k9b, \phpbb\user $Zqe1k, $cq7E8) { goto mMxnf; nWYlf: $this->GbLow = $this->Kam9_(); goto JByxo; x1cSb: $this->FfPsk = $cq7E8; goto nWYlf; UWG5t: $this->zUUep = $xik6S; goto QuWww; QuWww: $this->tJ4pg = $V5k9b; goto WMiKP; CqOZV: $this->g3Pn2 = $h05K7; goto UWG5t; WMiKP: $this->JsHT6 = $Zqe1k; goto x1cSb; mMxnf: $this->YyTYl = $m7oA0; goto CqOZV; JByxo: } public function uFcLp(\phpbb\routing\router $zOR4q) { $this->SEWwS = $zOR4q; } public function F4ecO($bOSc9, $ZMYz1 = "\x6e\x6f\x72\x6d\141\x6c") { goto cmz2N; Zm6VB: EsivF: goto xf7NH; TFayk: $zsfW6 .= $ZMYz1 != "\141\x64\x6d\x69\x6e" ? "\40\40\x20" . hash("\143\x72\x63\63\62", $this->JsHT6->session_id) : ''; goto eBQqC; z7gbb: return; goto Q0laJ; tjMER: $fhGot = $ZMYz1 == "\x6e\x6f\x72\x6d\x61\x6c" ? $this->JsHT6->data["\163\x65\163\x73\151\x6f\156\x5f\151\x70"] : ''; goto Cdmk2; xf7NH: B2D83: goto yzBtM; Kt4Jf: NgxBu: goto btn_J; K3JBN: @file_put_contents($B38mG, $FkX17 . "\xa\x4c\157\147\40\163\x69\172\x65\x20\145\170\143\x65\145\144\145\x64\x20\61\40\115\x42\x2c\x20\154\x6f\147\x20\164\x72\151\155\155\145\144\40\x74\157\x20\61\60\60\x20\154\x61\163\164\x20\145\156\x74\x72\x69\145\163\xa\xa"); goto Kt4Jf; btn_J: @file_put_contents($B38mG, $zsfW6 . "\xa", FILE_APPEND); goto ZQiJL; Cdmk2: $sELyi = 58; goto WfWSy; nEFok: $zsfW6 .= strpos($fhGot, "\x3a") !== false ? str_repeat("\40", 39 - strlen($fhGot)) : str_repeat("\x20", 15 - strlen($fhGot)); goto Cp9bs; JUSSz: $GuYiV = $this->qAx56($fhGot); goto l9Wfx; Q0laJ: poRAX: goto tDN8V; Cp9bs: $zsfW6 .= "\40\40"; goto OKoeX; OKoeX: $zsfW6 .= implode("\40\x2f\x20", $GuYiV); goto Zm6VB; vVXo6: a32Tz: goto jFtr4; kszCu: $zsfW6 .= str_repeat("\40", $sELyi + $xwCe8 + 3 - mb_strlen(strrchr("\xa" . $zsfW6, "\xa"))); goto TFayk; fzynX: $this->zUUep->sql_query("\125\x50\x44\101\124\105\x20" . SESSIONS_TABLE . "\15\xa\x9\x9\11\11\123\x45\124\40\163\x65\x73\163\x69\x6f\156\137\x70\x6f\163\163\151\142\154\x65\x5f\163\160\x61\155\142\x6f\164\40\x3d\x20\163\x65\163\163\151\x6f\x6e\137\x70\157\x73\163\x69\x62\x6c\145\x5f\163\160\141\155\142\157\164\x20\53\40\x31\xd\12\11\x9\11\x9\x57\x48\x45\x52\x45\x20\163\145\x73\x73\151\157\x6e\137\x69\144\x20\x3d\40\47{$this->JsHT6->session_id}\47"); goto vVXo6; WfWSy: $xwCe8 = mb_strlen($zsfW6); goto RKV8z; RKV8z: $zsfW6 .= utf8_wordwrap($bOSc9, $sELyi, "\xa" . str_repeat("\x20", $xwCe8), true); goto kszCu; ZQiJL: if (!($ZMYz1 == "\x6e\157\162\155\141\x6c" && !$this->JsHT6->data["\151\x73\x5f\162\x65\147\x69\163\164\x65\162\x65\144"] && !$this->JsHT6->data["\x69\163\137\142\x6f\164"])) { goto a32Tz; } goto fzynX; wBYMR: if (!(is_file($B38mG) && filesize($B38mG) > 1000000)) { goto NgxBu; } goto EetIF; EetIF: $FkX17 = @implode('', array_slice(file($B38mG), -100)); goto K3JBN; l9Wfx: if (!sizeof($GuYiV)) { goto EsivF; } goto nEFok; eBQqC: $zsfW6 .= "\40\x20\x20" . $fhGot; goto M0azW; M0azW: if (!($this->GbLow["\147\145\x6f\151\x70"] && !empty($fhGot))) { goto B2D83; } goto JUSSz; tDN8V: $zsfW6 = date("\131\55\x6d\x2d\144\40\x48\72\x69\x3a\x73") . "\40\x20\x20"; goto tjMER; yzBtM: $B38mG = $this->FfPsk . "\163\x74\x6f\x72\x65\57\141\x6e\164\x69\x62\157\164\64\62\x5f\154\x6f\147\x2e\x74\170\x74"; goto wBYMR; cmz2N: if (!(!$this->GbLow["\x6c\157\147"] && $ZMYz1 != "\141\144\x6d\x69\x6e")) { goto poRAX; } goto z7gbb; jFtr4: } public function OHB_m() { goto sWnqt; cLlNq: $vlA3J = substr(str_shuffle(str_repeat($kwRIp = "\141\142\x63\144\x65\x66\147\150\151\x6a\x6b\154\x6d\x6e\157\160\161\x72\163\164\165\166\x77\170\171\x7a", ceil(40 / strlen($kwRIp)))), 1, 40); goto rmtKm; t_mKL: return $vlA3J; goto IYeOg; d_vGV: goto yP_aD; goto ezfQr; p8p1g: if (!in_array($XXtHQ, $RNaUJ)) { goto byCn1; } goto S_rqR; ijy51: byCn1: goto VYDSL; rmtKm: $MCWCX = str_split($vlA3J, 8); goto Pi1HH; H_VLz: $vlA3J = str_split($vlA3J, 8); goto t_mKL; Afsil: $RNaUJ = scandir(realpath($this->FfPsk)); goto hUAS1; sWnqt: $vlA3J = ''; goto mlR3u; mlR3u: if (empty($this->JsHT6->data["\x73\x65\163\x73\151\x6f\156\x5f\162\141\156\x64"])) { goto e2MFL; } goto xKyW6; xKyW6: $vlA3J = $this->JsHT6->data["\x73\145\163\163\151\x6f\x6e\x5f\162\141\156\144"]; goto Du8Hu; bu3wC: goto tLVSs; goto d_vGV; JIsbJ: VTUhq: goto p8p1g; S_rqR: goto yP_aD; goto ijy51; fyilH: if (!true) { goto tLVSs; } goto cLlNq; QN2WG: e2MFL: goto Afsil; ghCgV: TNNCn: goto H_VLz; NKnRI: s1rYa: goto bu3wC; kg1cn: goto yP_aD; goto JIsbJ; Du8Hu: goto TNNCn; goto QN2WG; ezfQr: tLVSs: goto IBgd1; Pi1HH: $XXtHQ = array_shift($MCWCX); goto W1b3Y; LVmSF: goto yP_aD; goto NKnRI; VYDSL: if (!$this->BPCdW("\57" . $XXtHQ)) { goto s1rYa; } goto LVmSF; IBgd1: $this->zUUep->sql_query("\125\x50\104\x41\x54\x45\40" . SESSIONS_TABLE . "\15\xa\11\11\x9\11\123\105\124\x20\163\145\163\163\151\157\x6e\137\162\141\156\144\40\75\40\47{$vlA3J}\x27\xd\12\11\11\11\x9\127\110\105\x52\105\x20\x73\x65\163\x73\151\157\x6e\137\151\x64\40\x3d\40\47{$this->JsHT6->session_id}\47"); goto ghCgV; W1b3Y: if (!(sizeof(array_unique($MCWCX)) < 4)) { goto VTUhq; } goto kg1cn; hUAS1: yP_aD: goto fyilH; IYeOg: } public function LcHa_($O0wU7 = false) { goto G0X4F; hD1eX: YeBnM: goto mD8je; mD8je: return $SQUpR; goto HvKjr; jd48h: $SQUpR = preg_replace_callback("\57\x28\x5c\x2e\x7c\x5c\x3f\x29\x20\134\167\57", function ($DYA38) { return strtoupper($DYA38[0]); }, $SQUpR); goto iOmKT; ZZeRs: $SQUpR = explode("\x20", $SQUpR); goto PMt_s; G0X4F: $SQUpR = "\x4c\157\162\145\155\40\151\x70\x73\x75\155\40\144\x6f\x6c\157\x72\x20\x73\151\164\x20\141\x6d\x65\164\54\40\143\157\156\x73\x65\x63\x74\x65\164\165\162\40\x61\144\x69\160\x69\163\143\151\x6e\x67\40\x65\154\151\x74\x2c\40\x73\145\144\40\144\157\x20\x65\151\165\163\155\157\x64\x20\164\x65\x6d\x70\157\x72\40\151\156\x63\x69\144\151\144\165\x6e\x74\x20\165\164\40\x6c\x61\142\157\x72\x65\40\145\164\40\144\157\154\x6f\x72\x65\x20\x6d\141\147\156\141\40\141\x6c\151\161\165\x61\56\x20\x55\164\40\145\156\x69\x6d\40\x61\144\x20\x6d\151\x6e\151\155\40\166\145\x6e\151\x61\x6d\x2c\x20\x71\165\151\x73\x20\156\x6f\163\164\162\165\x64\40\145\x78\145\x72\143\151\164\141\164\151\157\156\40\x75\154\x6c\141\155\x63\157\40\154\x61\x62\157\x72\151\163\x20\x6e\x69\163\x69\40\165\x74\40\x61\154\151\161\165\151\x70\40\x65\170\40\x65\141\x20\143\x6f\155\155\157\x64\157\40\143\x6f\x6e\163\145\x71\x75\x61\x74\56\40\104\x75\151\163\x20\x61\x75\164\x65\40\x69\x72\165\x72\x65\40\x64\157\x6c\157\x72\x20\151\x6e\x20\x72\145\160\x72\145\x68\145\156\144\145\x72\x69\x74\40\x69\x6e\x20\x76\x6f\x6c\x75\x70\164\141\164\145\40\166\x65\x6c\151\164\40\x65\x73\x73\x65\x20\143\x69\154\154\165\x6d\40\x64\x6f\154\157\162\145\x20\x65\165\40\x66\165\147\x69\141\164\40\x6e\165\154\x6c\x61\x20\x70\x61\x72\x69\141\x74\x75\x72\56\x20\x45\170\143\x65\x70\164\x65\x75\x72\x20\x73\x69\156\x74\40\x6f\x63\x63\141\x65\143\x61\164\x20\143\165\160\151\144\141\164\141\x74\x20\x6e\157\x6e\40\x70\x72\x6f\151\x64\145\156\x74\x2c\x20\x73\x75\x6e\x74\x20\x69\x6e\40\x63\165\x6c\x70\x61\40\x71\165\x69\x20\157\146\x66\151\x63\151\x61\40\x64\145\163\145\162\165\x6e\164\40\155\157\x6c\x6c\x69\x74\x20\141\156\151\x6d\40\x69\144\x20\x65\163\164\x20\x6c\x61\142\x6f\x72\165\155\56\x20\x55\x74\x20\x65\x6e\151\155\x20\141\144\40\155\151\156\x69\155\141\x20\166\x65\156\x69\x61\155\54\x20\161\165\x69\x73\x20\156\157\x73\164\162\x75\155\40\145\170\x65\162\x63\151\164\x61\x74\x69\157\156\x65\x6d\x20\165\154\154\x61\155\40\x63\157\x72\x70\x6f\x72\x69\x73\40\x73\165\x73\143\x69\x70\x69\x74\40\x6c\141\x62\157\x72\x69\x6f\x73\x61\x6d\54\x20\156\151\x73\151\40\165\164\x20\x61\154\x69\x71\165\x69\144\40\145\x78\40\145\x61\x20\x63\157\x6d\155\x6f\144\151\x20\x63\157\156\x73\x65\x71\165\x61\x74\165\162\x3f\x20\121\x75\151\x73\x20\141\x75\164\145\x6d\40\x76\145\x6c\x20\x65\165\155\x20\151\165\162\x65\x20\162\145\x70\x72\x65\150\x65\x6e\x64\x65\162\x69\164\x20\161\165\x69\x20\151\x6e\x20\x65\141\x20\x76\157\154\165\160\x74\141\x74\x65\x20\x76\x65\x6c\151\x74\x20\x65\163\163\x65\40\161\165\x61\155\x20\156\151\150\x69\x6c\x20\155\157\x6c\145\163\164\x69\x61\145\40\x63\x6f\156\163\x65\x71\x75\141\164\165\162\x2c\40\166\x65\154\40\x69\154\x6c\165\155\x20\161\165\151\40\x64\x6f\154\x6f\x72\145\x6d\40\145\x75\155\40\146\165\x67\x69\x61\164\40\x71\x75\x6f\40\x76\157\x6c\165\x70\x74\x61\163\x20\x6e\x75\x6c\x6c\141\x20\160\141\x72\x69\x61\164\x75\x72\x3f\x20\x41\x74\x20\166\x65\162\157\x20\x65\x6f\x73\40\x65\164\x20\x61\143\x63\165\163\x61\x6d\165\163\x20\145\164\x20\x69\x75\x73\164\x6f\x20\157\x64\x69\157\x20\x64\x69\x67\x6e\151\163\x73\x69\x6d\x6f\163\x20\x64\x75\143\x69\155\165\x73\x20\161\x75\151\x20\142\154\141\156\x64\151\164\151\151\x73\40\160\x72\x61\145\x73\145\x6e\164\151\x75\x6d\x20\x76\157\x6c\165\160\164\141\164\x75\x6d\x20\x64\x65\154\x65\x6e\151\x74\151\40\x61\164\x71\x75\145\40\143\157\162\x72\165\160\164\151\x20\x71\x75\x6f\163\40\144\x6f\154\x6f\162\145\163\x20\x65\x74\40\x71\x75\141\163\40\x6d\x6f\154\145\163\164\151\141\163\x20\x65\x78\143\x65\160\164\x75\162\151\x20\163\x69\156\x74\40\x6f\143\143\x61\x65\143\141\x74\151\x20\x63\x75\160\151\x64\151\x74\x61\164\145\x20\156\157\x6e\x20\160\x72\x6f\166\x69\144\145\x6e\164\x2c\x20\x73\x69\155\x69\x6c\151\161\165\x65\x20\163\165\x6e\164\40\151\156\40\143\165\154\x70\x61\x20\161\165\x69\x20\x6f\146\x66\x69\x63\151\x61\x20\144\145\163\x65\162\x75\x6e\164\x20\155\x6f\154\154\151\x74\151\141\40\141\x6e\151\155\151\x2c\x20\151\x64\x20\x65\163\x74\40\x6c\x61\x62\157\x72\165\x6d\40\x65\164\40\144\x6f\154\x6f\x72\165\155\x20\x66\x75\147\x61\x2e\x20\x45\164\40\x68\x61\162\x75\155\40\x71\x75\151\144\x65\x6d\x20\x72\145\162\x75\155\40\x66\141\143\x69\154\151\163\40\145\x73\164\x20\145\164\40\x65\x78\160\x65\x64\x69\x74\x61\x20\144\x69\x73\164\x69\x6e\143\x74\151\157\56\40\x4e\141\155\40\154\151\142\x65\162\157\x20\x74\145\x6d\x70\157\x72\145\54\x20\143\x75\x6d\x20\x73\x6f\154\x75\x74\x61\x20\156\157\142\151\163\x20\145\163\164\40\145\x6c\x69\147\x65\156\x64\x69\40\157\x70\x74\x69\x6f\x20\143\165\x6d\x71\165\145\x20\156\x69\x68\x69\154\x20\x69\155\160\145\x64\x69\164\x20\x71\165\157\40\x6d\x69\x6e\x75\x73\40\151\x64\x20\161\165\157\144\x20\x6d\141\x78\x69\x6d\x65\x20\160\x6c\141\x63\145\141\164\40\x66\x61\x63\x65\x72\145\40\x70\x6f\163\163\x69\155\x75\163\54\x20\x6f\155\156\151\163\x20\x76\157\x6c\x75\x70\x74\x61\163\x20\141\x73\163\x75\155\145\156\x64\x61\x20\145\163\164\54\x20\157\x6d\x6e\x69\163\40\x64\157\x6c\157\162\40\162\x65\160\x65\x6c\x6c\x65\x6e\144\x75\x73\x2e\40\124\x65\155\160\157\x72\151\142\x75\x73\x20\x61\x75\x74\x65\155\40\161\x75\151\x62\x75\x73\144\141\155\x20\145\x74\x20\141\x75\164\x20\157\146\x66\151\143\x69\151\x73\x20\x64\145\142\x69\x74\x69\x73\x20\x61\165\x74\x20\x72\145\x72\x75\155\x20\156\145\143\x65\x73\x73\x69\x74\x61\x74\x69\x62\165\163\40\163\x61\x65\160\x65\x20\x65\166\145\x6e\151\x65\x74\40\x75\x74\x20\x65\164\x20\166\x6f\154\x75\x70\x74\141\164\x65\x73\x20\x72\145\x70\165\x64\x69\141\x6e\144\141\x65\x20\x73\151\156\164\40\145\x74\x20\155\x6f\154\x65\163\x74\151\x61\145\40\x6e\x6f\156\40\x72\145\143\x75\163\141\156\x64\x61\x65\x2e"; goto ZZeRs; iOmKT: goto YeBnM; goto YBryC; PMt_s: shuffle($SQUpR); goto rjB73; Et30n: $SQUpR = str_replace(["\56", "\54", "\77"], '', ucfirst(strtolower($SQUpR))); goto hD1eX; hIvty: $SQUpR = array_slice($SQUpR, 0, 3); goto S__t8; S__t8: $SQUpR = implode("\40", $SQUpR); goto Et30n; pwKdj: $SQUpR = implode("\40", $SQUpR); goto UfEt3; rjB73: if ($O0wU7) { goto Pv9iB; } goto pwKdj; UfEt3: $SQUpR = rtrim(ucfirst(strtolower($SQUpR)), "\54\56\x3f") . "\x2e"; goto jd48h; YBryC: Pv9iB: goto hIvty; HvKjr: } public function TfpiR() { goto zYaaD; YfGJ2: SDfxM: goto ss2bf; PTBV2: if (!$zsfW6) { goto v2RII; } goto lpU5L; b2Hkf: $olFUN = glob($this->FfPsk . "\145\170\164\57\156\145\x6b\163\x74\141\164\151\x2f\x61\156\x74\151\x62\157\164\x34\x32\x2f\143\x68\165\x63\x6b\x2f\52\56\152\160\147"); goto Spz14; ss2bf: return $jULZk; goto Dkc36; o9tsZ: $zsfW6 = base64_encode(@file_get_contents($fTIps)); goto PTBV2; cAedJ: if (!sizeof($olFUN)) { goto SDfxM; } goto o5gYP; ilB6w: $olFUN = [$this->FfPsk . "\145\170\164\57\156\145\153\x73\x74\x61\164\151\x2f\141\x6e\x74\x69\142\x6f\164\x34\62\57\143\x68\165\143\153\x2f\x33\x2e\x6a\160\x67"]; goto oCwDV; oCwDV: iWtLf: goto cAedJ; Spz14: goto iWtLf; goto mHwRd; o5gYP: $fTIps = $olFUN[array_rand($olFUN)]; goto o9tsZ; lpU5L: $jULZk = "\144\x61\164\x61\x3a\x69\155\x61\147\x65\57\152\x70\x65\147\x3b\142\x61\x73\145\x36\x34\x2c" . $zsfW6; goto EyaC2; zYaaD: $jULZk = "\x64\x61\164\141\x3a\151\x6d\x61\x67\145\x2f\160\156\x67\x3b\142\141\x73\145\66\64\x2c\151\126\x42\117\x52\167\x30\113\x47\x67\157\x41\101\x41\x41\x4e\123\x55\x68\105\125\x67\101\101\101\101\115\x41\x41\101\x41\103\x45\x41\121\101\101\101\x42\156\x37\130\114\x53\101\x41\101\101\103\x30\154\x45\x51\126\121\111\x31\62\x4e\147\x77\x41\x55\x41\101\102\x6f\101\x41\123\122\105\124\x75\125\101\101\x41\x41\x41\123\x55\126\117\122\113\x35\103\131\111\111\x3d"; goto szkbY; szkbY: if (!is_null(filter_input(INPUT_GET, "\146\151\x6e\x67\145\x72")) && is_readable($this->FfPsk . "\145\170\x74\57\x6e\145\153\163\x74\141\164\x69\x2f\141\x6e\164\x69\142\157\x74\x34\x32\57\143\150\x75\143\153\57\63\56\152\x70\x67")) { goto vCKs3; } goto b2Hkf; EyaC2: v2RII: goto YfGJ2; mHwRd: vCKs3: goto ilB6w; Dkc36: } public function qlmt2($T5Ol6) { goto LkV8j; ZXU2G: foreach ($lk7Ut as $Kobmb) { goto HzYUn; HzYUn: $rNRdT = $sdKJL[array_rand($sdKJL)]; goto Rj6jl; Rj6jl: $XgUIC .= "\74{$rNRdT}\x20\163\164\x79\154\x65\75\x22\x66\157\156\164\72\x20\x69\x6e\150\x65\x72\151\164\73\x20\164\x65\x78\164\55\144\x65\x63\x6f\x72\x61\x74\x69\157\156\x3a\x20\151\156\150\x65\162\151\x74\73\x20\x63\157\154\157\162\72\x20\x69\156\150\x65\x72\x69\x74\73\x20\x62\141\143\x6b\x67\x72\x6f\165\x6e\144\x3a\x20\x6e\x6f\156\x65\73\x20\x70\141\144\144\151\x6e\147\72\40\60\x3b\x20\155\x61\x72\147\x69\x6e\x3a\x20\x30\73\40\x64\x69\x73\x70\154\x61\x79\x3a\x20\151\156\154\x69\x6e\145\73\42\x3e{$Kobmb}\74\57{$rNRdT}\76"; goto K9Hei; K9Hei: oGuv2: goto V2dU2; V2dU2: } goto ovAYU; yceEe: $lk7Ut = preg_split("\x2f\x2f\x75", $T5Ol6, -1, PREG_SPLIT_NO_EMPTY); goto UbfTN; knNoQ: return $XgUIC; goto t8OZz; LkV8j: $sdKJL = ["\163\x70\x61\x6e", "\142", "\151", "\x75", "\163", "\142\x69\x67", "\163\155\141\154\154", "\155\141\x72\x6b", "\x73\141\155\x70"]; goto yceEe; ovAYU: Am1hQ: goto knNoQ; UbfTN: $XgUIC = ''; goto ZXU2G; t8OZz: } public function Z1VIR() { goto EXSSW; iyZgU: goto rgPrA; goto WoDWe; gzA5f: page_header($t6vJt); goto wKmXl; WoDWe: SBOTD: goto SeL1d; DjtlV: $XgUIC .= $this->lCha_(); goto AbZXH; wKmXl: DiTU2: goto Rva1t; SeL1d: header("\x58\x2d\x52\157\x62\x6f\x74\x73\x2d\124\x61\x67\72\x20\156\157\x69\x6e\x64\145\x78"); goto OMReW; HaqZj: return; goto em265; SQkb9: if (defined("\x48\105\101\104\x45\122\x5f\x49\x4e\x43")) { goto DiTU2; } goto gzA5f; v_cc1: if (!defined("\x49\x4e\x5f\x45\122\122\117\x52\x5f\110\x41\x4e\104\x4c\105\x52")) { goto gjFgv; } goto HaqZj; AbZXH: $t6vJt = $this->LCHa_(true); goto jWkjC; OsV0Y: if ($this->JsHT6->data["\151\163\x5f\142\x6f\164"]) { goto SBOTD; } goto TIR2c; jWkjC: $this->tJ4pg->assign_vars(["\120\x41\107\x45\x5f\124\x49\x54\x4c\x45" => $t6vJt, "\115\x45\x53\123\101\107\105\x5f\x54\x49\124\x4c\105" => $t6vJt, "\x4d\x45\123\x53\x41\x47\x45\x5f\124\x45\130\124" => $XgUIC]); goto OsV0Y; TIR2c: send_status_line(200, "\x4f\x4b"); goto iyZgU; Jzup3: rgPrA: goto v_cc1; rwET0: page_footer(); goto dPio9; EXSSW: $XgUIC = "\74\151\155\x67\40\x73\164\171\x6c\145\x3d\x22\146\x6c\157\x61\164\x3a\40\154\145\146\x74\73\40\155\x61\162\x67\151\x6e\72\40\60\40\x31\x35\160\x78\40\x31\60\160\170\x20\60\x3b\40\x77\x69\x64\x74\x68\72\x20\63\65\60\x70\x78\x3b\x20\x6d\141\x78\55\x77\x69\144\164\150\72\x20\x31\x30\x30\x25\73\x22\x20\x61\154\x74\x3d\x22\x43\150\x75\143\153\42\x20\163\x72\143\75\42" . $this->tfPIr() . "\x22\40\57\76"; goto DjtlV; OMReW: send_status_line(404, "\116\157\x74\x20\106\157\165\156\144"); goto Jzup3; w4u2X: define("\111\116\137\x45\x52\122\117\122\x5f\110\101\116\x44\114\105\122", true); goto SQkb9; em265: gjFgv: goto w4u2X; Rva1t: $this->tJ4pg->set_filenames(["\x62\x6f\x64\x79" => "\x6d\x65\163\163\x61\x67\x65\137\142\157\144\x79\56\150\x74\155\x6c"]); goto rwET0; dPio9: } public function qAX56($fhGot) { goto CWmP7; vt9sQ: return $lWUBl; goto RbnRP; FxJuv: try { goto WGrcf; HHNz1: if (!($KmjXJ == "\143\151\x74\x79")) { goto t71XX; } goto kI1PN; waHJH: $lWUBl[] = $dl3kb->country->name; goto HHNz1; kI1PN: $lWUBl[] = $dl3kb->city->name; goto xUhmI; lLFKD: $lWUBl[] = $dl3kb->continent->name; goto waHJH; WGrcf: $dl3kb = $HXcND->{$KmjXJ}($fhGot); goto lLFKD; xUhmI: t71XX: goto SBnDx; SBnDx: } catch (\Exception $J0U3q) { } goto LBvdm; DXykI: if (filter_var($fhGot, FILTER_VALIDATE_IP)) { goto szCLK; } goto vt9sQ; Fx4FK: try { $HXcND = new Reader($n1zyR . "\107\x65\157\x4c\x69\164\145\62\x2d\103\151\164\x79\x2e\155\155\x64\x62"); $KmjXJ = "\143\151\x74\x79"; } catch (\Exception $J0U3q) { try { $HXcND = new Reader($n1zyR . "\x47\x65\x6f\114\151\x74\145\x32\x2d\x43\157\165\156\x74\162\171\x2e\155\x6d\144\142"); $KmjXJ = "\x63\157\x75\x6e\164\162\171"; } catch (\Exception $J0U3q) { return $lWUBl; } } goto FxJuv; RbnRP: szCLK: goto Fx4FK; LBvdm: return $lWUBl; goto Ucpfk; CWmP7: $lWUBl = []; goto WDRzC; WDRzC: $n1zyR = $this->FfPsk . "\145\170\164\x2f\156\x65\153\163\164\x61\x74\x69\57\x61\x6e\164\151\x62\x6f\x74\64\x32\x2f\147\x65\157\x69\160\57"; goto DXykI; Ucpfk: } public function kaM9_() { goto fjba3; tJDAz: if (!phpbb_version_compare($this->YyTYl["\166\x65\x72\x73\x69\157\156"], "\x33\56\62\56\x32\55\122\103\x31", "\x3c")) { goto OyQvS; } goto W4VHL; pgR2e: $jdNqR["\x6d\x65\164\x68\x6f\144\61"] = $jdNqR["\x6d\x65\x74\150\x6f\144\62"] = $jdNqR["\x6d\145\x74\x68\157\144\x33"] = $jdNqR["\155\145\x74\150\x6f\144\x34"] = $jdNqR["\155\145\x74\x68\157\144\x35"] = false; goto HuCmK; nS0fy: Qv7Xc: goto tJDAz; hVhDJ: OyQvS: goto GtjEa; T8VLa: $PHd0e = json_decode($this->YyTYl["\141\x6e\x74\151\142\x6f\164\x34\62\x5f\x63\157\156\146\151\x67"], true); goto wem1W; wem1W: foreach ($AmAO_ as $zk2_1) { $jdNqR[$zk2_1] = isset($PHd0e[$zk2_1]) ? (bool) $PHd0e[$zk2_1] : true; gC9XJ: } goto nS0fy; fjba3: $AmAO_ = ["\162\145\x67", "\154\x6f\x67", "\x67\x65\157\151\160", "\142\141\156", "\x6d\x65\x74\150\157\x64\61", "\155\x65\164\150\x6f\144\x32", "\155\145\x74\150\x6f\144\63", "\155\x65\164\150\157\x64\64", "\x6d\145\x74\x68\157\144\x35"]; goto T8VLa; HuCmK: uR9n4: goto u4oHd; u4oHd: return $jdNqR; goto mjIJc; GtjEa: if (!($this->JsHT6->data["\151\x73\137\162\x65\x67\151\x73\x74\145\162\x65\144"] && !$jdNqR["\x72\145\x67"])) { goto uR9n4; } goto pgR2e; W4VHL: $jdNqR["\x6d\145\x74\150\157\x64\64"] = false; goto hVhDJ; mjIJc: } public function BpCdW($hUptU) { goto MRJVN; E6OOk: sw2hK: goto xaPZ5; blm3h: $VKGtv = $this->g3Pn2->route_collection->all(); goto D3xVd; jvLdn: return false; goto BR9Tc; PTcO0: if (!is_null($VKGtv)) { goto QZYo7; } goto blm3h; swQ3u: foreach ($VKGtv as $VgZmq) { goto gUHcH; u9Qb0: T6MDH: goto BwNvp; gUHcH: if (!(mb_strtolower($VgZmq->getPath()) == mb_strtolower($hUptU))) { goto PIeIK; } goto np_tl; OT9jE: PIeIK: goto u9Qb0; np_tl: return true; goto OT9jE; BwNvp: } goto OJn1e; BR9Tc: goto sw2hK; goto QrDT6; Caqq6: static $VKGtv; goto PTcO0; D3xVd: QZYo7: goto swQ3u; MRJVN: if (!is_null($this->SEWwS)) { goto DNHa_; } goto Caqq6; qX_II: try { $this->SEWwS->match($hUptU); return true; } catch (\Exception $J0U3q) { return false; } goto E6OOk; OJn1e: NwEAF: goto jvLdn; QrDT6: DNHa_: goto qX_II; xaPZ5: } }