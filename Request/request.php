<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if(isset($_POST['send'])){

  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $email_no=$_POST['email'];
   $role=$_POST['role']; 
   $status=1;
   $pass= rand(100000, 999999);

   $to=$email_no;
   $sub="Password";
 
 $mail = new PHPMailer(true);
 try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
  $mail->isSMTP();                             
  $mail->Host       = 'smtp.hostinger.com';    
  $mail->SMTPAuth   = true;                           
  $mail->Username   = 'divyani.keshari@tectignis.in';           
  $mail->Password   = 'Admin#07';                          
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
  $mail->Port       = 465;                            

  //Recipients
  $mail->setFrom('divyani.keshari@tectignis.in', 'Tectignis It Solution');
  $mail->addAddress($email_no, $name);    
  
  //Content
  $mail->isHTML(true);                               
  $mail->Subject = 'Password';
  $mail->Body    = 'Login Detail '.$name.' and '.$pass;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if($mail->send()){
    $passwordhash=password_hash($pass,PASSWORD_BCRYPT);

  $sql=mysqli_query($conn,"INSERT INTO `userlogin`(`username`, `email`, `password`, `gender`, `role`,`status`) VALUES ('$name','$email_no','$passwordhash','$gender','$role','$status')");
    if($sql=1){
      header("location:users.php");
    }
    else{
      echo "<script>alert('Something Wrong');</script>";
    }
  
  }
  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="referrer" content="always">
    <meta name="Author" content="SeaRates">
    <meta property="og:site_name" content="SeaRates">
    <meta name="viewport" content="width=1200">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script type="text/javascript"
        src="https://bam.eu01.nr-data.net/1/NRJS-d09638e32ad52292ab2?a=388362697&amp;v=1216.487a282&amp;to=MhBSZQoZVxdVV01dXQtacVIMEVYKG1BcUlMQGUQeCxBQFERdV1MdFxBBRB0LTQ%3D%3D&amp;rst=8629&amp;ck=1&amp;ref=https://www.searates.com/shipping/request/&amp;ap=115&amp;be=5725&amp;fe=8526&amp;dc=5899&amp;af=err,xhr,stn,ins,spa&amp;perf=%7B%22timing%22:%7B%22of%22:1662539946566,%22n%22:0,%22f%22:3,%22dn%22:23,%22dne%22:5015,%22c%22:5015,%22s%22:5136,%22ce%22:5261,%22rq%22:5261,%22rp%22:5604,%22rpe%22:5728,%22dl%22:5614,%22di%22:5829,%22ds%22:5898,%22de%22:5966,%22dc%22:8524,%22l%22:8526,%22le%22:8529%7D,%22navigation%22:%7B%22ty%22:2%7D%7D&amp;at=HldRE0IDRBk%3D&amp;jsonp=NREUM.setToken">
    </script>
    <script src="https://js-agent.newrelic.com/nr-spa-1216.min.js"></script>
    <script id="emarsys_webpersonalization_es6" src="//static.scarabresearch.com/wpjs/wpes6.js?ts=2748" charset="utf-8">
    </script>
    <script type="text/javascript" async="" src="https://static.ads-twitter.com/uwt.js"></script>
    <script type="text/javascript" async="" src="https://static.hotjar.com/c/hotjar-2026551.js?sv=7"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    <script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-WC9TMPTWVL&amp;l=dataLayer&amp;cx=c"></script>
    <script id="emarsys_webpersonalization_loader" src="//static.scarabresearch.com/wpjs/wploader.js?ts=2748"
        charset="utf-8"></script>
    <script async=""
        src="https://checkpoint.url-protection.com/v1/url?o=https%3A//connect.facebook.net/en_US/fbevents.js&amp;g=YTgzMTc3MzQ5NzFmNjBhZQ==&amp;h=N2ZkYWM2ZjAxMTZlZTNiYjNhYmMwYzk5ZmI0ZWY2NmVhOTUzMTllZWNlZjE1NjhkMTQ1ZDQ0MjAwODkyZmY1Mg==&amp;p=Y3AxZTpkcHdvcmxkOmM6bzpkMzcwY2ZiMmU2MWQwNzAwZGFjY2Y2YTQyNWZkZTdlNTp2MTp0OlQ=">
    </script>
    <script id="scarab-js-api" src="//cdn.scarabresearch.com/js/17FE253DDE082B0F/scarab-v2.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5MQKQ58"></script>
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).init = {
            privacy: {
                cookies_enabled: true
            },
            ajax: {
                deny_list: ["bam.eu01.nr-data.net"]
            },
            distributed_tracing: {
                enabled: true
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            agentID: "388581761",
            accountID: "3461589",
            trustKey: "2914910",
            xpid: "VwIBUFNbARADXFlRAQMBX1M=",
            licenseKey: "NRJS-d09638e32ad52292ab2",
            applicationID: "388362697"
        };
        window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var o = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(o.exports, function (e) {
                        var o = t[n][1][e];
                        return r(o || e)
                    }, o, o.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function (t, e, n) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    } catch (e) {}
                }
                var o, i = t("ee"),
                    a = t(31),
                    s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" ==
                        typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0),
                            o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                } catch (c) {}
                s.nrDev && i.on("internal-error", function (t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function (t, e, n) {
                    r(n.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function (t,
                    e) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function (t, e, n) {
                function r(t, e, n, r, s) {
                    try {
                        l ? l -= 1 : o(s || new UncaughtException(t, e, n), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, e, n) {
                    this.message = t || "Uncaught error with no additional information", this
                        .sourceURL = e, this.line = n
                }

                function o(t, e) {
                    var n = e ? null : c.now();
                    i("err", [t, n])
                }
                var i = t("handle"),
                    a = t(32),
                    s = t("ee"),
                    c = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    p = "nr@seenError";
                if (!c.disabled) {
                    var l = 0;
                    c.features.err = !0, t(1), window.onerror = r;
                    try {
                        throw new Error
                    } catch (h) {
                        "stack" in h && (t(14), t(13), "addEventListener" in window && t(7), c
                            .xhrWrappable && t(15), d = !0)
                    }
                    s.on("fn-start", function (t, e, n) {
                        d && (l += 1)
                    }), s.on("fn-err", function (t, e, n) {
                        d && !n[p] && (f(n, p, function () {
                            return !0
                        }), this.thrown = !0, o(n))
                    }), s.on("fn-end", function () {
                        d && !this.thrown && l > 0 && (l -= 1)
                    }), s.on("internal-error", function (t) {
                        i("ierr", [t, c.now(), !0])
                    })
                }
            }, {}],
            3: [function (t, e, n) {
                var r = t("loader");
                r.disabled || (r.features.ins = !0)
            }, {}],
            4: [function (t, e, n) {
                function r() {
                    U++, L = g.hash, this[u] = y.now()
                }

                function o() {
                    U--, g.hash !== L && i(0, !0);
                    var t = y.now();
                    this[h] = ~~this[h] + t - this[u], this[d] = t
                }

                function i(t, e) {
                    E.emit("newURL", ["" + g, e])
                }

                function a(t, e) {
                    t.on(e, function () {
                        this[e] = y.now()
                    })
                }
                var s = "-start",
                    c = "-end",
                    f = "-body",
                    u = "fn" + s,
                    d = "fn" + c,
                    p = "cb" + s,
                    l = "cb" + c,
                    h = "jsTime",
                    m = "fetch",
                    v = "addEventListener",
                    w = window,
                    g = w.location,
                    y = t("loader");
                if (w[v] && y.xhrWrappable && !y.disabled) {
                    var x = t(11),
                        b = t(12),
                        E = t(9),
                        R = t(7),
                        O = t(14),
                        T = t(8),
                        S = t(15),
                        P = t(10),
                        M = t("ee"),
                        C = M.get("tracer"),
                        N = t(23);
                    t(17), y.features.spa = !0;
                    var L, U = 0;
                    M.on(u, r), b.on(p, r), P.on(p, r), M.on(d, o), b.on(l, o), P.on(l, o), M.buffer([u,
                            d, "xhr-resolved"
                        ]), R.buffer([u]), O.buffer(["setTimeout" + c, "clearTimeout" + s, u]), S
                        .buffer([u, "new-xhr", "send-xhr" + s]), T.buffer([m + s, m + "-done", m + f +
                            s, m + f + c
                        ]), E.buffer(["newURL"]), x.buffer([u]), b.buffer(["propagate", p, l,
                            "executor-err", "resolve" + s
                        ]), C.buffer([u, "no-" + u]), P.buffer(["new-jsonp", "cb-start", "jsonp-error",
                            "jsonp-end"
                        ]), a(T, m + s), a(T, m + "-done"), a(P, "new-jsonp"), a(P, "jsonp-end"), a(P,
                            "cb-start"), E.on("pushState-end", i), E.on("replaceState-end", i), w[v](
                            "hashchange", i, N(!0)), w[v]("load", i, N(!0)), w[v]("popstate",
                            function () {
                                i(0, U > 1)
                            }, N(!0))
                }
            }, {}],
            5: [function (t, e, n) {
                function r() {
                    var t = new PerformanceObserver(function (t, e) {
                        var n = t.getEntries();
                        s(v, [n])
                    });
                    try {
                        t.observe({
                            entryTypes: ["resource"]
                        })
                    } catch (e) {}
                }

                function o(t) {
                    if (s(v, [window.performance.getEntriesByType(w)]), window.performance["c" + p])
                        try {
                            window.performance[h](m, o, !1)
                        } catch (t) {} else try {
                            window.performance[h]("webkit" + m, o, !1)
                        } catch (t) {}
                }

                function i(t) {}
                if (window.performance && window.performance.timing && window.performance
                    .getEntriesByType) {
                    var a = t("ee"),
                        s = t("handle"),
                        c = t(14),
                        f = t(13),
                        u = t(6),
                        d = t(23),
                        p = "learResourceTimings",
                        l = "addEventListener",
                        h = "removeEventListener",
                        m = "resourcetimingbufferfull",
                        v = "bstResource",
                        w = "resource",
                        g = "-start",
                        y = "-end",
                        x = "fn" + g,
                        b = "fn" + y,
                        E = "bstTimer",
                        R = "pushState",
                        O = t("loader");
                    if (!O.disabled) {
                        O.features.stn = !0, t(9), "addEventListener" in window && t(7);
                        var T = NREUM.o.EV;
                        a.on(x, function (t, e) {
                                var n = t[0];
                                n instanceof T && (this.bstStart = O.now())
                            }), a.on(b, function (t, e) {
                                var n = t[0];
                                n instanceof T && s("bst", [n, e, this.bstStart, O.now()])
                            }), c.on(x, function (t, e, n) {
                                this.bstStart = O.now(), this.bstType = n
                            }), c.on(b, function (t, e) {
                                s(E, [e, this.bstStart, O.now(), this.bstType])
                            }), f.on(x, function () {
                                this.bstStart = O.now()
                            }), f.on(b, function (t, e) {
                                s(E, [e, this.bstStart, O.now(), "requestAnimationFrame"])
                            }), a.on(R + g, function (t) {
                                this.time = O.now(), this.startPath = location.pathname + location
                                    .hash
                            }), a.on(R + y, function (t) {
                                s("bstHist", [location.pathname + location.hash, this.startPath,
                                    this.time
                                ])
                            }), u() ? (s(v, [window.performance.getEntriesByType("resource")]), r()) :
                            l in window.performance && (window.performance["c" + p] ? window
                                .performance[l](m, o, d(!1)) : window.performance[l]("webkit" + m, o, d(
                                    !1))), document[l]("scroll", i, d(!1)), document[l]("keypress", i,
                                d(!1)), document[l]("click", i, d(!1))
                    }
                }
            }, {}],
            6: [function (t, e, n) {
                e.exports = function () {
                    return "PerformanceObserver" in window && "function" == typeof window
                        .PerformanceObserver
                }
            }, {}],
            7: [function (t, e, n) {
                function r(t) {
                    for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
                    e && o(e)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, e) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    s = t("wrap-function")(a, !0),
                    c = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f
                    .prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start",
                        function (t, e) {
                            var n = t[1];
                            if (null !== n && ("function" == typeof n || "object" == typeof n)) {
                                var r = c(n, "nr@wrapped", function () {
                                    function t() {
                                        if ("function" == typeof n.handleEvent) return n
                                            .handleEvent.apply(n, arguments)
                                    }
                                    var e = {
                                        object: t,
                                        "function": n
                                    } [typeof n];
                                    return e ? s(e, "fn-", null, e.name || "anonymous") : n
                                });
                                this.wrapped = t[1] = r
                            }
                        }), a.on(d + "-start", function (t) {
                        t[1] = this.wrapped || t[1]
                    })
            }, {}],
            8: [function (t, e, n) {
                function r(t, e, n) {
                    var r = t[e];
                    "function" == typeof r && (t[e] = function () {
                        var t = i(arguments),
                            e = {};
                        o.emit(n + "before-start", [t], e);
                        var a;
                        e[m] && e[m].dt && (a = e[m].dt);
                        var s = r.apply(this, t);
                        return o.emit(n + "start", [t, a], s), s.then(function (t) {
                            return o.emit(n + "end", [null, t], s), t
                        }, function (t) {
                            throw o.emit(n + "end", [t], s), t
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(32),
                    a = t(31);
                e.exports = o;
                var s = window,
                    c = "fetch-",
                    f = c + "body-",
                    u = ["arrayBuffer", "blob", "json", "text", "formData"],
                    d = s.Request,
                    p = s.Response,
                    l = s.fetch,
                    h = "prototype",
                    m = "nr@context";
                d && p && l && (a(u, function (t, e) {
                    r(d[h], e, f), r(p[h], e, f)
                }), r(s, "fetch", c), o.on(c + "end", function (t, e) {
                    var n = this;
                    if (e) {
                        var r = e.headers.get("content-length");
                        null !== r && (n.rxSize = r), o.emit(c + "done", [null, e], n)
                    } else o.emit(c + "done", [t], n)
                }))
            }, {}],
            9: [function (t, e, n) {
                var r = t("ee").get("history"),
                    o = t("wrap-function")(r);
                e.exports = r;
                var i = window.history && window.history.constructor && window.history.constructor
                    .prototype,
                    a = window.history;
                i && i.pushState && i.replaceState && (a = i), o.inPlace(a, ["pushState",
                    "replaceState"
                ], "-")
            }, {}],
            10: [function (t, e, n) {
                function r(t) {
                    function e() {
                        f.emit("jsonp-end", [], l), t.removeEventListener("load", e, c(!1)), t
                            .removeEventListener("error", n, c(!1))
                    }

                    function n() {
                        f.emit("jsonp-error", [], l), f.emit("jsonp-end", [], l), t.removeEventListener(
                            "load", e, c(!1)), t.removeEventListener("error", n, c(!1))
                    }
                    var r = t && "string" == typeof t.nodeName && "script" === t.nodeName.toLowerCase();
                    if (r) {
                        var o = "function" == typeof t.addEventListener;
                        if (o) {
                            var a = i(t.src);
                            if (a) {
                                var d = s(a),
                                    p = "function" == typeof d.parent[d.key];
                                if (p) {
                                    var l = {};
                                    u.inPlace(d.parent, [d.key], "cb-", l), t.addEventListener("load",
                                        e, c(!1)), t.addEventListener("error", n, c(!1)), f.emit(
                                        "new-jsonp", [t.src], l)
                                }
                            }
                        }
                    }
                }

                function o() {
                    return "addEventListener" in window
                }

                function i(t) {
                    var e = t.match(d);
                    return e ? e[1] : null
                }

                function a(t, e) {
                    var n = t.match(l),
                        r = n[1],
                        o = n[3];
                    return o ? a(o, e[r]) : e[r]
                }

                function s(t) {
                    var e = t.match(p);
                    return e && e.length >= 3 ? {
                        key: e[2],
                        parent: a(e[1], window)
                    } : {
                        key: t,
                        parent: window
                    }
                }
                var c = t(23),
                    f = t("ee").get("jsonp"),
                    u = t("wrap-function")(f);
                if (e.exports = f, o()) {
                    var d = /[?&](?:callback|cb)=([^&#]+)/,
                        p = /(.*)\.([^.]+)/,
                        l = /^(\w+)(\.|$)(.*)$/,
                        h = ["appendChild", "insertBefore", "replaceChild"];
                    Node && Node.prototype && Node.prototype.appendChild ? u.inPlace(Node.prototype, h,
                        "dom-") : (u.inPlace(HTMLElement.prototype, h, "dom-"), u.inPlace(
                        HTMLHeadElement.prototype, h, "dom-"), u.inPlace(HTMLBodyElement
                        .prototype, h, "dom-")), f.on("dom-start", function (t) {
                        r(t[0])
                    })
                }
            }, {}],
            11: [function (t, e, n) {
                var r = t("ee").get("mutation"),
                    o = t("wrap-function")(r),
                    i = NREUM.o.MO;
                e.exports = r, i && (window.MutationObserver = function (t) {
                    return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
                }, MutationObserver.prototype = i.prototype)
            }, {}],
            12: [function (t, e, n) {
                function r(t) {
                    var e = i.context(),
                        n = s(t, "executor-", e, null, !1),
                        r = new f(n);
                    return i.context(r).getCtx = function () {
                        return e
                    }, r
                }
                var o = t("wrap-function"),
                    i = t("ee").get("promise"),
                    a = t("ee").getOrSetContext,
                    s = o(i),
                    c = t(31),
                    f = NREUM.o.PR;
                e.exports = i, f && (window.Promise = r, ["all", "race"].forEach(function (t) {
                    var e = f[t];
                    f[t] = function (n) {
                        function r(t) {
                            return function () {
                                i.emit("propagate", [null, !o], a, !1, !1), o = o ||
                                    !t
                            }
                        }
                        var o = !1;
                        c(n, function (e, n) {
                            Promise.resolve(n).then(r("all" === t), r(!1))
                        });
                        var a = e.apply(f, arguments),
                            s = f.resolve(a);
                        return s
                    }
                }), ["resolve", "reject"].forEach(function (t) {
                    var e = f[t];
                    f[t] = function (t) {
                        var n = e.apply(f, arguments);
                        return t !== n && i.emit("propagate", [t, !0], n, !1, !1), n
                    }
                }), f.prototype["catch"] = function (t) {
                    return this.then(null, t)
                }, f.prototype = Object.create(f.prototype, {
                    constructor: {
                        value: r
                    }
                }), c(Object.getOwnPropertyNames(f), function (t, e) {
                    try {
                        r[e] = f[e]
                    } catch (n) {}
                }), o.wrapInPlace(f.prototype, "then", function (t) {
                    return function () {
                        var e = this,
                            n = o.argsToArray.apply(this, arguments),
                            r = a(e);
                        r.promise = e, n[0] = s(n[0], "cb-", r, null, !1), n[1] = s(n[
                            1], "cb-", r, null, !1);
                        var c = t.apply(this, n);
                        return r.nextPromise = c, i.emit("propagate", [e, !0], c, !1, !
                            1), c
                    }
                }), i.on("executor-start", function (t) {
                    t[0] = s(t[0], "resolve-", this, null, !1), t[1] = s(t[1], "resolve-",
                        this, null, !1)
                }), i.on("executor-err", function (t, e, n) {
                    t[1](n)
                }), i.on("cb-end", function (t, e, n) {
                    i.emit("propagate", [n, !0], this.nextPromise, !1, !1)
                }), i.on("propagate", function (t, e, n) {
                    this.getCtx && !e || (this.getCtx = function () {
                        if (t instanceof Promise) var e = i.context(t);
                        return e && e.getCtx ? e.getCtx() : this
                    })
                }), r.toString = function () {
                    return "" + f
                })
            }, {}],
            13: [function (t, e, n) {
                var r = t("ee").get("raf"),
                    o = t("wrap-function")(r),
                    i = "equestAnimationFrame";
                e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i],
                    "raf-"), r.on("raf-start", function (t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            14: [function (t, e, n) {
                function r(t, e, n) {
                    t[0] = a(t[0], "fn-", null, n)
                }

                function o(t, e, n) {
                    this.method = n, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-",
                        this, n)
                }
                var i = t("ee").get("timer"),
                    a = t("wrap-function")(i),
                    s = "setTimeout",
                    c = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                e.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c +
                    d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u,
                    o)
            }, {}],
            15: [function (t, e, n) {
                function r(t, e) {
                    d.inPlace(e, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this,
                        e = u.context(t);
                    t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)),
                        d.inPlace(t, y, "fn-", s)
                }

                function i(t) {
                    x.push(t), m && (E ? E.then(a) : w ? w(a) : (R = -R, O.data = R))
                }

                function a() {
                    for (var t = 0; t < x.length; t++) r([], x[t]);
                    x.length && (x = [])
                }

                function s(t, e) {
                    return e
                }

                function c(t, e) {
                    for (var n in t) e[n] = t[n];
                    return e
                }
                t(7);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t("wrap-function")(u),
                    p = t(23),
                    l = NREUM.o,
                    h = l.XHR,
                    m = l.MO,
                    v = l.PR,
                    w = l.SI,
                    g = "readystatechange",
                    y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress",
                        "ontimeout"
                    ],
                    x = [];
                e.exports = u;
                var b = window.XMLHttpRequest = function (t) {
                    var e = new h(t);
                    try {
                        u.emit("new-xhr", [e], e), e.addEventListener(g, o, p(!1))
                    } catch (n) {
                        try {
                            u.emit("internal-error", [n])
                        } catch (r) {}
                    }
                    return e
                };
                if (c(h, b), b.prototype = h.prototype, d.inPlace(b.prototype, ["open", "send"],
                        "-xhr-", s), u.on("send-xhr-start", function (t, e) {
                        r(t, e), i(e)
                    }), u.on("open-xhr-start", r), m) {
                    var E = v && v.resolve();
                    if (!w && !v) {
                        var R = 1,
                            O = document.createTextNode(R);
                        new m(a).observe(O, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function (t) {
                    t[0] && t[0].type === g || a()
                })
            }, {}],
            16: [function (t, e, n) {
                function r(t) {
                    if (!s(t)) return null;
                    var e = window.NREUM;
                    if (!e.loader_config) return null;
                    var n = (e.loader_config.accountID || "").toString() || null,
                        r = (e.loader_config.agentID || "").toString() || null,
                        f = (e.loader_config.trustKey || "").toString() || null;
                    if (!n || !r) return null;
                    var h = l.generateSpanId(),
                        m = l.generateTraceId(),
                        v = Date.now(),
                        w = {
                            spanId: h,
                            traceId: m,
                            timestamp: v
                        };
                    return (t.sameOrigin || c(t) && p()) && (w.traceContextParentHeader = o(h, m), w
                        .traceContextStateHeader = i(h, v, n, r, f)), (t.sameOrigin && !u() || !t
                        .sameOrigin && c(t) && d()) && (w.newrelicHeader = a(h, m, v, n, r, f)), w
                }

                function o(t, e) {
                    return "00-" + e + "-" + t + "-01"
                }

                function i(t, e, n, r, o) {
                    var i = 0,
                        a = "",
                        s = 1,
                        c = "",
                        f = "";
                    return o + "@nr=" + i + "-" + s + "-" + n + "-" + r + "-" + t + "-" + a + "-" + c +
                        "-" + f + "-" + e
                }

                function a(t, e, n, r, o, i) {
                    var a = "btoa" in window && "function" == typeof window.btoa;
                    if (!a) return null;
                    var s = {
                        v: [0, 1],
                        d: {
                            ty: "Browser",
                            ac: r,
                            ap: o,
                            id: t,
                            tr: e,
                            ti: n
                        }
                    };
                    return i && r !== i && (s.d.tk = i), btoa(JSON.stringify(s))
                }

                function s(t) {
                    return f() && c(t)
                }

                function c(t) {
                    var e = !1,
                        n = {};
                    if ("init" in NREUM && "distributed_tracing" in NREUM.init && (n = NREUM.init
                            .distributed_tracing), t.sameOrigin) e = !0;
                    else if (n.allowed_origins instanceof Array)
                        for (var r = 0; r < n.allowed_origins.length; r++) {
                            var o = h(n.allowed_origins[r]);
                            if (t.hostname === o.hostname && t.protocol === o.protocol && t.port === o
                                .port) {
                                e = !0;
                                break
                            }
                        }
                    return e
                }

                function f() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init
                        .distributed_tracing.enabled
                }

                function u() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init
                        .distributed_tracing.exclude_newrelic_header
                }

                function d() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && NREUM.init
                        .distributed_tracing.cors_use_newrelic_header !== !1
                }

                function p() {
                    return "init" in NREUM && "distributed_tracing" in NREUM.init && !!NREUM.init
                        .distributed_tracing.cors_use_tracecontext_headers
                }
                var l = t(28),
                    h = t(18);
                e.exports = {
                    generateTracePayload: r,
                    shouldGenerateTrace: s
                }
            }, {}],
            17: [function (t, e, n) {
                function r(t) {
                    var e = this.params,
                        n = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < p; r++) t.removeEventListener(d[r], this.listener, !1);
                        return e.protocol && "data" === e.protocol ? void g("Ajax/DataUrl/Excluded") :
                            void(e.aborted || (n.duration = a.now() - this.startTime, this
                                .loadCaptureCalled || 4 !== t.readyState ? null == e.status && (e
                                    .status = 0) : i(this, t), n.cbTime = this.cbTime, s("xhr", [e,
                                    n, this.startTime, this.endTime, "xhr"
                                ], this)))
                    }
                }

                function o(t, e) {
                    var n = c(e),
                        r = t.params;
                    r.hostname = n.hostname, r.port = n.port, r.protocol = n.protocol, r.host = n
                        .hostname + ":" + n.port, r.pathname = n.pathname, t.parsedOrigin = n, t
                        .sameOrigin = n.sameOrigin
                }

                function i(t, e) {
                    t.params.status = e.status;
                    var n = v(e, t.lastSize);
                    if (n && (t.metrics.rxSize = n), t.sameOrigin) {
                        var r = e.getResponseHeader("X-NewRelic-App-Data");
                        r && (t.params.cat = r.split(", ").pop())
                    }
                    t.loadCaptureCalled = !0
                }
                var a = t("loader");
                if (a.xhrWrappable && !a.disabled) {
                    var s = t("handle"),
                        c = t(18),
                        f = t(16).generateTracePayload,
                        u = t("ee"),
                        d = ["load", "error", "abort", "timeout"],
                        p = d.length,
                        l = t("id"),
                        h = t(24),
                        m = t(22),
                        v = t(19),
                        w = t(23),
                        g = t(25).recordSupportability,
                        y = NREUM.o.REQ,
                        x = window.XMLHttpRequest;
                    a.features.xhr = !0, t(15), t(8), u.on("new-xhr", function (t) {
                        var e = this;
                        e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e
                            .xhrGuids = {}, e.lastSize = null, e.loadCaptureCalled = !1, e
                            .params = this.params || {}, e.metrics = this.metrics || {}, t
                            .addEventListener("load", function (n) {
                                i(e, t)
                            }, w(!1)), h && (h > 34 || h < 10) || t.addEventListener("progress",
                                function (t) {
                                    e.lastSize = t.loaded
                                }, w(!1))
                    }), u.on("open-xhr-start", function (t) {
                        this.params = {
                            method: t[0]
                        }, o(this, t[1]), this.metrics = {}
                    }), u.on("open-xhr-end", function (t, e) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this
                            .sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM
                                .loader_config.xpid);
                        var n = f(this.parsedOrigin);
                        if (n) {
                            var r = !1;
                            n.newrelicHeader && (e.setRequestHeader("newrelic", n
                                .newrelicHeader), r = !0), n.traceContextParentHeader && (e
                                .setRequestHeader("traceparent", n
                                    .traceContextParentHeader), n.traceContextStateHeader &&
                                e
                                .setRequestHeader("tracestate", n.traceContextStateHeader),
                                r = !0), r && (this.dt = n)
                        }
                    }), u.on("send-xhr-start", function (t, e) {
                        var n = this.metrics,
                            r = t[0],
                            o = this;
                        if (n && r) {
                            var i = m(r);
                            i && (n.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function (t) {
                            try {
                                "abort" !== t.type || o.loadCaptureCalled || (o.params
                                    .aborted = !0), ("load" !== t.type || o.called === o
                                    .totalCbs && (o.onloadCalled || "function" !=
                                        typeof e.onload)) && o.end(e)
                            } catch (n) {
                                try {
                                    u.emit("internal-error", [n])
                                } catch (r) {}
                            }
                        };
                        for (var s = 0; s < p; s++) e.addEventListener(d[s], this.listener, w(!
                            1))
                    }), u.on("xhr-cb-time", function (t, e, n) {
                        this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this
                            .called !== this.totalCbs || !this.onloadCalled && "function" ==
                            typeof n.onload || this.end(n)
                    }), u.on("xhr-load-added", function (t, e) {
                        var n = "" + l(t) + !!e;
                        this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this
                            .totalCbs += 1)
                    }), u.on("xhr-load-removed", function (t, e) {
                        var n = "" + l(t) + !!e;
                        this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this
                            .totalCbs -= 1)
                    }), u.on("xhr-resolved", function () {
                        this.endTime = a.now()
                    }), u.on("addEventListener-end", function (t, e) {
                        e instanceof x && "load" === t[0] && u.emit("xhr-load-added", [t[1], t[
                            2]], e)
                    }), u.on("removeEventListener-end", function (t, e) {
                        e instanceof x && "load" === t[0] && u.emit("xhr-load-removed", [t[1],
                            t[2]
                        ], e)
                    }), u.on("fn-start", function (t, e, n) {
                        e instanceof x && ("onload" === n && (this.onload = !0), ("load" === (t[
                            0] && t[0].type) || this.onload) && (this.xhrCbStart = a
                            .now()))
                    }), u.on("fn-end", function (t, e) {
                        this.xhrCbStart && u.emit("xhr-cb-time", [a.now() - this.xhrCbStart,
                            this.onload, e
                        ], e)
                    }), u.on("fetch-before-start", function (t) {
                        function e(t, e) {
                            var n = !1;
                            return e.newrelicHeader && (t.set("newrelic", e.newrelicHeader),
                                n = !0), e.traceContextParentHeader && (t.set("traceparent",
                                    e.traceContextParentHeader), e
                                .traceContextStateHeader && t.set("tracestate", e
                                    .traceContextStateHeader), n = !0), n
                        }
                        var n, r = t[1] || {};
                        "string" == typeof t[0] ? n = t[0] : t[0] && t[0].url ? n = t[0].url :
                            window.URL && t[0] && t[0] instanceof URL && (n = t[0].href), n && (
                                this.parsedOrigin = c(n), this.sameOrigin = this.parsedOrigin
                                .sameOrigin);
                        var o = f(this.parsedOrigin);
                        if (o && (o.newrelicHeader || o.traceContextParentHeader))
                            if ("string" == typeof t[0] || window.URL && t[0] && t[
                                    0] instanceof URL) {
                                var i = {};
                                for (var a in r) i[a] = r[a];
                                i.headers = new Headers(r.headers || {}), e(i.headers, o) && (
                                    this.dt = o), t.length > 1 ? t[1] = i : t.push(i)
                            } else t[0] && t[0].headers && e(t[0].headers, o) && (this.dt = o)
                    }), u.on("fetch-start", function (t, e) {
                        this.params = {}, this.metrics = {}, this.startTime = a.now(), this.dt =
                            e, t.length >= 1 && (this.target = t[0]), t.length >= 2 && (this
                                .opts = t[1]);
                        var n, r = this.opts || {},
                            i = this.target;
                        if ("string" == typeof i ? n = i : "object" == typeof i &&
                            i instanceof y ? n = i.url : window.URL && "object" == typeof i &&
                            i instanceof URL && (n = i.href), o(this, n), "data" !== this.params
                            .protocol) {
                            var s = ("" + (i && i instanceof y && i.method || r.method ||
                                "GET")).toUpperCase();
                            this.params.method = s, this.txSize = m(r.body) || 0
                        }
                    }), u.on("fetch-done", function (t, e) {
                        if (this.endTime = a.now(), this.params || (this.params = {}),
                            "data" === this.params.protocol) return void g(
                            "Ajax/DataUrl/Excluded");
                        this.params.status = e ? e.status : 0;
                        var n;
                        "string" == typeof this.rxSize && this.rxSize.length > 0 && (n = +this
                            .rxSize);
                        var r = {
                            txSize: this.txSize,
                            rxSize: n,
                            duration: a.now() - this.startTime
                        };
                        s("xhr", [this.params, r, this.startTime, this.endTime, "fetch"], this)
                    })
                }
            }, {}],
            18: [function (t, e, n) {
                var r = {};
                e.exports = function (t) {
                    if (t in r) return r[t];
                    if (0 === (t || "").indexOf("data:")) return {
                        protocol: "data"
                    };
                    var e = document.createElement("a"),
                        n = window.location,
                        o = {};
                    e.href = t, o.port = e.port;
                    var i = e.href.split("://");
                    !o.port && i[1] && (o.port = i[1].split("/")[0].split("@").pop().split(":")[1]),
                        o.port && "0" !== o.port || (o.port = "https" === i[0] ? "443" : "80"), o
                        .hostname = e.hostname || n.hostname, o.pathname = e.pathname, o.protocol =
                        i[0], "/" !== o.pathname.charAt(0) && (o.pathname = "/" + o.pathname);
                    var a = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
                        s = e.hostname === document.domain && e.port === n.port;
                    return o.sameOrigin = a && (!e.hostname || s), "/" === o.pathname && (r[t] = o),
                        o
                }
            }, {}],
            19: [function (t, e, n) {
                function r(t, e) {
                    var n = t.responseType;
                    return "json" === n && null !== e ? e : "arraybuffer" === n || "blob" === n ||
                        "json" === n ? o(t.response) : "text" === n || "" === n || void 0 === n ? o(t
                            .responseText) : void 0
                }
                var o = t(22);
                e.exports = r
            }, {}],
            20: [function (t, e, n) {
                function r() {}

                function o(t, e, n, r) {
                    return function () {
                        return u.recordSupportability("API/" + e + "/called"), i(t + e, [f.now()]
                            .concat(s(arguments)), n ? null : this, r), n ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(31),
                    s = t(32),
                    c = t("ee").get("tracer"),
                    f = t("loader"),
                    u = t(25),
                    d = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = d);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished",
                        "addToTrace", "inlineHit", "addRelease"
                    ],
                    l = "api-",
                    h = l + "ixn-";
                a(p, function (t, e) {
                    d[e] = o(l, e, !0, "api")
                }), d.addPageAction = o(l, "addPageAction", !0), d.setCurrentRouteName = o(l,
                    "routeName", !0), e.exports = newrelic, d.interaction = function () {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function (t, e) {
                        var n = {},
                            r = this,
                            o = "function" == typeof e;
                        return i(h + "tracer", [f.now(), t, n], r),
                            function () {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n),
                                    o) try {
                                    return e.apply(this, arguments)
                                } catch (t) {
                                    throw c.emit("fn-err", [arguments, this, t], n), t
                                } finally {
                                    c.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),
                    function (t, e) {
                        m[e] = o(h, e)
                    }), newrelic.noticeError = function (t, e) {
                    "string" == typeof t && (t = new Error(t)), u.recordSupportability(
                        "API/noticeError/called"), i("err", [t, f.now(), !1, e])
                }
            }, {}],
            21: [function (t, e, n) {
                function r(t) {
                    if (NREUM.init) {
                        for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++)
                            if (e = e[n[r]], "object" != typeof e) return;
                        return e = e[n[n.length - 1]]
                    }
                }
                e.exports = {
                    getConfiguration: r
                }
            }, {}],
            22: [function (t, e, n) {
                e.exports = function (t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t
                            .byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t
                            .size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return
                        }
                    }
                }
            }, {}],
            23: [function (t, e, n) {
                var r = !1;
                try {
                    var o = Object.defineProperty({}, "passive", {
                        get: function () {
                            r = !0
                        }
                    });
                    window.addEventListener("testPassive", null, o), window.removeEventListener(
                        "testPassive", null, o)
                } catch (i) {}
                e.exports = function (t) {
                    return r ? {
                        passive: !0,
                        capture: !!t
                    } : !!t
                }
            }, {}],
            24: [function (t, e, n) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), e.exports = r
            }, {}],
            25: [function (t, e, n) {
                function r(t, e) {
                    var n = [a, t, {
                        name: t
                    }, e];
                    return i("storeMetric", n, null, "api"), n
                }

                function o(t, e) {
                    var n = [s, t, {
                        name: t
                    }, e];
                    return i("storeEventMetrics", n, null, "api"), n
                }
                var i = t("handle"),
                    a = "sm",
                    s = "cm";
                e.exports = {
                    constants: {
                        SUPPORTABILITY_METRIC: a,
                        CUSTOM_METRIC: s
                    },
                    recordSupportability: r,
                    recordCustom: o
                }
            }, {}],
            26: [function (t, e, n) {
                function r() {
                    return s.exists && performance.now ? Math.round(performance.now()) : (i = Math.max((
                        new Date).getTime(), i)) - a
                }

                function o() {
                    return i
                }
                var i = (new Date).getTime(),
                    a = i,
                    s = t(33);
                e.exports = r, e.exports.offset = a, e.exports.getLastTimestamp = o
            }, {}],
            27: [function (t, e, n) {
                function r(t, e) {
                    var n = t.getEntries();
                    n.forEach(function (t) {
                        "first-paint" === t.name ? l("timing", ["fp", Math.floor(t
                            .startTime)]) : "first-contentful-paint" === t.name && l(
                            "timing", [
                                "fcp", Math.floor(t.startTime)
                            ])
                    })
                }

                function o(t, e) {
                    var n = t.getEntries();
                    if (n.length > 0) {
                        var r = n[n.length - 1];
                        if (f && f < r.startTime) return;
                        var o = [r],
                            i = a({});
                        i && o.push(i), l("lcp", o)
                    }
                }

                function i(t) {
                    t.getEntries().forEach(function (t) {
                        t.hadRecentInput || l("cls", [t])
                    })
                }

                function a(t) {
                    var e = navigator.connection || navigator.mozConnection || navigator
                        .webkitConnection;
                    if (e) return e.type && (t["net-type"] = e.type), e.effectiveType && (t[
                            "net-etype"] = e.effectiveType), e.rtt && (t["net-rtt"] = e.rtt), e
                        .downlink && (t["net-dlink"] = e.downlink), t
                }

                function s(t) {
                    if (t instanceof w && !y) {
                        var e = Math.round(t.timeStamp),
                            n = {
                                type: t.type
                            };
                        a(n), e <= h.now() ? n.fid = h.now() - e : e > h.offset && e <= Date.now() ? (
                            e -= h.offset, n.fid = h.now() - e) : e = h.now(), y = !0, l("timing", [
                            "fi", e, n
                        ])
                    }
                }

                function c(t) {
                    "hidden" === t && (f = h.now(), l("pageHide", [f]))
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init
                        .page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var f, u, d, p, l = t("handle"),
                        h = t("loader"),
                        m = t(30),
                        v = t(23),
                        w = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window
                        .PerformanceObserver) {
                        u = new PerformanceObserver(r);
                        try {
                            u.observe({
                                entryTypes: ["paint"]
                            })
                        } catch (g) {}
                        d = new PerformanceObserver(o);
                        try {
                            d.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (g) {}
                        p = new PerformanceObserver(i);
                        try {
                            p.observe({
                                type: "layout-shift",
                                buffered: !0
                            })
                        } catch (g) {}
                    }
                    if ("addEventListener" in document) {
                        var y = !1,
                            x = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        x.forEach(function (t) {
                            document.addEventListener(t, s, v(!1))
                        })
                    }
                    m(c)
                }
            }, {}],
            28: [function (t, e, n) {
                function r() {
                    function t() {
                        return e ? 15 & e[n++] : 16 * Math.random() | 0
                    }
                    var e = null,
                        n = 0,
                        r = window.crypto || window.msCrypto;
                    r && r.getRandomValues && (e = r.getRandomValues(new Uint8Array(31)));
                    for (var o, i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx", a = "", s = 0; s < i
                        .length; s++) o = i[s], "x" === o ? a += t().toString(16) : "y" === o ? (o = 3 &
                        t() | 8, a += o.toString(16)) : a += o;
                    return a
                }

                function o() {
                    return a(16)
                }

                function i() {
                    return a(32)
                }

                function a(t) {
                    function e() {
                        return n ? 15 & n[r++] : 16 * Math.random() | 0
                    }
                    var n = null,
                        r = 0,
                        o = window.crypto || window.msCrypto;
                    o && o.getRandomValues && Uint8Array && (n = o.getRandomValues(new Uint8Array(t)));
                    for (var i = [], a = 0; a < t; a++) i.push(e().toString(16));
                    return i.join("")
                }
                e.exports = {
                    generateUuid: r,
                    generateSpanId: o,
                    generateTraceId: i
                }
            }, {}],
            29: [function (t, e, n) {
                function r(t, e) {
                    if (!o) return !1;
                    if (t !== o) return !1;
                    if (!e) return !0;
                    if (!i) return !1;
                    for (var n = i.split("."), r = e.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== n[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var s = navigator.userAgent,
                        c = s.match(a);
                    c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari",
                        i = c[1])
                }
                e.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            30: [function (t, e, n) {
                function r(t) {
                    function e() {
                        t(s && document[s] ? document[s] : document[i] ? "hidden" : "visible")
                    }
                    "addEventListener" in document && a && document.addEventListener(a, e, o(!1))
                }
                var o = t(23);
                e.exports = r;
                var i, a, s;
                "undefined" != typeof document.hidden ? (i = "hidden", a = "visibilitychange", s =
                    "visibilityState") : "undefined" != typeof document.msHidden ? (i = "msHidden",
                    a = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (i =
                    "webkitHidden", a = "webkitvisibilitychange", s = "webkitVisibilityState")
            }, {}],
            31: [function (t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            32: [function (t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e +
                        r];
                    return i
                }
                e.exports = r
            }, {}],
            33: [function (t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing &&
                        "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function (t, e, n) {
                function r() {}

                function o(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? f(t, c, a) : a()
                    }

                    function n(n, r, o, i, a) {
                        if (a !== !1 && (a = !0), !l.aborted || i) {
                            t && a && t(n, r, o);
                            for (var s = e(o), c = m(n), f = c.length, u = 0; u < f; u++) c[u].apply(s,
                                r);
                            var p = d[y[n]];
                            return p && p.push([x, n, r, s]), s
                        }
                    }

                    function i(t, e) {
                        g[t] = m(t).concat(e)
                    }

                    function h(t, e) {
                        var n = g[t];
                        if (n)
                            for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
                    }

                    function m(t) {
                        return g[t] || []
                    }

                    function v(t) {
                        return p[t] = p[t] || o(n)
                    }

                    function w(t, e) {
                        l.aborted || u(t, function (t, n) {
                            e = e || "feature", y[n] = e, e in d || (d[e] = [])
                        })
                    }
                    var g = {},
                        y = {},
                        x = {
                            on: i,
                            addEventListener: i,
                            removeEventListener: h,
                            emit: n,
                            get: v,
                            listeners: m,
                            context: e,
                            buffer: w,
                            abort: s,
                            aborted: !1
                        };
                    return x
                }

                function i(t) {
                    return f(t, c, a)
                }

                function a() {
                    return new r
                }

                function s() {
                    (d.api || d.feature) && (l.aborted = !0, d = l.backlog = {})
                }
                var c = "nr@context",
                    f = t("gos"),
                    u = t(31),
                    d = {},
                    p = {},
                    l = e.exports = o();
                e.exports.getOrSetContext = i, l.backlog = d
            }, {}],
            gos: [function (t, e, n) {
                function r(t, e, n) {
                    if (o.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[e] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function (t, e, n) {
                function r(t, e, n, r) {
                    o.buffer([t], r), o.emit(t, e, n)
                }
                var o = t("ee").get("handle");
                e.exports = r, r.ee = o
            }, {}],
            id: [function (t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i,
                        function () {
                            return o++
                        })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function (t, e, n) {
                function r() {
                    if (!T++) {
                        var t = O.info = NREUM.info,
                            e = m.getElementsByTagName("script")[0];
                        if (setTimeout(f.abort, 3e4), !(t && t.licenseKey && t.applicationID && e))
                            return f.abort();
                        c(E, function (e, n) {
                            t[e] || (t[e] = n)
                        });
                        var n = a();
                        s("mark", ["onload", n + O.offset], null, "api"), s("timing", ["load", n]);
                        var r = m.createElement("script");
                        0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? r.src =
                            t.agent : r.src = l + "://" + t.agent, e.parentNode.insertBefore(r, e)
                    }
                }

                function o() {
                    "complete" === m.readyState && i()
                }

                function i() {
                    s("mark", ["domContent", a() + O.offset], null, "api")
                }
                var a = t(26),
                    s = t("handle"),
                    c = t(31),
                    f = t("ee"),
                    u = t(29),
                    d = t(21),
                    p = t(23),
                    l = d.getConfiguration("ssl") === !1 ? "http" : "https",
                    h = window,
                    m = h.document,
                    v = "addEventListener",
                    w = "attachEvent",
                    g = h.XMLHttpRequest,
                    y = g && g.prototype,
                    x = !1;
                NREUM.o = {
                    ST: setTimeout,
                    SI: h.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: h.Request,
                    EV: h.Event,
                    PR: h.Promise,
                    MO: h.MutationObserver
                };
                var b = "" + location,
                    E = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-spa-1216.min.js"
                    },
                    R = g && y && y[v] && !/CriOS/.test(navigator.userAgent),
                    O = e.exports = {
                        offset: a.getLastTimestamp(),
                        now: a,
                        origin: b,
                        features: {},
                        xhrWrappable: R,
                        userAgent: u,
                        disabled: x
                    };
                if (!x) {
                    t(20), t(27), m[v] ? (m[v]("DOMContentLoaded", i, p(!1)), h[v]("load", r, p(!1))) :
                        (m[w]("onreadystatechange", o), h[w]("onload", r)), s("mark", ["firstbyte", a
                            .getLastTimestamp()
                        ], null, "api");
                    var T = 0
                }
            }, {}],
            "wrap-function": [function (t, e, n) {
                function r(t, e) {
                    function n(e, n, r, c, f) {
                        function nrWrapper() {
                            var i, a, u, p;
                            try {
                                a = this, i = d(arguments), u = "function" == typeof r ? r(i, a) : r ||
                                {}
                            } catch (l) {
                                o([l, "", [i, a, c], u], t)
                            }
                            s(n + "start", [i, a, c], u, f);
                            try {
                                return p = e.apply(a, i)
                            } catch (h) {
                                throw s(n + "err", [i, a, h], u, f), h
                            } finally {
                                s(n + "end", [i, a, p], u, f)
                            }
                        }
                        return a(e) ? e : (n || (n = ""), nrWrapper[p] = e, i(e, nrWrapper, t),
                            nrWrapper)
                    }

                    function r(t, e, r, o, i) {
                        r || (r = "");
                        var s, c, f, u = "-" === r.charAt(0);
                        for (f = 0; f < e.length; f++) c = e[f], s = t[c], a(s) || (t[c] = n(s, u ? c +
                            r : r, o, c, i))
                    }

                    function s(n, r, i, a) {
                        if (!h || e) {
                            var s = h;
                            h = !0;
                            try {
                                t.emit(n, r, i, e, a)
                            } catch (c) {
                                o([c, n, r, i], t)
                            }
                            h = s
                        }
                    }
                    return t || (t = u), n.inPlace = r, n.flag = p, n
                }

                function o(t, e) {
                    e || (e = u);
                    try {
                        e.emit("internal-error", t)
                    } catch (n) {}
                }

                function i(t, e, n) {
                    if (Object.defineProperty && Object.keys) try {
                        var r = Object.keys(t);
                        return r.forEach(function (n) {
                            Object.defineProperty(e, n, {
                                get: function () {
                                    return t[n]
                                },
                                set: function (e) {
                                    return t[n] = e, e
                                }
                            })
                        }), e
                    } catch (i) {
                        o([i], n)
                    }
                    for (var a in t) l.call(t, a) && (e[a] = t[a]);
                    return e
                }

                function a(t) {
                    return !(t && t instanceof Function && t.apply && !t[p])
                }

                function s(t, e) {
                    var n = e(t);
                    return n[p] = t, i(t, n, u), n
                }

                function c(t, e, n) {
                    var r = t[e];
                    t[e] = s(r, n)
                }

                function f() {
                    for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n) e[n] =
                        arguments[n];
                    return e
                }
                var u = t("ee"),
                    d = t(32),
                    p = "nr@original",
                    l = Object.prototype.hasOwnProperty,
                    h = !1;
                e.exports = r, e.exports.wrapFunction = s, e.exports.wrapInPlace = c, e.exports
                    .argsToArray = f
            }, {}]
        }, {}, ["loader", 2, 17, 5, 3, 4]);
    </script>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="SeaRates">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://www.searates.com/design/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://www.searates.com/design/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://www.searates.com/design/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://www.searates.com/design/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="https://www.searates.com/design/images/favicon/safari-pinned-tab.svg" color="#0139ff">
    <link rel="shortcut icon" href="https://www.searates.com/design/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="https://www.searates.com/design/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="application-name" content="SeaRates.com">
    <link rel="alternate" hreflang="en" href="https://www.searates.com/shipping/request/">
    <link rel="alternate" hreflang="de" href="https://www.searates.com/de/shipping/request/">
    <link rel="alternate" hreflang="ru" href="https://www.searates.com/ru/shipping/request/">
    <link rel="alternate" hreflang="zh" href="https://www.searates.com/cn/shipping/request/">
    <link rel="alternate" hreflang="es" href="https://www.searates.com/es/shipping/request/">
    <link rel="alternate" hreflang="uk" href="https://www.searates.com/ua/shipping/request/">
    <link rel="alternate" hreflang="fr" href="https://www.searates.com/fr/shipping/request/">
    <link rel="alternate" hreflang="ar" href="https://www.searates.com/ar/shipping/request/">
    <link rel="alternate" hreflang="tr" href="https://www.searates.com/tr/shipping/request/">
    <link rel="alternate" hreflang="it" href="https://www.searates.com/it/shipping/request/">
    <link rel="alternate" hreflang="th" href="https://www.searates.com/th/shipping/request/">
    <link rel="alternate" hreflang="ka" href="https://www.searates.com/ge/shipping/request/">
    <link rel="alternate" hreflang="fa" href="https://www.searates.com/ir/shipping/request/">
    <link rel="alternate" hreflang="ko" href="https://www.searates.com/kr/shipping/request/">
    <link rel="alternate" hreflang="ja" href="https://www.searates.com/jp/shipping/request/">
    <link rel="alternate" hreflang="he" href="https://www.searates.com/il/shipping/request/">
    <link rel="alternate" hreflang="el" href="https://www.searates.com/gr/shipping/request/">
    <link rel="alternate" hreflang="pl" href="https://www.searates.com/pl/shipping/request/">
    <link rel="alternate" hreflang="pt" href="https://www.searates.com/pt/shipping/request/">
    <link rel="alternate" hreflang="vi" href="https://www.searates.com/vi/shipping/request/">
    <link rel="alternate" hreflang="x-default" href="https://www.searates.com/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="SeaRates">
    <meta name="twitter:title" content="Request a Freight &amp; Cargo Shipping Quotes from Searates.com ">
    <meta name="twitter:description"
        content="Get the Best Rate from Searates on Requesting Freight Quote on Sea Cargo Container Shipping. Enquire Online from Leading Freight Forwarders and Shipping Line Agents.">
    <meta name="twitter:image"
        content="https://www.searates.com/design/images/favicon/apple-touch-icon-ipad-retina-152x152.png">
    <meta property="og:description"
        content="Get the Best Rate from Searates on Requesting Freight Quote on Sea Cargo Container Shipping. Enquire Online from Leading Freight Forwarders and Shipping Line Agents.">
    <meta property="og:url" content="https://www.searates.com/shipping/request/">
    <meta property="og:site_name" content="SeaRates">
    <meta property="og:image"
        content="https://www.searates.com/design/images/favicon/apple-touch-icon-ipad-retina-152x152.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Request a Freight &amp; Cargo Shipping Quotes from Searates.com ">
    <link rel="preload"
        href="https://www.searates.com/design/fonts/Montserrat/Montserrat-SemiBold/MontserratSemiBold.woff2" as="font"
        type="font/woff2" crossorigin="">
    <link rel="preload" href="https://www.searates.com/design/fonts/Montserrat/Montserrat-Bold/MontserratBold.woff2"
        as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="https://www.searates.com/design/fonts/Montserrat/Montserrat-Medium/MontserratMedium.woff2"
        as="font" type="font/woff2" crossorigin="">
    <link rel="preload"
        href="https://www.searates.com/design/fonts/Montserrat/Montserrat-Regular/MontserratRegular.woff2" as="font"
        type="font/woff2" crossorigin="">
    <link rel="preload" href="https://www.searates.com/design/fonts/f-pro/fa-regular-400.woff2" as="font"
        type="font/woff2" crossorigin="">
    <script>
        /*<![CDATA[*/
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5MQKQ58');
        dataLayer.push({
            'login_state': "Anonymous"
        }); /*]]>*/
    </script>
    <script type="text/javascript">
        /*<![CDATA[*/
        var ScarabQueue = ScarabQueue || [];
        (function (id) {
            if (document.getElementById(id)) return;
            var js = document.createElement('script');
            js.id = id;
            js.src = '//cdn.scarabresearch.com/js/17FE253DDE082B0F/scarab-v2.js';
            var fs = document.getElementsByTagName('script')[0];
            fs.parentNode.insertBefore(js, fs);
        })('scarab-js-api'); /*]]>*/
    </script>
    <meta name="description"
        content="Get the Best Rate from Searates on Requesting Freight Quote on Sea Cargo Container Shipping. Enquire Online from Leading Freight Forwarders and Shipping Line Agents.">
    <meta name="keywords"
        content="shipping quote request,freight shipping prices,full container load quote request,less container load quote request">
    <title>Request a Freight &amp; Cargo Shipping Quotes from Searates.com </title>
    <link href="https://www.searates.com/design/css/global/global.css.gz?129166" media="screen" rel="stylesheet"
        type="text/css">
    <link href="https://www.searates.com/design/css/apps/shipping/request/bundle.css.gz?129166" media="screen"
        rel="stylesheet" type="text/css">
    <link href="https://www.searates.com/design/css/shipping/request/index.css.gz?129166" media="screen"
        rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://www.searates.com/js/global/main.min.js.gz?129166"></script>
    <script defer="" type="text/javascript" src="https://www.searates.com/js/apps/shipping/request/bundle.js.gz?129166">
    </script>
    <script type="text/javascript">
        /*<![CDATA[*/
        var G_LANG = '';
        var platform = 1; /*]]>*/
    </script>
    <style data-emotion="css" data-s=""></style>
    <meta http-equiv="origin-trial"
        content="A7bG5hJ4XpMV5a3V1wwAR0PalkFSxLOZeL9D/YBYdupYUIgUgGhfVJ1zBFOqGybb7gRhswfJ+AmO7S2rNK2IOwkAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjY5NzY2Mzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script type="text/javascript" async=""
        src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/977481405/?random=1662539953132&amp;cv=9&amp;fst=1662539953132&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=900&amp;u_w=1440&amp;u_ah=873&amp;u_aw=1368&amp;u_cd=24&amp;u_his=4&amp;u_tz=330&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2wg8v0&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.searates.com%2Fshipping%2Frequest%2F&amp;tiba=Request%20a%20Freight%20%26%20Cargo%20Shipping%20Quotes%20from%20Searates.com&amp;auid=1059424427.1662534163&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4">
    </script>
    <script async="" src="https://script.hotjar.com/modules.d5eb3c97b67a0b8958ff.js" charset="utf-8"></script>
    <style type="text/css">
        iframe#_hjRemoteVarsFrame {
            display: none !important;
            width: 1px !important;
            height: 1px !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
    </style>
    <style>
        [data-wps-guard] {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
        }

        [data-wps-guard="hidden"] {
            display: none;
        }

        [data-wps-href],
        [data-wps-popup-close-intent] {
            cursor: pointer;
        }

        @charset "UTF-8";

        [data-wps-popup] {
            display: flex;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            justify-content: center;
            align-items: center;
            background: rgba(128, 128, 128, 0.5);
            flex-direction: column;
            box-sizing: content-box;
            z-index: 2147483647 !important;
        }

        [data-wps-popup].hide-popup,
        [data-wps-popup="hidden"] {
            display: none;
        }

        [data-wps-popup-content] {
            max-width: 80%;
            max-height: 90%;
            background: transparent;
            display: flex;
            flex-direction: column;
            box-sizing: content-box;
        }

        [data-wps-popup-content-body] {
            background: transparent;
            /* padding: 1em; */
            border: none;
            max-height: 100%;
            overflow: auto;
            box-sizing: content-box;
        }

        [data-wps-popup-content-body].bordered {
            background: white;
            border: 1em solid white;
        }

        [data-wps-popup-close] {
            background: white;
            align-self: flex-end;
            position: relative;
            left: 0;
            cursor: pointer;
            font-size: 25px;
            box-sizing: content-box;
        }

        [data-wps-popup-close]:before {
            width: 1em;
            height: 1em;
            content: '×';
            text-align: center;
            line-height: 1em;
            padding: 0.2em;
            display: block;
            box-sizing: content-box;
            color: #000000;
        }

        .wps-e-form {
            max-width: 650px;
        }

        .wps-e-form img[src*='trans.gif'] {
            height: 5px;
        }

        .wps-e-form table>thead>tr>th,
        .wps-e-form table>tbody>tr>th,
        .wps-e-form table>tfoot>tr>th,
        .wps-e-form table>thead>tr>td,
        .wps-e-form table>tbody>tr>td,
        .wps-e-form table>tfoot>tr>td {
            padding: 0;
        }

        .wps-ribbon-hidden {
            position: absolute;
            left: 10000px;
        }

        @charset "UTF-8";

        [data-wps-ribbon] {
            display: block;
            width: 100%;
            min-height: 35px;
            height: auto;
            box-sizing: content-box;
            z-index: 2147483640 !important;
            background-color: white;
        }

        [data-wps-ribbon="hidden"] {
            display: none;
        }

        [data-wps-ribbon-placement="TOP"] {
            top: 0;
        }

        [data-wps-ribbon-placement="BOTTOM"] {
            bottom: 0;
        }

        [data-wps-ribbon-floating="true"] {
            position: relative;
            z-index: 0;
        }

        [data-wps-ribbon-floating="false"] {
            position: fixed;
            left: 0;
            right: 0;
        }

        [data-wps-ribbon-content-body] {
            width: 100%;
            height: auto;
            display: block;
            position: relative;
        }

        [data-wps-ribbon-content-body] iframe {
            width: 100%;
        }

        [data-wps-ribbon-close] {
            cursor: pointer;
            font-size: 25px;
            box-sizing: content-box;
            position: absolute;
            right: 7px;
            top: 0;
            color: white;
        }

        [data-wps-ribbon-close]:before {
            width: 1em;
            height: 1em;
            content: '×';
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            text-align: center;
            line-height: 1em;
            padding: 0.2em;
            display: block;
            box-sizing: content-box;
            font-family: Arial, sans-serif;
            font-size: 28px;
        }
    </style>
    <script data-cfasync="false"
        src="https://tracker.gaconnector.com/gaconnector-server.js?page_url=https%3A%2F%2Fwww.searates.com%2Fshipping%2Frequest%2F&amp;referer=">
    </script>
    <script src="https://connect.facebook.net/signals/config/3714719098652117?v=2.9.79&amp;r=stable" async=""></script>
</head>

<body>
    <div class="main-content">
        <script>
            /*<![CDATA[*/
            window.user = {
                phone: '',
                country: '',
                auth: false
            } /*]]>*/
        </script>
        <script>
            /*<![CDATA[*/
            localStorage.removeItem('s-token'); /*]]>*/
        </script>
        <script>
            /*<![CDATA[*/ ! function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://checkpoint.url-protection.com/v1/url?o=https%3A//connect.facebook.net/en_US/fbevents.js&g=YTgzMTc3MzQ5NzFmNjBhZQ==&h=N2ZkYWM2ZjAxMTZlZTNiYjNhYmMwYzk5ZmI0ZWY2NmVhOTUzMTllZWNlZjE1NjhkMTQ1ZDQ0MjAwODkyZmY1Mg==&p=Y3AxZTpkcHdvcmxkOmM6bzpkMzcwY2ZiMmU2MWQwNzAwZGFjY2Y2YTQyNWZkZTdlNTp2MTp0OlQ='
            );
            fbq('init', '3714719098652117');
            fbq('track', 'PageView'); /*]]>*/
        </script> <noscript> <img height="1" width="1" style="display:none"
                src=https://www.facebook.com/tr?id=3714719098652117&ev=PageView&noscript=1/> </noscript> <div
                id="request_a_quote" data-filter="{&quot;platform&quot;:1}">
            <div class="AmmKgn">
                <div class="MXpaIy">
                    <div class="pXIXmu LkuvwV">
                        <div class="v_Cxps">
                            <div class="Q4DyOc">
                                <h2 class="aPz0gF _HGYQo doHN6G">Request a quote</h2><span class="nnz5w6"><svg
                                        width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#cargowizardicon_svg__clip0)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.323 20.664a1.917 1.917 0 012.155-1.642l14.308 1.918c.956.128 1.652.94 1.66 1.876a1.918 1.918 0 012.1-1.38l4.37.586a1.912 1.912 0 011.643 2.151l-1.251 9.27a1.917 1.917 0 01-2.155 1.642l-4.37-.586a1.913 1.913 0 01-1.66-1.876 1.918 1.918 0 01-2.1 1.38l-14.308-1.919a1.913 1.913 0 01-1.643-2.15l1.25-9.27z"
                                                fill="url(#cargowizardicon_svg__paint0_linear)"></path>
                                            <g filter="url(#cargowizardicon_svg__filter0_d)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.902 13.112a1.91 1.91 0 00-1.36 2.338l3.484 13.144a1.919 1.919 0 002.342 1.363l19.647-5.173a1.911 1.911 0 001.415-2.036 1.92 1.92 0 002.238 1.068l6.83-1.799a1.91 1.91 0 001.36-2.338L34.373 6.535a1.919 1.919 0 00-2.342-1.363l-6.83 1.798a1.911 1.911 0 00-1.415 2.036 1.92 1.92 0 00-2.238-1.067L1.902 13.112z"
                                                    fill="url(#cargowizardicon_svg__paint1_linear)"></path>
                                            </g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M35.583 22.255a1.912 1.912 0 00-.676-.223l-4.37-.586a1.918 1.918 0 00-2.1 1.378 1.913 1.913 0 00-1.66-1.878l-14.308-1.918a1.917 1.917 0 00-2.155 1.642L9.16 29.22l16.85-4.437a1.911 1.911 0 001.415-2.036 1.92 1.92 0 002.238 1.067l5.92-1.559z"
                                                fill="url(#cargowizardicon_svg__paint2_linear)"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="cargowizardicon_svg__paint0_linear" x1="23.679"
                                                y1="20.484" x2="21.964" y2="33.624" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#26A7FC"></stop>
                                                <stop offset="1" stop-color="#1CC1FA"></stop>
                                            </linearGradient>
                                            <linearGradient id="cargowizardicon_svg__paint1_linear" x1="10.43"
                                                y1="-0.789" x2="34.625" y2="-3.743" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#93F"></stop>
                                                <stop offset="0.984" stop-color="#8CE9FF"></stop>
                                            </linearGradient>
                                            <linearGradient id="cargowizardicon_svg__paint2_linear" x1="22.372"
                                                y1="19.011" x2="22.372" y2="29.22" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF5476"></stop>
                                                <stop offset="1" stop-color="#FFB076"></stop>
                                            </linearGradient>
                                            <clipPath id="cargowizardicon_svg__clip0">
                                                <rect width="40" height="40" rx="8.436" fill="#fff"></rect>
                                            </clipPath>
                                            <filter id="cargowizardicon_svg__filter0_d" x="-13.883" y="-4.465"
                                                width="66.166" height="53.632" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha"></feColorMatrix>
                                                <feOffset dy="4.787"></feOffset>
                                                <feGaussianBlur stdDeviation="7.18"></feGaussianBlur>
                                                <feColorMatrix
                                                    values="0 0 0 0 0.228125 0 0 0 0 0.438882 0 0 0 0 0.75 0 0 0 0.15 0">
                                                </feColorMatrix>
                                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                                <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape">
                                                </feBlend>
                                            </filter>
                                        </defs>
                                    </svg></span>
                            </div>
                            <div class="onaOcu">
                                <p class="aPz0gF evnicv">And get the best rates from the leading logistics providers.
                                </p>
                            </div>
                        </div>
                        <div class="RkN5yi bnMdW4 enGWL2 css-1inamf9-container"><span id="react-select-2-live-region"
                                class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false"
                                aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                            <div class="AbQ9Rv RkN5yi__control css-1s2u09g-control">
                                <div
                                    class="qTR8PC qW4z5Y RkN5yi__value-container RkN5yi__value-container--has-value css-1d8n9bt">
                                    <div class="DjitU_ RkN5yi__single-value css-qc6sy-singleValue">International (SI)
                                    </div><input id="react-select-2-input" tabindex="0" inputmode="none"
                                        aria-autocomplete="list" aria-expanded="false" aria-haspopup="true"
                                        aria-controls="react-select-2-listbox" aria-owns="react-select-2-listbox"
                                        role="combobox" aria-readonly="true" class="css-1hac4vs-dummyInput" value="">
                                </div>
                                <div class="RNYVs7 RkN5yi__indicators css-1wy0on6">
                                    <div class="vs2dJQ RkN5yi__indicator RkN5yi__dropdown-indicator css-tlfecz-indicatorContainer"
                                        aria-hidden="true"><span class="JWIMle"><svg width="8" height="7" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.015 6.047L.31 2.367A.859.859 0 011.52 1.15l2.487 2.47 2.469-2.49a.859.859 0 011.219 1.21l-3.68 3.706z"
                                                    fill="#6E7E92"></path>
                                            </svg></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vy8SM7"><span class="aPz0gF evnicv">If you have an account, log in to have everything in
                            one place.</span><a href="/auth/sign-in" class="HNidcP"><button type="button"
                                class="WTsBDL t9IfML SU5U8K AyNgLC">Sign in<svg
                                    class="qejKbC AtleRi _6IHag uXwDvJ K8gn6P" width="13" height="12"
                                    viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="a91wsF" d="M10.6517 6L1.65173 6" stroke="#2197FF" stroke-width="2"
                                        stroke-linecap="round"></path>
                                    <path class="SjXckP" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13 6L8.12712 10.8729C7.6846 11.3154 6.96713 11.3154 6.52461 10.8729C6.08209 10.4304 6.08209 9.71289 6.52461 9.27037L9.79498 6L6.52461 2.72963C6.08209 2.28711 6.08209 1.56964 6.52461 1.12712C6.96713 0.684601 7.6846 0.684601 8.12712 1.12712L13 6Z"
                                        fill="#2197FF"></path>
                                </svg></button></a></div>
                    <form class="_8NSuBT" method="post">
                         <!--<div class="wJcNOZ">
                            <h3 class="aPz0gF ubj37B CccMir">Cargo details</h3>
                            <div class="UXBQhB">
                                <div class="VZ5Y_D">
                                    <div class="AkQUso"><label class="j4gBUh oLLBF9 uMoBHL">Product<span class="ZGKXWC">
                                                *</span></label><a class="PNeZ2W"><span class="aPz0gF FBF5lA">HS
                                                Codes</span></a></div>
                                    <div class="xriwPI"><span class="mBN212 d0rQWT"><span class="MhWfur"><span
                                                    class="Et0u2X"><span class="H2k7Rl _0tZzF"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span><span
                                                class="CF9Fef"><input type="text" class="ZayS8x cKEZ64"
                                                    name="ProductCategory" autocomplete="off"
                                                    value="Personal"></span></span><span class="tB6q7O"></span><button
                                            class="nAo1Hh"><i class="fal fa-times"></i></button></div>
                                </div>
                            </div> 
                        </div>-->
                        <div class="pXIXmu Jiye_i Ky0WJf">
                            <div class="vuCBtm">
                                <div class="E4Qlu7">
                                    <div class="KzbUGL"><label class="f4c8Tk bgXaYo YEs7AF"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="radio" name="cargo"
                                                    value="Hazardous cargo"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl EWVFrD"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Hazardous
                                                        cargo</span></span></span></label></div>
                                    <div class="KzbUGL"><label class="f4c8Tk bgXaYo oH6Rsx"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="radio" name="cargo"
                                                    value="Perishable cargo"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl iNel8n"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Perishable
                                                        cargo</span></span></span></label></div>
                                    <div class="KzbUGL"><label class="f4c8Tk bgXaYo bZ5tsS"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="radio" name="cargo"
                                                    value="Oversized cargo"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl kUbgOy"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Oversized
                                                        cargo</span></span></span></label></div>
                                    <div class="KzbUGL"><label class="f4c8Tk bgXaYo bES99G pwlwaB"><span
                                                class="SlcZz_"><input class="ySn0fd" type="radio" name="cargo"
                                                    value="Liquid cargo"><span class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl fkgrU4"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Liquid
                                                        cargo</span></span></span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="pXIXmu PaZejs">
                            <h3 class="aPz0gF ubj37B">Delivery</h3>
                            <div class="NWncKG">
                                <div class="rASlAP fJZ2Pd">
                                    <div class="vYiyP7"><button type="button" class="cF7936 hTanYM BYgHHv OKYBET"><svg
                                                width="13" height="11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#ship_svg__clip0_2179_41532)" fill="#08F">
                                                    <path
                                                        d="M10.078 1.97v2.873l-1.26-.422V2.626h-5.04V4.42l-1.26.422V1.97a.67.67 0 01.185-.464.617.617 0 01.446-.193h1.26v-.82c0-.13.05-.256.138-.348A.463.463 0 014.88.001h2.835c.125 0 .245.052.334.144a.503.503 0 01.138.348v.82h1.26c.167 0 .328.07.446.193a.67.67 0 01.184.464z">
                                                    </path>
                                                    <path
                                                        d="M12.6 9.68v.328c0 .13-.05.256-.139.348a.463.463 0 01-.334.145c-1.2 0-2.116-.423-2.82-1.219-.143.36-.385.669-.696.885a1.84 1.84 0 01-1.051.334H5.04a1.84 1.84 0 01-1.05-.334 1.956 1.956 0 01-.697-.885c-.704.796-1.62 1.219-2.82 1.219a.463.463 0 01-.335-.145.503.503 0 01-.138-.348V9.68c0-.13.05-.255.138-.348a.463.463 0 01.334-.144c1.213 0 2.005-.65 2.35-1.545L1.446 6.207a.683.683 0 01-.016-.91.627.627 0 01.268-.179l4.41-1.476a.605.605 0 01.386 0l4.41 1.476a.627.627 0 01.268.179.683.683 0 01-.016.91L9.777 7.643c.351.91 1.153 1.545 2.35 1.545.125 0 .246.052.334.144a.503.503 0 01.139.348z">
                                                    </path>
                                                </g>
                                                <defs>
                                                    <clipPath id="ship_svg__clip0_2179_41532">
                                                        <path fill="#fff" transform="translate(0 .001)"
                                                            d="M0 0h12.6v10.5H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg> <span class="MyNzRc">SEA</span></button><button type="button"
                                            class="cF7936 hTanYM EQXKTC"><svg width="12" height="10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.658 8.107L9.164 1.123a.953.953 0 00-.896-.632H6.635V2.08a.317.317 0 01-.318.317h-.635a.317.317 0 01-.317-.317V.49H3.734a.952.952 0 00-.897.632L.343 8.107a.95.95 0 00.896 1.272h4.126V7.792c0-.175.143-.317.317-.317h.635c.176 0 .318.142.318.317v1.587h4.109a.955.955 0 00.914-1.272zm-5.023-2.22a.317.317 0 01-.318.318h-.635a.318.318 0 01-.317-.318V3.982c0-.174.143-.317.317-.317h.635c.175 0 .318.143.318.317v1.905z"
                                                    fill="#02BCB1"></path>
                                            </svg> <span class="MyNzRc">LAND</span></button><button type="button"
                                            class="cF7936 hTanYM rsxXjz"><i class="fas fa-plane"></i> <span
                                                class="MyNzRc">AIR</span></button></div>
                                    <div class="vYiyP7"><button type="button" class="cF7936 hTanYM SdKzvR"><i
                                                class="fas fa-rocket"></i> <span class="MyNzRc">AUTO</span></button>
                                    </div>
                                </div>
                                <div class="rASlAP nLoI_Y fJZ2Pd">
                                    <div class="VTkRN8">
                                        <div class="xo41Xl">
                                            <div class="VZ5Y_D"><label class="j4gBUh oLLBF9 uMoBHL">Transportation
                                                    by<span class="ZGKXWC"> *</span></label>
                                                <div class="RkN5yi wrZ5SQ css-b62m3t-container"><span
                                                        id="react-select-9-live-region"
                                                        class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class="AbQ9Rv RkN5yi__control css-1s2u09g-control">
                                                        <div
                                                            class="qTR8PC qW4z5Y fe5onj wwZOR0 RkN5yi__value-container RkN5yi__value-container--has-value css-1d8n9bt">
                                                            <span class="xK3fV6"><svg width="13" height="11" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#ship_svg__clip0_2179_41532)"
                                                                        fill="#08F">
                                                                        <path
                                                                            d="M10.078 1.97v2.873l-1.26-.422V2.626h-5.04V4.42l-1.26.422V1.97a.67.67 0 01.185-.464.617.617 0 01.446-.193h1.26v-.82c0-.13.05-.256.138-.348A.463.463 0 014.88.001h2.835c.125 0 .245.052.334.144a.503.503 0 01.138.348v.82h1.26c.167 0 .328.07.446.193a.67.67 0 01.184.464z">
                                                                        </path>
                                                                        <path
                                                                            d="M12.6 9.68v.328c0 .13-.05.256-.139.348a.463.463 0 01-.334.145c-1.2 0-2.116-.423-2.82-1.219-.143.36-.385.669-.696.885a1.84 1.84 0 01-1.051.334H5.04a1.84 1.84 0 01-1.05-.334 1.956 1.956 0 01-.697-.885c-.704.796-1.62 1.219-2.82 1.219a.463.463 0 01-.335-.145.503.503 0 01-.138-.348V9.68c0-.13.05-.255.138-.348a.463.463 0 01.334-.144c1.213 0 2.005-.65 2.35-1.545L1.446 6.207a.683.683 0 01-.016-.91.627.627 0 01.268-.179l4.41-1.476a.605.605 0 01.386 0l4.41 1.476a.627.627 0 01.268.179.683.683 0 01-.016.91L9.777 7.643c.351.91 1.153 1.545 2.35 1.545.125 0 .246.052.334.144a.503.503 0 01.139.348z">
                                                                        </path>
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="ship_svg__clip0_2179_41532">
                                                                            <path fill="#fff"
                                                                                transform="translate(0 .001)"
                                                                                d="M0 0h12.6v10.5H0z"></path>
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg></span>
                                                            <div
                                                                class="DjitU_ RkN5yi__single-value css-qc6sy-singleValue">
                                                                Bulk</div><input id="react-select-9-input" tabindex="0"
                                                                inputmode="none" aria-autocomplete="list"
                                                                aria-expanded="false" aria-haspopup="true"
                                                                aria-controls="react-select-9-listbox"
                                                                aria-owns="react-select-9-listbox" role="combobox"
                                                                aria-readonly="true" class="css-1hac4vs-dummyInput"
                                                                value="">
                                                        </div>
                                                        <div class="RNYVs7 RkN5yi__indicators css-1wy0on6">
                                                            <div class="vs2dJQ RkN5yi__indicator RkN5yi__dropdown-indicator css-tlfecz-indicatorContainer"
                                                                aria-hidden="true"><span class="JWIMle"><svg width="8"
                                                                        height="7" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M4.015 6.047L.31 2.367A.859.859 0 011.52 1.15l2.487 2.47 2.469-2.49a.859.859 0 011.219 1.21l-3.68 3.706z"
                                                                            fill="#6E7E92"></path>
                                                                    </svg></span></div>
                                                        </div>
                                                    </div><input name="shippingType" type="hidden" value="REQ_3">
                                                </div>
                                            </div>
                                            <div class="QWLZCM"><label class="VZ5Y_D"><span class="j4gBUh uMoBHL">Ship
                                                        type</span>
                                                    <div class="RkN5yi wrZ5SQ css-b62m3t-container"><span
                                                            id="react-select-11-live-region"
                                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                            aria-atomic="false" aria-relevant="additions text"
                                                            class="css-7pg0cj-a11yText"></span>
                                                        <div class="AbQ9Rv RkN5yi__control css-1s2u09g-control">
                                                            <div
                                                                class="qTR8PC qW4z5Y RkN5yi__value-container RkN5yi__value-container--has-value css-1d8n9bt">
                                                                <div
                                                                    class="DjitU_ RkN5yi__single-value css-qc6sy-singleValue">
                                                                    Product tankers / Gas carriers</div><input
                                                                    id="react-select-11-input" tabindex="0"
                                                                    inputmode="none" aria-autocomplete="list"
                                                                    aria-expanded="false" aria-haspopup="true"
                                                                    aria-controls="react-select-11-listbox"
                                                                    aria-owns="react-select-11-listbox" role="combobox"
                                                                    aria-readonly="true" class="css-1hac4vs-dummyInput"
                                                                    value="">
                                                            </div>
                                                            <div class="RNYVs7 RkN5yi__indicators css-1wy0on6">
                                                                <div class="vs2dJQ RkN5yi__indicator RkN5yi__dropdown-indicator css-tlfecz-indicatorContainer"
                                                                    aria-hidden="true"><span class="JWIMle"><svg
                                                                            width="8" height="7" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M4.015 6.047L.31 2.367A.859.859 0 011.52 1.15l2.487 2.47 2.469-2.49a.859.859 0 011.219 1.21l-3.68 3.706z"
                                                                                fill="#6E7E92"></path>
                                                                        </svg></span></div>
                                                            </div>
                                                        </div><input name="shipType" type="hidden" value="SHIP_103">
                                                    </div>
                                                </label><label class="VZ5Y_D"><span class="j4gBUh oLLBF9 uMoBHL">Gross
                                                        weight<span class="ZGKXWC"> *</span></span><span
                                                        class="mBN212 XIcHWO Rd5RWS"><span class="CF9Fef"><input
                                                                type="number" class="ZayS8x" name="cargoWeight"
                                                                value=""></span><i class="vJWwN8"></i><span
                                                            class="pyqNSE">mt</span></span><span
                                                        class="MkfQci FbFUGE YDnCxt">Gross weight is
                                                        required</span></label><label class="VZ5Y_D"><span
                                                        class="j4gBUh uMoBHL">Loading rate</span><span
                                                        class="mBN212 XIcHWO Rd5RWS"><span class="CF9Fef"><input
                                                                type="number" class="ZayS8x" name="loadingRate"
                                                                value=""></span><i class="vJWwN8"></i><span
                                                            class="pyqNSE">mt/day</span></span></label><label
                                                    class="VZ5Y_D"><span class="j4gBUh uMoBHL">Discharging
                                                        rate</span><span class="mBN212 XIcHWO Rd5RWS"><span
                                                            class="CF9Fef"><input type="number" class="ZayS8x"
                                                                name="dischargingRate" value=""></span><i
                                                            class="vJWwN8"></i><span
                                                            class="pyqNSE">mt/day</span></span></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="EYGCEs NRFCZr">
                                <div class="VZ5Y_D"><label class="j4gBUh oLLBF9 uMoBHL">From<span class="ZGKXWC">
                                            *</span></label>
                                    <div class="XqiWkU"><span class="mBN212 _wMvYs"><span class="CF9Fef"><input
                                                    type="text" class="ZayS8x" value=""><span class="CueOqv"><span
                                                        class="hb_fOV">City, Port</span></span></span></span>
                                        <div id="from-autocomplete" class="pdssZc iVKNkE"></div>
                                    </div><span class="MkfQci FbFUGE YDnCxt">Location from is required</span>
                                </div>
                                <div class="VZ5Y_D"><label class="j4gBUh oLLBF9 uMoBHL">To<span class="ZGKXWC">
                                            *</span></label>
                                    <div class="XqiWkU"><span class="mBN212 _wMvYs"><span class="CF9Fef"><input
                                                    type="text" class="ZayS8x" value=""><span class="CueOqv"><span
                                                        class="hb_fOV">City, Port</span></span></span></span>
                                        <div id="to-autocomplete" class="pdssZc iVKNkE"></div>
                                    </div><span class="MkfQci FbFUGE YDnCxt">Location to is required</span>
                                </div>
                            </div>
                            <div class="OeCWNQ"><label class="VZ5Y_D NRFCZr">
                                    <div class="s2XxtD"><span class="j4gBUh oLLBF9 uMoBHL">Ready to load<span
                                                class="ZGKXWC"> *</span></span></div>
                                    <div>
                                        <div class="bkqCEi">
                                            <div class="CJNtUg  OQEOFc"><svg width="16" height="16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="H2mEFc ">
                                                    <path
                                                        d="M1.916 13.378c0 .703.58 1.274 1.295 1.274h9.494c.715 0 1.295-.57 1.295-1.274V6.156H1.916v7.222zM3.642 8.28a.43.43 0 01.432-.425h7.768a.43.43 0 01.432.425v1.699a.43.43 0 01-.432.425H4.074a.43.43 0 01-.432-.425v-1.7zm9.063-5.523h-1.294V1.482a.43.43 0 00-.432-.424h-.863a.43.43 0 00-.432.424v1.275H6.232V1.482a.43.43 0 00-.432-.424h-.863a.43.43 0 00-.432.424v1.275H3.211c-.715 0-1.295.57-1.295 1.274v1.275H14V4.03c0-.703-.58-1.274-1.295-1.274z"
                                                        fill="#C9CFDB"></path>
                                                </svg><span class="aPz0gF FBF5lA pIZfvc yhfSl9">Select</span></div>
                                        </div>
                                    </div><span class="MkfQci FbFUGE YDnCxt">Ready to load date is required</span>
                                </label></div><label class="VZ5Y_D DVB7lE NRFCZr"><span class="j4gBUh uMoBHL">Additional
                                    information</span>
                                <div class="X2pdyV"><textarea class="TxKtna" name="description"></textarea><span
                                        class="SkLJ_A">Write a message...</span></div>
                            </label>
                        </div>
                        <div class="pXIXmu ccVRGi">
                            <h3 class="aPz0gF ubj37B xo2Cgl">Associated services</h3>
                            <div class="LgEdCU">
                                <div class="ZrDS1l">
                                    <div class="s2XxtD"><label class="f4c8Tk dM0ohb"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="checkbox"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl wXkrGv"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span
                                                        class="aPz0gF FBF5lA">Insurance</span></span></span></label>
                                    </div>
                                    <div class="s2XxtD"><label class="f4c8Tk dM0ohb WvhyQj"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="checkbox" name="inspection"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl HnUV7o"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Inspection
                                                        services</span></span></span></label></div>
                                    <div class="s2XxtD"><label class="f4c8Tk dM0ohb WvhyQj"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="checkbox" name="certification"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl GKOW8B"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span
                                                        class="aPz0gF FBF5lA">Certification</span></span></span></label>
                                    </div>
                                    <div class="s2XxtD"><label class="f4c8Tk dM0ohb WvhyQj"><span class="SlcZz_"><input
                                                    class="ySn0fd" type="checkbox" name="customsClearance"><span
                                                    class="aPz0gF FBF5lA cExKVy"></span><span
                                                    class="Et0u2X YCKzEJ"><span class="H2k7Rl s_46A_"
                                                        style="background-image: url(&quot;https://www.searates.com/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span><span
                                                    class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF FBF5lA">Customs
                                                        clearance</span></span></span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="pXIXmu rS9p0b">
                            <h3 class="aPz0gF ubj37B">СARGOES Finance</h3>
                            <div class="ISEruO">
                                <div class="zJOtwd">
                                    <div class="nUv1kl"><label class="VZ5Y_D"><label class="f4c8Tk dM0ohb Qqt6Sj"><span
                                                    class="SlcZz_"><input class="ySn0fd" type="checkbox"
                                                        name="cargoes"><span class="aPz0gF FBF5lA cExKVy"></span><span
                                                        class="aPz0gF FBF5lA ylrU0o"><span class="aPz0gF __O148">I am
                                                            interested in accessing Trade, Logistics or Invetory
                                                            Finance</span></span></span></label></label>
                                        <div class="MxC7J0"><svg width="66" height="14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64.269 3.719c-.438-.162-.894-.196-1.35-.196h-3.44a1.18 1.18 0 01-.379-.06c-.194-.067-.27-.212-.27-.458 0-.22.085-.348.279-.416.126-.043.253-.06.388-.06h4.367c.068 0 .118-.017.16-.076.195-.29.388-.57.582-.858.211-.306.422-.612.641-.935H59.54c-.439 0-.877.06-1.29.213-.506.186-.91.484-1.13.994-.194.433-.236.883-.185 1.35.067.587.328 1.054.843 1.368.446.272.944.365 1.458.365h3.567c.101 0 .194.009.295.026.261.042.388.187.405.442.017.272-.093.45-.32.518a1.286 1.286 0 01-.363.042h-4.764c-.068 0-.11.017-.152.077-.388.57-.784 1.138-1.172 1.699-.017.017-.042.034-.025.068h6.045a3.92 3.92 0 001.214-.17c.532-.178.978-.467 1.232-.994.185-.4.244-.824.236-1.257-.034-.841-.414-1.402-1.164-1.682zM37.583 7.747V3.439c0-.067-.017-.084-.084-.084h-3.213c-.042 0-.067.008-.093.042-.379.518-.767 1.028-1.163 1.563h2.479c.067 0 .093.017.093.085-.009.28-.009.56 0 .841 0 .085-.026.102-.11.102h-2.344c-.22 0-.447-.034-.658-.093-1.307-.4-1.45-1.767-.953-2.523.38-.578.936-.825 1.602-.833 1.088-.009 2.176 0 3.255 0a.167.167 0 00.143-.068c.338-.493.675-.977 1.012-1.47.076-.102.144-.212.228-.331H33.13c-.405 0-.81.05-1.197.153-.818.22-1.51.646-2.007 1.35-.49.689-.675 1.453-.616 2.286.068.968.464 1.793 1.198 2.43.742.645 1.627.943 2.597.951 1.467.009 2.925 0 4.393 0 .059 0 .084-.017.084-.093zM40.222 7.345c.691.34 1.433.476 2.192.527.599.043 1.206.043 1.804-.017.582-.06 1.156-.17 1.704-.39.902-.366 1.534-.978 1.804-1.93.236-.815.236-1.647.05-2.471-.151-.671-.48-1.232-1.02-1.657a3.624 3.624 0 00-1.24-.62c-.75-.221-1.525-.289-2.377-.289-.194 0-.472.009-.742.026-.615.05-1.214.152-1.796.365-.986.365-1.67 1.028-1.94 2.073a5.008 5.008 0 00-.024 2.37c.21.918.733 1.597 1.585 2.013zm.346-3.848c.126-.57.497-.867 1.037-1.002.413-.102.834-.12 1.264-.128.236-.017.481-.017.717 0 .48.017.97.034 1.434.187.522.17.792.544.876 1.079.042.263.05.535.034.798-.017.29-.059.587-.21.842-.186.322-.49.5-.835.603-.414.119-.835.136-1.265.144h-.093a3.724 3.724 0 01-.615 0c-.439-.008-.869-.025-1.29-.127-.43-.11-.776-.323-.962-.748a2.109 2.109 0 01-.143-.637 3.15 3.15 0 01.05-1.011zM26.116 4.041c-.22.11-.456.136-.7.136h-5.422c-.084 0-.11.017-.11.11v3.45c0 .085.017.11.102.11h1.787c.085 0 .11-.017.11-.102V6.046c0-.076.025-.093.093-.093h2.858c.067 0 .11.025.152.076.438.586.877 1.164 1.315 1.75.042.051.076.068.144.068h2.47c.025 0 .06.009.101-.017-.674-.781-1.307-1.597-2.049-2.31l.017-.017c.017 0 .025-.009.042-.009.498-.127.894-.4 1.18-.824.43-.646.515-1.35.346-2.09-.151-.705-.615-1.18-1.239-1.495-.59-.298-1.223-.391-1.872-.391-1.391-.008-2.782 0-4.174-.008-.05 0-.084.017-.118.059-.067.11-.143.212-.219.314-.337.493-.683.986-1.037 1.496h5.497c.119 0 .245 0 .363.017.262.034.514.11.675.33.295.383.151.91-.312 1.14zM8.528 7.84h2.276c.06 0 .085-.035.11-.069.902-1.419 1.796-2.837 2.698-4.256.084-.136.177-.28.27-.425.598.977 1.18 1.954 1.787 2.923-.059-.009-.11-.009-.16-.009-.843 0-1.678 0-2.52-.008-.06 0-.085.025-.11.068-.287.45-.582.892-.877 1.342-.093.144-.186.28-.279.433h7.47c-.016-.025-.024-.05-.033-.068-1.332-2.158-2.664-4.299-3.988-6.448a2.855 2.855 0 00-.388-.459c-.43-.416-1.299-.425-1.729 0a2.95 2.95 0 00-.446.527c-1.35 2.115-2.69 4.24-4.04 6.355-.016.025-.05.05-.041.093zM7.27 7.84c.068 0 .118-.017.16-.077.355-.51.7-1.02 1.054-1.53a3.21 3.21 0 01.17-.237h-4.52c-.203 0-.397-.025-.59-.076-1.442-.391-1.577-1.963-.869-2.761.38-.425.877-.612 1.433-.62 1.063-.01 2.117 0 3.18 0 .067 0 .1-.018.143-.069l.893-1.308c.11-.161.22-.314.33-.476C8.61.661 8.568.67 8.534.67h-4.46c-.422 0-.844.06-1.248.179-1.02.297-1.796.9-2.251 1.886-.304.662-.363 1.359-.253 2.064a3.392 3.392 0 001.003 1.954c.767.748 1.712 1.08 2.766 1.088 1.062.008 2.124 0 3.178 0z"
                                                    fill="#000C37"></path>
                                                <path
                                                    d="M48.907 2.454c0 .068.026.085.085.085h5.995c.058 0 .092-.017.126-.068.27-.4.548-.79.818-1.19l.422-.611h-7.345c-.067 0-.092.008-.092.085 0 .57 0 1.13-.009 1.699zM49.017 7.838h5.902c.127 0 .203-.034.278-.144.203-.306.414-.603.624-.9.177-.264.363-.519.548-.8-.033 0-.042-.008-.059-.008h-7.319c-.084 0-.084.034-.084.094v1.648c0 .093.026.11.11.11zM48.907 4.926c0 .068.017.093.084.093h5.784c.06 0 .093-.017.127-.06.228-.33.455-.653.683-.976.135-.187.27-.383.413-.587h-6.981c-.085 0-.119.009-.119.102.017.476.017.952.009 1.428z"
                                                    fill="#00AEEF"></path>
                                                <path
                                                    d="M17.675 9.305h-.556c-.06 0-.093.017-.11.076-.16.586-.329 1.172-.49 1.75-.041.153-.092.315-.134.467a.323.323 0 01-.05-.085l-.608-2.132c-.017-.05-.034-.076-.093-.076h-.548c-.067 0-.067.025-.05.076.05.162.084.323.135.476a.92.92 0 01.008.654c-.126.382-.228.773-.337 1.164h-.017c-.008-.026-.017-.051-.025-.068l-.633-2.217c-.017-.068-.05-.085-.118-.085a6.457 6.457 0 01-.573 0c-.076 0-.101.017-.076.093.068.213.135.433.202.646l.81 2.693c.017.06.042.093.11.085.177-.009.354-.009.522 0 .068 0 .093-.026.11-.085.067-.255.135-.501.202-.756.06-.23.127-.467.194-.705.034.034.042.076.05.11l.38 1.35c.017.06.034.077.093.077h.548c.059 0 .084-.017.101-.076.127-.433.262-.858.388-1.291.21-.689.413-1.377.624-2.065.034-.06.025-.076-.059-.076zM19.413 9.252c-.38.009-.725.102-1.012.357-.573.493-.742 1.121-.632 1.843.118.723.708 1.326 1.39 1.394.423.042.81-.026 1.148-.28.497-.375.742-.893.733-1.513 0-.11-.008-.212-.017-.323-.092-.739-.725-1.486-1.61-1.478zm.565 2.685a.904.904 0 01-1.442-.374c-.185-.459-.143-.91.186-1.292.345-.399.994-.399 1.349.009.202.238.278.467.278.926a.99.99 0 01-.371.73zM7.768 9.305H6.714c-.084 0-.11.025-.11.11V12.72c0 .085.026.11.11.11.396-.008.793.017 1.189-.017a1.47 1.47 0 00.632-.178c.734-.4 1.02-1.113.911-1.878-.11-.866-.801-1.452-1.678-1.452zm.81 2.438a.98.98 0 01-.81.408c-.118.008-.244 0-.362 0-.068 0-.085-.017-.085-.085v-.994-.994c0-.068.017-.094.093-.094.21.009.413-.008.624.034.413.102.733.502.75.926 0 .29-.033.561-.21.799zM28.182 9.305h-1.029c-.101 0-.135.017-.126.127.008.544 0 1.096 0 1.64v1.656c0 .077.025.102.1.102.338-.008.667 0 1.004 0 .177 0 .354-.017.523-.068.894-.271 1.391-1.121 1.189-2.123-.152-.774-.818-1.334-1.661-1.334zm.767 2.48c-.194.247-.455.349-.759.366-.126.008-.253 0-.37 0-.068 0-.093-.026-.093-.094v-.994-.985c0-.077.025-.102.1-.094.195.009.397-.017.59.034.406.102.65.374.743.773.076.349.025.697-.21.994zM23.359 11.58c-.025-.043-.05-.069.017-.103.345-.178.53-.467.581-.85.102-.713-.345-1.316-1.096-1.324-.438-.009-.885 0-1.323 0-.085 0-.118.017-.11.11.008.552 0 1.096 0 1.648v1.657c0 .085.025.11.11.11.16-.008.32-.008.488 0 .085 0 .119-.017.119-.11-.009-.332 0-.663 0-.994 0-.085.017-.12.1-.11.094.008.186.008.27 0 .068 0 .102.016.136.076.202.348.404.697.607 1.053.033.06.076.094.151.094.203-.009.405-.009.608 0 .092 0 .092-.017.05-.094-.244-.399-.48-.781-.708-1.164zm-.447-.587c-.244.051-.49.017-.734.026-.05 0-.05-.034-.05-.068v-.459-.45c0-.043 0-.085.059-.077.227.009.455-.017.683.017.236.034.396.247.404.51a.495.495 0 01-.362.501zM2.819 11.258c-.085-.06-.186-.085-.287-.127.05-.026.093-.043.127-.068a.639.639 0 00.311-.382c.152-.561-.168-1.07-.817-1.105-.405-.025-.818 0-1.223-.008-.067 0-.084.017-.084.085v3.092c0 .076.025.102.1.102h1.021c.152 0 .295-.009.439-.043.227-.05.43-.152.581-.34.169-.212.169-.467.135-.713a.67.67 0 00-.303-.493zm-1.265-1.121c.169 0 .346-.009.514.008a.293.293 0 01.295.29c.017.254-.059.381-.253.424-.185.042-.379.008-.573.017-.05 0-.05-.034-.05-.068v-.306-.297c.008-.051.025-.068.067-.068zm.902 1.741c-.025.272-.16.391-.438.4-.144 0-.287-.009-.439 0-.076 0-.1-.026-.092-.102.008-.11 0-.221 0-.323v-.357c0-.034-.009-.076.05-.068.21 0 .43-.025.64.026.203.05.304.204.28.424zM11.158 9.305h-1.24c-.083 0-.117.017-.117.11.008.552 0 1.096 0 1.648v1.648c0 .085.017.12.11.12.16-.01.32-.01.488 0 .085 0 .102-.026.102-.103v-.926c0-.068.017-.093.092-.093.093.008.186 0 .287 0 .194 0 .388.017.582-.034.65-.153.978-.73.877-1.419-.101-.595-.565-.951-1.18-.951zm.068 1.75c-.228.034-.447.008-.675.017-.059 0-.05-.043-.05-.077v-.475-.476c0-.043-.009-.085.059-.085.219.008.438-.017.657.017.253.042.43.255.439.518.008.323-.228.535-.43.56zM26.598 12.124h-1.299c-.135 0-.135 0-.135-.135V9.406c0-.077-.017-.11-.101-.102a4.862 4.862 0 01-.497 0c-.085 0-.102.025-.102.102V12.719c0 .051-.017.102.068.102h2.082c.06 0 .076-.025.076-.076 0-.17-.008-.349 0-.518.017-.085-.017-.103-.093-.103zM5.373 10.57a3.35 3.35 0 01-.413 0c-.068 0-.101.026-.118.094l-.228.832c-.059.204-.118.417-.185.646-.017-.06-.026-.085-.034-.119-.126-.45-.261-.9-.388-1.35-.017-.069-.05-.094-.126-.094a4.22 4.22 0 01-.464 0c-.084 0-.093.025-.068.093.245.697.481 1.402.717 2.099a.31.31 0 01.009.195c-.068.212-.118.425-.186.637-.025.077-.017.11.076.11.143-.008.287-.008.422 0 .067 0 .1-.025.118-.093l.556-1.733c.127-.408.261-.807.396-1.215.017-.093 0-.11-.084-.102zM43.578 2.428a4.04 4.04 0 00-.717 0c.236-.008.473-.008.717 0z"
                                                    fill="#000C37"></path>
                                                <path
                                                    d="M43.578 2.428c-.236-.008-.48-.008-.717 0h.717zM42.903 6.08c.203.017.413.017.616 0-.21.009-.413.009-.616 0z"
                                                    fill="#000C37"></path>
                                                <path d="M43.51 6.08h-.614c.21.009.413.009.615 0z" fill="#000C37">
                                                </path>
                                            </svg></div>
                                    </div>
                                    <div class="hlFviy"><span class="aPz0gF FBF5lA RGNfoO">CARGOES Finance provides
                                            access to finance for exporters, importers and logistics companies across
                                            the globe for receivables and payables</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="pXIXmu">
                            <h3 class="aPz0gF ubj37B">Contact details</h3>
                            <div class="RIJ4Xl"><label class="VZ5Y_D"><span class="j4gBUh oLLBF9 uMoBHL">First name<span
                                            class="ZGKXWC"> *</span></span><span class="mBN212 _wMvYs"><span
                                            class="CF9Fef"><input type="text" class="ZayS8x" name="user.firstName"
                                                value=""><span class="CueOqv"><span
                                                    class="hb_fOV">Jane</span></span></span></span><span
                                        class="MkfQci FbFUGE YDnCxt">First name is required</span></label><label
                                    class="VZ5Y_D"><span class="j4gBUh oLLBF9 uMoBHL">Last name<span class="ZGKXWC">
                                            *</span></span><span class="mBN212 _wMvYs"><span class="CF9Fef"><input
                                                type="text" class="ZayS8x" name="user.lastName" value=""><span
                                                class="CueOqv"><span
                                                    class="hb_fOV">Appleseed</span></span></span></span><span
                                        class="MkfQci FbFUGE YDnCxt">Last name is required</span></label><label
                                    class="VZ5Y_D"><span class="j4gBUh oLLBF9 uMoBHL">Phone<span class="ZGKXWC">
                                            *</span></span><span class="mBN212 _wMvYs"><span class="CF9Fef"><input
                                                type="text" class="ZayS8x" name="user.phone" value=""><span
                                                class="CueOqv"><span class="hb_fOV">(000)
                                                    000-0000</span></span></span></span><span
                                        class="MkfQci FbFUGE YDnCxt">Phone is required</span></label><label
                                    class="VZ5Y_D"><span class="j4gBUh oLLBF9 uMoBHL">E-mail<span class="ZGKXWC">
                                            *</span></span><span class="mBN212 _wMvYs"><span class="CF9Fef"><input
                                                type="email" class="ZayS8x" name="user.email" value=""><span
                                                class="CueOqv"><span
                                                    class="hb_fOV">jane.appleseed@mail.com</span></span></span></span><span
                                        class="MkfQci FbFUGE YDnCxt">E-mail is required</span></label>
                                <div class="gc2hLj"><span class="mBN212"><span class="CF9Fef"><input type="text"
                                                class="ZayS8x" name="user.country" value=""></span></span></div>
                            </div>
                        </div>
                        <div class="pXIXmu fV_cOv"><button type="submit"
                                class="WTsBDL DX8c49 C6py6B EwQ7VS" name="send">Send</button>
                            <p class="aPz0gF cDd_iz qxr8ak">By clicking Send, you agree with our <a href="/tos"
                                    target="_blank" class="vNMkr1">Terms &amp; conditions.</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div id="request_a_quote_tooltip"></div>
            <div id="request_a_quote_modal">
                <div class="ieUoOG R1XD_t">
                    <div class="bR8m7X">
                        <div class="LPbDIz">
                            <h3 class="aPz0gF ubj37B">HS codes</h3>
                        </div>
                        <div class="nzhfw2">
                            <div class="PYfR0L">
                                <div class="pN2Ouv"><a><span class="aPz0gF evnicv aLoIDF">Main
                                            categories<i>/</i></span></a></div>
                            </div>
                            <div class="maGiZE">
                                <div class="wbsfjE pASiEl">
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl xiKvDC"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>&amp;<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">01-05</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl KYi7JD"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>V<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>g<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">06-14</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl jIOH9D"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>V<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>g<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>F<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>O<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">15-15</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl LXfGwD"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>F<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>f<strong
                                                    style="font-weight: 600;"></strong>f<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>B<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>v<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>g<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>T<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">16-24</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl b_9q73"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">25-27</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl Ukob7P"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>C<strong
                                                    style="font-weight: 600;"></strong>h<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>&amp;<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>I<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">28-38</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl pVA2fw"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>/<strong
                                                    style="font-weight: 600;"></strong>R<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">39-40</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl DXMosq"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>R<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>w<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>H<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>S<strong
                                                    style="font-weight: 600;"></strong>k<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>L<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>h<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>&amp;<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>F<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">41-43</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl rxdL_c"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>W<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>&amp;<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>W<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">44-46</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl Z8oivn"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>p<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>f<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>W<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>F<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>b<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">47-49</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl eCyXXZ"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>T<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>x<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">50-63</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl MOt2el"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>F<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>w<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>/<strong
                                                    style="font-weight: 600;"></strong>H<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>g<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">64-67</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl e29DgV"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>S<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>/<strong
                                                    style="font-weight: 600;"></strong>G<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">68-70</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl hj3hIw"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>S<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>,<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>C<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">71-71</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl Pwv5N3"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>B<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">72-83</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl odC5Id"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>h<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>y<strong
                                                    style="font-weight: 600;"></strong>/<strong
                                                    style="font-weight: 600;"></strong>E<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">84-85</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl MKNjbm"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>T<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>p<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">86-89</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl uivkf0"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>P<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>I<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">90-92</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl sygfrv"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>m<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">93-93</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl oqBolt"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>M<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>f<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>c<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">94-96</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl kYJABx"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>W<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>k<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>f<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>A<strong
                                                    style="font-weight: 600;"></strong>r<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">97-97</span>
                                    </div>
                                    <div class="lIGz6K">
                                        <div class=""><span class="mqrp5L"><span class="_GVRAU"><span
                                                        class="Et0u2X"><span class="H2k7Rl IECSjV"
                                                            style="background-image: url(&quot;/design/images/apps/shipping/request/icon-css_sprites.png&quot;);"></span></span></span></span>
                                        </div><span class="aPz0gF FBF5lA CsRTh2"><span><strong
                                                    style="font-weight: 600;"></strong>U<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>q<strong
                                                    style="font-weight: 600;"></strong>u<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>U<strong
                                                    style="font-weight: 600;"></strong>S<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>N<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>t<strong
                                                    style="font-weight: 600;"></strong>i<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>n<strong
                                                    style="font-weight: 600;"></strong>a<strong
                                                    style="font-weight: 600;"></strong>l<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>H<strong
                                                    style="font-weight: 600;"></strong>S<strong
                                                    style="font-weight: 600;"></strong> <strong
                                                    style="font-weight: 600;"></strong>C<strong
                                                    style="font-weight: 600;"></strong>o<strong
                                                    style="font-weight: 600;"></strong>d<strong
                                                    style="font-weight: 600;"></strong>e<strong
                                                    style="font-weight: 600;"></strong>s<strong
                                                    style="font-weight: 600;"></strong></span></span><span
                                            class="aPz0gF FBF5lA OAIRDH">98-99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oL7S1B">
                            <div class="touBPW"><button type="button"
                                    class="WTsBDL UB7OH_ SU5U8K KIwQOt">Cancel</button></div>
                        </div>
                    </div>
                    <div class="E8BzK1"></div>
                </div>
            </div>
    </div>
    </div>
</body>

</html>