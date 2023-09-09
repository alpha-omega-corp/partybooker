/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/assets/tsparticles.bundle.js":
/*!***************************************************!*\
  !*** ./resources/js/assets/tsparticles.bundle.js ***!
  \***************************************************/
/***/ (function(module, exports, __webpack_require__) {

/* module decorator */ module = __webpack_require__.nmd(module);
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw new Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator["return"] && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw new Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, "catch": function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e2) { throw _e2; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e3) { didErr = true; err = _e3; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
/*!
 * Author : Matteo Bruni
 * MIT license: https://opensource.org/licenses/MIT
 * Demo / Generator : https://particles.js.org/
 * GitHub : https://www.github.com/matteobruni/tsparticles
 * How to use? : Check the GitHub README
 * v2.8.0
 */
(function webpackUniversalModuleDefinition(root, factory) {
  if (( false ? 0 : _typeof(exports)) === 'object' && ( false ? 0 : _typeof(module)) === 'object') module.exports = factory();else if (true) !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else { var i, a; }
})(this, function () {
  return (/******/function () {
      // webpackBootstrap
      /******/
      "use strict";

      /******/ // The require scope
      /******/
      var __nested_webpack_require_18088__ = {};
      /******/
      /************************************************************************/
      /******/ /* webpack/runtime/define property getters */
      /******/
      (function () {
        /******/ // define getter functions for harmony exports
        /******/__nested_webpack_require_18088__.d = function (exports, definition) {
          /******/for (var key in definition) {
            /******/if (__nested_webpack_require_18088__.o(definition, key) && !__nested_webpack_require_18088__.o(exports, key)) {
              /******/Object.defineProperty(exports, key, {
                enumerable: true,
                get: definition[key]
              });
              /******/
            }
            /******/
          }
          /******/
        };
        /******/
      })();
      /******/
      /******/ /* webpack/runtime/hasOwnProperty shorthand */
      /******/
      (function () {
        /******/__nested_webpack_require_18088__.o = function (obj, prop) {
          return Object.prototype.hasOwnProperty.call(obj, prop);
        };
        /******/
      })();
      /******/
      /******/ /* webpack/runtime/make namespace object */
      /******/
      (function () {
        /******/ // define __esModule on exports
        /******/__nested_webpack_require_18088__.r = function (exports) {
          /******/if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
            /******/Object.defineProperty(exports, Symbol.toStringTag, {
              value: 'Module'
            });
            /******/
          }
          /******/
          Object.defineProperty(exports, '__esModule', {
            value: true
          });
          /******/
        };
        /******/
      })();
      /******/
      /************************************************************************/
      var __nested_webpack_exports__ = {};
      // ESM COMPAT FLAG
      __nested_webpack_require_18088__.r(__nested_webpack_exports__);

      // EXPORTS
      __nested_webpack_require_18088__.d(__nested_webpack_exports__, {
        "AnimatableColor": function AnimatableColor() {
          return (/* reexport */_AnimatableColor
          );
        },
        "AnimationOptions": function AnimationOptions() {
          return (/* reexport */_AnimationOptions
          );
        },
        "Background": function Background() {
          return (/* reexport */_Background
          );
        },
        "BackgroundMask": function BackgroundMask() {
          return (/* reexport */_BackgroundMask
          );
        },
        "BackgroundMaskCover": function BackgroundMaskCover() {
          return (/* reexport */_BackgroundMaskCover
          );
        },
        "Circle": function Circle() {
          return (/* reexport */_Circle
          );
        },
        "ClickEvent": function ClickEvent() {
          return (/* reexport */_ClickEvent
          );
        },
        "Collisions": function Collisions() {
          return (/* reexport */_Collisions
          );
        },
        "CollisionsAbsorb": function CollisionsAbsorb() {
          return (/* reexport */_CollisionsAbsorb
          );
        },
        "CollisionsOverlap": function CollisionsOverlap() {
          return (/* reexport */_CollisionsOverlap
          );
        },
        "ColorAnimation": function ColorAnimation() {
          return (/* reexport */_ColorAnimation
          );
        },
        "DivEvent": function DivEvent() {
          return (/* reexport */_DivEvent
          );
        },
        "Events": function Events() {
          return (/* reexport */_Events
          );
        },
        "ExternalInteractorBase": function ExternalInteractorBase() {
          return (/* reexport */_ExternalInteractorBase
          );
        },
        "FullScreen": function FullScreen() {
          return (/* reexport */_FullScreen
          );
        },
        "HoverEvent": function HoverEvent() {
          return (/* reexport */_HoverEvent
          );
        },
        "HslAnimation": function HslAnimation() {
          return (/* reexport */_HslAnimation
          );
        },
        "HslColorManager": function HslColorManager() {
          return (/* reexport */_HslColorManager
          );
        },
        "Interactivity": function Interactivity() {
          return (/* reexport */_Interactivity
          );
        },
        "ManualParticle": function ManualParticle() {
          return (/* reexport */_ManualParticle
          );
        },
        "Modes": function Modes() {
          return (/* reexport */_Modes
          );
        },
        "Move": function Move() {
          return (/* reexport */_Move
          );
        },
        "MoveAngle": function MoveAngle() {
          return (/* reexport */_MoveAngle
          );
        },
        "MoveAttract": function MoveAttract() {
          return (/* reexport */_MoveAttract
          );
        },
        "MoveCenter": function MoveCenter() {
          return (/* reexport */_MoveCenter
          );
        },
        "MoveGravity": function MoveGravity() {
          return (/* reexport */_MoveGravity
          );
        },
        "MovePath": function MovePath() {
          return (/* reexport */_MovePath
          );
        },
        "MoveTrail": function MoveTrail() {
          return (/* reexport */_MoveTrail
          );
        },
        "Opacity": function Opacity() {
          return (/* reexport */_Opacity
          );
        },
        "OpacityAnimation": function OpacityAnimation() {
          return (/* reexport */_OpacityAnimation
          );
        },
        "Options": function Options() {
          return (/* reexport */_Options
          );
        },
        "OptionsColor": function OptionsColor() {
          return (/* reexport */_OptionsColor
          );
        },
        "OutModes": function OutModes() {
          return (/* reexport */_OutModes
          );
        },
        "Parallax": function Parallax() {
          return (/* reexport */_Parallax
          );
        },
        "ParticlesBounce": function ParticlesBounce() {
          return (/* reexport */_ParticlesBounce
          );
        },
        "ParticlesBounceFactor": function ParticlesBounceFactor() {
          return (/* reexport */_ParticlesBounceFactor
          );
        },
        "ParticlesDensity": function ParticlesDensity() {
          return (/* reexport */_ParticlesDensity
          );
        },
        "ParticlesInteractorBase": function ParticlesInteractorBase() {
          return (/* reexport */_ParticlesInteractorBase
          );
        },
        "ParticlesNumber": function ParticlesNumber() {
          return (/* reexport */_ParticlesNumber
          );
        },
        "ParticlesOptions": function ParticlesOptions() {
          return (/* reexport */_ParticlesOptions
          );
        },
        "Point": function Point() {
          return (/* reexport */_Point
          );
        },
        "Range": function Range() {
          return (/* reexport */_Range
          );
        },
        "Rectangle": function Rectangle() {
          return (/* reexport */_Rectangle
          );
        },
        "ResizeEvent": function ResizeEvent() {
          return (/* reexport */_ResizeEvent
          );
        },
        "Responsive": function Responsive() {
          return (/* reexport */_Responsive
          );
        },
        "RgbColorManager": function RgbColorManager() {
          return (/* reexport */_RgbColorManager
          );
        },
        "Shadow": function Shadow() {
          return (/* reexport */_Shadow
          );
        },
        "Shape": function Shape() {
          return (/* reexport */_Shape
          );
        },
        "Size": function Size() {
          return (/* reexport */_Size
          );
        },
        "SizeAnimation": function SizeAnimation() {
          return (/* reexport */_SizeAnimation
          );
        },
        "Spin": function Spin() {
          return (/* reexport */_Spin
          );
        },
        "Stroke": function Stroke() {
          return (/* reexport */_Stroke
          );
        },
        "Theme": function Theme() {
          return (/* reexport */_Theme
          );
        },
        "ThemeDefault": function ThemeDefault() {
          return (/* reexport */_ThemeDefault
          );
        },
        "ValueWithRandom": function ValueWithRandom() {
          return (/* reexport */_ValueWithRandom
          );
        },
        "Vector": function Vector() {
          return (/* reexport */_Vector
          );
        },
        "Vector3d": function Vector3d() {
          return (/* reexport */_Vector3d
          );
        },
        "ZIndex": function ZIndex() {
          return (/* reexport */_ZIndex
          );
        },
        "addColorManager": function addColorManager() {
          return (/* reexport */_addColorManager
          );
        },
        "addEasing": function addEasing() {
          return (/* reexport */_addEasing
          );
        },
        "alterHsl": function alterHsl() {
          return (/* reexport */_alterHsl
          );
        },
        "animate": function animate() {
          return (/* reexport */_animate
          );
        },
        "areBoundsInside": function areBoundsInside() {
          return (/* reexport */_areBoundsInside
          );
        },
        "arrayRandomIndex": function arrayRandomIndex() {
          return (/* reexport */_arrayRandomIndex
          );
        },
        "calcExactPositionOrRandomFromSize": function calcExactPositionOrRandomFromSize() {
          return (/* reexport */_calcExactPositionOrRandomFromSize
          );
        },
        "calcExactPositionOrRandomFromSizeRanged": function calcExactPositionOrRandomFromSizeRanged() {
          return (/* reexport */_calcExactPositionOrRandomFromSizeRanged
          );
        },
        "calcPositionFromSize": function calcPositionFromSize() {
          return (/* reexport */_calcPositionFromSize
          );
        },
        "calcPositionOrRandomFromSize": function calcPositionOrRandomFromSize() {
          return (/* reexport */_calcPositionOrRandomFromSize
          );
        },
        "calcPositionOrRandomFromSizeRanged": function calcPositionOrRandomFromSizeRanged() {
          return (/* reexport */_calcPositionOrRandomFromSizeRanged
          );
        },
        "calculateBounds": function calculateBounds() {
          return (/* reexport */_calculateBounds
          );
        },
        "cancelAnimation": function cancelAnimation() {
          return (/* reexport */_cancelAnimation
          );
        },
        "circleBounce": function circleBounce() {
          return (/* reexport */_circleBounce
          );
        },
        "circleBounceDataFromParticle": function circleBounceDataFromParticle() {
          return (/* reexport */_circleBounceDataFromParticle
          );
        },
        "clamp": function clamp() {
          return (/* reexport */_clamp
          );
        },
        "clear": function clear() {
          return (/* reexport */_clear
          );
        },
        "collisionVelocity": function collisionVelocity() {
          return (/* reexport */_collisionVelocity
          );
        },
        "colorMix": function colorMix() {
          return (/* reexport */_colorMix
          );
        },
        "colorToHsl": function colorToHsl() {
          return (/* reexport */_colorToHsl
          );
        },
        "colorToRgb": function colorToRgb() {
          return (/* reexport */_colorToRgb
          );
        },
        "deepExtend": function deepExtend() {
          return (/* reexport */_deepExtend
          );
        },
        "divMode": function divMode() {
          return (/* reexport */_divMode
          );
        },
        "divModeExecute": function divModeExecute() {
          return (/* reexport */_divModeExecute
          );
        },
        "drawLine": function drawLine() {
          return (/* reexport */_drawLine
          );
        },
        "drawParticle": function drawParticle() {
          return (/* reexport */_drawParticle
          );
        },
        "drawParticlePlugin": function drawParticlePlugin() {
          return (/* reexport */_drawParticlePlugin
          );
        },
        "drawPlugin": function drawPlugin() {
          return (/* reexport */_drawPlugin
          );
        },
        "drawShape": function drawShape() {
          return (/* reexport */_drawShape
          );
        },
        "drawShapeAfterEffect": function drawShapeAfterEffect() {
          return (/* reexport */_drawShapeAfterEffect
          );
        },
        "drawTriangle": function drawTriangle() {
          return (/* reexport */_drawTriangle
          );
        },
        "executeOnSingleOrMultiple": function executeOnSingleOrMultiple() {
          return (/* reexport */_executeOnSingleOrMultiple
          );
        },
        "findItemFromSingleOrMultiple": function findItemFromSingleOrMultiple() {
          return (/* reexport */_findItemFromSingleOrMultiple
          );
        },
        "generatedAttribute": function generatedAttribute() {
          return (/* reexport */_generatedAttribute
          );
        },
        "getDistance": function getDistance() {
          return (/* reexport */_getDistance
          );
        },
        "getDistances": function getDistances() {
          return (/* reexport */_getDistances
          );
        },
        "getEasing": function getEasing() {
          return (/* reexport */_getEasing
          );
        },
        "getHslAnimationFromHsl": function getHslAnimationFromHsl() {
          return (/* reexport */_getHslAnimationFromHsl
          );
        },
        "getHslFromAnimation": function getHslFromAnimation() {
          return (/* reexport */_getHslFromAnimation
          );
        },
        "getLinkColor": function getLinkColor() {
          return (/* reexport */_getLinkColor
          );
        },
        "getLinkRandomColor": function getLinkRandomColor() {
          return (/* reexport */_getLinkRandomColor
          );
        },
        "getParticleBaseVelocity": function getParticleBaseVelocity() {
          return (/* reexport */_getParticleBaseVelocity
          );
        },
        "getParticleDirectionAngle": function getParticleDirectionAngle() {
          return (/* reexport */_getParticleDirectionAngle
          );
        },
        "getRandom": function getRandom() {
          return (/* reexport */_getRandom
          );
        },
        "getRandomRgbColor": function getRandomRgbColor() {
          return (/* reexport */_getRandomRgbColor
          );
        },
        "getRangeMax": function getRangeMax() {
          return (/* reexport */_getRangeMax
          );
        },
        "getRangeMin": function getRangeMin() {
          return (/* reexport */_getRangeMin
          );
        },
        "getRangeValue": function getRangeValue() {
          return (/* reexport */_getRangeValue
          );
        },
        "getStyleFromHsl": function getStyleFromHsl() {
          return (/* reexport */_getStyleFromHsl
          );
        },
        "getStyleFromRgb": function getStyleFromRgb() {
          return (/* reexport */_getStyleFromRgb
          );
        },
        "getValue": function getValue() {
          return (/* reexport */_getValue
          );
        },
        "hasMatchMedia": function hasMatchMedia() {
          return (/* reexport */_hasMatchMedia
          );
        },
        "hslToRgb": function hslToRgb() {
          return (/* reexport */_hslToRgb
          );
        },
        "hslaToRgba": function hslaToRgba() {
          return (/* reexport */_hslaToRgba
          );
        },
        "isDivModeEnabled": function isDivModeEnabled() {
          return (/* reexport */_isDivModeEnabled
          );
        },
        "isInArray": function isInArray() {
          return (/* reexport */_isInArray
          );
        },
        "isPointInside": function isPointInside() {
          return (/* reexport */_isPointInside
          );
        },
        "isSsr": function isSsr() {
          return (/* reexport */_isSsr
          );
        },
        "itemFromArray": function itemFromArray() {
          return (/* reexport */_itemFromArray
          );
        },
        "itemFromSingleOrMultiple": function itemFromSingleOrMultiple() {
          return (/* reexport */_itemFromSingleOrMultiple
          );
        },
        "loadFont": function loadFont() {
          return (/* reexport */_loadFont
          );
        },
        "loadFull": function loadFull() {
          return (/* reexport */_loadFull
          );
        },
        "loadOptions": function loadOptions() {
          return (/* reexport */_loadOptions
          );
        },
        "loadParticlesOptions": function loadParticlesOptions() {
          return (/* reexport */_loadParticlesOptions
          );
        },
        "loadSlim": function loadSlim() {
          return (/* reexport */_loadSlim
          );
        },
        "mix": function mix() {
          return (/* reexport */_mix
          );
        },
        "mouseDownEvent": function mouseDownEvent() {
          return (/* reexport */_mouseDownEvent
          );
        },
        "mouseLeaveEvent": function mouseLeaveEvent() {
          return (/* reexport */_mouseLeaveEvent
          );
        },
        "mouseMoveEvent": function mouseMoveEvent() {
          return (/* reexport */_mouseMoveEvent
          );
        },
        "mouseOutEvent": function mouseOutEvent() {
          return (/* reexport */_mouseOutEvent
          );
        },
        "mouseUpEvent": function mouseUpEvent() {
          return (/* reexport */_mouseUpEvent
          );
        },
        "paintBase": function paintBase() {
          return (/* reexport */_paintBase2
          );
        },
        "paintImage": function paintImage() {
          return (/* reexport */_paintImage2
          );
        },
        "parseAlpha": function parseAlpha() {
          return (/* reexport */_parseAlpha
          );
        },
        "randomInRange": function randomInRange() {
          return (/* reexport */_randomInRange
          );
        },
        "rangeColorToHsl": function rangeColorToHsl() {
          return (/* reexport */_rangeColorToHsl
          );
        },
        "rangeColorToRgb": function rangeColorToRgb() {
          return (/* reexport */_rangeColorToRgb
          );
        },
        "rectBounce": function rectBounce() {
          return (/* reexport */_rectBounce
          );
        },
        "resizeEvent": function resizeEvent() {
          return (/* reexport */_resizeEvent
          );
        },
        "rgbToHsl": function rgbToHsl() {
          return (/* reexport */_rgbToHsl
          );
        },
        "safeMatchMedia": function safeMatchMedia() {
          return (/* reexport */_safeMatchMedia
          );
        },
        "setRandom": function setRandom() {
          return (/* reexport */_setRandom
          );
        },
        "setRangeValue": function setRangeValue() {
          return (/* reexport */_setRangeValue
          );
        },
        "singleDivModeExecute": function singleDivModeExecute() {
          return (/* reexport */_singleDivModeExecute
          );
        },
        "stringToAlpha": function stringToAlpha() {
          return (/* reexport */_stringToAlpha
          );
        },
        "stringToRgb": function stringToRgb() {
          return (/* reexport */_stringToRgb
          );
        },
        "touchCancelEvent": function touchCancelEvent() {
          return (/* reexport */_touchCancelEvent
          );
        },
        "touchEndEvent": function touchEndEvent() {
          return (/* reexport */_touchEndEvent
          );
        },
        "touchMoveEvent": function touchMoveEvent() {
          return (/* reexport */_touchMoveEvent
          );
        },
        "touchStartEvent": function touchStartEvent() {
          return (/* reexport */_touchStartEvent
          );
        },
        "tsParticles": function tsParticles() {
          return (/* reexport */_tsParticles
          );
        },
        "visibilityChangeEvent": function visibilityChangeEvent() {
          return (/* reexport */_visibilityChangeEvent
          );
        }
      });
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/EventDispatcher.js
      var EventDispatcher = /*#__PURE__*/function () {
        function EventDispatcher() {
          _classCallCheck(this, EventDispatcher);
          this._listeners = new Map();
        }
        _createClass(EventDispatcher, [{
          key: "addEventListener",
          value: function addEventListener(type, listener) {
            var _a;
            this.removeEventListener(type, listener);
            if (!this._listeners.get(type)) {
              this._listeners.set(type, []);
            }
            (_a = this._listeners.get(type)) === null || _a === void 0 ? void 0 : _a.push(listener);
          }
        }, {
          key: "dispatchEvent",
          value: function dispatchEvent(type, args) {
            var _a;
            (_a = this._listeners.get(type)) === null || _a === void 0 ? void 0 : _a.forEach(function (handler) {
              return handler(args);
            });
          }
        }, {
          key: "hasEventListener",
          value: function hasEventListener(type) {
            return !!this._listeners.get(type);
          }
        }, {
          key: "removeAllEventListeners",
          value: function removeAllEventListeners(type) {
            if (!type) {
              this._listeners = new Map();
            } else {
              this._listeners["delete"](type);
            }
          }
        }, {
          key: "removeEventListener",
          value: function removeEventListener(type, listener) {
            var arr = this._listeners.get(type);
            if (!arr) {
              return;
            }
            var length = arr.length,
              idx = arr.indexOf(listener);
            if (idx < 0) {
              return;
            }
            if (length === 1) {
              this._listeners["delete"](type);
            } else {
              arr.splice(idx, 1);
            }
          }
        }]);
        return EventDispatcher;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Vector3d.js
      var _Vector3d = /*#__PURE__*/function () {
        function _Vector3d(xOrCoords, y, z) {
          _classCallCheck(this, _Vector3d);
          if (typeof xOrCoords !== "number" && xOrCoords) {
            this.x = xOrCoords.x;
            this.y = xOrCoords.y;
            var coords3d = xOrCoords;
            this.z = coords3d.z ? coords3d.z : 0;
          } else if (xOrCoords !== undefined && y !== undefined) {
            this.x = xOrCoords;
            this.y = y;
            this.z = z !== null && z !== void 0 ? z : 0;
          } else {
            throw new Error("tsParticles - Vector3d not initialized correctly");
          }
        }
        _createClass(_Vector3d, [{
          key: "angle",
          get: function get() {
            return Math.atan2(this.y, this.x);
          },
          set: function set(angle) {
            this.updateFromAngle(angle, this.length);
          }
        }, {
          key: "length",
          get: function get() {
            return Math.sqrt(this.getLengthSq());
          },
          set: function set(length) {
            this.updateFromAngle(this.angle, length);
          }
        }, {
          key: "add",
          value: function add(v) {
            return _Vector3d.create(this.x + v.x, this.y + v.y, this.z + v.z);
          }
        }, {
          key: "addTo",
          value: function addTo(v) {
            this.x += v.x;
            this.y += v.y;
            this.z += v.z;
          }
        }, {
          key: "copy",
          value: function copy() {
            return _Vector3d.clone(this);
          }
        }, {
          key: "distanceTo",
          value: function distanceTo(v) {
            return this.sub(v).length;
          }
        }, {
          key: "distanceToSq",
          value: function distanceToSq(v) {
            return this.sub(v).getLengthSq();
          }
        }, {
          key: "div",
          value: function div(n) {
            return _Vector3d.create(this.x / n, this.y / n, this.z / n);
          }
        }, {
          key: "divTo",
          value: function divTo(n) {
            this.x /= n;
            this.y /= n;
            this.z /= n;
          }
        }, {
          key: "getLengthSq",
          value: function getLengthSq() {
            return Math.pow(this.x, 2) + Math.pow(this.y, 2);
          }
        }, {
          key: "mult",
          value: function mult(n) {
            return _Vector3d.create(this.x * n, this.y * n, this.z * n);
          }
        }, {
          key: "multTo",
          value: function multTo(n) {
            this.x *= n;
            this.y *= n;
            this.z *= n;
          }
        }, {
          key: "rotate",
          value: function rotate(angle) {
            return _Vector3d.create(this.x * Math.cos(angle) - this.y * Math.sin(angle), this.x * Math.sin(angle) + this.y * Math.cos(angle), 0);
          }
        }, {
          key: "setTo",
          value: function setTo(c) {
            this.x = c.x;
            this.y = c.y;
            var v3d = c;
            this.z = v3d.z ? v3d.z : 0;
          }
        }, {
          key: "sub",
          value: function sub(v) {
            return _Vector3d.create(this.x - v.x, this.y - v.y, this.z - v.z);
          }
        }, {
          key: "subFrom",
          value: function subFrom(v) {
            this.x -= v.x;
            this.y -= v.y;
            this.z -= v.z;
          }
        }, {
          key: "updateFromAngle",
          value: function updateFromAngle(angle, length) {
            this.x = Math.cos(angle) * length;
            this.y = Math.sin(angle) * length;
          }
        }], [{
          key: "origin",
          get: function get() {
            return _Vector3d.create(0, 0, 0);
          }
        }, {
          key: "clone",
          value: function clone(source) {
            return _Vector3d.create(source.x, source.y, source.z);
          }
        }, {
          key: "create",
          value: function create(x, y, z) {
            return new _Vector3d(x, y, z);
          }
        }]);
        return _Vector3d;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Vector.js
      var _Vector = /*#__PURE__*/function (_Vector3d2) {
        _inherits(_Vector, _Vector3d2);
        var _super = _createSuper(_Vector);
        function _Vector(xOrCoords, y) {
          _classCallCheck(this, _Vector);
          return _super.call(this, xOrCoords, y, 0);
        }
        _createClass(_Vector, null, [{
          key: "origin",
          get: function get() {
            return _Vector.create(0, 0);
          }
        }, {
          key: "clone",
          value: function clone(source) {
            return _Vector.create(source.x, source.y);
          }
        }, {
          key: "create",
          value: function create(x, y) {
            return new _Vector(x, y);
          }
        }]);
        return _Vector;
      }(_Vector3d);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/NumberUtils.js

      var _random = Math.random;
      var easings = new Map();
      function _addEasing(name, easing) {
        if (!easings.get(name)) {
          easings.set(name, easing);
        }
      }
      function _getEasing(name) {
        return easings.get(name) || function (value) {
          return value;
        };
      }
      function _setRandom() {
        var rnd = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : Math.random;
        _random = rnd;
      }
      function _getRandom() {
        return _clamp(_random(), 0, 1 - 1e-16);
      }
      function _clamp(num, min, max) {
        return Math.min(Math.max(num, min), max);
      }
      function _mix(comp1, comp2, weight1, weight2) {
        return Math.floor((comp1 * weight1 + comp2 * weight2) / (weight1 + weight2));
      }
      function _randomInRange(r) {
        var max = _getRangeMax(r);
        var min = _getRangeMin(r);
        if (max === min) {
          min = 0;
        }
        return _getRandom() * (max - min) + min;
      }
      function _getRangeValue(value) {
        return typeof value === "number" ? value : _randomInRange(value);
      }
      function _getRangeMin(value) {
        return typeof value === "number" ? value : value.min;
      }
      function _getRangeMax(value) {
        return typeof value === "number" ? value : value.max;
      }
      function _setRangeValue(source, value) {
        if (source === value || value === undefined && typeof source === "number") {
          return source;
        }
        var min = _getRangeMin(source),
          max = _getRangeMax(source);
        return value !== undefined ? {
          min: Math.min(min, value),
          max: Math.max(max, value)
        } : _setRangeValue(min, max);
      }
      function _getValue(options) {
        var random = options.random,
          _ref = typeof random === "boolean" ? {
            enable: random,
            minimumValue: 0
          } : random,
          enable = _ref.enable,
          minimumValue = _ref.minimumValue;
        return enable ? _getRangeValue(_setRangeValue(options.value, minimumValue)) : _getRangeValue(options.value);
      }
      function _getDistances(pointA, pointB) {
        var dx = pointA.x - pointB.x,
          dy = pointA.y - pointB.y;
        return {
          dx: dx,
          dy: dy,
          distance: Math.sqrt(Math.pow(dx, 2) + Math.pow(dy, 2))
        };
      }
      function _getDistance(pointA, pointB) {
        return _getDistances(pointA, pointB).distance;
      }
      function _getParticleDirectionAngle(direction, position, center) {
        if (typeof direction === "number") {
          return direction * Math.PI / 180;
        } else {
          switch (direction) {
            case "top":
              return -Math.PI / 2;
            case "top-right":
              return -Math.PI / 4;
            case "right":
              return 0;
            case "bottom-right":
              return Math.PI / 4;
            case "bottom":
              return Math.PI / 2;
            case "bottom-left":
              return 3 * Math.PI / 4;
            case "left":
              return Math.PI;
            case "top-left":
              return -3 * Math.PI / 4;
            case "inside":
              return Math.atan2(center.y - position.y, center.x - position.x);
            case "outside":
              return Math.atan2(position.y - center.y, position.x - center.x);
            default:
              return _getRandom() * Math.PI * 2;
          }
        }
      }
      function _getParticleBaseVelocity(direction) {
        var baseVelocity = _Vector.origin;
        baseVelocity.length = 1;
        baseVelocity.angle = direction;
        return baseVelocity;
      }
      function _collisionVelocity(v1, v2, m1, m2) {
        return _Vector.create(v1.x * (m1 - m2) / (m1 + m2) + v2.x * 2 * m2 / (m1 + m2), v1.y);
      }
      function _calcPositionFromSize(data) {
        return data.position && data.position.x !== undefined && data.position.y !== undefined ? {
          x: data.position.x * data.size.width / 100,
          y: data.position.y * data.size.height / 100
        } : undefined;
      }
      function _calcPositionOrRandomFromSize(data) {
        var _a, _b, _c, _d;
        return {
          x: ((_b = (_a = data.position) === null || _a === void 0 ? void 0 : _a.x) !== null && _b !== void 0 ? _b : _getRandom() * 100) * data.size.width / 100,
          y: ((_d = (_c = data.position) === null || _c === void 0 ? void 0 : _c.y) !== null && _d !== void 0 ? _d : _getRandom() * 100) * data.size.height / 100
        };
      }
      function _calcPositionOrRandomFromSizeRanged(data) {
        var _a, _b;
        var position = {
          x: ((_a = data.position) === null || _a === void 0 ? void 0 : _a.x) !== undefined ? _getRangeValue(data.position.x) : undefined,
          y: ((_b = data.position) === null || _b === void 0 ? void 0 : _b.y) !== undefined ? _getRangeValue(data.position.y) : undefined
        };
        return _calcPositionOrRandomFromSize({
          size: data.size,
          position: position
        });
      }
      function _calcExactPositionOrRandomFromSize(data) {
        var _a, _b, _c, _d;
        return {
          x: (_b = (_a = data.position) === null || _a === void 0 ? void 0 : _a.x) !== null && _b !== void 0 ? _b : _getRandom() * data.size.width,
          y: (_d = (_c = data.position) === null || _c === void 0 ? void 0 : _c.y) !== null && _d !== void 0 ? _d : _getRandom() * data.size.height
        };
      }
      function _calcExactPositionOrRandomFromSizeRanged(data) {
        var _a, _b;
        var position = {
          x: ((_a = data.position) === null || _a === void 0 ? void 0 : _a.x) !== undefined ? _getRangeValue(data.position.x) : undefined,
          y: ((_b = data.position) === null || _b === void 0 ? void 0 : _b.y) !== undefined ? _getRangeValue(data.position.y) : undefined
        };
        return _calcExactPositionOrRandomFromSize({
          size: data.size,
          position: position
        });
      }
      function _parseAlpha(input) {
        return input ? input.endsWith("%") ? parseFloat(input) / 100 : parseFloat(input) : 1;
      }
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/Utils.js

      function rectSideBounce(pSide, pOtherSide, rectSide, rectOtherSide, velocity, factor) {
        var res = {
          bounced: false
        };
        if (pOtherSide.min < rectOtherSide.min || pOtherSide.min > rectOtherSide.max || pOtherSide.max < rectOtherSide.min || pOtherSide.max > rectOtherSide.max) {
          return res;
        }
        if (pSide.max >= rectSide.min && pSide.max <= (rectSide.max + rectSide.min) / 2 && velocity > 0 || pSide.min <= rectSide.max && pSide.min > (rectSide.max + rectSide.min) / 2 && velocity < 0) {
          res.velocity = velocity * -factor;
          res.bounced = true;
        }
        return res;
      }
      function checkSelector(element, selectors) {
        var res = _executeOnSingleOrMultiple(selectors, function (selector) {
          return element.matches(selector);
        });
        return res instanceof Array ? res.some(function (t) {
          return t;
        }) : res;
      }
      function _isSsr() {
        return typeof window === "undefined" || !window || typeof window.document === "undefined" || !window.document;
      }
      function _hasMatchMedia() {
        return !_isSsr() && typeof matchMedia !== "undefined";
      }
      function _safeMatchMedia(query) {
        if (!_hasMatchMedia()) {
          return;
        }
        return matchMedia(query);
      }
      function _animate() {
        return _isSsr() ? function (callback) {
          return setTimeout(callback);
        } : function (callback) {
          return (requestAnimationFrame || setTimeout)(callback);
        };
      }
      function _cancelAnimation() {
        return _isSsr() ? function (handle) {
          return clearTimeout(handle);
        } : function (handle) {
          return (cancelAnimationFrame || clearTimeout)(handle);
        };
      }
      function _isInArray(value, array) {
        return value === array || array instanceof Array && array.indexOf(value) > -1;
      }
      function _loadFont(_x, _x2) {
        return _loadFont2.apply(this, arguments);
      }
      function _loadFont2() {
        _loadFont2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee58(font, weight) {
          return _regeneratorRuntime().wrap(function _callee58$(_context58) {
            while (1) switch (_context58.prev = _context58.next) {
              case 0:
                _context58.prev = 0;
                _context58.next = 3;
                return document.fonts.load("".concat(weight !== null && weight !== void 0 ? weight : "400", " 36px '").concat(font !== null && font !== void 0 ? font : "Verdana", "'"));
              case 3:
                _context58.next = 7;
                break;
              case 5:
                _context58.prev = 5;
                _context58.t0 = _context58["catch"](0);
              case 7:
              case "end":
                return _context58.stop();
            }
          }, _callee58, null, [[0, 5]]);
        }));
        return _loadFont2.apply(this, arguments);
      }
      function _arrayRandomIndex(array) {
        return Math.floor(_getRandom() * array.length);
      }
      function _itemFromArray(array, index) {
        var useIndex = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        return array[index !== undefined && useIndex ? index % array.length : _arrayRandomIndex(array)];
      }
      function _isPointInside(point, size, offset, radius, direction) {
        return _areBoundsInside(_calculateBounds(point, radius !== null && radius !== void 0 ? radius : 0), size, offset, direction);
      }
      function _areBoundsInside(bounds, size, offset, direction) {
        var inside = true;
        if (!direction || direction === "bottom") {
          inside = bounds.top < size.height + offset.x;
        }
        if (inside && (!direction || direction === "left")) {
          inside = bounds.right > offset.x;
        }
        if (inside && (!direction || direction === "right")) {
          inside = bounds.left < size.width + offset.y;
        }
        if (inside && (!direction || direction === "top")) {
          inside = bounds.bottom > offset.y;
        }
        return inside;
      }
      function _calculateBounds(point, radius) {
        return {
          bottom: point.y + radius,
          left: point.x - radius,
          right: point.x + radius,
          top: point.y - radius
        };
      }
      function _deepExtend(destination) {
        for (var _len = arguments.length, sources = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
          sources[_key - 1] = arguments[_key];
        }
        for (var _i = 0, _sources = sources; _i < _sources.length; _i++) {
          var source = _sources[_i];
          if (source === undefined || source === null) {
            continue;
          }
          if (_typeof(source) !== "object") {
            destination = source;
            continue;
          }
          var sourceIsArray = Array.isArray(source);
          if (sourceIsArray && (_typeof(destination) !== "object" || !destination || !Array.isArray(destination))) {
            destination = [];
          } else if (!sourceIsArray && (_typeof(destination) !== "object" || !destination || Array.isArray(destination))) {
            destination = {};
          }
          var _loop = function _loop(key) {
            if (key === "__proto__") {
              return 1; // continue
            }
            var sourceDict = source,
              value = sourceDict[key],
              isObject = _typeof(value) === "object",
              destDict = destination;
            destDict[key] = isObject && Array.isArray(value) ? value.map(function (v) {
              return _deepExtend(destDict[key], v);
            }) : _deepExtend(destDict[key], value);
          };
          for (var key in source) {
            if (_loop(key)) continue;
          }
        }
        return destination;
      }
      function _isDivModeEnabled(mode, divs) {
        return !!_findItemFromSingleOrMultiple(divs, function (t) {
          return t.enable && _isInArray(mode, t.mode);
        });
      }
      function _divModeExecute(mode, divs, callback) {
        _executeOnSingleOrMultiple(divs, function (div) {
          var divMode = div.mode,
            divEnabled = div.enable;
          if (divEnabled && _isInArray(mode, divMode)) {
            _singleDivModeExecute(div, callback);
          }
        });
      }
      function _singleDivModeExecute(div, callback) {
        var selectors = div.selectors;
        _executeOnSingleOrMultiple(selectors, function (selector) {
          callback(selector, div);
        });
      }
      function _divMode(divs, element) {
        if (!element || !divs) {
          return;
        }
        return _findItemFromSingleOrMultiple(divs, function (div) {
          return checkSelector(element, div.selectors);
        });
      }
      function _circleBounceDataFromParticle(p) {
        return {
          position: p.getPosition(),
          radius: p.getRadius(),
          mass: p.getMass(),
          velocity: p.velocity,
          factor: _Vector.create(_getValue(p.options.bounce.horizontal), _getValue(p.options.bounce.vertical))
        };
      }
      function _circleBounce(p1, p2) {
        var _p1$velocity$sub = p1.velocity.sub(p2.velocity),
          xVelocityDiff = _p1$velocity$sub.x,
          yVelocityDiff = _p1$velocity$sub.y,
          _ref2 = [p1.position, p2.position],
          pos1 = _ref2[0],
          pos2 = _ref2[1],
          _getDistances2 = _getDistances(pos2, pos1),
          xDist = _getDistances2.dx,
          yDist = _getDistances2.dy;
        if (xVelocityDiff * xDist + yVelocityDiff * yDist < 0) {
          return;
        }
        var angle = -Math.atan2(yDist, xDist),
          m1 = p1.mass,
          m2 = p2.mass,
          u1 = p1.velocity.rotate(angle),
          u2 = p2.velocity.rotate(angle),
          v1 = _collisionVelocity(u1, u2, m1, m2),
          v2 = _collisionVelocity(u2, u1, m1, m2),
          vFinal1 = v1.rotate(-angle),
          vFinal2 = v2.rotate(-angle);
        p1.velocity.x = vFinal1.x * p1.factor.x;
        p1.velocity.y = vFinal1.y * p1.factor.y;
        p2.velocity.x = vFinal2.x * p2.factor.x;
        p2.velocity.y = vFinal2.y * p2.factor.y;
      }
      function _rectBounce(particle, divBounds) {
        var pPos = particle.getPosition(),
          size = particle.getRadius(),
          bounds = _calculateBounds(pPos, size),
          resH = rectSideBounce({
            min: bounds.left,
            max: bounds.right
          }, {
            min: bounds.top,
            max: bounds.bottom
          }, {
            min: divBounds.left,
            max: divBounds.right
          }, {
            min: divBounds.top,
            max: divBounds.bottom
          }, particle.velocity.x, _getValue(particle.options.bounce.horizontal));
        if (resH.bounced) {
          if (resH.velocity !== undefined) {
            particle.velocity.x = resH.velocity;
          }
          if (resH.position !== undefined) {
            particle.position.x = resH.position;
          }
        }
        var resV = rectSideBounce({
          min: bounds.top,
          max: bounds.bottom
        }, {
          min: bounds.left,
          max: bounds.right
        }, {
          min: divBounds.top,
          max: divBounds.bottom
        }, {
          min: divBounds.left,
          max: divBounds.right
        }, particle.velocity.y, _getValue(particle.options.bounce.vertical));
        if (resV.bounced) {
          if (resV.velocity !== undefined) {
            particle.velocity.y = resV.velocity;
          }
          if (resV.position !== undefined) {
            particle.position.y = resV.position;
          }
        }
      }
      function _executeOnSingleOrMultiple(obj, callback) {
        return obj instanceof Array ? obj.map(function (item, index) {
          return callback(item, index);
        }) : callback(obj, 0);
      }
      function _itemFromSingleOrMultiple(obj, index, useIndex) {
        return obj instanceof Array ? _itemFromArray(obj, index, useIndex) : obj;
      }
      function _findItemFromSingleOrMultiple(obj, callback) {
        return obj instanceof Array ? obj.find(function (t, index) {
          return callback(t, index);
        }) : callback(obj, 0) ? obj : undefined;
      }
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/ColorUtils.js

      var randomColorValue = "random",
        midColorValue = "mid",
        colorManagers = new Map();
      function _addColorManager(manager) {
        colorManagers.set(manager.key, manager);
      }
      function hue2rgb(p, q, t) {
        if (t < 0) {
          t += 1;
        }
        if (t > 1) {
          t -= 1;
        }
        if (t < 1 / 6) {
          return p + (q - p) * 6 * t;
        }
        if (t < 1 / 2) {
          return q;
        }
        if (t < 2 / 3) {
          return p + (q - p) * (2 / 3 - t) * 6;
        }
        return p;
      }
      function stringToRgba(input) {
        var _iterator = _createForOfIteratorHelper(colorManagers),
          _step;
        try {
          for (_iterator.s(); !(_step = _iterator.n()).done;) {
            var _step$value = _slicedToArray(_step.value, 2),
              manager = _step$value[1];
            if (input.startsWith(manager.stringPrefix)) {
              return manager.parseString(input);
            }
          }
        } catch (err) {
          _iterator.e(err);
        } finally {
          _iterator.f();
        }
        var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])([a-f\d])?$/i,
          hexFixed = input.replace(shorthandRegex, function (_, r, g, b, a) {
            return r + r + g + g + b + b + (a !== undefined ? a + a : "");
          }),
          regex = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})?$/i,
          result = regex.exec(hexFixed);
        return result ? {
          a: result[4] !== undefined ? parseInt(result[4], 16) / 0xff : 1,
          b: parseInt(result[3], 16),
          g: parseInt(result[2], 16),
          r: parseInt(result[1], 16)
        } : undefined;
      }
      function _rangeColorToRgb(input, index) {
        var useIndex = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        if (!input) {
          return;
        }
        var color = typeof input === "string" ? {
          value: input
        } : input;
        if (typeof color.value === "string") {
          return _colorToRgb(color.value, index, useIndex);
        }
        if (color.value instanceof Array) {
          return _rangeColorToRgb({
            value: _itemFromArray(color.value, index, useIndex)
          });
        }
        var _iterator2 = _createForOfIteratorHelper(colorManagers),
          _step2;
        try {
          for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
            var _step2$value = _slicedToArray(_step2.value, 2),
              manager = _step2$value[1];
            var res = manager.handleRangeColor(color);
            if (res) {
              return res;
            }
          }
        } catch (err) {
          _iterator2.e(err);
        } finally {
          _iterator2.f();
        }
      }
      function _colorToRgb(input, index) {
        var useIndex = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        if (!input) {
          return;
        }
        var color = typeof input === "string" ? {
          value: input
        } : input;
        if (typeof color.value === "string") {
          return color.value === randomColorValue ? _getRandomRgbColor() : _stringToRgb(color.value);
        }
        if (color.value instanceof Array) {
          return _colorToRgb({
            value: _itemFromArray(color.value, index, useIndex)
          });
        }
        var _iterator3 = _createForOfIteratorHelper(colorManagers),
          _step3;
        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var _step3$value = _slicedToArray(_step3.value, 2),
              manager = _step3$value[1];
            var res = manager.handleColor(color);
            if (res) {
              return res;
            }
          }
        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }
      }
      function _colorToHsl(color, index) {
        var useIndex = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var rgb = _colorToRgb(color, index, useIndex);
        return rgb ? _rgbToHsl(rgb) : undefined;
      }
      function _rangeColorToHsl(color, index) {
        var useIndex = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var rgb = _rangeColorToRgb(color, index, useIndex);
        return rgb ? _rgbToHsl(rgb) : undefined;
      }
      function _rgbToHsl(color) {
        var r1 = color.r / 255,
          g1 = color.g / 255,
          b1 = color.b / 255,
          max = Math.max(r1, g1, b1),
          min = Math.min(r1, g1, b1),
          res = {
            h: 0,
            l: (max + min) / 2,
            s: 0
          };
        if (max !== min) {
          res.s = res.l < 0.5 ? (max - min) / (max + min) : (max - min) / (2.0 - max - min);
          res.h = r1 === max ? (g1 - b1) / (max - min) : res.h = g1 === max ? 2.0 + (b1 - r1) / (max - min) : 4.0 + (r1 - g1) / (max - min);
        }
        res.l *= 100;
        res.s *= 100;
        res.h *= 60;
        if (res.h < 0) {
          res.h += 360;
        }
        if (res.h >= 360) {
          res.h -= 360;
        }
        return res;
      }
      function _stringToAlpha(input) {
        var _a;
        return (_a = stringToRgba(input)) === null || _a === void 0 ? void 0 : _a.a;
      }
      function _stringToRgb(input) {
        return stringToRgba(input);
      }
      function _hslToRgb(hsl) {
        var result = {
            b: 0,
            g: 0,
            r: 0
          },
          hslPercent = {
            h: hsl.h / 360,
            l: hsl.l / 100,
            s: hsl.s / 100
          };
        if (!hslPercent.s) {
          result.b = hslPercent.l;
          result.g = hslPercent.l;
          result.r = hslPercent.l;
        } else {
          var q = hslPercent.l < 0.5 ? hslPercent.l * (1 + hslPercent.s) : hslPercent.l + hslPercent.s - hslPercent.l * hslPercent.s,
            p = 2 * hslPercent.l - q;
          result.r = hue2rgb(p, q, hslPercent.h + 1 / 3);
          result.g = hue2rgb(p, q, hslPercent.h);
          result.b = hue2rgb(p, q, hslPercent.h - 1 / 3);
        }
        result.r = Math.floor(result.r * 255);
        result.g = Math.floor(result.g * 255);
        result.b = Math.floor(result.b * 255);
        return result;
      }
      function _hslaToRgba(hsla) {
        var rgbResult = _hslToRgb(hsla);
        return {
          a: hsla.a,
          b: rgbResult.b,
          g: rgbResult.g,
          r: rgbResult.r
        };
      }
      function _getRandomRgbColor(min) {
        var fixedMin = min !== null && min !== void 0 ? min : 0;
        return {
          b: Math.floor(_randomInRange(_setRangeValue(fixedMin, 256))),
          g: Math.floor(_randomInRange(_setRangeValue(fixedMin, 256))),
          r: Math.floor(_randomInRange(_setRangeValue(fixedMin, 256)))
        };
      }
      function _getStyleFromRgb(color, opacity) {
        return "rgba(".concat(color.r, ", ").concat(color.g, ", ").concat(color.b, ", ").concat(opacity !== null && opacity !== void 0 ? opacity : 1, ")");
      }
      function _getStyleFromHsl(color, opacity) {
        return "hsla(".concat(color.h, ", ").concat(color.s, "%, ").concat(color.l, "%, ").concat(opacity !== null && opacity !== void 0 ? opacity : 1, ")");
      }
      function _colorMix(color1, color2, size1, size2) {
        var rgb1 = color1,
          rgb2 = color2;
        if (rgb1.r === undefined) {
          rgb1 = _hslToRgb(color1);
        }
        if (rgb2.r === undefined) {
          rgb2 = _hslToRgb(color2);
        }
        return {
          b: _mix(rgb1.b, rgb2.b, size1, size2),
          g: _mix(rgb1.g, rgb2.g, size1, size2),
          r: _mix(rgb1.r, rgb2.r, size1, size2)
        };
      }
      function _getLinkColor(p1, p2, linkColor) {
        var _a, _b;
        if (linkColor === randomColorValue) {
          return _getRandomRgbColor();
        } else if (linkColor === midColorValue) {
          var sourceColor = (_a = p1.getFillColor()) !== null && _a !== void 0 ? _a : p1.getStrokeColor(),
            destColor = (_b = p2 === null || p2 === void 0 ? void 0 : p2.getFillColor()) !== null && _b !== void 0 ? _b : p2 === null || p2 === void 0 ? void 0 : p2.getStrokeColor();
          if (sourceColor && destColor && p2) {
            return _colorMix(sourceColor, destColor, p1.getRadius(), p2.getRadius());
          } else {
            var hslColor = sourceColor !== null && sourceColor !== void 0 ? sourceColor : destColor;
            if (hslColor) {
              return _hslToRgb(hslColor);
            }
          }
        } else {
          return linkColor;
        }
      }
      function _getLinkRandomColor(optColor, blink, consent) {
        var color = typeof optColor === "string" ? optColor : optColor.value;
        if (color === randomColorValue) {
          if (consent) {
            return _rangeColorToRgb({
              value: color
            });
          }
          if (blink) {
            return randomColorValue;
          }
          return midColorValue;
        } else if (color === midColorValue) {
          return midColorValue;
        } else {
          return _rangeColorToRgb({
            value: color
          });
        }
      }
      function _getHslFromAnimation(animation) {
        return animation !== undefined ? {
          h: animation.h.value,
          s: animation.s.value,
          l: animation.l.value
        } : undefined;
      }
      function _getHslAnimationFromHsl(hsl, animationOptions, reduceFactor) {
        var resColor = {
          h: {
            enable: false,
            value: hsl.h
          },
          s: {
            enable: false,
            value: hsl.s
          },
          l: {
            enable: false,
            value: hsl.l
          }
        };
        if (animationOptions) {
          setColorAnimation(resColor.h, animationOptions.h, reduceFactor);
          setColorAnimation(resColor.s, animationOptions.s, reduceFactor);
          setColorAnimation(resColor.l, animationOptions.l, reduceFactor);
        }
        return resColor;
      }
      function setColorAnimation(colorValue, colorAnimation, reduceFactor) {
        colorValue.enable = colorAnimation.enable;
        if (colorValue.enable) {
          colorValue.velocity = _getRangeValue(colorAnimation.speed) / 100 * reduceFactor;
          colorValue.decay = 1 - _getRangeValue(colorAnimation.decay);
          colorValue.status = "increasing";
          colorValue.loops = 0;
          colorValue.maxLoops = _getRangeValue(colorAnimation.count);
          if (!colorAnimation.sync) {
            colorValue.velocity *= _getRandom();
            colorValue.value *= _getRandom();
          }
          colorValue.initialValue = colorValue.value;
        } else {
          colorValue.velocity = 0;
        }
      }
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/CanvasUtils.js

      function _drawLine(context, begin, end) {
        context.beginPath();
        context.moveTo(begin.x, begin.y);
        context.lineTo(end.x, end.y);
        context.closePath();
      }
      function _drawTriangle(context, p1, p2, p3) {
        context.beginPath();
        context.moveTo(p1.x, p1.y);
        context.lineTo(p2.x, p2.y);
        context.lineTo(p3.x, p3.y);
        context.closePath();
      }
      function _paintBase2(context, dimension, baseColor) {
        context.fillStyle = baseColor !== null && baseColor !== void 0 ? baseColor : "rgba(0,0,0,0)";
        context.fillRect(0, 0, dimension.width, dimension.height);
      }
      function _paintImage2(context, dimension, image, opacity) {
        if (!image) {
          return;
        }
        context.globalAlpha = opacity;
        context.drawImage(image, 0, 0, dimension.width, dimension.height);
        context.globalAlpha = 1;
      }
      function _clear(context, dimension) {
        context.clearRect(0, 0, dimension.width, dimension.height);
      }
      function _drawParticle(data) {
        var _a, _b, _c, _d, _e;
        var container = data.container,
          context = data.context,
          particle = data.particle,
          delta = data.delta,
          colorStyles = data.colorStyles,
          backgroundMask = data.backgroundMask,
          composite = data.composite,
          radius = data.radius,
          opacity = data.opacity,
          shadow = data.shadow,
          transform = data.transform;
        var pos = particle.getPosition(),
          angle = particle.rotation + (particle.pathRotation ? particle.velocity.angle : 0),
          rotateData = {
            sin: Math.sin(angle),
            cos: Math.cos(angle)
          },
          transformData = {
            a: rotateData.cos * ((_a = transform.a) !== null && _a !== void 0 ? _a : 1),
            b: rotateData.sin * ((_b = transform.b) !== null && _b !== void 0 ? _b : 1),
            c: -rotateData.sin * ((_c = transform.c) !== null && _c !== void 0 ? _c : 1),
            d: rotateData.cos * ((_d = transform.d) !== null && _d !== void 0 ? _d : 1)
          };
        context.setTransform(transformData.a, transformData.b, transformData.c, transformData.d, pos.x, pos.y);
        context.beginPath();
        if (backgroundMask) {
          context.globalCompositeOperation = composite;
        }
        var shadowColor = particle.shadowColor;
        if (shadow.enable && shadowColor) {
          context.shadowBlur = shadow.blur;
          context.shadowColor = _getStyleFromRgb(shadowColor);
          context.shadowOffsetX = shadow.offset.x;
          context.shadowOffsetY = shadow.offset.y;
        }
        if (colorStyles.fill) {
          context.fillStyle = colorStyles.fill;
        }
        var strokeWidth = (_e = particle.strokeWidth) !== null && _e !== void 0 ? _e : 0;
        context.lineWidth = strokeWidth;
        if (colorStyles.stroke) {
          context.strokeStyle = colorStyles.stroke;
        }
        _drawShape(container, context, particle, radius, opacity, delta);
        if (strokeWidth > 0) {
          context.stroke();
        }
        if (particle.close) {
          context.closePath();
        }
        if (particle.fill) {
          context.fill();
        }
        _drawShapeAfterEffect(container, context, particle, radius, opacity, delta);
        context.globalCompositeOperation = "source-over";
        context.setTransform(1, 0, 0, 1, 0, 0);
      }
      function _drawShape(container, context, particle, radius, opacity, delta) {
        if (!particle.shape) {
          return;
        }
        var drawer = container.drawers.get(particle.shape);
        if (!drawer) {
          return;
        }
        drawer.draw(context, particle, radius, opacity, delta, container.retina.pixelRatio);
      }
      function _drawShapeAfterEffect(container, context, particle, radius, opacity, delta) {
        if (!particle.shape) {
          return;
        }
        var drawer = container.drawers.get(particle.shape);
        if (!(drawer === null || drawer === void 0 ? void 0 : drawer.afterEffect)) {
          return;
        }
        drawer.afterEffect(context, particle, radius, opacity, delta, container.retina.pixelRatio);
      }
      function _drawPlugin(context, plugin, delta) {
        if (!plugin.draw) {
          return;
        }
        plugin.draw(context, delta);
      }
      function _drawParticlePlugin(context, plugin, particle, delta) {
        if (!plugin.drawParticle) {
          return;
        }
        plugin.drawParticle(context, particle, delta);
      }
      function _alterHsl(color, type, value) {
        return {
          h: color.h,
          s: color.s,
          l: color.l + (type === "darken" ? -1 : 1) * value
        };
      }
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Constants.js
      var _generatedAttribute = "generated";
      var _touchEndEvent = "touchend";
      var _mouseDownEvent = "pointerdown";
      var _mouseUpEvent = "pointerup";
      var _mouseMoveEvent = "pointermove";
      var _touchStartEvent = "touchstart";
      var _touchMoveEvent = "touchmove";
      var _mouseLeaveEvent = "pointerleave";
      var _mouseOutEvent = "pointerout";
      var _touchCancelEvent = "touchcancel";
      var _resizeEvent = "resize";
      var _visibilityChangeEvent = "visibilitychange";
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Canvas.js

      function setTransformValue(factor, newFactor, key) {
        var _a;
        var newValue = newFactor[key];
        if (newValue !== undefined) {
          factor[key] = ((_a = factor[key]) !== null && _a !== void 0 ? _a : 1) * newValue;
        }
      }
      var Canvas = /*#__PURE__*/function () {
        function Canvas(container) {
          var _this = this;
          _classCallCheck(this, Canvas);
          this.container = container;
          this.size = {
            height: 0,
            width: 0
          };
          this._context = null;
          this._generated = false;
          this._preDrawUpdaters = [];
          this._postDrawUpdaters = [];
          this._resizePlugins = [];
          this._colorPlugins = [];
          this._mutationObserver = !_isSsr() && typeof MutationObserver !== "undefined" ? new MutationObserver(function (records) {
            var _iterator4 = _createForOfIteratorHelper(records),
              _step4;
            try {
              for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
                var record = _step4.value;
                if (record.type === "attributes" && record.attributeName === "style") {
                  _this._repairStyle();
                }
              }
            } catch (err) {
              _iterator4.e(err);
            } finally {
              _iterator4.f();
            }
          }) : undefined;
        }
        _createClass(Canvas, [{
          key: "_fullScreen",
          get: function get() {
            return this.container.actualOptions.fullScreen.enable;
          }
        }, {
          key: "clear",
          value: function clear() {
            var _this2 = this;
            var options = this.container.actualOptions,
              trail = options.particles.move.trail,
              trailFill = this._trailFill;
            if (options.backgroundMask.enable) {
              this.paint();
            } else if (trail.enable && trail.length > 0 && trailFill) {
              if (trailFill.color) {
                this._paintBase(_getStyleFromRgb(trailFill.color, trailFill.opacity));
              } else if (trailFill.image) {
                this._paintImage(trailFill.image, trailFill.opacity);
              }
            } else {
              this.draw(function (ctx) {
                _clear(ctx, _this2.size);
              });
            }
          }
        }, {
          key: "destroy",
          value: function destroy() {
            var _this3 = this;
            var _a, _b;
            (_a = this._mutationObserver) === null || _a === void 0 ? void 0 : _a.disconnect();
            if (this._generated) {
              (_b = this.element) === null || _b === void 0 ? void 0 : _b.remove();
            } else {
              this._resetOriginalStyle();
            }
            this.draw(function (ctx) {
              _clear(ctx, _this3.size);
            });
            this._preDrawUpdaters = [];
            this._postDrawUpdaters = [];
            this._resizePlugins = [];
            this._colorPlugins = [];
          }
        }, {
          key: "draw",
          value: function draw(cb) {
            if (!this._context) {
              return;
            }
            return cb(this._context);
          }
        }, {
          key: "drawParticle",
          value: function drawParticle(particle, delta) {
            var _this4 = this;
            var _a;
            if (particle.spawning || particle.destroyed) {
              return;
            }
            var radius = particle.getRadius();
            if (radius <= 0) {
              return;
            }
            var pfColor = particle.getFillColor(),
              psColor = (_a = particle.getStrokeColor()) !== null && _a !== void 0 ? _a : pfColor;
            var _this$_getPluginParti = this._getPluginParticleColors(particle),
              _this$_getPluginParti2 = _slicedToArray(_this$_getPluginParti, 2),
              fColor = _this$_getPluginParti2[0],
              sColor = _this$_getPluginParti2[1];
            if (!fColor) {
              fColor = pfColor;
            }
            if (!sColor) {
              sColor = psColor;
            }
            if (!fColor && !sColor) {
              return;
            }
            this.draw(function (ctx) {
              var _a, _b, _c, _d;
              var options = _this4.container.actualOptions,
                zIndexOptions = particle.options.zIndex,
                zOpacityFactor = Math.pow(1 - particle.zIndexFactor, zIndexOptions.opacityRate),
                opacity = (_c = (_a = particle.bubble.opacity) !== null && _a !== void 0 ? _a : (_b = particle.opacity) === null || _b === void 0 ? void 0 : _b.value) !== null && _c !== void 0 ? _c : 1,
                strokeOpacity = (_d = particle.strokeOpacity) !== null && _d !== void 0 ? _d : opacity,
                zOpacity = opacity * zOpacityFactor,
                zStrokeOpacity = strokeOpacity * zOpacityFactor,
                transform = {},
                colorStyles = {
                  fill: fColor ? _getStyleFromHsl(fColor, zOpacity) : undefined
                };
              colorStyles.stroke = sColor ? _getStyleFromHsl(sColor, zStrokeOpacity) : colorStyles.fill;
              _this4._applyPreDrawUpdaters(ctx, particle, radius, zOpacity, colorStyles, transform);
              _drawParticle({
                container: _this4.container,
                context: ctx,
                particle: particle,
                delta: delta,
                colorStyles: colorStyles,
                backgroundMask: options.backgroundMask.enable,
                composite: options.backgroundMask.composite,
                radius: radius * Math.pow(1 - particle.zIndexFactor, zIndexOptions.sizeRate),
                opacity: zOpacity,
                shadow: particle.options.shadow,
                transform: transform
              });
              _this4._applyPostDrawUpdaters(particle);
            });
          }
        }, {
          key: "drawParticlePlugin",
          value: function drawParticlePlugin(plugin, particle, delta) {
            this.draw(function (ctx) {
              _drawParticlePlugin(ctx, plugin, particle, delta);
            });
          }
        }, {
          key: "drawPlugin",
          value: function drawPlugin(plugin, delta) {
            this.draw(function (ctx) {
              _drawPlugin(ctx, plugin, delta);
            });
          }
        }, {
          key: "init",
          value: function () {
            var _init = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
              var _a;
              return _regeneratorRuntime().wrap(function _callee$(_context) {
                while (1) switch (_context.prev = _context.next) {
                  case 0:
                    this.resize();
                    this._initStyle();
                    this._initCover();
                    _context.prev = 3;
                    _context.next = 6;
                    return this._initTrail();
                  case 6:
                    _context.next = 11;
                    break;
                  case 8:
                    _context.prev = 8;
                    _context.t0 = _context["catch"](3);
                    console.error(_context.t0);
                  case 11:
                    this.initBackground();
                    if (this.element) {
                      (_a = this._mutationObserver) === null || _a === void 0 ? void 0 : _a.observe(this.element, {
                        attributes: true
                      });
                    }
                    this.initUpdaters();
                    this.initPlugins();
                    this.paint();
                  case 16:
                  case "end":
                    return _context.stop();
                }
              }, _callee, this, [[3, 8]]);
            }));
            function init() {
              return _init.apply(this, arguments);
            }
            return init;
          }()
        }, {
          key: "initBackground",
          value: function initBackground() {
            var options = this.container.actualOptions,
              background = options.background,
              element = this.element,
              elementStyle = element === null || element === void 0 ? void 0 : element.style;
            if (!elementStyle) {
              return;
            }
            if (background.color) {
              var color = _rangeColorToRgb(background.color);
              elementStyle.backgroundColor = color ? _getStyleFromRgb(color, background.opacity) : "";
            } else {
              elementStyle.backgroundColor = "";
            }
            elementStyle.backgroundImage = background.image || "";
            elementStyle.backgroundPosition = background.position || "";
            elementStyle.backgroundRepeat = background.repeat || "";
            elementStyle.backgroundSize = background.size || "";
          }
        }, {
          key: "initPlugins",
          value: function initPlugins() {
            this._resizePlugins = [];
            var _iterator5 = _createForOfIteratorHelper(this.container.plugins),
              _step5;
            try {
              for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
                var _step5$value = _slicedToArray(_step5.value, 2),
                  plugin = _step5$value[1];
                if (plugin.resize) {
                  this._resizePlugins.push(plugin);
                }
                if (plugin.particleFillColor || plugin.particleStrokeColor) {
                  this._colorPlugins.push(plugin);
                }
              }
            } catch (err) {
              _iterator5.e(err);
            } finally {
              _iterator5.f();
            }
          }
        }, {
          key: "initUpdaters",
          value: function initUpdaters() {
            this._preDrawUpdaters = [];
            this._postDrawUpdaters = [];
            var _iterator6 = _createForOfIteratorHelper(this.container.particles.updaters),
              _step6;
            try {
              for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
                var updater = _step6.value;
                if (updater.afterDraw) {
                  this._postDrawUpdaters.push(updater);
                }
                if (updater.getColorStyles || updater.getTransformValues || updater.beforeDraw) {
                  this._preDrawUpdaters.push(updater);
                }
              }
            } catch (err) {
              _iterator6.e(err);
            } finally {
              _iterator6.f();
            }
          }
        }, {
          key: "loadCanvas",
          value: function loadCanvas(canvas) {
            var _a, _b;
            if (this._generated) {
              (_a = this.element) === null || _a === void 0 ? void 0 : _a.remove();
            }
            this._generated = canvas.dataset && _generatedAttribute in canvas.dataset ? canvas.dataset[_generatedAttribute] === "true" : this._generated;
            this.element = canvas;
            this.element.ariaHidden = "true";
            this._originalStyle = _deepExtend({}, this.element.style);
            this.size.height = canvas.offsetHeight;
            this.size.width = canvas.offsetWidth;
            this._context = this.element.getContext("2d");
            (_b = this._mutationObserver) === null || _b === void 0 ? void 0 : _b.observe(this.element, {
              attributes: true
            });
            this.container.retina.init();
            this.initBackground();
          }
        }, {
          key: "paint",
          value: function paint() {
            var _this5 = this;
            var options = this.container.actualOptions;
            this.draw(function (ctx) {
              if (options.backgroundMask.enable && options.backgroundMask.cover) {
                _clear(ctx, _this5.size);
                _this5._paintBase(_this5._coverColorStyle);
              } else {
                _this5._paintBase();
              }
            });
          }
        }, {
          key: "resize",
          value: function resize() {
            if (!this.element) {
              return;
            }
            var container = this.container,
              pxRatio = container.retina.pixelRatio,
              size = container.canvas.size,
              newSize = {
                width: this.element.offsetWidth * pxRatio,
                height: this.element.offsetHeight * pxRatio
              };
            if (newSize.height === size.height && newSize.width === size.width && newSize.height === this.element.height && newSize.width === this.element.width) {
              return;
            }
            var oldSize = Object.assign({}, size);
            this.element.width = size.width = this.element.offsetWidth * pxRatio;
            this.element.height = size.height = this.element.offsetHeight * pxRatio;
            if (this.container.started) {
              this.resizeFactor = {
                width: size.width / oldSize.width,
                height: size.height / oldSize.height
              };
            }
          }
        }, {
          key: "windowResize",
          value: function () {
            var _windowResize = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
              var container, needsRefresh;
              return _regeneratorRuntime().wrap(function _callee2$(_context2) {
                while (1) switch (_context2.prev = _context2.next) {
                  case 0:
                    if (this.element) {
                      _context2.next = 2;
                      break;
                    }
                    return _context2.abrupt("return");
                  case 2:
                    this.resize();
                    container = this.container, needsRefresh = container.updateActualOptions();
                    container.particles.setDensity();
                    this._applyResizePlugins();
                    if (!needsRefresh) {
                      _context2.next = 9;
                      break;
                    }
                    _context2.next = 9;
                    return container.refresh();
                  case 9:
                  case "end":
                    return _context2.stop();
                }
              }, _callee2, this);
            }));
            function windowResize() {
              return _windowResize.apply(this, arguments);
            }
            return windowResize;
          }()
        }, {
          key: "_applyPostDrawUpdaters",
          value: function _applyPostDrawUpdaters(particle) {
            var _a;
            var _iterator7 = _createForOfIteratorHelper(this._postDrawUpdaters),
              _step7;
            try {
              for (_iterator7.s(); !(_step7 = _iterator7.n()).done;) {
                var updater = _step7.value;
                (_a = updater.afterDraw) === null || _a === void 0 ? void 0 : _a.call(updater, particle);
              }
            } catch (err) {
              _iterator7.e(err);
            } finally {
              _iterator7.f();
            }
          }
        }, {
          key: "_applyPreDrawUpdaters",
          value: function _applyPreDrawUpdaters(ctx, particle, radius, zOpacity, colorStyles, transform) {
            var _a;
            var _iterator8 = _createForOfIteratorHelper(this._preDrawUpdaters),
              _step8;
            try {
              for (_iterator8.s(); !(_step8 = _iterator8.n()).done;) {
                var updater = _step8.value;
                if (updater.getColorStyles) {
                  var _updater$getColorStyl = updater.getColorStyles(particle, ctx, radius, zOpacity),
                    fill = _updater$getColorStyl.fill,
                    stroke = _updater$getColorStyl.stroke;
                  if (fill) {
                    colorStyles.fill = fill;
                  }
                  if (stroke) {
                    colorStyles.stroke = stroke;
                  }
                }
                if (updater.getTransformValues) {
                  var updaterTransform = updater.getTransformValues(particle);
                  for (var key in updaterTransform) {
                    setTransformValue(transform, updaterTransform, key);
                  }
                }
                (_a = updater.beforeDraw) === null || _a === void 0 ? void 0 : _a.call(updater, particle);
              }
            } catch (err) {
              _iterator8.e(err);
            } finally {
              _iterator8.f();
            }
          }
        }, {
          key: "_applyResizePlugins",
          value: function _applyResizePlugins() {
            var _iterator9 = _createForOfIteratorHelper(this._resizePlugins),
              _step9;
            try {
              for (_iterator9.s(); !(_step9 = _iterator9.n()).done;) {
                var plugin = _step9.value;
                if (plugin.resize) {
                  plugin.resize();
                }
              }
            } catch (err) {
              _iterator9.e(err);
            } finally {
              _iterator9.f();
            }
          }
        }, {
          key: "_getPluginParticleColors",
          value: function _getPluginParticleColors(particle) {
            var fColor, sColor;
            var _iterator10 = _createForOfIteratorHelper(this._colorPlugins),
              _step10;
            try {
              for (_iterator10.s(); !(_step10 = _iterator10.n()).done;) {
                var plugin = _step10.value;
                if (!fColor && plugin.particleFillColor) {
                  fColor = _rangeColorToHsl(plugin.particleFillColor(particle));
                }
                if (!sColor && plugin.particleStrokeColor) {
                  sColor = _rangeColorToHsl(plugin.particleStrokeColor(particle));
                }
                if (fColor && sColor) {
                  break;
                }
              }
            } catch (err) {
              _iterator10.e(err);
            } finally {
              _iterator10.f();
            }
            return [fColor, sColor];
          }
        }, {
          key: "_initCover",
          value: function _initCover() {
            var options = this.container.actualOptions,
              cover = options.backgroundMask.cover,
              color = cover.color,
              coverRgb = _rangeColorToRgb(color);
            if (coverRgb) {
              var coverColor = {
                r: coverRgb.r,
                g: coverRgb.g,
                b: coverRgb.b,
                a: cover.opacity
              };
              this._coverColorStyle = _getStyleFromRgb(coverColor, coverColor.a);
            }
          }
        }, {
          key: "_initStyle",
          value: function _initStyle() {
            var element = this.element,
              options = this.container.actualOptions;
            if (!element) {
              return;
            }
            if (this._fullScreen) {
              this._originalStyle = _deepExtend({}, element.style);
              this._setFullScreenStyle();
            } else {
              this._resetOriginalStyle();
            }
            for (var key in options.style) {
              if (!key || !options.style) {
                continue;
              }
              var value = options.style[key];
              if (!value) {
                continue;
              }
              element.style.setProperty(key, value, "important");
            }
          }
        }, {
          key: "_initTrail",
          value: function () {
            var _initTrail2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
              var _this6 = this;
              var options, trail, trailFill, fillColor, _trail;
              return _regeneratorRuntime().wrap(function _callee3$(_context3) {
                while (1) switch (_context3.prev = _context3.next) {
                  case 0:
                    options = this.container.actualOptions, trail = options.particles.move.trail, trailFill = trail.fill;
                    if (trail.enable) {
                      _context3.next = 3;
                      break;
                    }
                    return _context3.abrupt("return");
                  case 3:
                    if (!trailFill.color) {
                      _context3.next = 11;
                      break;
                    }
                    fillColor = _rangeColorToRgb(trailFill.color);
                    if (fillColor) {
                      _context3.next = 7;
                      break;
                    }
                    return _context3.abrupt("return");
                  case 7:
                    _trail = options.particles.move.trail;
                    this._trailFill = {
                      color: Object.assign({}, fillColor),
                      opacity: 1 / _trail.length
                    };
                    _context3.next = 13;
                    break;
                  case 11:
                    _context3.next = 13;
                    return new Promise(function (resolve, reject) {
                      if (!trailFill.image) {
                        return;
                      }
                      var img = document.createElement("img");
                      img.addEventListener("load", function () {
                        _this6._trailFill = {
                          image: img,
                          opacity: 1 / trail.length
                        };
                        resolve();
                      });
                      img.addEventListener("error", function (evt) {
                        reject(evt.error);
                      });
                      img.src = trailFill.image;
                    });
                  case 13:
                  case "end":
                    return _context3.stop();
                }
              }, _callee3, this);
            }));
            function _initTrail() {
              return _initTrail2.apply(this, arguments);
            }
            return _initTrail;
          }()
        }, {
          key: "_paintBase",
          value: function _paintBase(baseColor) {
            var _this7 = this;
            this.draw(function (ctx) {
              _paintBase2(ctx, _this7.size, baseColor);
            });
          }
        }, {
          key: "_paintImage",
          value: function _paintImage(image, opacity) {
            var _this8 = this;
            this.draw(function (ctx) {
              _paintImage2(ctx, _this8.size, image, opacity);
            });
          }
        }, {
          key: "_repairStyle",
          value: function _repairStyle() {
            var _a, _b;
            var element = this.element;
            if (!element) {
              return;
            }
            (_a = this._mutationObserver) === null || _a === void 0 ? void 0 : _a.disconnect();
            this._initStyle();
            this.initBackground();
            (_b = this._mutationObserver) === null || _b === void 0 ? void 0 : _b.observe(element, {
              attributes: true
            });
          }
        }, {
          key: "_resetOriginalStyle",
          value: function _resetOriginalStyle() {
            var element = this.element,
              originalStyle = this._originalStyle;
            if (!(element && originalStyle)) {
              return;
            }
            element.style.position = originalStyle.position;
            element.style.zIndex = originalStyle.zIndex;
            element.style.top = originalStyle.top;
            element.style.left = originalStyle.left;
            element.style.width = originalStyle.width;
            element.style.height = originalStyle.height;
          }
        }, {
          key: "_setFullScreenStyle",
          value: function _setFullScreenStyle() {
            var element = this.element;
            if (!element) {
              return;
            }
            var priority = "important";
            element.style.setProperty("position", "fixed", priority);
            element.style.setProperty("z-index", this.container.actualOptions.fullScreen.zIndex.toString(10), priority);
            element.style.setProperty("top", "0", priority);
            element.style.setProperty("left", "0", priority);
            element.style.setProperty("width", "100%", priority);
            element.style.setProperty("height", "100%", priority);
          }
        }]);
        return Canvas;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/EventListeners.js

      function manageListener(element, event, handler, add, options) {
        if (add) {
          var addOptions = {
            passive: true
          };
          if (typeof options === "boolean") {
            addOptions.capture = options;
          } else if (options !== undefined) {
            addOptions = options;
          }
          element.addEventListener(event, handler, addOptions);
        } else {
          var removeOptions = options;
          element.removeEventListener(event, handler, removeOptions);
        }
      }
      var EventListeners = /*#__PURE__*/function () {
        function EventListeners(container) {
          var _this9 = this;
          _classCallCheck(this, EventListeners);
          this.container = container;
          this.canPush = true;
          this.handlers = {
            mouseMove: function mouseMove(e) {
              return _this9.mouseTouchMove(e);
            },
            touchStart: function touchStart(e) {
              return _this9.mouseTouchMove(e);
            },
            touchMove: function touchMove(e) {
              return _this9.mouseTouchMove(e);
            },
            touchEnd: function touchEnd() {
              return _this9.mouseTouchFinish();
            },
            mouseLeave: function mouseLeave() {
              return _this9.mouseTouchFinish();
            },
            touchCancel: function touchCancel() {
              return _this9.mouseTouchFinish();
            },
            touchEndClick: function touchEndClick(e) {
              return _this9.mouseTouchClick(e);
            },
            mouseUp: function mouseUp(e) {
              return _this9.mouseTouchClick(e);
            },
            mouseDown: function mouseDown() {
              return _this9.mouseDown();
            },
            visibilityChange: function visibilityChange() {
              return _this9.handleVisibilityChange();
            },
            themeChange: function themeChange(e) {
              return _this9.handleThemeChange(e);
            },
            oldThemeChange: function oldThemeChange(e) {
              return _this9.handleThemeChange(e);
            },
            resize: function resize() {
              return _this9.handleWindowResize();
            }
          };
        }
        _createClass(EventListeners, [{
          key: "addListeners",
          value: function addListeners() {
            this.manageListeners(true);
          }
        }, {
          key: "removeListeners",
          value: function removeListeners() {
            this.manageListeners(false);
          }
        }, {
          key: "doMouseTouchClick",
          value: function doMouseTouchClick(e) {
            var _this10 = this;
            var container = this.container,
              options = container.actualOptions;
            if (this.canPush) {
              var mouseInteractivity = container.interactivity.mouse,
                mousePos = mouseInteractivity.position;
              if (!mousePos) {
                return;
              }
              mouseInteractivity.clickPosition = Object.assign({}, mousePos);
              mouseInteractivity.clickTime = new Date().getTime();
              var onClick = options.interactivity.events.onClick;
              _executeOnSingleOrMultiple(onClick.mode, function (mode) {
                return _this10.handleClickMode(mode);
              });
            }
            if (e.type === "touchend") {
              setTimeout(function () {
                return _this10.mouseTouchFinish();
              }, 500);
            }
          }
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            this.container.handleClickMode(mode);
          }
        }, {
          key: "handleThemeChange",
          value: function handleThemeChange(e) {
            var mediaEvent = e,
              container = this.container,
              options = container.options,
              defaultThemes = options.defaultThemes,
              themeName = mediaEvent.matches ? defaultThemes.dark : defaultThemes.light,
              theme = options.themes.find(function (theme) {
                return theme.name === themeName;
              });
            if (theme && theme["default"].auto) {
              container.loadTheme(themeName);
            }
          }
        }, {
          key: "handleVisibilityChange",
          value: function handleVisibilityChange() {
            var container = this.container,
              options = container.actualOptions;
            this.mouseTouchFinish();
            if (!options.pauseOnBlur) {
              return;
            }
            if (document === null || document === void 0 ? void 0 : document.hidden) {
              container.pageHidden = true;
              container.pause();
            } else {
              container.pageHidden = false;
              if (container.getAnimationStatus()) {
                container.play(true);
              } else {
                container.draw(true);
              }
            }
          }
        }, {
          key: "handleWindowResize",
          value: function handleWindowResize() {
            var _this11 = this;
            if (this.resizeTimeout) {
              clearTimeout(this.resizeTimeout);
              delete this.resizeTimeout;
            }
            this.resizeTimeout = setTimeout( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
              var _a;
              return _regeneratorRuntime().wrap(function _callee4$(_context4) {
                while (1) switch (_context4.prev = _context4.next) {
                  case 0:
                    return _context4.abrupt("return", (_a = _this11.container.canvas) === null || _a === void 0 ? void 0 : _a.windowResize());
                  case 1:
                  case "end":
                    return _context4.stop();
                }
              }, _callee4);
            })), this.container.actualOptions.interactivity.events.resize.delay * 1000);
          }
        }, {
          key: "manageListeners",
          value: function manageListeners(add) {
            var _this12 = this;
            var _a;
            var handlers = this.handlers,
              container = this.container,
              options = container.actualOptions,
              detectType = options.interactivity.detectsOn;
            var mouseLeaveTmpEvent = _mouseLeaveEvent;
            if (detectType === "window") {
              container.interactivity.element = window;
              mouseLeaveTmpEvent = _mouseOutEvent;
            } else if (detectType === "parent" && container.canvas.element) {
              var canvasEl = container.canvas.element;
              container.interactivity.element = (_a = canvasEl.parentElement) !== null && _a !== void 0 ? _a : canvasEl.parentNode;
            } else {
              container.interactivity.element = container.canvas.element;
            }
            var mediaMatch = _safeMatchMedia("(prefers-color-scheme: dark)");
            if (mediaMatch) {
              if (mediaMatch.addEventListener !== undefined) {
                manageListener(mediaMatch, "change", handlers.themeChange, add);
              } else if (mediaMatch.addListener !== undefined) {
                if (add) {
                  mediaMatch.addListener(handlers.oldThemeChange);
                } else {
                  mediaMatch.removeListener(handlers.oldThemeChange);
                }
              }
            }
            var interactivityEl = container.interactivity.element;
            if (!interactivityEl) {
              return;
            }
            var html = interactivityEl;
            if (options.interactivity.events.onHover.enable || options.interactivity.events.onClick.enable) {
              manageListener(interactivityEl, _mouseMoveEvent, handlers.mouseMove, add);
              manageListener(interactivityEl, _touchStartEvent, handlers.touchStart, add);
              manageListener(interactivityEl, _touchMoveEvent, handlers.touchMove, add);
              if (!options.interactivity.events.onClick.enable) {
                manageListener(interactivityEl, _touchEndEvent, handlers.touchEnd, add);
              } else {
                manageListener(interactivityEl, _touchEndEvent, handlers.touchEndClick, add);
                manageListener(interactivityEl, _mouseUpEvent, handlers.mouseUp, add);
                manageListener(interactivityEl, _mouseDownEvent, handlers.mouseDown, add);
              }
              manageListener(interactivityEl, mouseLeaveTmpEvent, handlers.mouseLeave, add);
              manageListener(interactivityEl, _touchCancelEvent, handlers.touchCancel, add);
            }
            if (container.canvas.element) {
              container.canvas.element.style.pointerEvents = html === container.canvas.element ? "initial" : "none";
            }
            if (options.interactivity.events.resize) {
              if (typeof ResizeObserver !== "undefined") {
                if (this.resizeObserver && !add) {
                  if (container.canvas.element) {
                    this.resizeObserver.unobserve(container.canvas.element);
                  }
                  this.resizeObserver.disconnect();
                  delete this.resizeObserver;
                } else if (!this.resizeObserver && add && container.canvas.element) {
                  this.resizeObserver = new ResizeObserver(function (entries) {
                    var entry = entries.find(function (e) {
                      return e.target === container.canvas.element;
                    });
                    if (!entry) {
                      return;
                    }
                    _this12.handleWindowResize();
                  });
                  this.resizeObserver.observe(container.canvas.element);
                }
              } else {
                manageListener(window, _resizeEvent, handlers.resize, add);
              }
            }
            if (document) {
              manageListener(document, _visibilityChangeEvent, handlers.visibilityChange, add, false);
            }
          }
        }, {
          key: "mouseDown",
          value: function mouseDown() {
            var interactivity = this.container.interactivity;
            if (interactivity) {
              var mouse = interactivity.mouse;
              mouse.clicking = true;
              mouse.downPosition = mouse.position;
            }
          }
        }, {
          key: "mouseTouchClick",
          value: function mouseTouchClick(e) {
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse;
            mouse.inside = true;
            var handled = false;
            var mousePosition = mouse.position;
            if (!mousePosition || !options.interactivity.events.onClick.enable) {
              return;
            }
            var _iterator11 = _createForOfIteratorHelper(container.plugins),
              _step11;
            try {
              for (_iterator11.s(); !(_step11 = _iterator11.n()).done;) {
                var _step11$value = _slicedToArray(_step11.value, 2),
                  plugin = _step11$value[1];
                if (!plugin.clickPositionValid) {
                  continue;
                }
                handled = plugin.clickPositionValid(mousePosition);
                if (handled) {
                  break;
                }
              }
            } catch (err) {
              _iterator11.e(err);
            } finally {
              _iterator11.f();
            }
            if (!handled) {
              this.doMouseTouchClick(e);
            }
            mouse.clicking = false;
          }
        }, {
          key: "mouseTouchFinish",
          value: function mouseTouchFinish() {
            var interactivity = this.container.interactivity;
            if (!interactivity) {
              return;
            }
            var mouse = interactivity.mouse;
            delete mouse.position;
            delete mouse.clickPosition;
            delete mouse.downPosition;
            interactivity.status = _mouseLeaveEvent;
            mouse.inside = false;
            mouse.clicking = false;
          }
        }, {
          key: "mouseTouchMove",
          value: function mouseTouchMove(e) {
            var _a, _b, _c, _d, _e, _f, _g;
            var container = this.container,
              options = container.actualOptions;
            if (!((_a = container.interactivity) === null || _a === void 0 ? void 0 : _a.element)) {
              return;
            }
            container.interactivity.mouse.inside = true;
            var pos;
            var canvas = container.canvas.element;
            if (e.type.startsWith("pointer")) {
              this.canPush = true;
              var mouseEvent = e;
              if (container.interactivity.element === window) {
                if (canvas) {
                  var clientRect = canvas.getBoundingClientRect();
                  pos = {
                    x: mouseEvent.clientX - clientRect.left,
                    y: mouseEvent.clientY - clientRect.top
                  };
                }
              } else if (options.interactivity.detectsOn === "parent") {
                var source = mouseEvent.target,
                  target = mouseEvent.currentTarget,
                  canvasEl = container.canvas.element;
                if (source && target && canvasEl) {
                  var sourceRect = source.getBoundingClientRect(),
                    targetRect = target.getBoundingClientRect(),
                    canvasRect = canvasEl.getBoundingClientRect();
                  pos = {
                    x: mouseEvent.offsetX + 2 * sourceRect.left - (targetRect.left + canvasRect.left),
                    y: mouseEvent.offsetY + 2 * sourceRect.top - (targetRect.top + canvasRect.top)
                  };
                } else {
                  pos = {
                    x: (_b = mouseEvent.offsetX) !== null && _b !== void 0 ? _b : mouseEvent.clientX,
                    y: (_c = mouseEvent.offsetY) !== null && _c !== void 0 ? _c : mouseEvent.clientY
                  };
                }
              } else if (mouseEvent.target === container.canvas.element) {
                pos = {
                  x: (_d = mouseEvent.offsetX) !== null && _d !== void 0 ? _d : mouseEvent.clientX,
                  y: (_e = mouseEvent.offsetY) !== null && _e !== void 0 ? _e : mouseEvent.clientY
                };
              }
            } else {
              this.canPush = e.type !== "touchmove";
              var touchEvent = e,
                lastTouch = touchEvent.touches[touchEvent.touches.length - 1],
                _canvasRect = canvas === null || canvas === void 0 ? void 0 : canvas.getBoundingClientRect();
              pos = {
                x: lastTouch.clientX - ((_f = _canvasRect === null || _canvasRect === void 0 ? void 0 : _canvasRect.left) !== null && _f !== void 0 ? _f : 0),
                y: lastTouch.clientY - ((_g = _canvasRect === null || _canvasRect === void 0 ? void 0 : _canvasRect.top) !== null && _g !== void 0 ? _g : 0)
              };
            }
            var pxRatio = container.retina.pixelRatio;
            if (pos) {
              pos.x *= pxRatio;
              pos.y *= pxRatio;
            }
            container.interactivity.mouse.position = pos;
            container.interactivity.status = _mouseMoveEvent;
          }
        }]);
        return EventListeners;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/FrameManager.js
      function initDelta(value) {
        var fpsLimit = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 60;
        var smooth = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
        return {
          value: value,
          factor: smooth ? 60 / fpsLimit : 60 * value / 1000
        };
      }
      var FrameManager = /*#__PURE__*/function () {
        function FrameManager(container) {
          _classCallCheck(this, FrameManager);
          this.container = container;
        }
        _createClass(FrameManager, [{
          key: "nextFrame",
          value: function () {
            var _nextFrame = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5(timestamp) {
              var _a, container, delta;
              return _regeneratorRuntime().wrap(function _callee5$(_context5) {
                while (1) switch (_context5.prev = _context5.next) {
                  case 0:
                    _context5.prev = 0;
                    container = this.container;
                    if (!(!container.smooth && container.lastFrameTime !== undefined && timestamp < container.lastFrameTime + 1000 / container.fpsLimit)) {
                      _context5.next = 5;
                      break;
                    }
                    container.draw(false);
                    return _context5.abrupt("return");
                  case 5:
                    (_a = container.lastFrameTime) !== null && _a !== void 0 ? _a : container.lastFrameTime = timestamp;
                    delta = initDelta(timestamp - container.lastFrameTime, container.fpsLimit, container.smooth);
                    container.lifeTime += delta.value;
                    container.lastFrameTime = timestamp;
                    if (!(delta.value > 1000)) {
                      _context5.next = 12;
                      break;
                    }
                    container.draw(false);
                    return _context5.abrupt("return");
                  case 12:
                    _context5.next = 14;
                    return container.particles.draw(delta);
                  case 14:
                    if (!(container.duration > 0 && container.lifeTime > container.duration)) {
                      _context5.next = 17;
                      break;
                    }
                    container.destroy();
                    return _context5.abrupt("return");
                  case 17:
                    if (container.getAnimationStatus()) {
                      container.draw(false);
                    }
                    _context5.next = 23;
                    break;
                  case 20:
                    _context5.prev = 20;
                    _context5.t0 = _context5["catch"](0);
                    console.error("tsParticles error in animation loop", _context5.t0);
                  case 23:
                  case "end":
                    return _context5.stop();
                }
              }, _callee5, this, [[0, 20]]);
            }));
            function nextFrame(_x3) {
              return _nextFrame.apply(this, arguments);
            }
            return nextFrame;
          }()
        }]);
        return FrameManager;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/OptionsColor.js
      var _OptionsColor = /*#__PURE__*/function () {
        function _OptionsColor() {
          _classCallCheck(this, _OptionsColor);
          this.value = "";
        }
        _createClass(_OptionsColor, [{
          key: "load",
          value: function load(data) {
            if ((data === null || data === void 0 ? void 0 : data.value) === undefined) {
              return;
            }
            this.value = data.value;
          }
        }], [{
          key: "create",
          value: function create(source, data) {
            var color = new _OptionsColor();
            color.load(source);
            if (data !== undefined) {
              if (typeof data === "string" || data instanceof Array) {
                color.load({
                  value: data
                });
              } else {
                color.load(data);
              }
            }
            return color;
          }
        }]);
        return _OptionsColor;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Background/Background.js
      var _Background = /*#__PURE__*/function () {
        function _Background() {
          _classCallCheck(this, _Background);
          this.color = new _OptionsColor();
          this.color.value = "";
          this.image = "";
          this.position = "";
          this.repeat = "";
          this.size = "";
          this.opacity = 1;
        }
        _createClass(_Background, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.image !== undefined) {
              this.image = data.image;
            }
            if (data.position !== undefined) {
              this.position = data.position;
            }
            if (data.repeat !== undefined) {
              this.repeat = data.repeat;
            }
            if (data.size !== undefined) {
              this.size = data.size;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
          }
        }]);
        return _Background;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/BackgroundMask/BackgroundMaskCover.js
      var _BackgroundMaskCover = /*#__PURE__*/function () {
        function _BackgroundMaskCover() {
          _classCallCheck(this, _BackgroundMaskCover);
          this.color = new _OptionsColor();
          this.color.value = "#fff";
          this.opacity = 1;
        }
        _createClass(_BackgroundMaskCover, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
          }
        }]);
        return _BackgroundMaskCover;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/BackgroundMask/BackgroundMask.js
      var _BackgroundMask = /*#__PURE__*/function () {
        function _BackgroundMask() {
          _classCallCheck(this, _BackgroundMask);
          this.composite = "destination-out";
          this.cover = new _BackgroundMaskCover();
          this.enable = false;
        }
        _createClass(_BackgroundMask, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.composite !== undefined) {
              this.composite = data.composite;
            }
            if (data.cover !== undefined) {
              var cover = data.cover;
              var color = typeof data.cover === "string" ? {
                color: data.cover
              } : data.cover;
              this.cover.load(cover.color !== undefined ? cover : {
                color: color
              });
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
          }
        }]);
        return _BackgroundMask;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/FullScreen/FullScreen.js
      var _FullScreen = /*#__PURE__*/function () {
        function _FullScreen() {
          _classCallCheck(this, _FullScreen);
          this.enable = true;
          this.zIndex = 0;
        }
        _createClass(_FullScreen, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.zIndex !== undefined) {
              this.zIndex = data.zIndex;
            }
          }
        }]);
        return _FullScreen;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/ClickEvent.js
      var _ClickEvent = /*#__PURE__*/function () {
        function _ClickEvent() {
          _classCallCheck(this, _ClickEvent);
          this.enable = false;
          this.mode = [];
        }
        _createClass(_ClickEvent, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
          }
        }]);
        return _ClickEvent;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/DivEvent.js
      var _DivEvent = /*#__PURE__*/function () {
        function _DivEvent() {
          _classCallCheck(this, _DivEvent);
          this.selectors = [];
          this.enable = false;
          this.mode = [];
          this.type = "circle";
        }
        _createClass(_DivEvent, [{
          key: "el",
          get: function get() {
            return this.elementId;
          },
          set: function set(value) {
            this.elementId = value;
          }
        }, {
          key: "elementId",
          get: function get() {
            return this.ids;
          },
          set: function set(value) {
            this.ids = value;
          }
        }, {
          key: "ids",
          get: function get() {
            return _executeOnSingleOrMultiple(this.selectors, function (t) {
              return t.replace("#", "");
            });
          },
          set: function set(value) {
            this.selectors = _executeOnSingleOrMultiple(value, function (t) {
              return "#".concat(t);
            });
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b;
            if (!data) {
              return;
            }
            var ids = (_b = (_a = data.ids) !== null && _a !== void 0 ? _a : data.elementId) !== null && _b !== void 0 ? _b : data.el;
            if (ids !== undefined) {
              this.ids = ids;
            }
            if (data.selectors !== undefined) {
              this.selectors = data.selectors;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            if (data.type !== undefined) {
              this.type = data.type;
            }
          }
        }]);
        return _DivEvent;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/Parallax.js
      var _Parallax = /*#__PURE__*/function () {
        function _Parallax() {
          _classCallCheck(this, _Parallax);
          this.enable = false;
          this.force = 2;
          this.smooth = 10;
        }
        _createClass(_Parallax, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.force !== undefined) {
              this.force = data.force;
            }
            if (data.smooth !== undefined) {
              this.smooth = data.smooth;
            }
          }
        }]);
        return _Parallax;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/HoverEvent.js
      var _HoverEvent = /*#__PURE__*/function () {
        function _HoverEvent() {
          _classCallCheck(this, _HoverEvent);
          this.enable = false;
          this.mode = [];
          this.parallax = new _Parallax();
        }
        _createClass(_HoverEvent, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            this.parallax.load(data.parallax);
          }
        }]);
        return _HoverEvent;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/ResizeEvent.js
      var _ResizeEvent = /*#__PURE__*/function () {
        function _ResizeEvent() {
          _classCallCheck(this, _ResizeEvent);
          this.delay = 0.5;
          this.enable = true;
        }
        _createClass(_ResizeEvent, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.delay !== undefined) {
              this.delay = data.delay;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
          }
        }]);
        return _ResizeEvent;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Events/Events.js
      var _Events = /*#__PURE__*/function () {
        function _Events() {
          _classCallCheck(this, _Events);
          this.onClick = new _ClickEvent();
          this.onDiv = new _DivEvent();
          this.onHover = new _HoverEvent();
          this.resize = new _ResizeEvent();
        }
        _createClass(_Events, [{
          key: "onclick",
          get: function get() {
            return this.onClick;
          },
          set: function set(value) {
            this.onClick = value;
          }
        }, {
          key: "ondiv",
          get: function get() {
            return this.onDiv;
          },
          set: function set(value) {
            this.onDiv = value;
          }
        }, {
          key: "onhover",
          get: function get() {
            return this.onHover;
          },
          set: function set(value) {
            this.onHover = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b, _c;
            if (!data) {
              return;
            }
            this.onClick.load((_a = data.onClick) !== null && _a !== void 0 ? _a : data.onclick);
            var onDiv = (_b = data.onDiv) !== null && _b !== void 0 ? _b : data.ondiv;
            if (onDiv !== undefined) {
              this.onDiv = _executeOnSingleOrMultiple(onDiv, function (t) {
                var tmp = new _DivEvent();
                tmp.load(t);
                return tmp;
              });
            }
            this.onHover.load((_c = data.onHover) !== null && _c !== void 0 ? _c : data.onhover);
            if (typeof data.resize === "boolean") {
              this.resize.enable = data.resize;
            } else {
              this.resize.load(data.resize);
            }
          }
        }]);
        return _Events;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Modes/Modes.js
      var _Modes = /*#__PURE__*/function () {
        function _Modes(engine, container) {
          _classCallCheck(this, _Modes);
          this._engine = engine;
          this._container = container;
        }
        _createClass(_Modes, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (this._container) {
              var interactors = this._engine.plugins.interactors.get(this._container);
              if (interactors) {
                var _iterator12 = _createForOfIteratorHelper(interactors),
                  _step12;
                try {
                  for (_iterator12.s(); !(_step12 = _iterator12.n()).done;) {
                    var interactor = _step12.value;
                    if (interactor.loadModeOptions) {
                      interactor.loadModeOptions(this, data);
                    }
                  }
                } catch (err) {
                  _iterator12.e(err);
                } finally {
                  _iterator12.f();
                }
              }
            }
          }
        }]);
        return _Modes;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Interactivity/Interactivity.js
      var _Interactivity = /*#__PURE__*/function () {
        function _Interactivity(engine, container) {
          _classCallCheck(this, _Interactivity);
          this.detectsOn = "window";
          this.events = new _Events();
          this.modes = new _Modes(engine, container);
        }
        _createClass(_Interactivity, [{
          key: "detect_on",
          get: function get() {
            return this.detectsOn;
          },
          set: function set(value) {
            this.detectsOn = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            var detectsOn = (_a = data.detectsOn) !== null && _a !== void 0 ? _a : data.detect_on;
            if (detectsOn !== undefined) {
              this.detectsOn = detectsOn;
            }
            this.events.load(data.events);
            this.modes.load(data.modes);
          }
        }]);
        return _Interactivity;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/ManualParticle.js
      var _ManualParticle = /*#__PURE__*/function () {
        function _ManualParticle() {
          _classCallCheck(this, _ManualParticle);
        }
        _createClass(_ManualParticle, [{
          key: "load",
          value: function load(data) {
            var _a, _b;
            if (!data) {
              return;
            }
            if (data.position !== undefined) {
              this.position = {
                x: (_a = data.position.x) !== null && _a !== void 0 ? _a : 50,
                y: (_b = data.position.y) !== null && _b !== void 0 ? _b : 50
              };
            }
            if (data.options !== undefined) {
              this.options = _deepExtend({}, data.options);
            }
          }
        }]);
        return _ManualParticle;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Responsive.js
      var _Responsive = /*#__PURE__*/function () {
        function _Responsive() {
          _classCallCheck(this, _Responsive);
          this.maxWidth = Infinity;
          this.options = {};
          this.mode = "canvas";
        }
        _createClass(_Responsive, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.maxWidth !== undefined) {
              this.maxWidth = data.maxWidth;
            }
            if (data.mode !== undefined) {
              if (data.mode === "screen") {
                this.mode = "screen";
              } else {
                this.mode = "canvas";
              }
            }
            if (data.options !== undefined) {
              this.options = _deepExtend({}, data.options);
            }
          }
        }]);
        return _Responsive;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Theme/ThemeDefault.js
      var _ThemeDefault = /*#__PURE__*/function () {
        function _ThemeDefault() {
          _classCallCheck(this, _ThemeDefault);
          this.auto = false;
          this.mode = "any";
          this.value = false;
        }
        _createClass(_ThemeDefault, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.auto !== undefined) {
              this.auto = data.auto;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            if (data.value !== undefined) {
              this.value = data.value;
            }
          }
        }]);
        return _ThemeDefault;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Theme/Theme.js
      var _Theme = /*#__PURE__*/function () {
        function _Theme() {
          _classCallCheck(this, _Theme);
          this.name = "";
          this["default"] = new _ThemeDefault();
        }
        _createClass(_Theme, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.name !== undefined) {
              this.name = data.name;
            }
            this["default"].load(data["default"]);
            if (data.options !== undefined) {
              this.options = _deepExtend({}, data.options);
            }
          }
        }]);
        return _Theme;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/ColorAnimation.js
      var _ColorAnimation = /*#__PURE__*/function () {
        function _ColorAnimation() {
          _classCallCheck(this, _ColorAnimation);
          this.count = 0;
          this.enable = false;
          this.offset = 0;
          this.speed = 1;
          this.decay = 0;
          this.sync = true;
        }
        _createClass(_ColorAnimation, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.count !== undefined) {
              this.count = _setRangeValue(data.count);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.offset !== undefined) {
              this.offset = _setRangeValue(data.offset);
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
            if (data.decay !== undefined) {
              this.decay = _setRangeValue(data.decay);
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return _ColorAnimation;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/HslAnimation.js
      var _HslAnimation = /*#__PURE__*/function () {
        function _HslAnimation() {
          _classCallCheck(this, _HslAnimation);
          this.h = new _ColorAnimation();
          this.s = new _ColorAnimation();
          this.l = new _ColorAnimation();
        }
        _createClass(_HslAnimation, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            this.h.load(data.h);
            this.s.load(data.s);
            this.l.load(data.l);
          }
        }]);
        return _HslAnimation;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/AnimatableColor.js
      var _AnimatableColor = /*#__PURE__*/function (_OptionsColor2) {
        _inherits(_AnimatableColor, _OptionsColor2);
        var _super2 = _createSuper(_AnimatableColor);
        function _AnimatableColor() {
          var _this13;
          _classCallCheck(this, _AnimatableColor);
          _this13 = _super2.call(this);
          _this13.animation = new _HslAnimation();
          return _this13;
        }
        _createClass(_AnimatableColor, [{
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(_AnimatableColor.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            var colorAnimation = data.animation;
            if (colorAnimation !== undefined) {
              if (colorAnimation.enable !== undefined) {
                this.animation.h.load(colorAnimation);
              } else {
                this.animation.load(data.animation);
              }
            }
          }
        }], [{
          key: "create",
          value: function create(source, data) {
            var color = new _AnimatableColor();
            color.load(source);
            if (data !== undefined) {
              if (typeof data === "string" || data instanceof Array) {
                color.load({
                  value: data
                });
              } else {
                color.load(data);
              }
            }
            return color;
          }
        }]);
        return _AnimatableColor;
      }(_OptionsColor);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Collisions/CollisionsAbsorb.js
      var _CollisionsAbsorb = /*#__PURE__*/function () {
        function _CollisionsAbsorb() {
          _classCallCheck(this, _CollisionsAbsorb);
          this.speed = 2;
        }
        _createClass(_CollisionsAbsorb, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.speed !== undefined) {
              this.speed = data.speed;
            }
          }
        }]);
        return _CollisionsAbsorb;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Collisions/CollisionsOverlap.js
      var _CollisionsOverlap = /*#__PURE__*/function () {
        function _CollisionsOverlap() {
          _classCallCheck(this, _CollisionsOverlap);
          this.enable = true;
          this.retries = 0;
        }
        _createClass(_CollisionsOverlap, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.retries !== undefined) {
              this.retries = data.retries;
            }
          }
        }]);
        return _CollisionsOverlap;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Random.js
      var Random = /*#__PURE__*/function () {
        function Random() {
          _classCallCheck(this, Random);
          this.enable = false;
          this.minimumValue = 0;
        }
        _createClass(Random, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.minimumValue !== undefined) {
              this.minimumValue = data.minimumValue;
            }
          }
        }]);
        return Random;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/ValueWithRandom.js
      var _ValueWithRandom = /*#__PURE__*/function () {
        function _ValueWithRandom() {
          _classCallCheck(this, _ValueWithRandom);
          this.random = new Random();
          this.value = 0;
        }
        _createClass(_ValueWithRandom, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (typeof data.random === "boolean") {
              this.random.enable = data.random;
            } else {
              this.random.load(data.random);
            }
            if (data.value !== undefined) {
              this.value = _setRangeValue(data.value, this.random.enable ? this.random.minimumValue : undefined);
            }
          }
        }]);
        return _ValueWithRandom;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Bounce/ParticlesBounceFactor.js
      var _ParticlesBounceFactor = /*#__PURE__*/function (_ValueWithRandom2) {
        _inherits(_ParticlesBounceFactor, _ValueWithRandom2);
        var _super3 = _createSuper(_ParticlesBounceFactor);
        function _ParticlesBounceFactor() {
          var _this14;
          _classCallCheck(this, _ParticlesBounceFactor);
          _this14 = _super3.call(this);
          _this14.random.minimumValue = 0.1;
          _this14.value = 1;
          return _this14;
        }
        return _createClass(_ParticlesBounceFactor);
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Bounce/ParticlesBounce.js
      var _ParticlesBounce = /*#__PURE__*/function () {
        function _ParticlesBounce() {
          _classCallCheck(this, _ParticlesBounce);
          this.horizontal = new _ParticlesBounceFactor();
          this.vertical = new _ParticlesBounceFactor();
        }
        _createClass(_ParticlesBounce, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            this.horizontal.load(data.horizontal);
            this.vertical.load(data.vertical);
          }
        }]);
        return _ParticlesBounce;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Collisions/Collisions.js
      var _Collisions = /*#__PURE__*/function () {
        function _Collisions() {
          _classCallCheck(this, _Collisions);
          this.absorb = new _CollisionsAbsorb();
          this.bounce = new _ParticlesBounce();
          this.enable = false;
          this.mode = "bounce";
          this.overlap = new _CollisionsOverlap();
        }
        _createClass(_Collisions, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            this.absorb.load(data.absorb);
            this.bounce.load(data.bounce);
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            this.overlap.load(data.overlap);
          }
        }]);
        return _Collisions;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveAngle.js
      var _MoveAngle = /*#__PURE__*/function () {
        function _MoveAngle() {
          _classCallCheck(this, _MoveAngle);
          this.offset = 0;
          this.value = 90;
        }
        _createClass(_MoveAngle, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.offset !== undefined) {
              this.offset = _setRangeValue(data.offset);
            }
            if (data.value !== undefined) {
              this.value = _setRangeValue(data.value);
            }
          }
        }]);
        return _MoveAngle;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveAttract.js
      var _MoveAttract = /*#__PURE__*/function () {
        function _MoveAttract() {
          _classCallCheck(this, _MoveAttract);
          this.distance = 200;
          this.enable = false;
          this.rotate = {
            x: 3000,
            y: 3000
          };
        }
        _createClass(_MoveAttract, [{
          key: "rotateX",
          get: function get() {
            return this.rotate.x;
          },
          set: function set(value) {
            this.rotate.x = value;
          }
        }, {
          key: "rotateY",
          get: function get() {
            return this.rotate.y;
          },
          set: function set(value) {
            this.rotate.y = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b, _c, _d;
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = _setRangeValue(data.distance);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            var rotateX = (_b = (_a = data.rotate) === null || _a === void 0 ? void 0 : _a.x) !== null && _b !== void 0 ? _b : data.rotateX;
            if (rotateX !== undefined) {
              this.rotate.x = rotateX;
            }
            var rotateY = (_d = (_c = data.rotate) === null || _c === void 0 ? void 0 : _c.y) !== null && _d !== void 0 ? _d : data.rotateY;
            if (rotateY !== undefined) {
              this.rotate.y = rotateY;
            }
          }
        }]);
        return _MoveAttract;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveCenter.js
      var _MoveCenter = /*#__PURE__*/function () {
        function _MoveCenter() {
          _classCallCheck(this, _MoveCenter);
          this.x = 50;
          this.y = 50;
          this.mode = "percent";
          this.radius = 0;
        }
        _createClass(_MoveCenter, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.x !== undefined) {
              this.x = data.x;
            }
            if (data.y !== undefined) {
              this.y = data.y;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            if (data.radius !== undefined) {
              this.radius = data.radius;
            }
          }
        }]);
        return _MoveCenter;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveGravity.js
      var _MoveGravity = /*#__PURE__*/function () {
        function _MoveGravity() {
          _classCallCheck(this, _MoveGravity);
          this.acceleration = 9.81;
          this.enable = false;
          this.inverse = false;
          this.maxSpeed = 50;
        }
        _createClass(_MoveGravity, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.acceleration !== undefined) {
              this.acceleration = _setRangeValue(data.acceleration);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.inverse !== undefined) {
              this.inverse = data.inverse;
            }
            if (data.maxSpeed !== undefined) {
              this.maxSpeed = _setRangeValue(data.maxSpeed);
            }
          }
        }]);
        return _MoveGravity;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/Path/MovePath.js
      var _MovePath = /*#__PURE__*/function () {
        function _MovePath() {
          _classCallCheck(this, _MovePath);
          this.clamp = true;
          this.delay = new _ValueWithRandom();
          this.enable = false;
          this.options = {};
        }
        _createClass(_MovePath, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.clamp !== undefined) {
              this.clamp = data.clamp;
            }
            this.delay.load(data.delay);
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.generator = data.generator;
            if (data.options) {
              this.options = _deepExtend(this.options, data.options);
            }
          }
        }]);
        return _MovePath;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveTrailFill.js
      var MoveTrailFill = /*#__PURE__*/function () {
        function MoveTrailFill() {
          _classCallCheck(this, MoveTrailFill);
        }
        _createClass(MoveTrailFill, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.image !== undefined) {
              this.image = data.image;
            }
          }
        }]);
        return MoveTrailFill;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/MoveTrail.js
      var _MoveTrail = /*#__PURE__*/function () {
        function _MoveTrail() {
          _classCallCheck(this, _MoveTrail);
          this.enable = false;
          this.length = 10;
          this.fill = new MoveTrailFill();
        }
        _createClass(_MoveTrail, [{
          key: "fillColor",
          get: function get() {
            return this.fill.color;
          },
          set: function set(value) {
            this.fill.load({
              color: value
            });
          }
        }, {
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.fill !== undefined || data.fillColor !== undefined) {
              this.fill.load(data.fill || {
                color: data.fillColor
              });
            }
            if (data.length !== undefined) {
              this.length = data.length;
            }
          }
        }]);
        return _MoveTrail;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/OutModes.js
      var _OutModes = /*#__PURE__*/function () {
        function _OutModes() {
          _classCallCheck(this, _OutModes);
          this["default"] = "out";
        }
        _createClass(_OutModes, [{
          key: "load",
          value: function load(data) {
            var _a, _b, _c, _d;
            if (!data) {
              return;
            }
            if (data["default"] !== undefined) {
              this["default"] = data["default"];
            }
            this.bottom = (_a = data.bottom) !== null && _a !== void 0 ? _a : data["default"];
            this.left = (_b = data.left) !== null && _b !== void 0 ? _b : data["default"];
            this.right = (_c = data.right) !== null && _c !== void 0 ? _c : data["default"];
            this.top = (_d = data.top) !== null && _d !== void 0 ? _d : data["default"];
          }
        }]);
        return _OutModes;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/Spin.js
      var _Spin = /*#__PURE__*/function () {
        function _Spin() {
          _classCallCheck(this, _Spin);
          this.acceleration = 0;
          this.enable = false;
        }
        _createClass(_Spin, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.acceleration !== undefined) {
              this.acceleration = _setRangeValue(data.acceleration);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.position = data.position ? _deepExtend({}, data.position) : undefined;
          }
        }]);
        return _Spin;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Move/Move.js
      var _Move = /*#__PURE__*/function () {
        function _Move() {
          _classCallCheck(this, _Move);
          this.angle = new _MoveAngle();
          this.attract = new _MoveAttract();
          this.center = new _MoveCenter();
          this.decay = 0;
          this.distance = {};
          this.direction = "none";
          this.drift = 0;
          this.enable = false;
          this.gravity = new _MoveGravity();
          this.path = new _MovePath();
          this.outModes = new _OutModes();
          this.random = false;
          this.size = false;
          this.speed = 2;
          this.spin = new _Spin();
          this.straight = false;
          this.trail = new _MoveTrail();
          this.vibrate = false;
          this.warp = false;
        }
        _createClass(_Move, [{
          key: "bounce",
          get: function get() {
            return this.collisions;
          },
          set: function set(value) {
            this.collisions = value;
          }
        }, {
          key: "collisions",
          get: function get() {
            return false;
          },
          set: function set(_) {}
        }, {
          key: "noise",
          get: function get() {
            return this.path;
          },
          set: function set(value) {
            this.path = value;
          }
        }, {
          key: "outMode",
          get: function get() {
            return this.outModes["default"];
          },
          set: function set(value) {
            this.outModes["default"] = value;
          }
        }, {
          key: "out_mode",
          get: function get() {
            return this.outMode;
          },
          set: function set(value) {
            this.outMode = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b, _c;
            if (!data) {
              return;
            }
            this.angle.load(typeof data.angle === "number" ? {
              value: data.angle
            } : data.angle);
            this.attract.load(data.attract);
            this.center.load(data.center);
            if (data.decay !== undefined) {
              this.decay = _setRangeValue(data.decay);
            }
            if (data.direction !== undefined) {
              this.direction = data.direction;
            }
            if (data.distance !== undefined) {
              this.distance = typeof data.distance === "number" ? {
                horizontal: data.distance,
                vertical: data.distance
              } : Object.assign({}, data.distance);
            }
            if (data.drift !== undefined) {
              this.drift = _setRangeValue(data.drift);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.gravity.load(data.gravity);
            var outModes = (_b = (_a = data.outModes) !== null && _a !== void 0 ? _a : data.outMode) !== null && _b !== void 0 ? _b : data.out_mode;
            if (outModes !== undefined) {
              if (_typeof(outModes) === "object") {
                this.outModes.load(outModes);
              } else {
                this.outModes.load({
                  "default": outModes
                });
              }
            }
            this.path.load((_c = data.path) !== null && _c !== void 0 ? _c : data.noise);
            if (data.random !== undefined) {
              this.random = data.random;
            }
            if (data.size !== undefined) {
              this.size = data.size;
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
            this.spin.load(data.spin);
            if (data.straight !== undefined) {
              this.straight = data.straight;
            }
            this.trail.load(data.trail);
            if (data.vibrate !== undefined) {
              this.vibrate = data.vibrate;
            }
            if (data.warp !== undefined) {
              this.warp = data.warp;
            }
          }
        }]);
        return _Move;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/AnimationOptions.js
      var _AnimationOptions = /*#__PURE__*/function () {
        function _AnimationOptions() {
          _classCallCheck(this, _AnimationOptions);
          this.count = 0;
          this.enable = false;
          this.speed = 1;
          this.decay = 0;
          this.sync = false;
        }
        _createClass(_AnimationOptions, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.count !== undefined) {
              this.count = _setRangeValue(data.count);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
            if (data.decay !== undefined) {
              this.decay = _setRangeValue(data.decay);
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return _AnimationOptions;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Opacity/OpacityAnimation.js
      var _OpacityAnimation = /*#__PURE__*/function (_AnimationOptions2) {
        _inherits(_OpacityAnimation, _AnimationOptions2);
        var _super4 = _createSuper(_OpacityAnimation);
        function _OpacityAnimation() {
          var _this15;
          _classCallCheck(this, _OpacityAnimation);
          _this15 = _super4.call(this);
          _this15.destroy = "none";
          _this15.enable = false;
          _this15.speed = 2;
          _this15.startValue = "random";
          _this15.sync = false;
          return _this15;
        }
        _createClass(_OpacityAnimation, [{
          key: "opacity_min",
          get: function get() {
            return this.minimumValue;
          },
          set: function set(value) {
            this.minimumValue = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(_OpacityAnimation.prototype), "load", this).call(this, data);
            if (data.destroy !== undefined) {
              this.destroy = data.destroy;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.minimumValue = (_a = data.minimumValue) !== null && _a !== void 0 ? _a : data.opacity_min;
            if (data.speed !== undefined) {
              this.speed = data.speed;
            }
            if (data.startValue !== undefined) {
              this.startValue = data.startValue;
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return _OpacityAnimation;
      }(_AnimationOptions);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Opacity/Opacity.js
      var _Opacity = /*#__PURE__*/function (_ValueWithRandom3) {
        _inherits(_Opacity, _ValueWithRandom3);
        var _super5 = _createSuper(_Opacity);
        function _Opacity() {
          var _this16;
          _classCallCheck(this, _Opacity);
          _this16 = _super5.call(this);
          _this16.animation = new _OpacityAnimation();
          _this16.random.minimumValue = 0.1;
          _this16.value = 1;
          return _this16;
        }
        _createClass(_Opacity, [{
          key: "anim",
          get: function get() {
            return this.animation;
          },
          set: function set(value) {
            this.animation = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(_Opacity.prototype), "load", this).call(this, data);
            var animation = (_a = data.animation) !== null && _a !== void 0 ? _a : data.anim;
            if (animation !== undefined) {
              this.animation.load(animation);
              this.value = _setRangeValue(this.value, this.animation.enable ? this.animation.minimumValue : undefined);
            }
          }
        }]);
        return _Opacity;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Number/ParticlesDensity.js
      var _ParticlesDensity = /*#__PURE__*/function () {
        function _ParticlesDensity() {
          _classCallCheck(this, _ParticlesDensity);
          this.enable = false;
          this.width = 1920;
          this.height = 1080;
        }
        _createClass(_ParticlesDensity, [{
          key: "area",
          get: function get() {
            return this.width;
          },
          set: function set(value) {
            this.width = value;
          }
        }, {
          key: "factor",
          get: function get() {
            return this.height;
          },
          set: function set(value) {
            this.height = value;
          }
        }, {
          key: "value_area",
          get: function get() {
            return this.area;
          },
          set: function set(value) {
            this.area = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b, _c;
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            var width = (_b = (_a = data.width) !== null && _a !== void 0 ? _a : data.area) !== null && _b !== void 0 ? _b : data.value_area;
            if (width !== undefined) {
              this.width = width;
            }
            var height = (_c = data.height) !== null && _c !== void 0 ? _c : data.factor;
            if (height !== undefined) {
              this.height = height;
            }
          }
        }]);
        return _ParticlesDensity;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Number/ParticlesNumber.js
      var _ParticlesNumber = /*#__PURE__*/function () {
        function _ParticlesNumber() {
          _classCallCheck(this, _ParticlesNumber);
          this.density = new _ParticlesDensity();
          this.limit = 0;
          this.value = 100;
        }
        _createClass(_ParticlesNumber, [{
          key: "max",
          get: function get() {
            return this.limit;
          },
          set: function set(value) {
            this.limit = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            this.density.load(data.density);
            var limit = (_a = data.limit) !== null && _a !== void 0 ? _a : data.max;
            if (limit !== undefined) {
              this.limit = limit;
            }
            if (data.value !== undefined) {
              this.value = data.value;
            }
          }
        }]);
        return _ParticlesNumber;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Shadow.js
      var _Shadow = /*#__PURE__*/function () {
        function _Shadow() {
          _classCallCheck(this, _Shadow);
          this.blur = 0;
          this.color = new _OptionsColor();
          this.enable = false;
          this.offset = {
            x: 0,
            y: 0
          };
          this.color.value = "#000";
        }
        _createClass(_Shadow, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.blur !== undefined) {
              this.blur = data.blur;
            }
            this.color = _OptionsColor.create(this.color, data.color);
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.offset === undefined) {
              return;
            }
            if (data.offset.x !== undefined) {
              this.offset.x = data.offset.x;
            }
            if (data.offset.y !== undefined) {
              this.offset.y = data.offset.y;
            }
          }
        }]);
        return _Shadow;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Shape/Shape.js

      var charKey = "character",
        charAltKey = "char",
        imageKey = "image",
        imageAltKey = "images",
        polygonKey = "polygon",
        polygonAltKey = "star";
      var _Shape = /*#__PURE__*/function () {
        function _Shape() {
          _classCallCheck(this, _Shape);
          this.options = {};
          this.type = "circle";
        }
        _createClass(_Shape, [{
          key: "character",
          get: function get() {
            var _a;
            return (_a = this.options[charKey]) !== null && _a !== void 0 ? _a : this.options[charAltKey];
          },
          set: function set(value) {
            this.options[charAltKey] = this.options[charKey] = value;
          }
        }, {
          key: "custom",
          get: function get() {
            return this.options;
          },
          set: function set(value) {
            this.options = value;
          }
        }, {
          key: "image",
          get: function get() {
            var _a;
            return (_a = this.options[imageKey]) !== null && _a !== void 0 ? _a : this.options[imageAltKey];
          },
          set: function set(value) {
            this.options[imageAltKey] = this.options[imageKey] = value;
          }
        }, {
          key: "images",
          get: function get() {
            return this.image;
          },
          set: function set(value) {
            this.image = value;
          }
        }, {
          key: "polygon",
          get: function get() {
            var _a;
            return (_a = this.options[polygonKey]) !== null && _a !== void 0 ? _a : this.options[polygonAltKey];
          },
          set: function set(value) {
            this.options[polygonAltKey] = this.options[polygonKey] = value;
          }
        }, {
          key: "stroke",
          get: function get() {
            return [];
          },
          set: function set(_value) {}
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b, _c;
            if (!data) {
              return;
            }
            var options = (_a = data.options) !== null && _a !== void 0 ? _a : data.custom;
            if (options !== undefined) {
              for (var shape in options) {
                var item = options[shape];
                if (item) {
                  this.options[shape] = _deepExtend((_b = this.options[shape]) !== null && _b !== void 0 ? _b : {}, item);
                }
              }
            }
            this.loadShape(data.character, charKey, charAltKey, true);
            this.loadShape(data.polygon, polygonKey, polygonAltKey, false);
            this.loadShape((_c = data.image) !== null && _c !== void 0 ? _c : data.images, imageKey, imageAltKey, true);
            if (data.type !== undefined) {
              this.type = data.type;
            }
          }
        }, {
          key: "loadShape",
          value: function loadShape(item, mainKey, altKey, altOverride) {
            var _a, _b;
            if (!item) {
              return;
            }
            var isArray = item instanceof Array;
            var emptyValue = isArray ? [] : {},
              mainDifferentValues = isArray !== this.options[mainKey] instanceof Array,
              altDifferentValues = isArray !== this.options[altKey] instanceof Array;
            if (mainDifferentValues) {
              this.options[mainKey] = emptyValue;
            }
            if (altDifferentValues && altOverride) {
              this.options[altKey] = emptyValue;
            }
            this.options[mainKey] = _deepExtend((_a = this.options[mainKey]) !== null && _a !== void 0 ? _a : emptyValue, item);
            if (!this.options[altKey] || altOverride) {
              this.options[altKey] = _deepExtend((_b = this.options[altKey]) !== null && _b !== void 0 ? _b : emptyValue, item);
            }
          }
        }]);
        return _Shape;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Size/SizeAnimation.js
      var _SizeAnimation = /*#__PURE__*/function (_AnimationOptions3) {
        _inherits(_SizeAnimation, _AnimationOptions3);
        var _super6 = _createSuper(_SizeAnimation);
        function _SizeAnimation() {
          var _this17;
          _classCallCheck(this, _SizeAnimation);
          _this17 = _super6.call(this);
          _this17.destroy = "none";
          _this17.enable = false;
          _this17.speed = 5;
          _this17.startValue = "random";
          _this17.sync = false;
          return _this17;
        }
        _createClass(_SizeAnimation, [{
          key: "size_min",
          get: function get() {
            return this.minimumValue;
          },
          set: function set(value) {
            this.minimumValue = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            _get(_getPrototypeOf(_SizeAnimation.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            if (data.destroy !== undefined) {
              this.destroy = data.destroy;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.minimumValue = (_a = data.minimumValue) !== null && _a !== void 0 ? _a : data.size_min;
            if (data.speed !== undefined) {
              this.speed = data.speed;
            }
            if (data.startValue !== undefined) {
              this.startValue = data.startValue;
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return _SizeAnimation;
      }(_AnimationOptions);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Size/Size.js
      var _Size = /*#__PURE__*/function (_ValueWithRandom4) {
        _inherits(_Size, _ValueWithRandom4);
        var _super7 = _createSuper(_Size);
        function _Size() {
          var _this18;
          _classCallCheck(this, _Size);
          _this18 = _super7.call(this);
          _this18.animation = new _SizeAnimation();
          _this18.random.minimumValue = 1;
          _this18.value = 3;
          return _this18;
        }
        _createClass(_Size, [{
          key: "anim",
          get: function get() {
            return this.animation;
          },
          set: function set(value) {
            this.animation = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            _get(_getPrototypeOf(_Size.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            var animation = (_a = data.animation) !== null && _a !== void 0 ? _a : data.anim;
            if (animation !== undefined) {
              this.animation.load(animation);
              this.value = _setRangeValue(this.value, this.animation.enable ? this.animation.minimumValue : undefined);
            }
          }
        }]);
        return _Size;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/Stroke.js
      var _Stroke = /*#__PURE__*/function () {
        function _Stroke() {
          _classCallCheck(this, _Stroke);
          this.width = 0;
        }
        _createClass(_Stroke, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _AnimatableColor.create(this.color, data.color);
            }
            if (data.width !== undefined) {
              this.width = _setRangeValue(data.width);
            }
            if (data.opacity !== undefined) {
              this.opacity = _setRangeValue(data.opacity);
            }
          }
        }]);
        return _Stroke;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/ZIndex/ZIndex.js
      var _ZIndex = /*#__PURE__*/function (_ValueWithRandom5) {
        _inherits(_ZIndex, _ValueWithRandom5);
        var _super8 = _createSuper(_ZIndex);
        function _ZIndex() {
          var _this19;
          _classCallCheck(this, _ZIndex);
          _this19 = _super8.call(this);
          _this19.opacityRate = 1;
          _this19.sizeRate = 1;
          _this19.velocityRate = 1;
          return _this19;
        }
        _createClass(_ZIndex, [{
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(_ZIndex.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            if (data.opacityRate !== undefined) {
              this.opacityRate = data.opacityRate;
            }
            if (data.sizeRate !== undefined) {
              this.sizeRate = data.sizeRate;
            }
            if (data.velocityRate !== undefined) {
              this.velocityRate = data.velocityRate;
            }
          }
        }]);
        return _ZIndex;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Particles/ParticlesOptions.js
      var _ParticlesOptions = /*#__PURE__*/function () {
        function _ParticlesOptions(engine, container) {
          _classCallCheck(this, _ParticlesOptions);
          this._engine = engine;
          this._container = container;
          this.bounce = new _ParticlesBounce();
          this.collisions = new _Collisions();
          this.color = new _AnimatableColor();
          this.color.value = "#fff";
          this.groups = {};
          this.move = new _Move();
          this.number = new _ParticlesNumber();
          this.opacity = new _Opacity();
          this.reduceDuplicates = false;
          this.shadow = new _Shadow();
          this.shape = new _Shape();
          this.size = new _Size();
          this.stroke = new _Stroke();
          this.zIndex = new _ZIndex();
        }
        _createClass(_ParticlesOptions, [{
          key: "load",
          value: function load(data) {
            var _a, _b, _c, _d, _e, _f;
            if (!data) {
              return;
            }
            this.bounce.load(data.bounce);
            this.color.load(_AnimatableColor.create(this.color, data.color));
            if (data.groups !== undefined) {
              for (var group in data.groups) {
                var item = data.groups[group];
                if (item !== undefined) {
                  this.groups[group] = _deepExtend((_a = this.groups[group]) !== null && _a !== void 0 ? _a : {}, item);
                }
              }
            }
            this.move.load(data.move);
            this.number.load(data.number);
            this.opacity.load(data.opacity);
            if (data.reduceDuplicates !== undefined) {
              this.reduceDuplicates = data.reduceDuplicates;
            }
            this.shape.load(data.shape);
            this.size.load(data.size);
            this.shadow.load(data.shadow);
            this.zIndex.load(data.zIndex);
            var collisions = (_c = (_b = data.move) === null || _b === void 0 ? void 0 : _b.collisions) !== null && _c !== void 0 ? _c : (_d = data.move) === null || _d === void 0 ? void 0 : _d.bounce;
            if (collisions !== undefined) {
              this.collisions.enable = collisions;
            }
            this.collisions.load(data.collisions);
            if (data.interactivity !== undefined) {
              this.interactivity = _deepExtend({}, data.interactivity);
            }
            var strokeToLoad = (_e = data.stroke) !== null && _e !== void 0 ? _e : (_f = data.shape) === null || _f === void 0 ? void 0 : _f.stroke;
            if (strokeToLoad) {
              this.stroke = _executeOnSingleOrMultiple(strokeToLoad, function (t) {
                var tmp = new _Stroke();
                tmp.load(t);
                return tmp;
              });
            }
            if (this._container) {
              var updaters = this._engine.plugins.updaters.get(this._container);
              if (updaters) {
                var _iterator13 = _createForOfIteratorHelper(updaters),
                  _step13;
                try {
                  for (_iterator13.s(); !(_step13 = _iterator13.n()).done;) {
                    var updater = _step13.value;
                    if (updater.loadOptions) {
                      updater.loadOptions(this, data);
                    }
                  }
                } catch (err) {
                  _iterator13.e(err);
                } finally {
                  _iterator13.f();
                }
              }
              var interactors = this._engine.plugins.interactors.get(this._container);
              if (interactors) {
                var _iterator14 = _createForOfIteratorHelper(interactors),
                  _step14;
                try {
                  for (_iterator14.s(); !(_step14 = _iterator14.n()).done;) {
                    var interactor = _step14.value;
                    if (interactor.loadParticlesOptions) {
                      interactor.loadParticlesOptions(this, data);
                    }
                  }
                } catch (err) {
                  _iterator14.e(err);
                } finally {
                  _iterator14.f();
                }
              }
            }
          }
        }]);
        return _ParticlesOptions;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/OptionsUtils.js

      function _loadOptions(options) {
        for (var _len2 = arguments.length, sourceOptionsArr = new Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
          sourceOptionsArr[_key2 - 1] = arguments[_key2];
        }
        for (var _i2 = 0, _sourceOptionsArr = sourceOptionsArr; _i2 < _sourceOptionsArr.length; _i2++) {
          var sourceOptions = _sourceOptionsArr[_i2];
          options.load(sourceOptions);
        }
      }
      function _loadParticlesOptions(engine, container) {
        var options = new _ParticlesOptions(engine, container);
        for (var _len3 = arguments.length, sourceOptionsArr = new Array(_len3 > 2 ? _len3 - 2 : 0), _key3 = 2; _key3 < _len3; _key3++) {
          sourceOptionsArr[_key3 - 2] = arguments[_key3];
        }
        _loadOptions.apply(void 0, [options].concat(sourceOptionsArr));
        return options;
      }
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Options/Classes/Options.js
      var _Options = /*#__PURE__*/function () {
        function _Options(engine, container) {
          _classCallCheck(this, _Options);
          this._engine = engine;
          this._container = container;
          this.autoPlay = true;
          this.background = new _Background();
          this.backgroundMask = new _BackgroundMask();
          this.defaultThemes = {};
          this.delay = 0;
          this.fullScreen = new _FullScreen();
          this.detectRetina = true;
          this.duration = 0;
          this.fpsLimit = 120;
          this.interactivity = new _Interactivity(engine, container);
          this.manualParticles = [];
          this.particles = _loadParticlesOptions(this._engine, this._container);
          this.pauseOnBlur = true;
          this.pauseOnOutsideViewport = true;
          this.responsive = [];
          this.smooth = false;
          this.style = {};
          this.themes = [];
          this.zLayers = 100;
        }
        _createClass(_Options, [{
          key: "backgroundMode",
          get: function get() {
            return this.fullScreen;
          },
          set: function set(value) {
            this.fullScreen.load(value);
          }
        }, {
          key: "fps_limit",
          get: function get() {
            return this.fpsLimit;
          },
          set: function set(value) {
            this.fpsLimit = value;
          }
        }, {
          key: "retina_detect",
          get: function get() {
            return this.detectRetina;
          },
          set: function set(value) {
            this.detectRetina = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _this20 = this;
            var _a, _b, _c, _d, _e;
            if (!data) {
              return;
            }
            if (data.preset !== undefined) {
              _executeOnSingleOrMultiple(data.preset, function (preset) {
                return _this20._importPreset(preset);
              });
            }
            if (data.autoPlay !== undefined) {
              this.autoPlay = data.autoPlay;
            }
            if (data.delay !== undefined) {
              this.delay = _setRangeValue(data.delay);
            }
            var detectRetina = (_a = data.detectRetina) !== null && _a !== void 0 ? _a : data.retina_detect;
            if (detectRetina !== undefined) {
              this.detectRetina = detectRetina;
            }
            if (data.duration !== undefined) {
              this.duration = _setRangeValue(data.duration);
            }
            var fpsLimit = (_b = data.fpsLimit) !== null && _b !== void 0 ? _b : data.fps_limit;
            if (fpsLimit !== undefined) {
              this.fpsLimit = fpsLimit;
            }
            if (data.pauseOnBlur !== undefined) {
              this.pauseOnBlur = data.pauseOnBlur;
            }
            if (data.pauseOnOutsideViewport !== undefined) {
              this.pauseOnOutsideViewport = data.pauseOnOutsideViewport;
            }
            if (data.zLayers !== undefined) {
              this.zLayers = data.zLayers;
            }
            this.background.load(data.background);
            var fullScreen = (_c = data.fullScreen) !== null && _c !== void 0 ? _c : data.backgroundMode;
            if (typeof fullScreen === "boolean") {
              this.fullScreen.enable = fullScreen;
            } else {
              this.fullScreen.load(fullScreen);
            }
            this.backgroundMask.load(data.backgroundMask);
            this.interactivity.load(data.interactivity);
            if (data.manualParticles !== undefined) {
              this.manualParticles = data.manualParticles.map(function (t) {
                var tmp = new _ManualParticle();
                tmp.load(t);
                return tmp;
              });
            }
            this.particles.load(data.particles);
            this.style = _deepExtend(this.style, data.style);
            this._engine.plugins.loadOptions(this, data);
            if (data.smooth !== undefined) {
              this.smooth = data.smooth;
            }
            var interactors = this._engine.plugins.interactors.get(this._container);
            if (interactors) {
              var _iterator15 = _createForOfIteratorHelper(interactors),
                _step15;
              try {
                for (_iterator15.s(); !(_step15 = _iterator15.n()).done;) {
                  var interactor = _step15.value;
                  if (interactor.loadOptions) {
                    interactor.loadOptions(this, data);
                  }
                }
              } catch (err) {
                _iterator15.e(err);
              } finally {
                _iterator15.f();
              }
            }
            if (data.responsive !== undefined) {
              var _iterator16 = _createForOfIteratorHelper(data.responsive),
                _step16;
              try {
                for (_iterator16.s(); !(_step16 = _iterator16.n()).done;) {
                  var responsive = _step16.value;
                  var optResponsive = new _Responsive();
                  optResponsive.load(responsive);
                  this.responsive.push(optResponsive);
                }
              } catch (err) {
                _iterator16.e(err);
              } finally {
                _iterator16.f();
              }
            }
            this.responsive.sort(function (a, b) {
              return a.maxWidth - b.maxWidth;
            });
            if (data.themes !== undefined) {
              var _iterator17 = _createForOfIteratorHelper(data.themes),
                _step17;
              try {
                var _loop2 = function _loop2() {
                  var theme = _step17.value;
                  var existingTheme = _this20.themes.find(function (t) {
                    return t.name === theme.name;
                  });
                  if (!existingTheme) {
                    var optTheme = new _Theme();
                    optTheme.load(theme);
                    _this20.themes.push(optTheme);
                  } else {
                    existingTheme.load(theme);
                  }
                };
                for (_iterator17.s(); !(_step17 = _iterator17.n()).done;) {
                  _loop2();
                }
              } catch (err) {
                _iterator17.e(err);
              } finally {
                _iterator17.f();
              }
            }
            this.defaultThemes.dark = (_d = this._findDefaultTheme("dark")) === null || _d === void 0 ? void 0 : _d.name;
            this.defaultThemes.light = (_e = this._findDefaultTheme("light")) === null || _e === void 0 ? void 0 : _e.name;
          }
        }, {
          key: "setResponsive",
          value: function setResponsive(width, pxRatio, defaultOptions) {
            this.load(defaultOptions);
            var responsiveOptions = this.responsive.find(function (t) {
              return t.mode === "screen" && screen ? t.maxWidth > screen.availWidth : t.maxWidth * pxRatio > width;
            });
            this.load(responsiveOptions === null || responsiveOptions === void 0 ? void 0 : responsiveOptions.options);
            return responsiveOptions === null || responsiveOptions === void 0 ? void 0 : responsiveOptions.maxWidth;
          }
        }, {
          key: "setTheme",
          value: function setTheme(name) {
            if (name) {
              var chosenTheme = this.themes.find(function (theme) {
                return theme.name === name;
              });
              if (chosenTheme) {
                this.load(chosenTheme.options);
              }
            } else {
              var mediaMatch = _safeMatchMedia("(prefers-color-scheme: dark)"),
                clientDarkMode = mediaMatch && mediaMatch.matches,
                defaultTheme = this._findDefaultTheme(clientDarkMode ? "dark" : "light");
              if (defaultTheme) {
                this.load(defaultTheme.options);
              }
            }
          }
        }, {
          key: "_findDefaultTheme",
          value: function _findDefaultTheme(mode) {
            var _a;
            return (_a = this.themes.find(function (theme) {
              return theme["default"].value && theme["default"].mode === mode;
            })) !== null && _a !== void 0 ? _a : this.themes.find(function (theme) {
              return theme["default"].value && theme["default"].mode === "any";
            });
          }
        }, {
          key: "_importPreset",
          value: function _importPreset(preset) {
            this.load(this._engine.plugins.getPreset(preset));
          }
        }]);
        return _Options;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/InteractionManager.js
      var InteractionManager = /*#__PURE__*/function () {
        function InteractionManager(engine, container) {
          _classCallCheck(this, InteractionManager);
          this.container = container;
          this._engine = engine;
          this._interactors = this._engine.plugins.getInteractors(this.container, true);
          this._externalInteractors = [];
          this._particleInteractors = [];
        }
        _createClass(InteractionManager, [{
          key: "externalInteract",
          value: function () {
            var _externalInteract = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6(delta) {
              var _iterator18, _step18, interactor;
              return _regeneratorRuntime().wrap(function _callee6$(_context6) {
                while (1) switch (_context6.prev = _context6.next) {
                  case 0:
                    _iterator18 = _createForOfIteratorHelper(this._externalInteractors);
                    _context6.prev = 1;
                    _iterator18.s();
                  case 3:
                    if ((_step18 = _iterator18.n()).done) {
                      _context6.next = 10;
                      break;
                    }
                    interactor = _step18.value;
                    if (!interactor.isEnabled()) {
                      _context6.next = 8;
                      break;
                    }
                    _context6.next = 8;
                    return interactor.interact(delta);
                  case 8:
                    _context6.next = 3;
                    break;
                  case 10:
                    _context6.next = 15;
                    break;
                  case 12:
                    _context6.prev = 12;
                    _context6.t0 = _context6["catch"](1);
                    _iterator18.e(_context6.t0);
                  case 15:
                    _context6.prev = 15;
                    _iterator18.f();
                    return _context6.finish(15);
                  case 18:
                  case "end":
                    return _context6.stop();
                }
              }, _callee6, this, [[1, 12, 15, 18]]);
            }));
            function externalInteract(_x4) {
              return _externalInteract.apply(this, arguments);
            }
            return externalInteract;
          }()
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            var _iterator19 = _createForOfIteratorHelper(this._externalInteractors),
              _step19;
            try {
              for (_iterator19.s(); !(_step19 = _iterator19.n()).done;) {
                var interactor = _step19.value;
                if (interactor.handleClickMode) {
                  interactor.handleClickMode(mode);
                }
              }
            } catch (err) {
              _iterator19.e(err);
            } finally {
              _iterator19.f();
            }
          }
        }, {
          key: "init",
          value: function init() {
            this._externalInteractors = [];
            this._particleInteractors = [];
            var _iterator20 = _createForOfIteratorHelper(this._interactors),
              _step20;
            try {
              for (_iterator20.s(); !(_step20 = _iterator20.n()).done;) {
                var interactor = _step20.value;
                switch (interactor.type) {
                  case "external":
                    this._externalInteractors.push(interactor);
                    break;
                  case "particles":
                    this._particleInteractors.push(interactor);
                    break;
                }
                interactor.init();
              }
            } catch (err) {
              _iterator20.e(err);
            } finally {
              _iterator20.f();
            }
          }
        }, {
          key: "particlesInteract",
          value: function () {
            var _particlesInteract = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7(particle, delta) {
              var _iterator21, _step21, interactor, _iterator22, _step22, _interactor;
              return _regeneratorRuntime().wrap(function _callee7$(_context7) {
                while (1) switch (_context7.prev = _context7.next) {
                  case 0:
                    _iterator21 = _createForOfIteratorHelper(this._externalInteractors);
                    try {
                      for (_iterator21.s(); !(_step21 = _iterator21.n()).done;) {
                        interactor = _step21.value;
                        interactor.clear(particle, delta);
                      }
                    } catch (err) {
                      _iterator21.e(err);
                    } finally {
                      _iterator21.f();
                    }
                    _iterator22 = _createForOfIteratorHelper(this._particleInteractors);
                    _context7.prev = 3;
                    _iterator22.s();
                  case 5:
                    if ((_step22 = _iterator22.n()).done) {
                      _context7.next = 12;
                      break;
                    }
                    _interactor = _step22.value;
                    if (!_interactor.isEnabled(particle)) {
                      _context7.next = 10;
                      break;
                    }
                    _context7.next = 10;
                    return _interactor.interact(particle, delta);
                  case 10:
                    _context7.next = 5;
                    break;
                  case 12:
                    _context7.next = 17;
                    break;
                  case 14:
                    _context7.prev = 14;
                    _context7.t0 = _context7["catch"](3);
                    _iterator22.e(_context7.t0);
                  case 17:
                    _context7.prev = 17;
                    _iterator22.f();
                    return _context7.finish(17);
                  case 20:
                  case "end":
                    return _context7.stop();
                }
              }, _callee7, this, [[3, 14, 17, 20]]);
            }));
            function particlesInteract(_x5, _x6) {
              return _particlesInteract.apply(this, arguments);
            }
            return particlesInteract;
          }()
        }, {
          key: "reset",
          value: function () {
            var _reset = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8(particle) {
              var _iterator23, _step23, interactor, _iterator24, _step24, _interactor2;
              return _regeneratorRuntime().wrap(function _callee8$(_context8) {
                while (1) switch (_context8.prev = _context8.next) {
                  case 0:
                    _iterator23 = _createForOfIteratorHelper(this._externalInteractors);
                    _context8.prev = 1;
                    _iterator23.s();
                  case 3:
                    if ((_step23 = _iterator23.n()).done) {
                      _context8.next = 10;
                      break;
                    }
                    interactor = _step23.value;
                    if (!interactor.isEnabled()) {
                      _context8.next = 8;
                      break;
                    }
                    _context8.next = 8;
                    return interactor.reset(particle);
                  case 8:
                    _context8.next = 3;
                    break;
                  case 10:
                    _context8.next = 15;
                    break;
                  case 12:
                    _context8.prev = 12;
                    _context8.t0 = _context8["catch"](1);
                    _iterator23.e(_context8.t0);
                  case 15:
                    _context8.prev = 15;
                    _iterator23.f();
                    return _context8.finish(15);
                  case 18:
                    _iterator24 = _createForOfIteratorHelper(this._particleInteractors);
                    _context8.prev = 19;
                    _iterator24.s();
                  case 21:
                    if ((_step24 = _iterator24.n()).done) {
                      _context8.next = 28;
                      break;
                    }
                    _interactor2 = _step24.value;
                    if (!_interactor2.isEnabled(particle)) {
                      _context8.next = 26;
                      break;
                    }
                    _context8.next = 26;
                    return _interactor2.reset(particle);
                  case 26:
                    _context8.next = 21;
                    break;
                  case 28:
                    _context8.next = 33;
                    break;
                  case 30:
                    _context8.prev = 30;
                    _context8.t1 = _context8["catch"](19);
                    _iterator24.e(_context8.t1);
                  case 33:
                    _context8.prev = 33;
                    _iterator24.f();
                    return _context8.finish(33);
                  case 36:
                  case "end":
                    return _context8.stop();
                }
              }, _callee8, this, [[1, 12, 15, 18], [19, 30, 33, 36]]);
            }));
            function reset(_x7) {
              return _reset.apply(this, arguments);
            }
            return reset;
          }()
        }]);
        return InteractionManager;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Particle.js

      var fixOutMode = function fixOutMode(data) {
        if (!_isInArray(data.outMode, data.checkModes)) {
          return;
        }
        if (data.coord > data.maxCoord - data.radius * 2) {
          data.setCb(-data.radius);
        } else if (data.coord < data.radius * 2) {
          data.setCb(data.radius);
        }
      };
      var Particle = /*#__PURE__*/function () {
        function Particle(engine, id, container, position, overrideOptions, group) {
          _classCallCheck(this, Particle);
          this.container = container;
          this._engine = engine;
          this.init(id, position, overrideOptions, group);
        }
        _createClass(Particle, [{
          key: "destroy",
          value: function destroy(override) {
            var _a;
            if (this.unbreakable || this.destroyed) {
              return;
            }
            this.destroyed = true;
            this.bubble.inRange = false;
            this.slow.inRange = false;
            var _iterator25 = _createForOfIteratorHelper(this.container.plugins),
              _step25;
            try {
              for (_iterator25.s(); !(_step25 = _iterator25.n()).done;) {
                var _step25$value = _slicedToArray(_step25.value, 2),
                  plugin = _step25$value[1];
                if (plugin.particleDestroyed) {
                  plugin.particleDestroyed(this, override);
                }
              }
            } catch (err) {
              _iterator25.e(err);
            } finally {
              _iterator25.f();
            }
            var _iterator26 = _createForOfIteratorHelper(this.container.particles.updaters),
              _step26;
            try {
              for (_iterator26.s(); !(_step26 = _iterator26.n()).done;) {
                var updater = _step26.value;
                if (updater.particleDestroyed) {
                  updater.particleDestroyed(this, override);
                }
              }
            } catch (err) {
              _iterator26.e(err);
            } finally {
              _iterator26.f();
            }
            (_a = this.pathGenerator) === null || _a === void 0 ? void 0 : _a.reset(this);
          }
        }, {
          key: "draw",
          value: function draw(delta) {
            var container = this.container;
            var _iterator27 = _createForOfIteratorHelper(container.plugins),
              _step27;
            try {
              for (_iterator27.s(); !(_step27 = _iterator27.n()).done;) {
                var _step27$value = _slicedToArray(_step27.value, 2),
                  plugin = _step27$value[1];
                container.canvas.drawParticlePlugin(plugin, this, delta);
              }
            } catch (err) {
              _iterator27.e(err);
            } finally {
              _iterator27.f();
            }
            container.canvas.drawParticle(this, delta);
          }
        }, {
          key: "getFillColor",
          value: function getFillColor() {
            var _a;
            return this._getRollColor((_a = this.bubble.color) !== null && _a !== void 0 ? _a : _getHslFromAnimation(this.color));
          }
        }, {
          key: "getMass",
          value: function getMass() {
            return Math.pow(this.getRadius(), 2) * Math.PI / 2;
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            return {
              x: this.position.x + this.offset.x,
              y: this.position.y + this.offset.y,
              z: this.position.z
            };
          }
        }, {
          key: "getRadius",
          value: function getRadius() {
            var _a;
            return (_a = this.bubble.radius) !== null && _a !== void 0 ? _a : this.size.value;
          }
        }, {
          key: "getStrokeColor",
          value: function getStrokeColor() {
            var _a;
            return this._getRollColor((_a = this.bubble.color) !== null && _a !== void 0 ? _a : _getHslFromAnimation(this.strokeColor));
          }
        }, {
          key: "init",
          value: function init(id, position, overrideOptions, group) {
            var _a, _b, _c, _d, _e, _f, _g, _h, _j;
            var container = this.container,
              engine = this._engine;
            this.id = id;
            this.group = group;
            this.fill = true;
            this.pathRotation = false;
            this.close = true;
            this.lastPathTime = 0;
            this.destroyed = false;
            this.unbreakable = false;
            this.rotation = 0;
            this.misplaced = false;
            this.retina = {
              maxDistance: {}
            };
            this.outType = "normal";
            this.ignoresResizeRatio = true;
            var pxRatio = container.retina.pixelRatio,
              mainOptions = container.actualOptions,
              particlesOptions = _loadParticlesOptions(this._engine, container, mainOptions.particles),
              shapeType = particlesOptions.shape.type,
              reduceDuplicates = particlesOptions.reduceDuplicates;
            this.shape = _itemFromSingleOrMultiple(shapeType, this.id, reduceDuplicates);
            var shapeOptions = particlesOptions.shape;
            if (overrideOptions && overrideOptions.shape && overrideOptions.shape.type) {
              var overrideShapeType = overrideOptions.shape.type,
                shape = _itemFromSingleOrMultiple(overrideShapeType, this.id, reduceDuplicates);
              if (shape) {
                this.shape = shape;
                shapeOptions.load(overrideOptions.shape);
              }
            }
            this.shapeData = this._loadShapeData(shapeOptions, reduceDuplicates);
            particlesOptions.load(overrideOptions);
            particlesOptions.load((_a = this.shapeData) === null || _a === void 0 ? void 0 : _a.particles);
            this.interactivity = new _Interactivity(engine, container);
            this.interactivity.load(container.actualOptions.interactivity);
            this.interactivity.load(particlesOptions.interactivity);
            this.fill = (_c = (_b = this.shapeData) === null || _b === void 0 ? void 0 : _b.fill) !== null && _c !== void 0 ? _c : this.fill;
            this.close = (_e = (_d = this.shapeData) === null || _d === void 0 ? void 0 : _d.close) !== null && _e !== void 0 ? _e : this.close;
            this.options = particlesOptions;
            var pathOptions = this.options.move.path;
            this.pathDelay = _getValue(pathOptions.delay) * 1000;
            if (pathOptions.generator) {
              this.pathGenerator = this._engine.plugins.getPathGenerator(pathOptions.generator);
              if (this.pathGenerator && container.addPath(pathOptions.generator, this.pathGenerator)) {
                this.pathGenerator.init(container);
              }
            }
            var zIndexValue = _getRangeValue(this.options.zIndex.value);
            container.retina.initParticle(this);
            var sizeOptions = this.options.size,
              sizeRange = sizeOptions.value,
              sizeAnimation = sizeOptions.animation;
            this.size = {
              enable: sizeOptions.animation.enable,
              value: _getRangeValue(sizeOptions.value) * container.retina.pixelRatio,
              max: _getRangeMax(sizeRange) * pxRatio,
              min: _getRangeMin(sizeRange) * pxRatio,
              loops: 0,
              maxLoops: _getRangeValue(sizeOptions.animation.count)
            };
            if (sizeAnimation.enable) {
              this.size.status = "increasing";
              this.size.decay = 1 - _getRangeValue(sizeAnimation.decay);
              switch (sizeAnimation.startValue) {
                case "min":
                  this.size.value = this.size.min;
                  this.size.status = "increasing";
                  break;
                case "random":
                  this.size.value = _randomInRange(this.size);
                  this.size.status = _getRandom() >= 0.5 ? "increasing" : "decreasing";
                  break;
                case "max":
                default:
                  this.size.value = this.size.max;
                  this.size.status = "decreasing";
                  break;
              }
            }
            this.size.initialValue = this.size.value;
            this.bubble = {
              inRange: false
            };
            this.slow = {
              inRange: false,
              factor: 1
            };
            this.position = this._calcPosition(container, position, _clamp(zIndexValue, 0, container.zLayers));
            this.initialPosition = this.position.copy();
            var canvasSize = container.canvas.size,
              moveCenter = Object.assign({}, this.options.move.center),
              isCenterPercent = moveCenter.mode === "percent";
            this.moveCenter = {
              x: moveCenter.x * (isCenterPercent ? canvasSize.width / 100 : 1),
              y: moveCenter.y * (isCenterPercent ? canvasSize.height / 100 : 1),
              radius: (_f = this.options.move.center.radius) !== null && _f !== void 0 ? _f : 0,
              mode: (_g = this.options.move.center.mode) !== null && _g !== void 0 ? _g : "percent"
            };
            this.direction = _getParticleDirectionAngle(this.options.move.direction, this.position, this.moveCenter);
            switch (this.options.move.direction) {
              case "inside":
                this.outType = "inside";
                break;
              case "outside":
                this.outType = "outside";
                break;
            }
            this.initialVelocity = this._calculateVelocity();
            this.velocity = this.initialVelocity.copy();
            this.moveDecay = 1 - _getRangeValue(this.options.move.decay);
            this.offset = _Vector.origin;
            var particles = container.particles;
            particles.needsSort = particles.needsSort || particles.lastZIndex < this.position.z;
            particles.lastZIndex = this.position.z;
            this.zIndexFactor = this.position.z / container.zLayers;
            this.sides = 24;
            var drawer = container.drawers.get(this.shape);
            if (!drawer) {
              drawer = this._engine.plugins.getShapeDrawer(this.shape);
              if (drawer) {
                container.drawers.set(this.shape, drawer);
              }
            }
            if (drawer === null || drawer === void 0 ? void 0 : drawer.loadShape) {
              drawer === null || drawer === void 0 ? void 0 : drawer.loadShape(this);
            }
            var sideCountFunc = drawer === null || drawer === void 0 ? void 0 : drawer.getSidesCount;
            if (sideCountFunc) {
              this.sides = sideCountFunc(this);
            }
            this.spawning = false;
            this.shadowColor = _rangeColorToRgb(this.options.shadow.color);
            var _iterator28 = _createForOfIteratorHelper(container.particles.updaters),
              _step28;
            try {
              for (_iterator28.s(); !(_step28 = _iterator28.n()).done;) {
                var updater = _step28.value;
                updater.init(this);
              }
            } catch (err) {
              _iterator28.e(err);
            } finally {
              _iterator28.f();
            }
            var _iterator29 = _createForOfIteratorHelper(container.particles.movers),
              _step29;
            try {
              for (_iterator29.s(); !(_step29 = _iterator29.n()).done;) {
                var mover = _step29.value;
                (_h = mover.init) === null || _h === void 0 ? void 0 : _h.call(mover, this);
              }
            } catch (err) {
              _iterator29.e(err);
            } finally {
              _iterator29.f();
            }
            if (drawer === null || drawer === void 0 ? void 0 : drawer.particleInit) {
              drawer.particleInit(container, this);
            }
            var _iterator30 = _createForOfIteratorHelper(container.plugins),
              _step30;
            try {
              for (_iterator30.s(); !(_step30 = _iterator30.n()).done;) {
                var _step30$value = _slicedToArray(_step30.value, 2),
                  plugin = _step30$value[1];
                (_j = plugin.particleCreated) === null || _j === void 0 ? void 0 : _j.call(plugin, this);
              }
            } catch (err) {
              _iterator30.e(err);
            } finally {
              _iterator30.f();
            }
          }
        }, {
          key: "isInsideCanvas",
          value: function isInsideCanvas() {
            var radius = this.getRadius(),
              canvasSize = this.container.canvas.size;
            return this.position.x >= -radius && this.position.y >= -radius && this.position.y <= canvasSize.height + radius && this.position.x <= canvasSize.width + radius;
          }
        }, {
          key: "isVisible",
          value: function isVisible() {
            return !this.destroyed && !this.spawning && this.isInsideCanvas();
          }
        }, {
          key: "reset",
          value: function reset() {
            var _a;
            var _iterator31 = _createForOfIteratorHelper(this.container.particles.updaters),
              _step31;
            try {
              for (_iterator31.s(); !(_step31 = _iterator31.n()).done;) {
                var updater = _step31.value;
                (_a = updater.reset) === null || _a === void 0 ? void 0 : _a.call(updater, this);
              }
            } catch (err) {
              _iterator31.e(err);
            } finally {
              _iterator31.f();
            }
          }
        }, {
          key: "_calcPosition",
          value: function _calcPosition(container, position, zIndex) {
            var tryCount = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0;
            var _a, _b, _c, _d;
            var _iterator32 = _createForOfIteratorHelper(container.plugins),
              _step32;
            try {
              for (_iterator32.s(); !(_step32 = _iterator32.n()).done;) {
                var _step32$value = _slicedToArray(_step32.value, 2),
                  plugin = _step32$value[1];
                var pluginPos = plugin.particlePosition !== undefined ? plugin.particlePosition(position, this) : undefined;
                if (pluginPos !== undefined) {
                  return _Vector3d.create(pluginPos.x, pluginPos.y, zIndex);
                }
              }
            } catch (err) {
              _iterator32.e(err);
            } finally {
              _iterator32.f();
            }
            var canvasSize = container.canvas.size,
              exactPosition = _calcExactPositionOrRandomFromSize({
                size: canvasSize,
                position: position
              }),
              pos = _Vector3d.create(exactPosition.x, exactPosition.y, zIndex),
              radius = this.getRadius(),
              outModes = this.options.move.outModes,
              fixHorizontal = function fixHorizontal(outMode) {
                fixOutMode({
                  outMode: outMode,
                  checkModes: ["bounce", "bounce-horizontal"],
                  coord: pos.x,
                  maxCoord: container.canvas.size.width,
                  setCb: function setCb(value) {
                    return pos.x += value;
                  },
                  radius: radius
                });
              },
              fixVertical = function fixVertical(outMode) {
                fixOutMode({
                  outMode: outMode,
                  checkModes: ["bounce", "bounce-vertical"],
                  coord: pos.y,
                  maxCoord: container.canvas.size.height,
                  setCb: function setCb(value) {
                    return pos.y += value;
                  },
                  radius: radius
                });
              };
            fixHorizontal((_a = outModes.left) !== null && _a !== void 0 ? _a : outModes["default"]);
            fixHorizontal((_b = outModes.right) !== null && _b !== void 0 ? _b : outModes["default"]);
            fixVertical((_c = outModes.top) !== null && _c !== void 0 ? _c : outModes["default"]);
            fixVertical((_d = outModes.bottom) !== null && _d !== void 0 ? _d : outModes["default"]);
            if (this._checkOverlap(pos, tryCount)) {
              return this._calcPosition(container, undefined, zIndex, tryCount + 1);
            }
            return pos;
          }
        }, {
          key: "_calculateVelocity",
          value: function _calculateVelocity() {
            var baseVelocity = _getParticleBaseVelocity(this.direction),
              res = baseVelocity.copy(),
              moveOptions = this.options.move;
            if (moveOptions.direction === "inside" || moveOptions.direction === "outside") {
              return res;
            }
            var rad = Math.PI / 180 * _getRangeValue(moveOptions.angle.value),
              radOffset = Math.PI / 180 * _getRangeValue(moveOptions.angle.offset),
              range = {
                left: radOffset - rad / 2,
                right: radOffset + rad / 2
              };
            if (!moveOptions.straight) {
              res.angle += _randomInRange(_setRangeValue(range.left, range.right));
            }
            if (moveOptions.random && typeof moveOptions.speed === "number") {
              res.length *= _getRandom();
            }
            return res;
          }
        }, {
          key: "_checkOverlap",
          value: function _checkOverlap(pos) {
            var tryCount = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
            var collisionsOptions = this.options.collisions,
              radius = this.getRadius();
            if (!collisionsOptions.enable) {
              return false;
            }
            var overlapOptions = collisionsOptions.overlap;
            if (overlapOptions.enable) {
              return false;
            }
            var retries = overlapOptions.retries;
            if (retries >= 0 && tryCount > retries) {
              throw new Error("Particle is overlapping and can't be placed");
            }
            var overlaps = false;
            var _iterator33 = _createForOfIteratorHelper(this.container.particles.array),
              _step33;
            try {
              for (_iterator33.s(); !(_step33 = _iterator33.n()).done;) {
                var particle = _step33.value;
                if (_getDistance(pos, particle.position) < radius + particle.getRadius()) {
                  overlaps = true;
                  break;
                }
              }
            } catch (err) {
              _iterator33.e(err);
            } finally {
              _iterator33.f();
            }
            return overlaps;
          }
        }, {
          key: "_getRollColor",
          value: function _getRollColor(color) {
            var _a;
            if (!color || !this.roll || !this.backColor && !this.roll.alter) {
              return color;
            }
            var backFactor = this.roll.horizontal && this.roll.vertical ? 2 : 1,
              backSum = this.roll.horizontal ? Math.PI / 2 : 0,
              rolled = Math.floor((((_a = this.roll.angle) !== null && _a !== void 0 ? _a : 0) + backSum) / (Math.PI / backFactor)) % 2;
            if (!rolled) {
              return color;
            }
            if (this.backColor) {
              return this.backColor;
            }
            if (this.roll.alter) {
              return _alterHsl(color, this.roll.alter.type, this.roll.alter.value);
            }
            return color;
          }
        }, {
          key: "_loadShapeData",
          value: function _loadShapeData(shapeOptions, reduceDuplicates) {
            var shapeData = shapeOptions.options[this.shape];
            if (shapeData) {
              return _deepExtend({}, _itemFromSingleOrMultiple(shapeData, this.id, reduceDuplicates));
            }
          }
        }]);
        return Particle;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Point.js
      var _Point = /*#__PURE__*/_createClass(function _Point(position, particle) {
        _classCallCheck(this, _Point);
        this.position = position;
        this.particle = particle;
      });
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Range.js
      var _Range = /*#__PURE__*/_createClass(function _Range(x, y) {
        _classCallCheck(this, _Range);
        this.position = {
          x: x,
          y: y
        };
      });
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Circle.js
      var _Circle = /*#__PURE__*/function (_Range2) {
        _inherits(_Circle, _Range2);
        var _super9 = _createSuper(_Circle);
        function _Circle(x, y, radius) {
          var _this21;
          _classCallCheck(this, _Circle);
          _this21 = _super9.call(this, x, y);
          _this21.radius = radius;
          return _this21;
        }
        _createClass(_Circle, [{
          key: "contains",
          value: function contains(point) {
            return _getDistance(point, this.position) <= this.radius;
          }
        }, {
          key: "intersects",
          value: function intersects(range) {
            var rect = range,
              circle = range,
              pos1 = this.position,
              pos2 = range.position,
              distPos = {
                x: Math.abs(pos2.x - pos1.x),
                y: Math.abs(pos2.y - pos1.y)
              },
              r = this.radius;
            if (circle.radius !== undefined) {
              var rSum = r + circle.radius,
                dist = Math.sqrt(Math.pow(distPos.x, 2) + Math.pow(distPos.y, 2));
              return rSum > dist;
            } else if (rect.size !== undefined) {
              var w = rect.size.width,
                h = rect.size.height,
                edges = Math.pow(distPos.x - w, 2) + Math.pow(distPos.y - h, 2);
              return edges <= Math.pow(r, 2) || distPos.x <= r + w && distPos.y <= r + h || distPos.x <= w || distPos.y <= h;
            }
            return false;
          }
        }]);
        return _Circle;
      }(_Range);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Rectangle.js
      var _Rectangle = /*#__PURE__*/function (_Range3) {
        _inherits(_Rectangle, _Range3);
        var _super10 = _createSuper(_Rectangle);
        function _Rectangle(x, y, width, height) {
          var _this22;
          _classCallCheck(this, _Rectangle);
          _this22 = _super10.call(this, x, y);
          _this22.size = {
            height: height,
            width: width
          };
          return _this22;
        }
        _createClass(_Rectangle, [{
          key: "contains",
          value: function contains(point) {
            var w = this.size.width,
              h = this.size.height,
              pos = this.position;
            return point.x >= pos.x && point.x <= pos.x + w && point.y >= pos.y && point.y <= pos.y + h;
          }
        }, {
          key: "intersects",
          value: function intersects(range) {
            if (range instanceof _Circle) {
              range.intersects(this);
            }
            var w = this.size.width,
              h = this.size.height,
              pos1 = this.position,
              pos2 = range.position,
              size2 = range instanceof _Rectangle ? range.size : {
                width: 0,
                height: 0
              },
              w2 = size2.width,
              h2 = size2.height;
            return pos2.x < pos1.x + w && pos2.x + w2 > pos1.x && pos2.y < pos1.y + h && pos2.y + h2 > pos1.y;
          }
        }]);
        return _Rectangle;
      }(_Range);
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/QuadTree.js
      var QuadTree = /*#__PURE__*/function () {
        function QuadTree(rectangle, capacity) {
          _classCallCheck(this, QuadTree);
          this.rectangle = rectangle;
          this.capacity = capacity;
          this._points = [];
          this._divided = false;
        }
        _createClass(QuadTree, [{
          key: "insert",
          value: function insert(point) {
            var _a, _b, _c, _d, _e;
            if (!this.rectangle.contains(point.position)) {
              return false;
            }
            if (this._points.length < this.capacity) {
              this._points.push(point);
              return true;
            }
            if (!this._divided) {
              this.subdivide();
            }
            return (_e = ((_a = this._NE) === null || _a === void 0 ? void 0 : _a.insert(point)) || ((_b = this._NW) === null || _b === void 0 ? void 0 : _b.insert(point)) || ((_c = this._SE) === null || _c === void 0 ? void 0 : _c.insert(point)) || ((_d = this._SW) === null || _d === void 0 ? void 0 : _d.insert(point))) !== null && _e !== void 0 ? _e : false;
          }
        }, {
          key: "query",
          value: function query(range, check, found) {
            var _a, _b, _c, _d;
            var res = found !== null && found !== void 0 ? found : [];
            if (!range.intersects(this.rectangle)) {
              return [];
            }
            var _iterator34 = _createForOfIteratorHelper(this._points),
              _step34;
            try {
              for (_iterator34.s(); !(_step34 = _iterator34.n()).done;) {
                var p = _step34.value;
                if (!range.contains(p.position) && _getDistance(range.position, p.position) > p.particle.getRadius() && (!check || check(p.particle))) {
                  continue;
                }
                res.push(p.particle);
              }
            } catch (err) {
              _iterator34.e(err);
            } finally {
              _iterator34.f();
            }
            if (this._divided) {
              (_a = this._NE) === null || _a === void 0 ? void 0 : _a.query(range, check, res);
              (_b = this._NW) === null || _b === void 0 ? void 0 : _b.query(range, check, res);
              (_c = this._SE) === null || _c === void 0 ? void 0 : _c.query(range, check, res);
              (_d = this._SW) === null || _d === void 0 ? void 0 : _d.query(range, check, res);
            }
            return res;
          }
        }, {
          key: "queryCircle",
          value: function queryCircle(position, radius, check) {
            return this.query(new _Circle(position.x, position.y, radius), check);
          }
        }, {
          key: "queryRectangle",
          value: function queryRectangle(position, size, check) {
            return this.query(new _Rectangle(position.x, position.y, size.width, size.height), check);
          }
        }, {
          key: "subdivide",
          value: function subdivide() {
            var x = this.rectangle.position.x,
              y = this.rectangle.position.y,
              w = this.rectangle.size.width,
              h = this.rectangle.size.height,
              capacity = this.capacity;
            this._NE = new QuadTree(new _Rectangle(x, y, w / 2, h / 2), capacity);
            this._NW = new QuadTree(new _Rectangle(x + w / 2, y, w / 2, h / 2), capacity);
            this._SE = new QuadTree(new _Rectangle(x, y + h / 2, w / 2, h / 2), capacity);
            this._SW = new QuadTree(new _Rectangle(x + w / 2, y + h / 2, w / 2, h / 2), capacity);
            this._divided = true;
          }
        }]);
        return QuadTree;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Particles.js
      var Particles = /*#__PURE__*/function () {
        function Particles(engine, container) {
          _classCallCheck(this, Particles);
          this.container = container;
          this._engine = engine;
          this.nextId = 0;
          this.array = [];
          this.zArray = [];
          this.pool = [];
          this.limit = 0;
          this.needsSort = false;
          this.lastZIndex = 0;
          this.interactionManager = new InteractionManager(this._engine, container);
          var canvasSize = this.container.canvas.size;
          this.quadTree = new QuadTree(new _Rectangle(-canvasSize.width / 4, -canvasSize.height / 4, canvasSize.width * 3 / 2, canvasSize.height * 3 / 2), 4);
          this.movers = this._engine.plugins.getMovers(container, true);
          this.updaters = this._engine.plugins.getUpdaters(container, true);
        }
        _createClass(Particles, [{
          key: "count",
          get: function get() {
            return this.array.length;
          }
        }, {
          key: "addManualParticles",
          value: function addManualParticles() {
            var container = this.container,
              options = container.actualOptions;
            var _iterator35 = _createForOfIteratorHelper(options.manualParticles),
              _step35;
            try {
              for (_iterator35.s(); !(_step35 = _iterator35.n()).done;) {
                var particle = _step35.value;
                this.addParticle(_calcPositionFromSize({
                  size: container.canvas.size,
                  position: particle.position
                }), particle.options);
              }
            } catch (err) {
              _iterator35.e(err);
            } finally {
              _iterator35.f();
            }
          }
        }, {
          key: "addParticle",
          value: function addParticle(position, overrideOptions, group, initializer) {
            var container = this.container,
              options = container.actualOptions,
              limit = options.particles.number.limit;
            if (limit > 0) {
              var countToRemove = this.count + 1 - limit;
              if (countToRemove > 0) {
                this.removeQuantity(countToRemove);
              }
            }
            return this._pushParticle(position, overrideOptions, group, initializer);
          }
        }, {
          key: "clear",
          value: function clear() {
            this.array = [];
            this.zArray = [];
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.array = [];
            this.zArray = [];
            this.movers = [];
            this.updaters = [];
          }
        }, {
          key: "draw",
          value: function () {
            var _draw = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9(delta) {
              var container, canvasSize, _iterator36, _step36, _step36$value, plugin, _iterator37, _step37, p;
              return _regeneratorRuntime().wrap(function _callee9$(_context9) {
                while (1) switch (_context9.prev = _context9.next) {
                  case 0:
                    container = this.container, canvasSize = this.container.canvas.size;
                    this.quadTree = new QuadTree(new _Rectangle(-canvasSize.width / 4, -canvasSize.height / 4, canvasSize.width * 3 / 2, canvasSize.height * 3 / 2), 4);
                    container.canvas.clear();
                    _context9.next = 5;
                    return this.update(delta);
                  case 5:
                    if (this.needsSort) {
                      this.zArray.sort(function (a, b) {
                        return b.position.z - a.position.z || a.id - b.id;
                      });
                      this.lastZIndex = this.zArray[this.zArray.length - 1].position.z;
                      this.needsSort = false;
                    }
                    _iterator36 = _createForOfIteratorHelper(container.plugins);
                    try {
                      for (_iterator36.s(); !(_step36 = _iterator36.n()).done;) {
                        _step36$value = _slicedToArray(_step36.value, 2), plugin = _step36$value[1];
                        container.canvas.drawPlugin(plugin, delta);
                      }
                    } catch (err) {
                      _iterator36.e(err);
                    } finally {
                      _iterator36.f();
                    }
                    _iterator37 = _createForOfIteratorHelper(this.zArray);
                    try {
                      for (_iterator37.s(); !(_step37 = _iterator37.n()).done;) {
                        p = _step37.value;
                        p.draw(delta);
                      }
                    } catch (err) {
                      _iterator37.e(err);
                    } finally {
                      _iterator37.f();
                    }
                  case 10:
                  case "end":
                    return _context9.stop();
                }
              }, _callee9, this);
            }));
            function draw(_x8) {
              return _draw.apply(this, arguments);
            }
            return draw;
          }()
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            this.interactionManager.handleClickMode(mode);
          }
        }, {
          key: "init",
          value: function init() {
            var _a;
            var container = this.container,
              options = container.actualOptions;
            this.lastZIndex = 0;
            this.needsSort = false;
            var handled = false;
            this.updaters = this._engine.plugins.getUpdaters(container, true);
            this.interactionManager.init();
            var _iterator38 = _createForOfIteratorHelper(container.plugins),
              _step38;
            try {
              for (_iterator38.s(); !(_step38 = _iterator38.n()).done;) {
                var _step38$value = _slicedToArray(_step38.value, 2),
                  plugin = _step38$value[1];
                if (plugin.particlesInitialization !== undefined) {
                  handled = plugin.particlesInitialization();
                }
                if (handled) {
                  break;
                }
              }
            } catch (err) {
              _iterator38.e(err);
            } finally {
              _iterator38.f();
            }
            this.interactionManager.init();
            var _iterator39 = _createForOfIteratorHelper(container.pathGenerators),
              _step39;
            try {
              for (_iterator39.s(); !(_step39 = _iterator39.n()).done;) {
                var _step39$value = _slicedToArray(_step39.value, 2),
                  pathGenerator = _step39$value[1];
                pathGenerator.init(container);
              }
            } catch (err) {
              _iterator39.e(err);
            } finally {
              _iterator39.f();
            }
            this.addManualParticles();
            if (!handled) {
              for (var group in options.particles.groups) {
                var groupOptions = options.particles.groups[group];
                for (var i = this.count, j = 0; j < ((_a = groupOptions.number) === null || _a === void 0 ? void 0 : _a.value) && i < options.particles.number.value; i++, j++) {
                  this.addParticle(undefined, groupOptions, group);
                }
              }
              for (var _i3 = this.count; _i3 < options.particles.number.value; _i3++) {
                this.addParticle();
              }
            }
          }
        }, {
          key: "push",
          value: function push(nb, mouse, overrideOptions, group) {
            this.pushing = true;
            for (var i = 0; i < nb; i++) {
              this.addParticle(mouse === null || mouse === void 0 ? void 0 : mouse.position, overrideOptions, group);
            }
            this.pushing = false;
          }
        }, {
          key: "redraw",
          value: function () {
            var _redraw = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee10() {
              return _regeneratorRuntime().wrap(function _callee10$(_context10) {
                while (1) switch (_context10.prev = _context10.next) {
                  case 0:
                    this.clear();
                    this.init();
                    _context10.next = 4;
                    return this.draw({
                      value: 0,
                      factor: 0
                    });
                  case 4:
                  case "end":
                    return _context10.stop();
                }
              }, _callee10, this);
            }));
            function redraw() {
              return _redraw.apply(this, arguments);
            }
            return redraw;
          }()
        }, {
          key: "remove",
          value: function remove(particle, group, override) {
            this.removeAt(this.array.indexOf(particle), undefined, group, override);
          }
        }, {
          key: "removeAt",
          value: function removeAt(index) {
            var quantity = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
            var group = arguments.length > 2 ? arguments[2] : undefined;
            var override = arguments.length > 3 ? arguments[3] : undefined;
            if (index < 0 || index > this.count) {
              return;
            }
            var deleted = 0;
            for (var i = index; deleted < quantity && i < this.count; i++) {
              var particle = this.array[i];
              if (!particle || particle.group !== group) {
                continue;
              }
              particle.destroy(override);
              this.array.splice(i--, 1);
              var zIdx = this.zArray.indexOf(particle);
              this.zArray.splice(zIdx, 1);
              this.pool.push(particle);
              deleted++;
              this._engine.dispatchEvent("particleRemoved", {
                container: this.container,
                data: {
                  particle: particle
                }
              });
            }
          }
        }, {
          key: "removeQuantity",
          value: function removeQuantity(quantity, group) {
            this.removeAt(0, quantity, group);
          }
        }, {
          key: "setDensity",
          value: function setDensity() {
            var options = this.container.actualOptions;
            for (var group in options.particles.groups) {
              this._applyDensity(options.particles.groups[group], 0, group);
            }
            this._applyDensity(options.particles, options.manualParticles.length);
          }
        }, {
          key: "update",
          value: function () {
            var _update = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee11(delta) {
              var _a, _b, container, particlesToDelete, _iterator40, _step40, _step40$value, pathGenerator, _iterator41, _step41, _step41$value, plugin, _iterator42, _step42, _particle, resizeFactor, _iterator44, _step44, _step44$value, _plugin, _iterator45, _step45, mover, _i4, _particlesToDelete, particle, _iterator43, _step43, _particle2, _iterator46, _step46, updater;
              return _regeneratorRuntime().wrap(function _callee11$(_context11) {
                while (1) switch (_context11.prev = _context11.next) {
                  case 0:
                    container = this.container, particlesToDelete = [];
                    _iterator40 = _createForOfIteratorHelper(container.pathGenerators);
                    try {
                      for (_iterator40.s(); !(_step40 = _iterator40.n()).done;) {
                        _step40$value = _slicedToArray(_step40.value, 2), pathGenerator = _step40$value[1];
                        pathGenerator.update();
                      }
                    } catch (err) {
                      _iterator40.e(err);
                    } finally {
                      _iterator40.f();
                    }
                    _iterator41 = _createForOfIteratorHelper(container.plugins);
                    try {
                      for (_iterator41.s(); !(_step41 = _iterator41.n()).done;) {
                        _step41$value = _slicedToArray(_step41.value, 2), plugin = _step41$value[1];
                        (_a = plugin.update) === null || _a === void 0 ? void 0 : _a.call(plugin, delta);
                      }
                    } catch (err) {
                      _iterator41.e(err);
                    } finally {
                      _iterator41.f();
                    }
                    _iterator42 = _createForOfIteratorHelper(this.array);
                    _context11.prev = 6;
                    _iterator42.s();
                  case 8:
                    if ((_step42 = _iterator42.n()).done) {
                      _context11.next = 41;
                      break;
                    }
                    _particle = _step42.value;
                    resizeFactor = container.canvas.resizeFactor;
                    if (resizeFactor && !_particle.ignoresResizeRatio) {
                      _particle.position.x *= resizeFactor.width;
                      _particle.position.y *= resizeFactor.height;
                      _particle.initialPosition.x *= resizeFactor.width;
                      _particle.initialPosition.y *= resizeFactor.height;
                    }
                    _particle.ignoresResizeRatio = false;
                    _context11.next = 15;
                    return this.interactionManager.reset(_particle);
                  case 15:
                    _iterator44 = _createForOfIteratorHelper(this.container.plugins);
                    _context11.prev = 16;
                    _iterator44.s();
                  case 18:
                    if ((_step44 = _iterator44.n()).done) {
                      _context11.next = 25;
                      break;
                    }
                    _step44$value = _slicedToArray(_step44.value, 2), _plugin = _step44$value[1];
                    if (!_particle.destroyed) {
                      _context11.next = 22;
                      break;
                    }
                    return _context11.abrupt("break", 25);
                  case 22:
                    (_b = _plugin.particleUpdate) === null || _b === void 0 ? void 0 : _b.call(_plugin, _particle, delta);
                  case 23:
                    _context11.next = 18;
                    break;
                  case 25:
                    _context11.next = 30;
                    break;
                  case 27:
                    _context11.prev = 27;
                    _context11.t0 = _context11["catch"](16);
                    _iterator44.e(_context11.t0);
                  case 30:
                    _context11.prev = 30;
                    _iterator44.f();
                    return _context11.finish(30);
                  case 33:
                    _iterator45 = _createForOfIteratorHelper(this.movers);
                    try {
                      for (_iterator45.s(); !(_step45 = _iterator45.n()).done;) {
                        mover = _step45.value;
                        if (mover.isEnabled(_particle)) {
                          mover.move(_particle, delta);
                        }
                      }
                    } catch (err) {
                      _iterator45.e(err);
                    } finally {
                      _iterator45.f();
                    }
                    if (!_particle.destroyed) {
                      _context11.next = 38;
                      break;
                    }
                    particlesToDelete.push(_particle);
                    return _context11.abrupt("continue", 39);
                  case 38:
                    this.quadTree.insert(new _Point(_particle.getPosition(), _particle));
                  case 39:
                    _context11.next = 8;
                    break;
                  case 41:
                    _context11.next = 46;
                    break;
                  case 43:
                    _context11.prev = 43;
                    _context11.t1 = _context11["catch"](6);
                    _iterator42.e(_context11.t1);
                  case 46:
                    _context11.prev = 46;
                    _iterator42.f();
                    return _context11.finish(46);
                  case 49:
                    for (_i4 = 0, _particlesToDelete = particlesToDelete; _i4 < _particlesToDelete.length; _i4++) {
                      particle = _particlesToDelete[_i4];
                      this.remove(particle);
                    }
                    _context11.next = 52;
                    return this.interactionManager.externalInteract(delta);
                  case 52:
                    _iterator43 = _createForOfIteratorHelper(this.array);
                    _context11.prev = 53;
                    _iterator43.s();
                  case 55:
                    if ((_step43 = _iterator43.n()).done) {
                      _context11.next = 64;
                      break;
                    }
                    _particle2 = _step43.value;
                    _iterator46 = _createForOfIteratorHelper(this.updaters);
                    try {
                      for (_iterator46.s(); !(_step46 = _iterator46.n()).done;) {
                        updater = _step46.value;
                        updater.update(_particle2, delta);
                      }
                    } catch (err) {
                      _iterator46.e(err);
                    } finally {
                      _iterator46.f();
                    }
                    if (!(!_particle2.destroyed && !_particle2.spawning)) {
                      _context11.next = 62;
                      break;
                    }
                    _context11.next = 62;
                    return this.interactionManager.particlesInteract(_particle2, delta);
                  case 62:
                    _context11.next = 55;
                    break;
                  case 64:
                    _context11.next = 69;
                    break;
                  case 66:
                    _context11.prev = 66;
                    _context11.t2 = _context11["catch"](53);
                    _iterator43.e(_context11.t2);
                  case 69:
                    _context11.prev = 69;
                    _iterator43.f();
                    return _context11.finish(69);
                  case 72:
                    delete container.canvas.resizeFactor;
                  case 73:
                  case "end":
                    return _context11.stop();
                }
              }, _callee11, this, [[6, 43, 46, 49], [16, 27, 30, 33], [53, 66, 69, 72]]);
            }));
            function update(_x9) {
              return _update.apply(this, arguments);
            }
            return update;
          }()
        }, {
          key: "_applyDensity",
          value: function _applyDensity(options, manualCount, group) {
            var _a;
            if (!((_a = options.number.density) === null || _a === void 0 ? void 0 : _a.enable)) {
              return;
            }
            var numberOptions = options.number,
              densityFactor = this._initDensityFactor(numberOptions.density),
              optParticlesNumber = numberOptions.value,
              optParticlesLimit = numberOptions.limit > 0 ? numberOptions.limit : optParticlesNumber,
              particlesNumber = Math.min(optParticlesNumber, optParticlesLimit) * densityFactor + manualCount,
              particlesCount = Math.min(this.count, this.array.filter(function (t) {
                return t.group === group;
              }).length);
            this.limit = numberOptions.limit * densityFactor;
            if (particlesCount < particlesNumber) {
              this.push(Math.abs(particlesNumber - particlesCount), undefined, options, group);
            } else if (particlesCount > particlesNumber) {
              this.removeQuantity(particlesCount - particlesNumber, group);
            }
          }
        }, {
          key: "_initDensityFactor",
          value: function _initDensityFactor(densityOptions) {
            var container = this.container;
            if (!container.canvas.element || !densityOptions.enable) {
              return 1;
            }
            var canvas = container.canvas.element,
              pxRatio = container.retina.pixelRatio;
            return canvas.width * canvas.height / (densityOptions.factor * Math.pow(pxRatio, 2) * densityOptions.area);
          }
        }, {
          key: "_pushParticle",
          value: function _pushParticle(position, overrideOptions, group, initializer) {
            try {
              var particle = this.pool.pop();
              if (particle) {
                particle.init(this.nextId, position, overrideOptions, group);
              } else {
                particle = new Particle(this._engine, this.nextId, this.container, position, overrideOptions, group);
              }
              var canAdd = true;
              if (initializer) {
                canAdd = initializer(particle);
              }
              if (!canAdd) {
                return;
              }
              this.array.push(particle);
              this.zArray.push(particle);
              this.nextId++;
              this._engine.dispatchEvent("particleAdded", {
                container: this.container,
                data: {
                  particle: particle
                }
              });
              return particle;
            } catch (e) {
              console.warn("error adding particle: ".concat(e));
              return;
            }
          }
        }]);
        return Particles;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Retina.js
      var Retina = /*#__PURE__*/function () {
        function Retina(container) {
          _classCallCheck(this, Retina);
          this.container = container;
        }
        _createClass(Retina, [{
          key: "init",
          value: function init() {
            var container = this.container,
              options = container.actualOptions;
            this.pixelRatio = !options.detectRetina || _isSsr() ? 1 : window.devicePixelRatio;
            this.reduceFactor = 1;
            var ratio = this.pixelRatio;
            if (container.canvas.element) {
              var element = container.canvas.element;
              container.canvas.size.width = element.offsetWidth * ratio;
              container.canvas.size.height = element.offsetHeight * ratio;
            }
            var particles = options.particles;
            this.attractDistance = _getRangeValue(particles.move.attract.distance) * ratio;
            this.sizeAnimationSpeed = _getRangeValue(particles.size.animation.speed) * ratio;
            this.maxSpeed = _getRangeValue(particles.move.gravity.maxSpeed) * ratio;
          }
        }, {
          key: "initParticle",
          value: function initParticle(particle) {
            var options = particle.options,
              ratio = this.pixelRatio,
              moveDistance = options.move.distance,
              props = particle.retina;
            props.attractDistance = _getRangeValue(options.move.attract.distance) * ratio;
            props.moveDrift = _getRangeValue(options.move.drift) * ratio;
            props.moveSpeed = _getRangeValue(options.move.speed) * ratio;
            props.sizeAnimationSpeed = _getRangeValue(options.size.animation.speed) * ratio;
            var maxDistance = props.maxDistance;
            maxDistance.horizontal = moveDistance.horizontal !== undefined ? moveDistance.horizontal * ratio : undefined;
            maxDistance.vertical = moveDistance.vertical !== undefined ? moveDistance.vertical * ratio : undefined;
            props.maxSpeed = _getRangeValue(options.move.gravity.maxSpeed) * ratio;
          }
        }]);
        return Retina;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Container.js

      function guardCheck(container) {
        return container && !container.destroyed;
      }
      function loadContainerOptions(engine, container) {
        var options = new _Options(engine, container);
        for (var _len4 = arguments.length, sourceOptionsArr = new Array(_len4 > 2 ? _len4 - 2 : 0), _key4 = 2; _key4 < _len4; _key4++) {
          sourceOptionsArr[_key4 - 2] = arguments[_key4];
        }
        _loadOptions.apply(void 0, [options].concat(sourceOptionsArr));
        return options;
      }
      var defaultPathGeneratorKey = "default",
        defaultPathGenerator = {
          generate: function generate(p) {
            var v = p.velocity.copy();
            v.angle += v.length * Math.PI / 180;
            return v;
          },
          init: function init() {},
          update: function update() {},
          reset: function reset() {}
        };
      var Container = /*#__PURE__*/function () {
        function Container(engine, id, sourceOptions) {
          var _this23 = this;
          _classCallCheck(this, Container);
          this.id = id;
          this._engine = engine;
          this.fpsLimit = 120;
          this.smooth = false;
          this._delay = 0;
          this.duration = 0;
          this.lifeTime = 0;
          this._firstStart = true;
          this.started = false;
          this.destroyed = false;
          this._paused = true;
          this.lastFrameTime = 0;
          this.zLayers = 100;
          this.pageHidden = false;
          this._sourceOptions = sourceOptions;
          this._initialSourceOptions = sourceOptions;
          this.retina = new Retina(this);
          this.canvas = new Canvas(this);
          this.particles = new Particles(this._engine, this);
          this.frameManager = new FrameManager(this);
          this.pathGenerators = new Map();
          this.interactivity = {
            mouse: {
              clicking: false,
              inside: false
            }
          };
          this.plugins = new Map();
          this.drawers = new Map();
          this._options = loadContainerOptions(this._engine, this);
          this.actualOptions = loadContainerOptions(this._engine, this);
          this._eventListeners = new EventListeners(this);
          if (typeof IntersectionObserver !== "undefined" && IntersectionObserver) {
            this._intersectionObserver = new IntersectionObserver(function (entries) {
              return _this23._intersectionManager(entries);
            });
          }
          this._engine.dispatchEvent("containerBuilt", {
            container: this
          });
        }
        _createClass(Container, [{
          key: "options",
          get: function get() {
            return this._options;
          }
        }, {
          key: "sourceOptions",
          get: function get() {
            return this._sourceOptions;
          }
        }, {
          key: "addClickHandler",
          value: function addClickHandler(callback) {
            var _this24 = this;
            if (!guardCheck(this)) {
              return;
            }
            var el = this.interactivity.element;
            if (!el) {
              return;
            }
            var clickOrTouchHandler = function clickOrTouchHandler(e, pos, radius) {
              if (!guardCheck(_this24)) {
                return;
              }
              var pxRatio = _this24.retina.pixelRatio,
                posRetina = {
                  x: pos.x * pxRatio,
                  y: pos.y * pxRatio
                },
                particles = _this24.particles.quadTree.queryCircle(posRetina, radius * pxRatio);
              callback(e, particles);
            };
            var clickHandler = function clickHandler(e) {
              if (!guardCheck(_this24)) {
                return;
              }
              var mouseEvent = e,
                pos = {
                  x: mouseEvent.offsetX || mouseEvent.clientX,
                  y: mouseEvent.offsetY || mouseEvent.clientY
                };
              clickOrTouchHandler(e, pos, 1);
            };
            var touchStartHandler = function touchStartHandler() {
              if (!guardCheck(_this24)) {
                return;
              }
              touched = true;
              touchMoved = false;
            };
            var touchMoveHandler = function touchMoveHandler() {
              if (!guardCheck(_this24)) {
                return;
              }
              touchMoved = true;
            };
            var touchEndHandler = function touchEndHandler(e) {
              if (!guardCheck(_this24)) {
                return;
              }
              if (touched && !touchMoved) {
                var touchEvent = e;
                var lastTouch = touchEvent.touches[touchEvent.touches.length - 1];
                if (!lastTouch) {
                  lastTouch = touchEvent.changedTouches[touchEvent.changedTouches.length - 1];
                  if (!lastTouch) {
                    return;
                  }
                }
                var element = _this24.canvas.element,
                  canvasRect = element ? element.getBoundingClientRect() : undefined,
                  pos = {
                    x: lastTouch.clientX - (canvasRect ? canvasRect.left : 0),
                    y: lastTouch.clientY - (canvasRect ? canvasRect.top : 0)
                  };
                clickOrTouchHandler(e, pos, Math.max(lastTouch.radiusX, lastTouch.radiusY));
              }
              touched = false;
              touchMoved = false;
            };
            var touchCancelHandler = function touchCancelHandler() {
              if (!guardCheck(_this24)) {
                return;
              }
              touched = false;
              touchMoved = false;
            };
            var touched = false,
              touchMoved = false;
            el.addEventListener("click", clickHandler);
            el.addEventListener("touchstart", touchStartHandler);
            el.addEventListener("touchmove", touchMoveHandler);
            el.addEventListener("touchend", touchEndHandler);
            el.addEventListener("touchcancel", touchCancelHandler);
          }
        }, {
          key: "addPath",
          value: function addPath(key, generator) {
            var override = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
            if (!guardCheck(this) || !override && this.pathGenerators.has(key)) {
              return false;
            }
            this.pathGenerators.set(key, generator !== null && generator !== void 0 ? generator : defaultPathGenerator);
            return true;
          }
        }, {
          key: "destroy",
          value: function destroy() {
            var _this25 = this;
            if (!guardCheck(this)) {
              return;
            }
            this.stop();
            this.particles.destroy();
            this.canvas.destroy();
            var _iterator47 = _createForOfIteratorHelper(this.drawers),
              _step47;
            try {
              for (_iterator47.s(); !(_step47 = _iterator47.n()).done;) {
                var _step47$value = _slicedToArray(_step47.value, 2),
                  drawer = _step47$value[1];
                if (drawer.destroy) {
                  drawer.destroy(this);
                }
              }
            } catch (err) {
              _iterator47.e(err);
            } finally {
              _iterator47.f();
            }
            var _iterator48 = _createForOfIteratorHelper(this.drawers.keys()),
              _step48;
            try {
              for (_iterator48.s(); !(_step48 = _iterator48.n()).done;) {
                var key = _step48.value;
                this.drawers["delete"](key);
              }
            } catch (err) {
              _iterator48.e(err);
            } finally {
              _iterator48.f();
            }
            this._engine.plugins.destroy(this);
            this.destroyed = true;
            var mainArr = this._engine.dom(),
              idx = mainArr.findIndex(function (t) {
                return t === _this25;
              });
            if (idx >= 0) {
              mainArr.splice(idx, 1);
            }
            this._engine.dispatchEvent("containerDestroyed", {
              container: this
            });
          }
        }, {
          key: "draw",
          value: function draw(force) {
            var _this26 = this;
            if (!guardCheck(this)) {
              return;
            }
            var refreshTime = force;
            this._drawAnimationFrame = _animate()( /*#__PURE__*/function () {
              var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee12(timestamp) {
                return _regeneratorRuntime().wrap(function _callee12$(_context12) {
                  while (1) switch (_context12.prev = _context12.next) {
                    case 0:
                      if (refreshTime) {
                        _this26.lastFrameTime = undefined;
                        refreshTime = false;
                      }
                      _context12.next = 3;
                      return _this26.frameManager.nextFrame(timestamp);
                    case 3:
                    case "end":
                      return _context12.stop();
                  }
                }, _callee12);
              }));
              return function (_x10) {
                return _ref4.apply(this, arguments);
              };
            }());
          }
        }, {
          key: "exportConfiguration",
          value: function exportConfiguration() {
            return JSON.stringify(this.actualOptions, function (key, value) {
              if (key === "_engine" || key === "_container") {
                return;
              }
              return value;
            }, 2);
          }
        }, {
          key: "exportImage",
          value: function exportImage(callback, type, quality) {
            var element = this.canvas.element;
            if (element) {
              element.toBlob(callback, type !== null && type !== void 0 ? type : "image/png", quality);
            }
          }
        }, {
          key: "exportImg",
          value: function exportImg(callback) {
            this.exportImage(callback);
          }
        }, {
          key: "getAnimationStatus",
          value: function getAnimationStatus() {
            return !this._paused && !this.pageHidden && guardCheck(this);
          }
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            if (!guardCheck(this)) {
              return;
            }
            this.particles.handleClickMode(mode);
            var _iterator49 = _createForOfIteratorHelper(this.plugins),
              _step49;
            try {
              for (_iterator49.s(); !(_step49 = _iterator49.n()).done;) {
                var _step49$value = _slicedToArray(_step49.value, 2),
                  plugin = _step49$value[1];
                if (plugin.handleClickMode) {
                  plugin.handleClickMode(mode);
                }
              }
            } catch (err) {
              _iterator49.e(err);
            } finally {
              _iterator49.f();
            }
          }
        }, {
          key: "init",
          value: function () {
            var _init2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee13() {
              var shapes, _iterator50, _step50, type, drawer, availablePlugins, _iterator51, _step51, _step51$value, id, plugin, _iterator52, _step52, _step52$value, _drawer, _iterator53, _step53, _step53$value, _plugin2, _iterator54, _step54, _step54$value, _plugin3;
              return _regeneratorRuntime().wrap(function _callee13$(_context13) {
                while (1) switch (_context13.prev = _context13.next) {
                  case 0:
                    if (guardCheck(this)) {
                      _context13.next = 2;
                      break;
                    }
                    return _context13.abrupt("return");
                  case 2:
                    shapes = this._engine.plugins.getSupportedShapes();
                    _iterator50 = _createForOfIteratorHelper(shapes);
                    try {
                      for (_iterator50.s(); !(_step50 = _iterator50.n()).done;) {
                        type = _step50.value;
                        drawer = this._engine.plugins.getShapeDrawer(type);
                        if (drawer) {
                          this.drawers.set(type, drawer);
                        }
                      }
                    } catch (err) {
                      _iterator50.e(err);
                    } finally {
                      _iterator50.f();
                    }
                    this._options = loadContainerOptions(this._engine, this, this._initialSourceOptions, this.sourceOptions);
                    this.actualOptions = loadContainerOptions(this._engine, this, this._options);
                    availablePlugins = this._engine.plugins.getAvailablePlugins(this);
                    _iterator51 = _createForOfIteratorHelper(availablePlugins);
                    try {
                      for (_iterator51.s(); !(_step51 = _iterator51.n()).done;) {
                        _step51$value = _slicedToArray(_step51.value, 2), id = _step51$value[0], plugin = _step51$value[1];
                        this.plugins.set(id, plugin);
                      }
                    } catch (err) {
                      _iterator51.e(err);
                    } finally {
                      _iterator51.f();
                    }
                    this.retina.init();
                    _context13.next = 13;
                    return this.canvas.init();
                  case 13:
                    this.updateActualOptions();
                    this.canvas.initBackground();
                    this.canvas.resize();
                    this.zLayers = this.actualOptions.zLayers;
                    this.duration = _getRangeValue(this.actualOptions.duration) * 1000;
                    this._delay = _getRangeValue(this.actualOptions.delay) * 1000;
                    this.lifeTime = 0;
                    this.fpsLimit = this.actualOptions.fpsLimit > 0 ? this.actualOptions.fpsLimit : 120;
                    this.smooth = this.actualOptions.smooth;
                    _iterator52 = _createForOfIteratorHelper(this.drawers);
                    _context13.prev = 23;
                    _iterator52.s();
                  case 25:
                    if ((_step52 = _iterator52.n()).done) {
                      _context13.next = 32;
                      break;
                    }
                    _step52$value = _slicedToArray(_step52.value, 2), _drawer = _step52$value[1];
                    if (!_drawer.init) {
                      _context13.next = 30;
                      break;
                    }
                    _context13.next = 30;
                    return _drawer.init(this);
                  case 30:
                    _context13.next = 25;
                    break;
                  case 32:
                    _context13.next = 37;
                    break;
                  case 34:
                    _context13.prev = 34;
                    _context13.t0 = _context13["catch"](23);
                    _iterator52.e(_context13.t0);
                  case 37:
                    _context13.prev = 37;
                    _iterator52.f();
                    return _context13.finish(37);
                  case 40:
                    _iterator53 = _createForOfIteratorHelper(this.plugins);
                    _context13.prev = 41;
                    _iterator53.s();
                  case 43:
                    if ((_step53 = _iterator53.n()).done) {
                      _context13.next = 50;
                      break;
                    }
                    _step53$value = _slicedToArray(_step53.value, 2), _plugin2 = _step53$value[1];
                    if (!_plugin2.init) {
                      _context13.next = 48;
                      break;
                    }
                    _context13.next = 48;
                    return _plugin2.init();
                  case 48:
                    _context13.next = 43;
                    break;
                  case 50:
                    _context13.next = 55;
                    break;
                  case 52:
                    _context13.prev = 52;
                    _context13.t1 = _context13["catch"](41);
                    _iterator53.e(_context13.t1);
                  case 55:
                    _context13.prev = 55;
                    _iterator53.f();
                    return _context13.finish(55);
                  case 58:
                    this._engine.dispatchEvent("containerInit", {
                      container: this
                    });
                    this.particles.init();
                    this.particles.setDensity();
                    _iterator54 = _createForOfIteratorHelper(this.plugins);
                    try {
                      for (_iterator54.s(); !(_step54 = _iterator54.n()).done;) {
                        _step54$value = _slicedToArray(_step54.value, 2), _plugin3 = _step54$value[1];
                        if (_plugin3.particlesSetup) {
                          _plugin3.particlesSetup();
                        }
                      }
                    } catch (err) {
                      _iterator54.e(err);
                    } finally {
                      _iterator54.f();
                    }
                    this._engine.dispatchEvent("particlesSetup", {
                      container: this
                    });
                  case 64:
                  case "end":
                    return _context13.stop();
                }
              }, _callee13, this, [[23, 34, 37, 40], [41, 52, 55, 58]]);
            }));
            function init() {
              return _init2.apply(this, arguments);
            }
            return init;
          }()
        }, {
          key: "loadTheme",
          value: function () {
            var _loadTheme = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee14(name) {
              return _regeneratorRuntime().wrap(function _callee14$(_context14) {
                while (1) switch (_context14.prev = _context14.next) {
                  case 0:
                    if (guardCheck(this)) {
                      _context14.next = 2;
                      break;
                    }
                    return _context14.abrupt("return");
                  case 2:
                    this._currentTheme = name;
                    _context14.next = 5;
                    return this.refresh();
                  case 5:
                  case "end":
                    return _context14.stop();
                }
              }, _callee14, this);
            }));
            function loadTheme(_x11) {
              return _loadTheme.apply(this, arguments);
            }
            return loadTheme;
          }()
        }, {
          key: "pause",
          value: function pause() {
            if (!guardCheck(this)) {
              return;
            }
            if (this._drawAnimationFrame !== undefined) {
              _cancelAnimation()(this._drawAnimationFrame);
              delete this._drawAnimationFrame;
            }
            if (this._paused) {
              return;
            }
            var _iterator55 = _createForOfIteratorHelper(this.plugins),
              _step55;
            try {
              for (_iterator55.s(); !(_step55 = _iterator55.n()).done;) {
                var _step55$value = _slicedToArray(_step55.value, 2),
                  plugin = _step55$value[1];
                if (plugin.pause) {
                  plugin.pause();
                }
              }
            } catch (err) {
              _iterator55.e(err);
            } finally {
              _iterator55.f();
            }
            if (!this.pageHidden) {
              this._paused = true;
            }
            this._engine.dispatchEvent("containerPaused", {
              container: this
            });
          }
        }, {
          key: "play",
          value: function play(force) {
            if (!guardCheck(this)) {
              return;
            }
            var needsUpdate = this._paused || force;
            if (this._firstStart && !this.actualOptions.autoPlay) {
              this._firstStart = false;
              return;
            }
            if (this._paused) {
              this._paused = false;
            }
            if (needsUpdate) {
              var _iterator56 = _createForOfIteratorHelper(this.plugins),
                _step56;
              try {
                for (_iterator56.s(); !(_step56 = _iterator56.n()).done;) {
                  var _step56$value = _slicedToArray(_step56.value, 2),
                    plugin = _step56$value[1];
                  if (plugin.play) {
                    plugin.play();
                  }
                }
              } catch (err) {
                _iterator56.e(err);
              } finally {
                _iterator56.f();
              }
            }
            this._engine.dispatchEvent("containerPlay", {
              container: this
            });
            this.draw(needsUpdate || false);
          }
        }, {
          key: "refresh",
          value: function () {
            var _refresh = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee15() {
              return _regeneratorRuntime().wrap(function _callee15$(_context15) {
                while (1) switch (_context15.prev = _context15.next) {
                  case 0:
                    if (guardCheck(this)) {
                      _context15.next = 2;
                      break;
                    }
                    return _context15.abrupt("return");
                  case 2:
                    this.stop();
                    return _context15.abrupt("return", this.start());
                  case 4:
                  case "end":
                    return _context15.stop();
                }
              }, _callee15, this);
            }));
            function refresh() {
              return _refresh.apply(this, arguments);
            }
            return refresh;
          }()
        }, {
          key: "reset",
          value: function () {
            var _reset2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee16() {
              return _regeneratorRuntime().wrap(function _callee16$(_context16) {
                while (1) switch (_context16.prev = _context16.next) {
                  case 0:
                    if (guardCheck(this)) {
                      _context16.next = 2;
                      break;
                    }
                    return _context16.abrupt("return");
                  case 2:
                    this._options = loadContainerOptions(this._engine, this);
                    return _context16.abrupt("return", this.refresh());
                  case 4:
                  case "end":
                    return _context16.stop();
                }
              }, _callee16, this);
            }));
            function reset() {
              return _reset2.apply(this, arguments);
            }
            return reset;
          }()
        }, {
          key: "setNoise",
          value: function setNoise(noiseOrGenerator, init, update) {
            if (!guardCheck(this)) {
              return;
            }
            this.setPath(noiseOrGenerator, init, update);
          }
        }, {
          key: "setPath",
          value: function setPath(pathOrGenerator, init, update) {
            if (!pathOrGenerator || !guardCheck(this)) {
              return;
            }
            var pathGenerator = Object.assign({}, defaultPathGenerator);
            if (typeof pathOrGenerator === "function") {
              pathGenerator.generate = pathOrGenerator;
              if (init) {
                pathGenerator.init = init;
              }
              if (update) {
                pathGenerator.update = update;
              }
            } else {
              var oldGenerator = pathGenerator;
              pathGenerator.generate = pathOrGenerator.generate || oldGenerator.generate;
              pathGenerator.init = pathOrGenerator.init || oldGenerator.init;
              pathGenerator.update = pathOrGenerator.update || oldGenerator.update;
            }
            this.addPath(defaultPathGeneratorKey, pathGenerator, true);
          }
        }, {
          key: "start",
          value: function () {
            var _start = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee18() {
              var _this27 = this;
              return _regeneratorRuntime().wrap(function _callee18$(_context18) {
                while (1) switch (_context18.prev = _context18.next) {
                  case 0:
                    if (!(!guardCheck(this) || this.started)) {
                      _context18.next = 2;
                      break;
                    }
                    return _context18.abrupt("return");
                  case 2:
                    _context18.next = 4;
                    return this.init();
                  case 4:
                    this.started = true;
                    _context18.next = 7;
                    return new Promise(function (resolve) {
                      _this27._delayTimeout = setTimeout( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee17() {
                        var _iterator57, _step57, _step57$value, plugin;
                        return _regeneratorRuntime().wrap(function _callee17$(_context17) {
                          while (1) switch (_context17.prev = _context17.next) {
                            case 0:
                              _this27._eventListeners.addListeners();
                              if (_this27.interactivity.element instanceof HTMLElement && _this27._intersectionObserver) {
                                _this27._intersectionObserver.observe(_this27.interactivity.element);
                              }
                              _iterator57 = _createForOfIteratorHelper(_this27.plugins);
                              _context17.prev = 3;
                              _iterator57.s();
                            case 5:
                              if ((_step57 = _iterator57.n()).done) {
                                _context17.next = 12;
                                break;
                              }
                              _step57$value = _slicedToArray(_step57.value, 2), plugin = _step57$value[1];
                              if (!plugin.start) {
                                _context17.next = 10;
                                break;
                              }
                              _context17.next = 10;
                              return plugin.start();
                            case 10:
                              _context17.next = 5;
                              break;
                            case 12:
                              _context17.next = 17;
                              break;
                            case 14:
                              _context17.prev = 14;
                              _context17.t0 = _context17["catch"](3);
                              _iterator57.e(_context17.t0);
                            case 17:
                              _context17.prev = 17;
                              _iterator57.f();
                              return _context17.finish(17);
                            case 20:
                              _this27._engine.dispatchEvent("containerStarted", {
                                container: _this27
                              });
                              _this27.play();
                              resolve();
                            case 23:
                            case "end":
                              return _context17.stop();
                          }
                        }, _callee17, null, [[3, 14, 17, 20]]);
                      })), _this27._delay);
                    });
                  case 7:
                  case "end":
                    return _context18.stop();
                }
              }, _callee18, this);
            }));
            function start() {
              return _start.apply(this, arguments);
            }
            return start;
          }()
        }, {
          key: "stop",
          value: function stop() {
            if (!guardCheck(this) || !this.started) {
              return;
            }
            if (this._delayTimeout) {
              clearTimeout(this._delayTimeout);
              delete this._delayTimeout;
            }
            this._firstStart = true;
            this.started = false;
            this._eventListeners.removeListeners();
            this.pause();
            this.particles.clear();
            this.canvas.clear();
            if (this.interactivity.element instanceof HTMLElement && this._intersectionObserver) {
              this._intersectionObserver.unobserve(this.interactivity.element);
            }
            var _iterator58 = _createForOfIteratorHelper(this.plugins),
              _step58;
            try {
              for (_iterator58.s(); !(_step58 = _iterator58.n()).done;) {
                var _step58$value = _slicedToArray(_step58.value, 2),
                  plugin = _step58$value[1];
                if (plugin.stop) {
                  plugin.stop();
                }
              }
            } catch (err) {
              _iterator58.e(err);
            } finally {
              _iterator58.f();
            }
            var _iterator59 = _createForOfIteratorHelper(this.plugins.keys()),
              _step59;
            try {
              for (_iterator59.s(); !(_step59 = _iterator59.n()).done;) {
                var key = _step59.value;
                this.plugins["delete"](key);
              }
            } catch (err) {
              _iterator59.e(err);
            } finally {
              _iterator59.f();
            }
            this._sourceOptions = this._options;
            this._engine.dispatchEvent("containerStopped", {
              container: this
            });
          }
        }, {
          key: "updateActualOptions",
          value: function updateActualOptions() {
            this.actualOptions.responsive = [];
            var newMaxWidth = this.actualOptions.setResponsive(this.canvas.size.width, this.retina.pixelRatio, this._options);
            this.actualOptions.setTheme(this._currentTheme);
            if (this.responsiveMaxWidth === newMaxWidth) {
              return false;
            }
            this.responsiveMaxWidth = newMaxWidth;
            return true;
          }
        }, {
          key: "_intersectionManager",
          value: function _intersectionManager(entries) {
            if (!guardCheck(this) || !this.actualOptions.pauseOnOutsideViewport) {
              return;
            }
            var _iterator60 = _createForOfIteratorHelper(entries),
              _step60;
            try {
              for (_iterator60.s(); !(_step60 = _iterator60.n()).done;) {
                var entry = _step60.value;
                if (entry.target !== this.interactivity.element) {
                  continue;
                }
                (entry.isIntersecting ? this.play : this.pause)();
              }
            } catch (err) {
              _iterator60.e(err);
            } finally {
              _iterator60.f();
            }
          }
        }]);
        return Container;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Loader.js
      function getDataFromUrl(_x12, _x13) {
        return _getDataFromUrl.apply(this, arguments);
      }
      function _getDataFromUrl() {
        _getDataFromUrl = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee59(jsonUrl, index) {
          var url, response;
          return _regeneratorRuntime().wrap(function _callee59$(_context59) {
            while (1) switch (_context59.prev = _context59.next) {
              case 0:
                url = _itemFromSingleOrMultiple(jsonUrl, index);
                if (url) {
                  _context59.next = 3;
                  break;
                }
                return _context59.abrupt("return");
              case 3:
                _context59.next = 5;
                return fetch(url);
              case 5:
                response = _context59.sent;
                if (!response.ok) {
                  _context59.next = 8;
                  break;
                }
                return _context59.abrupt("return", response.json());
              case 8:
                console.error("tsParticles - Error ".concat(response.status, " while retrieving config file"));
              case 9:
              case "end":
                return _context59.stop();
            }
          }, _callee59);
        }));
        return _getDataFromUrl.apply(this, arguments);
      }
      var Loader = /*#__PURE__*/function () {
        function Loader(engine) {
          _classCallCheck(this, Loader);
          this._engine = engine;
        }
        _createClass(Loader, [{
          key: "load",
          value: function load(tagId, options, index) {
            var params = {
              index: index,
              remote: false
            };
            if (typeof tagId === "string") {
              params.tagId = tagId;
            } else {
              params.options = tagId;
            }
            if (typeof options === "number") {
              params.index = options;
            } else {
              params.options = options !== null && options !== void 0 ? options : params.options;
            }
            return this.loadOptions(params);
          }
        }, {
          key: "loadJSON",
          value: function () {
            var _loadJSON = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee19(tagId, jsonUrl, index) {
              var url, id;
              return _regeneratorRuntime().wrap(function _callee19$(_context19) {
                while (1) switch (_context19.prev = _context19.next) {
                  case 0:
                    if (typeof jsonUrl === "number" || jsonUrl === undefined) {
                      url = tagId;
                    } else {
                      id = tagId;
                      url = jsonUrl;
                    }
                    return _context19.abrupt("return", this.loadRemoteOptions({
                      tagId: id,
                      url: url,
                      index: index,
                      remote: true
                    }));
                  case 2:
                  case "end":
                    return _context19.stop();
                }
              }, _callee19, this);
            }));
            function loadJSON(_x14, _x15, _x16) {
              return _loadJSON.apply(this, arguments);
            }
            return loadJSON;
          }()
        }, {
          key: "loadOptions",
          value: function () {
            var _loadOptions2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee20(params) {
              var _a, _b, _c, tagId, index, jsonUrl, remote, options, domContainer, currentOptions, dom, oldIndex, old, canvasEl, existingCanvases, newItem;
              return _regeneratorRuntime().wrap(function _callee20$(_context20) {
                while (1) switch (_context20.prev = _context20.next) {
                  case 0:
                    tagId = (_a = params.tagId) !== null && _a !== void 0 ? _a : "tsparticles".concat(Math.floor(_getRandom() * 10000));
                    index = params.index;
                    jsonUrl = params.url;
                    remote = params.remote;
                    if (!remote) {
                      _context20.next = 10;
                      break;
                    }
                    _context20.next = 7;
                    return getDataFromUrl(jsonUrl, index);
                  case 7:
                    _context20.t0 = _context20.sent;
                    _context20.next = 11;
                    break;
                  case 10:
                    _context20.t0 = params.options;
                  case 11:
                    options = _context20.t0;
                    domContainer = (_b = params.element) !== null && _b !== void 0 ? _b : document.getElementById(tagId);
                    if (!domContainer) {
                      domContainer = document.createElement("div");
                      domContainer.id = tagId;
                      (_c = document.querySelector("body")) === null || _c === void 0 ? void 0 : _c.append(domContainer);
                    }
                    currentOptions = _itemFromSingleOrMultiple(options, index), dom = this._engine.dom(), oldIndex = dom.findIndex(function (v) {
                      return v.id === tagId;
                    });
                    if (oldIndex >= 0) {
                      old = this._engine.domItem(oldIndex);
                      if (old && !old.destroyed) {
                        old.destroy();
                        dom.splice(oldIndex, 1);
                      }
                    }
                    if (domContainer.tagName.toLowerCase() === "canvas") {
                      canvasEl = domContainer;
                      canvasEl.dataset[_generatedAttribute] = "false";
                    } else {
                      existingCanvases = domContainer.getElementsByTagName("canvas");
                      if (existingCanvases.length) {
                        canvasEl = existingCanvases[0];
                        canvasEl.dataset[_generatedAttribute] = "false";
                      } else {
                        canvasEl = document.createElement("canvas");
                        canvasEl.dataset[_generatedAttribute] = "true";
                        domContainer.appendChild(canvasEl);
                      }
                    }
                    if (!canvasEl.style.width) {
                      canvasEl.style.width = "100%";
                    }
                    if (!canvasEl.style.height) {
                      canvasEl.style.height = "100%";
                    }
                    newItem = new Container(this._engine, tagId, currentOptions);
                    if (oldIndex >= 0) {
                      dom.splice(oldIndex, 0, newItem);
                    } else {
                      dom.push(newItem);
                    }
                    newItem.canvas.loadCanvas(canvasEl);
                    _context20.next = 24;
                    return newItem.start();
                  case 24:
                    return _context20.abrupt("return", newItem);
                  case 25:
                  case "end":
                    return _context20.stop();
                }
              }, _callee20, this);
            }));
            function loadOptions(_x17) {
              return _loadOptions2.apply(this, arguments);
            }
            return loadOptions;
          }()
        }, {
          key: "loadRemoteOptions",
          value: function () {
            var _loadRemoteOptions = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee21(params) {
              return _regeneratorRuntime().wrap(function _callee21$(_context21) {
                while (1) switch (_context21.prev = _context21.next) {
                  case 0:
                    return _context21.abrupt("return", this.loadOptions(params));
                  case 1:
                  case "end":
                    return _context21.stop();
                }
              }, _callee21, this);
            }));
            function loadRemoteOptions(_x18) {
              return _loadRemoteOptions.apply(this, arguments);
            }
            return loadRemoteOptions;
          }()
        }, {
          key: "set",
          value: function () {
            var _set = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee22(id, domContainer, options, index) {
              var params;
              return _regeneratorRuntime().wrap(function _callee22$(_context22) {
                while (1) switch (_context22.prev = _context22.next) {
                  case 0:
                    params = {
                      index: index,
                      remote: false
                    };
                    if (typeof id === "string") {
                      params.tagId = id;
                    } else {
                      params.element = id;
                    }
                    if (domContainer instanceof HTMLElement) {
                      params.element = domContainer;
                    } else {
                      params.options = domContainer;
                    }
                    if (typeof options === "number") {
                      params.index = options;
                    } else {
                      params.options = options !== null && options !== void 0 ? options : params.options;
                    }
                    return _context22.abrupt("return", this.loadOptions(params));
                  case 5:
                  case "end":
                    return _context22.stop();
                }
              }, _callee22, this);
            }));
            function set(_x19, _x20, _x21, _x22) {
              return _set.apply(this, arguments);
            }
            return set;
          }()
        }, {
          key: "setJSON",
          value: function () {
            var _setJSON = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee23(id, domContainer, jsonUrl, index) {
              var url, newId, newIndex, element;
              return _regeneratorRuntime().wrap(function _callee23$(_context23) {
                while (1) switch (_context23.prev = _context23.next) {
                  case 0:
                    if (id instanceof HTMLElement) {
                      element = id;
                      url = domContainer;
                      newIndex = jsonUrl;
                    } else {
                      newId = id;
                      element = domContainer;
                      url = jsonUrl;
                      newIndex = index;
                    }
                    return _context23.abrupt("return", this.loadRemoteOptions({
                      tagId: newId,
                      url: url,
                      index: newIndex,
                      element: element,
                      remote: true
                    }));
                  case 2:
                  case "end":
                    return _context23.stop();
                }
              }, _callee23, this);
            }));
            function setJSON(_x23, _x24, _x25, _x26) {
              return _setJSON.apply(this, arguments);
            }
            return setJSON;
          }()
        }]);
        return Loader;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/Plugins.js

      function getItemsFromInitializer(container, map, initializers) {
        var force = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
        var res = map.get(container);
        if (!res || force) {
          res = _toConsumableArray(initializers.values()).map(function (t) {
            return t(container);
          });
          map.set(container, res);
        }
        return res;
      }
      var Plugins = /*#__PURE__*/function () {
        function Plugins(engine) {
          _classCallCheck(this, Plugins);
          this._engine = engine;
          this.plugins = [];
          this._initializers = {
            interactors: new Map(),
            movers: new Map(),
            updaters: new Map()
          };
          this.interactors = new Map();
          this.movers = new Map();
          this.updaters = new Map();
          this.presets = new Map();
          this.drawers = new Map();
          this.pathGenerators = new Map();
        }
        _createClass(Plugins, [{
          key: "addInteractor",
          value: function addInteractor(name, initInteractor) {
            this._initializers.interactors.set(name, initInteractor);
          }
        }, {
          key: "addParticleMover",
          value: function addParticleMover(name, initMover) {
            this._initializers.movers.set(name, initMover);
          }
        }, {
          key: "addParticleUpdater",
          value: function addParticleUpdater(name, initUpdater) {
            this._initializers.updaters.set(name, initUpdater);
          }
        }, {
          key: "addPathGenerator",
          value: function addPathGenerator(type, pathGenerator) {
            if (!this.getPathGenerator(type)) {
              this.pathGenerators.set(type, pathGenerator);
            }
          }
        }, {
          key: "addPlugin",
          value: function addPlugin(plugin) {
            if (!this.getPlugin(plugin.id)) {
              this.plugins.push(plugin);
            }
          }
        }, {
          key: "addPreset",
          value: function addPreset(presetKey, options) {
            var override = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
            if (override || !this.getPreset(presetKey)) {
              this.presets.set(presetKey, options);
            }
          }
        }, {
          key: "addShapeDrawer",
          value: function addShapeDrawer(types, drawer) {
            var _this28 = this;
            _executeOnSingleOrMultiple(types, function (type) {
              if (!_this28.getShapeDrawer(type)) {
                _this28.drawers.set(type, drawer);
              }
            });
          }
        }, {
          key: "destroy",
          value: function destroy(container) {
            this.updaters["delete"](container);
            this.movers["delete"](container);
            this.interactors["delete"](container);
          }
        }, {
          key: "getAvailablePlugins",
          value: function getAvailablePlugins(container) {
            var res = new Map();
            var _iterator61 = _createForOfIteratorHelper(this.plugins),
              _step61;
            try {
              for (_iterator61.s(); !(_step61 = _iterator61.n()).done;) {
                var plugin = _step61.value;
                if (!plugin.needsPlugin(container.actualOptions)) {
                  continue;
                }
                res.set(plugin.id, plugin.getPlugin(container));
              }
            } catch (err) {
              _iterator61.e(err);
            } finally {
              _iterator61.f();
            }
            return res;
          }
        }, {
          key: "getInteractors",
          value: function getInteractors(container) {
            var force = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
            return getItemsFromInitializer(container, this.interactors, this._initializers.interactors, force);
          }
        }, {
          key: "getMovers",
          value: function getMovers(container) {
            var force = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
            return getItemsFromInitializer(container, this.movers, this._initializers.movers, force);
          }
        }, {
          key: "getPathGenerator",
          value: function getPathGenerator(type) {
            return this.pathGenerators.get(type);
          }
        }, {
          key: "getPlugin",
          value: function getPlugin(plugin) {
            return this.plugins.find(function (t) {
              return t.id === plugin;
            });
          }
        }, {
          key: "getPreset",
          value: function getPreset(preset) {
            return this.presets.get(preset);
          }
        }, {
          key: "getShapeDrawer",
          value: function getShapeDrawer(type) {
            return this.drawers.get(type);
          }
        }, {
          key: "getSupportedShapes",
          value: function getSupportedShapes() {
            return this.drawers.keys();
          }
        }, {
          key: "getUpdaters",
          value: function getUpdaters(container) {
            var force = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
            return getItemsFromInitializer(container, this.updaters, this._initializers.updaters, force);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options, sourceOptions) {
            var _iterator62 = _createForOfIteratorHelper(this.plugins),
              _step62;
            try {
              for (_iterator62.s(); !(_step62 = _iterator62.n()).done;) {
                var plugin = _step62.value;
                plugin.loadOptions(options, sourceOptions);
              }
            } catch (err) {
              _iterator62.e(err);
            } finally {
              _iterator62.f();
            }
          }
        }, {
          key: "loadParticlesOptions",
          value: function loadParticlesOptions(container, options) {
            var updaters = this.updaters.get(container);
            if (!updaters) {
              return;
            }
            for (var _len5 = arguments.length, sourceOptions = new Array(_len5 > 2 ? _len5 - 2 : 0), _key5 = 2; _key5 < _len5; _key5++) {
              sourceOptions[_key5 - 2] = arguments[_key5];
            }
            var _iterator63 = _createForOfIteratorHelper(updaters),
              _step63;
            try {
              for (_iterator63.s(); !(_step63 = _iterator63.n()).done;) {
                var updater = _step63.value;
                if (updater.loadOptions) {
                  updater.loadOptions.apply(updater, [options].concat(sourceOptions));
                }
              }
            } catch (err) {
              _iterator63.e(err);
            } finally {
              _iterator63.f();
            }
          }
        }]);
        return Plugins;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/engine.js
      var Engine = /*#__PURE__*/function () {
        function Engine() {
          _classCallCheck(this, Engine);
          this._domArray = [];
          this._eventDispatcher = new EventDispatcher();
          this._initialized = false;
          this._loader = new Loader(this);
          this.plugins = new Plugins(this);
        }
        _createClass(Engine, [{
          key: "addEventListener",
          value: function addEventListener(type, listener) {
            this._eventDispatcher.addEventListener(type, listener);
          }
        }, {
          key: "addInteractor",
          value: function () {
            var _addInteractor = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee24(name, interactorInitializer) {
              return _regeneratorRuntime().wrap(function _callee24$(_context24) {
                while (1) switch (_context24.prev = _context24.next) {
                  case 0:
                    this.plugins.addInteractor(name, interactorInitializer);
                    _context24.next = 3;
                    return this.refresh();
                  case 3:
                  case "end":
                    return _context24.stop();
                }
              }, _callee24, this);
            }));
            function addInteractor(_x27, _x28) {
              return _addInteractor.apply(this, arguments);
            }
            return addInteractor;
          }()
        }, {
          key: "addMover",
          value: function () {
            var _addMover = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee25(name, moverInitializer) {
              return _regeneratorRuntime().wrap(function _callee25$(_context25) {
                while (1) switch (_context25.prev = _context25.next) {
                  case 0:
                    this.plugins.addParticleMover(name, moverInitializer);
                    _context25.next = 3;
                    return this.refresh();
                  case 3:
                  case "end":
                    return _context25.stop();
                }
              }, _callee25, this);
            }));
            function addMover(_x29, _x30) {
              return _addMover.apply(this, arguments);
            }
            return addMover;
          }()
        }, {
          key: "addParticleUpdater",
          value: function () {
            var _addParticleUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee26(name, updaterInitializer) {
              return _regeneratorRuntime().wrap(function _callee26$(_context26) {
                while (1) switch (_context26.prev = _context26.next) {
                  case 0:
                    this.plugins.addParticleUpdater(name, updaterInitializer);
                    _context26.next = 3;
                    return this.refresh();
                  case 3:
                  case "end":
                    return _context26.stop();
                }
              }, _callee26, this);
            }));
            function addParticleUpdater(_x31, _x32) {
              return _addParticleUpdater.apply(this, arguments);
            }
            return addParticleUpdater;
          }()
        }, {
          key: "addPathGenerator",
          value: function () {
            var _addPathGenerator = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee27(name, generator) {
              return _regeneratorRuntime().wrap(function _callee27$(_context27) {
                while (1) switch (_context27.prev = _context27.next) {
                  case 0:
                    this.plugins.addPathGenerator(name, generator);
                    _context27.next = 3;
                    return this.refresh();
                  case 3:
                  case "end":
                    return _context27.stop();
                }
              }, _callee27, this);
            }));
            function addPathGenerator(_x33, _x34) {
              return _addPathGenerator.apply(this, arguments);
            }
            return addPathGenerator;
          }()
        }, {
          key: "addPlugin",
          value: function () {
            var _addPlugin = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee28(plugin) {
              return _regeneratorRuntime().wrap(function _callee28$(_context28) {
                while (1) switch (_context28.prev = _context28.next) {
                  case 0:
                    this.plugins.addPlugin(plugin);
                    _context28.next = 3;
                    return this.refresh();
                  case 3:
                  case "end":
                    return _context28.stop();
                }
              }, _callee28, this);
            }));
            function addPlugin(_x35) {
              return _addPlugin.apply(this, arguments);
            }
            return addPlugin;
          }()
        }, {
          key: "addPreset",
          value: function () {
            var _addPreset = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee29(preset, options) {
              var override,
                _args29 = arguments;
              return _regeneratorRuntime().wrap(function _callee29$(_context29) {
                while (1) switch (_context29.prev = _context29.next) {
                  case 0:
                    override = _args29.length > 2 && _args29[2] !== undefined ? _args29[2] : false;
                    this.plugins.addPreset(preset, options, override);
                    _context29.next = 4;
                    return this.refresh();
                  case 4:
                  case "end":
                    return _context29.stop();
                }
              }, _callee29, this);
            }));
            function addPreset(_x36, _x37) {
              return _addPreset.apply(this, arguments);
            }
            return addPreset;
          }()
        }, {
          key: "addShape",
          value: function () {
            var _addShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee30(shape, drawer, init, afterEffect, destroy) {
              var customDrawer;
              return _regeneratorRuntime().wrap(function _callee30$(_context30) {
                while (1) switch (_context30.prev = _context30.next) {
                  case 0:
                    if (typeof drawer === "function") {
                      customDrawer = {
                        afterEffect: afterEffect,
                        destroy: destroy,
                        draw: drawer,
                        init: init
                      };
                    } else {
                      customDrawer = drawer;
                    }
                    this.plugins.addShapeDrawer(shape, customDrawer);
                    _context30.next = 4;
                    return this.refresh();
                  case 4:
                  case "end":
                    return _context30.stop();
                }
              }, _callee30, this);
            }));
            function addShape(_x38, _x39, _x40, _x41, _x42) {
              return _addShape.apply(this, arguments);
            }
            return addShape;
          }()
        }, {
          key: "dispatchEvent",
          value: function dispatchEvent(type, args) {
            this._eventDispatcher.dispatchEvent(type, args);
          }
        }, {
          key: "dom",
          value: function dom() {
            return this._domArray;
          }
        }, {
          key: "domItem",
          value: function domItem(index) {
            var dom = this.dom(),
              item = dom[index];
            if (item && !item.destroyed) {
              return item;
            }
            dom.splice(index, 1);
          }
        }, {
          key: "init",
          value: function init() {
            if (!this._initialized) {
              this._initialized = true;
            }
          }
        }, {
          key: "load",
          value: function () {
            var _load = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee31(tagId, options) {
              return _regeneratorRuntime().wrap(function _callee31$(_context31) {
                while (1) switch (_context31.prev = _context31.next) {
                  case 0:
                    return _context31.abrupt("return", this._loader.load(tagId, options));
                  case 1:
                  case "end":
                    return _context31.stop();
                }
              }, _callee31, this);
            }));
            function load(_x43, _x44) {
              return _load.apply(this, arguments);
            }
            return load;
          }()
        }, {
          key: "loadFromArray",
          value: function () {
            var _loadFromArray = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee32(tagId, options, index) {
              return _regeneratorRuntime().wrap(function _callee32$(_context32) {
                while (1) switch (_context32.prev = _context32.next) {
                  case 0:
                    return _context32.abrupt("return", this._loader.load(tagId, options, index));
                  case 1:
                  case "end":
                    return _context32.stop();
                }
              }, _callee32, this);
            }));
            function loadFromArray(_x45, _x46, _x47) {
              return _loadFromArray.apply(this, arguments);
            }
            return loadFromArray;
          }()
        }, {
          key: "loadJSON",
          value: function () {
            var _loadJSON2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee33(tagId, pathConfigJson, index) {
              return _regeneratorRuntime().wrap(function _callee33$(_context33) {
                while (1) switch (_context33.prev = _context33.next) {
                  case 0:
                    return _context33.abrupt("return", this._loader.loadJSON(tagId, pathConfigJson, index));
                  case 1:
                  case "end":
                    return _context33.stop();
                }
              }, _callee33, this);
            }));
            function loadJSON(_x48, _x49, _x50) {
              return _loadJSON2.apply(this, arguments);
            }
            return loadJSON;
          }()
        }, {
          key: "refresh",
          value: function () {
            var _refresh2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee34() {
              var _iterator64, _step64, instance;
              return _regeneratorRuntime().wrap(function _callee34$(_context34) {
                while (1) switch (_context34.prev = _context34.next) {
                  case 0:
                    _iterator64 = _createForOfIteratorHelper(this.dom());
                    _context34.prev = 1;
                    _iterator64.s();
                  case 3:
                    if ((_step64 = _iterator64.n()).done) {
                      _context34.next = 9;
                      break;
                    }
                    instance = _step64.value;
                    _context34.next = 7;
                    return instance.refresh();
                  case 7:
                    _context34.next = 3;
                    break;
                  case 9:
                    _context34.next = 14;
                    break;
                  case 11:
                    _context34.prev = 11;
                    _context34.t0 = _context34["catch"](1);
                    _iterator64.e(_context34.t0);
                  case 14:
                    _context34.prev = 14;
                    _iterator64.f();
                    return _context34.finish(14);
                  case 17:
                  case "end":
                    return _context34.stop();
                }
              }, _callee34, this, [[1, 11, 14, 17]]);
            }));
            function refresh() {
              return _refresh2.apply(this, arguments);
            }
            return refresh;
          }()
        }, {
          key: "removeEventListener",
          value: function removeEventListener(type, listener) {
            this._eventDispatcher.removeEventListener(type, listener);
          }
        }, {
          key: "set",
          value: function () {
            var _set2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee35(id, element, options) {
              return _regeneratorRuntime().wrap(function _callee35$(_context35) {
                while (1) switch (_context35.prev = _context35.next) {
                  case 0:
                    return _context35.abrupt("return", this._loader.set(id, element, options));
                  case 1:
                  case "end":
                    return _context35.stop();
                }
              }, _callee35, this);
            }));
            function set(_x51, _x52, _x53) {
              return _set2.apply(this, arguments);
            }
            return set;
          }()
        }, {
          key: "setJSON",
          value: function () {
            var _setJSON2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee36(id, element, pathConfigJson, index) {
              return _regeneratorRuntime().wrap(function _callee36$(_context36) {
                while (1) switch (_context36.prev = _context36.next) {
                  case 0:
                    return _context36.abrupt("return", this._loader.setJSON(id, element, pathConfigJson, index));
                  case 1:
                  case "end":
                    return _context36.stop();
                }
              }, _callee36, this);
            }));
            function setJSON(_x54, _x55, _x56, _x57) {
              return _setJSON2.apply(this, arguments);
            }
            return setJSON;
          }()
        }, {
          key: "setOnClickHandler",
          value: function setOnClickHandler(callback) {
            var dom = this.dom();
            if (!dom.length) {
              throw new Error("Can only set click handlers after calling tsParticles.load() or tsParticles.loadJSON()");
            }
            var _iterator65 = _createForOfIteratorHelper(dom),
              _step65;
            try {
              for (_iterator65.s(); !(_step65 = _iterator65.n()).done;) {
                var domItem = _step65.value;
                domItem.addClickHandler(callback);
              }
            } catch (err) {
              _iterator65.e(err);
            } finally {
              _iterator65.f();
            }
          }
        }]);
        return Engine;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/HslColorManager.js
      var _HslColorManager = /*#__PURE__*/function () {
        function _HslColorManager() {
          _classCallCheck(this, _HslColorManager);
          this.key = "hsl";
          this.stringPrefix = "hsl";
        }
        _createClass(_HslColorManager, [{
          key: "handleColor",
          value: function handleColor(color) {
            var _a;
            var colorValue = color.value,
              hslColor = (_a = colorValue.hsl) !== null && _a !== void 0 ? _a : color.value;
            if (hslColor.h !== undefined && hslColor.s !== undefined && hslColor.l !== undefined) {
              return _hslToRgb(hslColor);
            }
          }
        }, {
          key: "handleRangeColor",
          value: function handleRangeColor(color) {
            var _a;
            var colorValue = color.value,
              hslColor = (_a = colorValue.hsl) !== null && _a !== void 0 ? _a : color.value;
            if (hslColor.h !== undefined && hslColor.l !== undefined) {
              return _hslToRgb({
                h: _getRangeValue(hslColor.h),
                l: _getRangeValue(hslColor.l),
                s: _getRangeValue(hslColor.s)
              });
            }
          }
        }, {
          key: "parseString",
          value: function parseString(input) {
            if (!input.startsWith("hsl")) {
              return;
            }
            var regex = /hsla?\(\s*(\d+)\s*,\s*(\d+)%\s*,\s*(\d+)%\s*(,\s*([\d.%]+)\s*)?\)/i,
              result = regex.exec(input);
            return result ? _hslaToRgba({
              a: result.length > 4 ? _parseAlpha(result[5]) : 1,
              h: parseInt(result[1], 10),
              l: parseInt(result[3], 10),
              s: parseInt(result[2], 10)
            }) : undefined;
          }
        }]);
        return _HslColorManager;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Utils/RgbColorManager.js
      var _RgbColorManager = /*#__PURE__*/function () {
        function _RgbColorManager() {
          _classCallCheck(this, _RgbColorManager);
          this.key = "rgb";
          this.stringPrefix = "rgb";
        }
        _createClass(_RgbColorManager, [{
          key: "handleColor",
          value: function handleColor(color) {
            var _a;
            var colorValue = color.value,
              rgbColor = (_a = colorValue.rgb) !== null && _a !== void 0 ? _a : color.value;
            if (rgbColor.r !== undefined) {
              return rgbColor;
            }
          }
        }, {
          key: "handleRangeColor",
          value: function handleRangeColor(color) {
            var _a;
            var colorValue = color.value,
              rgbColor = (_a = colorValue.rgb) !== null && _a !== void 0 ? _a : color.value;
            if (rgbColor.r !== undefined) {
              return {
                r: _getRangeValue(rgbColor.r),
                g: _getRangeValue(rgbColor.g),
                b: _getRangeValue(rgbColor.b)
              };
            }
          }
        }, {
          key: "parseString",
          value: function parseString(input) {
            if (!input.startsWith(this.stringPrefix)) {
              return;
            }
            var regex = /rgba?\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*(,\s*([\d.%]+)\s*)?\)/i,
              result = regex.exec(input);
            return result ? {
              a: result.length > 4 ? _parseAlpha(result[5]) : 1,
              b: parseInt(result[3], 10),
              g: parseInt(result[2], 10),
              r: parseInt(result[1], 10)
            } : undefined;
          }
        }]);
        return _RgbColorManager;
      }();
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/ExternalInteractorBase.js
      var _ExternalInteractorBase = /*#__PURE__*/_createClass(function _ExternalInteractorBase(container) {
        _classCallCheck(this, _ExternalInteractorBase);
        this.container = container;
        this.type = "external";
      });
      ; // CONCATENATED MODULE: ../../engine/dist/esm/Core/Utils/ParticlesInteractorBase.js
      var _ParticlesInteractorBase = /*#__PURE__*/_createClass(function _ParticlesInteractorBase(container) {
        _classCallCheck(this, _ParticlesInteractorBase);
        this.container = container;
        this.type = "particles";
      });
      ; // CONCATENATED MODULE: ../../engine/dist/esm/index.js

      var rgbColorManager = new _RgbColorManager(),
        hslColorManager = new _HslColorManager();
      _addColorManager(rgbColorManager);
      _addColorManager(hslColorManager);
      var _tsParticles = new Engine();
      _tsParticles.init();
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/Options/Classes/AbsorberSizeLimit.js
      var AbsorberSizeLimit = /*#__PURE__*/function () {
        function AbsorberSizeLimit() {
          _classCallCheck(this, AbsorberSizeLimit);
          this.radius = 0;
          this.mass = 0;
        }
        _createClass(AbsorberSizeLimit, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.mass !== undefined) {
              this.mass = data.mass;
            }
            if (data.radius !== undefined) {
              this.radius = data.radius;
            }
          }
        }]);
        return AbsorberSizeLimit;
      }();
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/Options/Classes/AbsorberSize.js
      var AbsorberSize = /*#__PURE__*/function (_ValueWithRandom6) {
        _inherits(AbsorberSize, _ValueWithRandom6);
        var _super11 = _createSuper(AbsorberSize);
        function AbsorberSize() {
          var _this29;
          _classCallCheck(this, AbsorberSize);
          _this29 = _super11.call(this);
          _this29.density = 5;
          _this29.value = 50;
          _this29.limit = new AbsorberSizeLimit();
          return _this29;
        }
        _createClass(AbsorberSize, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(AbsorberSize.prototype), "load", this).call(this, data);
            if (data.density !== undefined) {
              this.density = data.density;
            }
            if (typeof data.limit === "number") {
              this.limit.radius = data.limit;
            } else {
              this.limit.load(data.limit);
            }
          }
        }]);
        return AbsorberSize;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/Options/Classes/Absorber.js
      var Absorber = /*#__PURE__*/function () {
        function Absorber() {
          _classCallCheck(this, Absorber);
          this.color = new _OptionsColor();
          this.color.value = "#000000";
          this.draggable = false;
          this.opacity = 1;
          this.destroy = true;
          this.orbits = false;
          this.size = new AbsorberSize();
        }
        _createClass(Absorber, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.draggable !== undefined) {
              this.draggable = data.draggable;
            }
            this.name = data.name;
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
            if (data.position !== undefined) {
              this.position = {};
              if (data.position.x !== undefined) {
                this.position.x = _setRangeValue(data.position.x);
              }
              if (data.position.y !== undefined) {
                this.position.y = _setRangeValue(data.position.y);
              }
            }
            if (data.size !== undefined) {
              this.size.load(data.size);
            }
            if (data.destroy !== undefined) {
              this.destroy = data.destroy;
            }
            if (data.orbits !== undefined) {
              this.orbits = data.orbits;
            }
          }
        }]);
        return Absorber;
      }();
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/AbsorberInstance.js
      var AbsorberInstance = /*#__PURE__*/function () {
        function AbsorberInstance(absorbers, container, options, position) {
          _classCallCheck(this, AbsorberInstance);
          var _a, _b, _c;
          this.absorbers = absorbers;
          this.container = container;
          this.initialPosition = position ? _Vector.create(position.x, position.y) : undefined;
          if (options instanceof Absorber) {
            this.options = options;
          } else {
            this.options = new Absorber();
            this.options.load(options);
          }
          this.dragging = false;
          this.name = this.options.name;
          this.opacity = this.options.opacity;
          this.size = _getRangeValue(this.options.size.value) * container.retina.pixelRatio;
          this.mass = this.size * this.options.size.density * container.retina.reduceFactor;
          var limit = this.options.size.limit;
          this.limit = {
            radius: limit.radius * container.retina.pixelRatio * container.retina.reduceFactor,
            mass: limit.mass
          };
          this.color = (_a = _rangeColorToRgb(this.options.color)) !== null && _a !== void 0 ? _a : {
            b: 0,
            g: 0,
            r: 0
          };
          this.position = (_c = (_b = this.initialPosition) === null || _b === void 0 ? void 0 : _b.copy()) !== null && _c !== void 0 ? _c : this.calcPosition();
        }
        _createClass(AbsorberInstance, [{
          key: "attract",
          value: function attract(particle) {
            var container = this.container,
              options = this.options;
            if (options.draggable) {
              var mouse = container.interactivity.mouse;
              if (mouse.clicking && mouse.downPosition) {
                var mouseDist = _getDistance(this.position, mouse.downPosition);
                if (mouseDist <= this.size) {
                  this.dragging = true;
                }
              } else {
                this.dragging = false;
              }
              if (this.dragging && mouse.position) {
                this.position.x = mouse.position.x;
                this.position.y = mouse.position.y;
              }
            }
            var pos = particle.getPosition(),
              _getDistances3 = _getDistances(this.position, pos),
              dx = _getDistances3.dx,
              dy = _getDistances3.dy,
              distance = _getDistances3.distance,
              v = _Vector.create(dx, dy);
            v.length = this.mass / Math.pow(distance, 2) * container.retina.reduceFactor;
            if (distance < this.size + particle.getRadius()) {
              var sizeFactor = particle.getRadius() * 0.033 * container.retina.pixelRatio;
              if (this.size > particle.getRadius() && distance < this.size - particle.getRadius() || particle.absorberOrbit !== undefined && particle.absorberOrbit.length < 0) {
                if (options.destroy) {
                  particle.destroy();
                } else {
                  particle.needsNewPosition = true;
                  this.updateParticlePosition(particle, v);
                }
              } else {
                if (options.destroy) {
                  particle.size.value -= sizeFactor;
                }
                this.updateParticlePosition(particle, v);
              }
              if (this.limit.radius <= 0 || this.size < this.limit.radius) {
                this.size += sizeFactor;
              }
              if (this.limit.mass <= 0 || this.mass < this.limit.mass) {
                this.mass += sizeFactor * this.options.size.density * container.retina.reduceFactor;
              }
            } else {
              this.updateParticlePosition(particle, v);
            }
          }
        }, {
          key: "draw",
          value: function draw(context) {
            context.translate(this.position.x, this.position.y);
            context.beginPath();
            context.arc(0, 0, this.size, 0, Math.PI * 2, false);
            context.closePath();
            context.fillStyle = _getStyleFromRgb(this.color, this.opacity);
            context.fill();
          }
        }, {
          key: "resize",
          value: function resize() {
            var initialPosition = this.initialPosition;
            this.position = initialPosition && _isPointInside(initialPosition, this.container.canvas.size, _Vector.origin) ? initialPosition : this.calcPosition();
          }
        }, {
          key: "calcPosition",
          value: function calcPosition() {
            var exactPosition = _calcPositionOrRandomFromSizeRanged({
              size: this.container.canvas.size,
              position: this.options.position
            });
            return _Vector.create(exactPosition.x, exactPosition.y);
          }
        }, {
          key: "updateParticlePosition",
          value: function updateParticlePosition(particle, v) {
            var _a;
            if (particle.destroyed) {
              return;
            }
            var container = this.container,
              canvasSize = container.canvas.size;
            if (particle.needsNewPosition) {
              var newPosition = _calcPositionOrRandomFromSize({
                size: canvasSize
              });
              particle.position.setTo(newPosition);
              particle.velocity.setTo(particle.initialVelocity);
              particle.absorberOrbit = undefined;
              particle.needsNewPosition = false;
            }
            if (this.options.orbits) {
              if (particle.absorberOrbit === undefined) {
                particle.absorberOrbit = _Vector.create(0, 0);
                particle.absorberOrbit.length = _getDistance(particle.getPosition(), this.position);
                particle.absorberOrbit.angle = _getRandom() * Math.PI * 2;
              }
              if (particle.absorberOrbit.length <= this.size && !this.options.destroy) {
                var minSize = Math.min(canvasSize.width, canvasSize.height);
                particle.absorberOrbit.length = minSize * (1 + (_getRandom() * 0.2 - 0.1));
              }
              if (particle.absorberOrbitDirection === undefined) {
                particle.absorberOrbitDirection = particle.velocity.x >= 0 ? "clockwise" : "counter-clockwise";
              }
              var orbitRadius = particle.absorberOrbit.length,
                orbitAngle = particle.absorberOrbit.angle,
                orbitDirection = particle.absorberOrbitDirection;
              particle.velocity.setTo(_Vector.origin);
              var updateFunc = {
                x: orbitDirection === "clockwise" ? Math.cos : Math.sin,
                y: orbitDirection === "clockwise" ? Math.sin : Math.cos
              };
              particle.position.x = this.position.x + orbitRadius * updateFunc.x(orbitAngle);
              particle.position.y = this.position.y + orbitRadius * updateFunc.y(orbitAngle);
              particle.absorberOrbit.length -= v.length;
              particle.absorberOrbit.angle += ((_a = particle.retina.moveSpeed) !== null && _a !== void 0 ? _a : 0) * container.retina.pixelRatio / 100 * container.retina.reduceFactor;
            } else {
              var addV = _Vector.origin;
              addV.length = v.length;
              addV.angle = v.angle;
              particle.velocity.addTo(addV);
            }
          }
        }]);
        return AbsorberInstance;
      }();
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/Absorbers.js
      var Absorbers = /*#__PURE__*/function () {
        function Absorbers(container) {
          var _this30 = this;
          _classCallCheck(this, Absorbers);
          this.container = container;
          this.array = [];
          this.absorbers = [];
          this.interactivityAbsorbers = [];
          container.getAbsorber = function (idxOrName) {
            return idxOrName === undefined || typeof idxOrName === "number" ? _this30.array[idxOrName || 0] : _this30.array.find(function (t) {
              return t.name === idxOrName;
            });
          };
          container.addAbsorber = function (options, position) {
            return _this30.addAbsorber(options, position);
          };
        }
        _createClass(Absorbers, [{
          key: "addAbsorber",
          value: function addAbsorber(options, position) {
            var absorber = new AbsorberInstance(this, this.container, options, position);
            this.array.push(absorber);
            return absorber;
          }
        }, {
          key: "draw",
          value: function draw(context) {
            var _iterator66 = _createForOfIteratorHelper(this.array),
              _step66;
            try {
              for (_iterator66.s(); !(_step66 = _iterator66.n()).done;) {
                var absorber = _step66.value;
                absorber.draw(context);
              }
            } catch (err) {
              _iterator66.e(err);
            } finally {
              _iterator66.f();
            }
          }
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            var absorberOptions = this.absorbers,
              modeAbsorbers = this.interactivityAbsorbers;
            if (mode === "absorber") {
              var absorbersModeOptions = _itemFromSingleOrMultiple(modeAbsorbers),
                absorbersOptions = absorbersModeOptions !== null && absorbersModeOptions !== void 0 ? absorbersModeOptions : _itemFromSingleOrMultiple(absorberOptions),
                aPosition = this.container.interactivity.mouse.clickPosition;
              this.addAbsorber(absorbersOptions, aPosition);
            }
          }
        }, {
          key: "init",
          value: function () {
            var _init3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee37() {
              var _this31 = this;
              return _regeneratorRuntime().wrap(function _callee37$(_context37) {
                while (1) switch (_context37.prev = _context37.next) {
                  case 0:
                    this.absorbers = this.container.actualOptions.absorbers;
                    this.interactivityAbsorbers = this.container.actualOptions.interactivity.modes.absorbers;
                    _executeOnSingleOrMultiple(this.absorbers, function (absorber) {
                      _this31.addAbsorber(absorber);
                    });
                  case 3:
                  case "end":
                    return _context37.stop();
                }
              }, _callee37, this);
            }));
            function init() {
              return _init3.apply(this, arguments);
            }
            return init;
          }()
        }, {
          key: "particleUpdate",
          value: function particleUpdate(particle) {
            var _iterator67 = _createForOfIteratorHelper(this.array),
              _step67;
            try {
              for (_iterator67.s(); !(_step67 = _iterator67.n()).done;) {
                var absorber = _step67.value;
                absorber.attract(particle);
                if (particle.destroyed) {
                  break;
                }
              }
            } catch (err) {
              _iterator67.e(err);
            } finally {
              _iterator67.f();
            }
          }
        }, {
          key: "removeAbsorber",
          value: function removeAbsorber(absorber) {
            var index = this.array.indexOf(absorber);
            if (index >= 0) {
              this.array.splice(index, 1);
            }
          }
        }, {
          key: "resize",
          value: function resize() {
            var _iterator68 = _createForOfIteratorHelper(this.array),
              _step68;
            try {
              for (_iterator68.s(); !(_step68 = _iterator68.n()).done;) {
                var absorber = _step68.value;
                absorber.resize();
              }
            } catch (err) {
              _iterator68.e(err);
            } finally {
              _iterator68.f();
            }
          }
        }, {
          key: "stop",
          value: function stop() {
            this.array = [];
          }
        }]);
        return Absorbers;
      }();
      ; // CONCATENATED MODULE: ../../plugins/absorbers/dist/esm/index.js
      var AbsorbersPlugin = /*#__PURE__*/function () {
        function AbsorbersPlugin() {
          _classCallCheck(this, AbsorbersPlugin);
          this.id = "absorbers";
        }
        _createClass(AbsorbersPlugin, [{
          key: "getPlugin",
          value: function getPlugin(container) {
            return new Absorbers(container);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options, source) {
            var _a, _b;
            if (!this.needsPlugin(options) && !this.needsPlugin(source)) {
              return;
            }
            if (source === null || source === void 0 ? void 0 : source.absorbers) {
              options.absorbers = _executeOnSingleOrMultiple(source.absorbers, function (absorber) {
                var tmp = new Absorber();
                tmp.load(absorber);
                return tmp;
              });
            }
            options.interactivity.modes.absorbers = _executeOnSingleOrMultiple((_b = (_a = source === null || source === void 0 ? void 0 : source.interactivity) === null || _a === void 0 ? void 0 : _a.modes) === null || _b === void 0 ? void 0 : _b.absorbers, function (absorber) {
              var tmp = new Absorber();
              tmp.load(absorber);
              return tmp;
            });
          }
        }, {
          key: "needsPlugin",
          value: function needsPlugin(options) {
            var _a, _b, _c;
            if (!options) {
              return false;
            }
            var absorbers = options.absorbers;
            if (absorbers instanceof Array) {
              return !!absorbers.length;
            } else if (absorbers) {
              return true;
            } else if (((_c = (_b = (_a = options.interactivity) === null || _a === void 0 ? void 0 : _a.events) === null || _b === void 0 ? void 0 : _b.onClick) === null || _c === void 0 ? void 0 : _c.mode) && _isInArray("absorber", options.interactivity.events.onClick.mode)) {
              return true;
            }
            return false;
          }
        }]);
        return AbsorbersPlugin;
      }();
      function loadAbsorbersPlugin(_x58) {
        return _loadAbsorbersPlugin.apply(this, arguments);
      }
      function _loadAbsorbersPlugin() {
        _loadAbsorbersPlugin = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee60(engine) {
          var plugin;
          return _regeneratorRuntime().wrap(function _callee60$(_context60) {
            while (1) switch (_context60.prev = _context60.next) {
              case 0:
                plugin = new AbsorbersPlugin();
                _context60.next = 3;
                return engine.addPlugin(plugin);
              case 3:
              case "end":
                return _context60.stop();
            }
          }, _callee60);
        }));
        return _loadAbsorbersPlugin.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/Options/Classes/DestroyBounds.js
      var DestroyBounds = /*#__PURE__*/function () {
        function DestroyBounds() {
          _classCallCheck(this, DestroyBounds);
        }
        _createClass(DestroyBounds, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.bottom !== undefined) {
              this.bottom = _setRangeValue(data.bottom);
            }
            if (data.left !== undefined) {
              this.left = _setRangeValue(data.left);
            }
            if (data.right !== undefined) {
              this.right = _setRangeValue(data.right);
            }
            if (data.top !== undefined) {
              this.top = _setRangeValue(data.top);
            }
          }
        }]);
        return DestroyBounds;
      }();
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/Options/Classes/SplitFactor.js
      var SplitFactor = /*#__PURE__*/function (_ValueWithRandom7) {
        _inherits(SplitFactor, _ValueWithRandom7);
        var _super12 = _createSuper(SplitFactor);
        function SplitFactor() {
          var _this32;
          _classCallCheck(this, SplitFactor);
          _this32 = _super12.call(this);
          _this32.value = 3;
          return _this32;
        }
        return _createClass(SplitFactor);
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/Options/Classes/SplitRate.js
      var SplitRate = /*#__PURE__*/function (_ValueWithRandom8) {
        _inherits(SplitRate, _ValueWithRandom8);
        var _super13 = _createSuper(SplitRate);
        function SplitRate() {
          var _this33;
          _classCallCheck(this, SplitRate);
          _this33 = _super13.call(this);
          _this33.value = {
            min: 4,
            max: 9
          };
          return _this33;
        }
        return _createClass(SplitRate);
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/Options/Classes/Split.js
      var Split = /*#__PURE__*/function () {
        function Split() {
          _classCallCheck(this, Split);
          this.count = 1;
          this.factor = new SplitFactor();
          this.rate = new SplitRate();
          this.sizeOffset = true;
        }
        _createClass(Split, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.count !== undefined) {
              this.count = data.count;
            }
            this.factor.load(data.factor);
            this.rate.load(data.rate);
            this.particles = _executeOnSingleOrMultiple(data.particles, function (particles) {
              return _deepExtend({}, particles);
            });
            if (data.sizeOffset !== undefined) {
              this.sizeOffset = data.sizeOffset;
            }
          }
        }]);
        return Split;
      }();
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/Options/Classes/Destroy.js
      var Destroy = /*#__PURE__*/function () {
        function Destroy() {
          _classCallCheck(this, Destroy);
          this.bounds = new DestroyBounds();
          this.mode = "none";
          this.split = new Split();
        }
        _createClass(Destroy, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.mode) {
              this.mode = data.mode;
            }
            if (data.bounds) {
              this.bounds.load(data.bounds);
            }
            this.split.load(data.split);
          }
        }]);
        return Destroy;
      }();
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/DestroyUpdater.js
      var DestroyUpdater = /*#__PURE__*/function () {
        function DestroyUpdater(engine, container) {
          _classCallCheck(this, DestroyUpdater);
          this.engine = engine;
          this.container = container;
        }
        _createClass(DestroyUpdater, [{
          key: "init",
          value: function init(particle) {
            var container = this.container,
              particlesOptions = particle.options,
              destroyOptions = particlesOptions.destroy;
            if (!destroyOptions) {
              return;
            }
            particle.splitCount = 0;
            var destroyBounds = destroyOptions.bounds;
            if (!particle.destroyBounds) {
              particle.destroyBounds = {};
            }
            if (destroyBounds.bottom) {
              particle.destroyBounds.bottom = _getRangeValue(destroyBounds.bottom) * container.canvas.size.height / 100;
            }
            if (destroyBounds.left) {
              particle.destroyBounds.left = _getRangeValue(destroyBounds.left) * container.canvas.size.width / 100;
            }
            if (destroyBounds.right) {
              particle.destroyBounds.right = _getRangeValue(destroyBounds.right) * container.canvas.size.width / 100;
            }
            if (destroyBounds.top) {
              particle.destroyBounds.top = _getRangeValue(destroyBounds.top) * container.canvas.size.height / 100;
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return !particle.destroyed;
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.destroy) {
              options.destroy = new Destroy();
            }
            for (var _len6 = arguments.length, sources = new Array(_len6 > 1 ? _len6 - 1 : 0), _key6 = 1; _key6 < _len6; _key6++) {
              sources[_key6 - 1] = arguments[_key6];
            }
            for (var _i5 = 0, _sources2 = sources; _i5 < _sources2.length; _i5++) {
              var source = _sources2[_i5];
              options.destroy.load(source === null || source === void 0 ? void 0 : source.destroy);
            }
          }
        }, {
          key: "particleDestroyed",
          value: function particleDestroyed(particle, override) {
            if (override) {
              return;
            }
            var destroyOptions = particle.options.destroy;
            if (destroyOptions && destroyOptions.mode === "split") {
              this.split(particle);
            }
          }
        }, {
          key: "update",
          value: function update(particle) {
            if (!this.isEnabled(particle)) {
              return;
            }
            var position = particle.getPosition(),
              bounds = particle.destroyBounds;
            if (!bounds) {
              return;
            }
            if (bounds.bottom !== undefined && position.y >= bounds.bottom || bounds.left !== undefined && position.x <= bounds.left || bounds.right !== undefined && position.x >= bounds.right || bounds.top !== undefined && position.y <= bounds.top) {
              particle.destroy();
            }
          }
        }, {
          key: "addSplitParticle",
          value: function addSplitParticle(parent, splitParticlesOptions) {
            var destroyOptions = parent.options.destroy;
            if (!destroyOptions) {
              return;
            }
            var splitOptions = destroyOptions.split,
              options = _loadParticlesOptions(this.engine, this.container, parent.options),
              factor = _getValue(splitOptions.factor);
            options.color.load({
              value: {
                hsl: parent.getFillColor()
              }
            });
            options.move.load({
              center: {
                x: parent.position.x,
                y: parent.position.y,
                mode: "precise"
              }
            });
            if (typeof options.size.value === "number") {
              options.size.value /= factor;
            } else {
              options.size.value.min /= factor;
              options.size.value.max /= factor;
            }
            options.load(splitParticlesOptions);
            var offset = splitOptions.sizeOffset ? _setRangeValue(-parent.size.value, parent.size.value) : 0,
              position = {
                x: parent.position.x + _randomInRange(offset),
                y: parent.position.y + _randomInRange(offset)
              };
            return this.container.particles.addParticle(position, options, parent.group, function (particle) {
              var _a;
              if (particle.size.value < 0.5) {
                return false;
              }
              particle.velocity.length = _randomInRange(_setRangeValue(parent.velocity.length, particle.velocity.length));
              particle.splitCount = ((_a = parent.splitCount) !== null && _a !== void 0 ? _a : 0) + 1;
              particle.unbreakable = true;
              setTimeout(function () {
                particle.unbreakable = false;
              }, 500);
              return true;
            });
          }
        }, {
          key: "split",
          value: function split(particle) {
            var destroyOptions = particle.options.destroy;
            if (!destroyOptions) {
              return;
            }
            var splitOptions = destroyOptions.split;
            if (splitOptions.count >= 0 && (particle.splitCount === undefined || particle.splitCount++ > splitOptions.count)) {
              return;
            }
            var rate = _getValue(splitOptions.rate),
              particlesSplitOptions = _itemFromSingleOrMultiple(splitOptions.particles);
            for (var i = 0; i < rate; i++) {
              this.addSplitParticle(particle, particlesSplitOptions);
            }
          }
        }]);
        return DestroyUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/destroy/dist/esm/index.js
      function loadDestroyUpdater(_x59) {
        return _loadDestroyUpdater.apply(this, arguments);
      }
      function _loadDestroyUpdater() {
        _loadDestroyUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee61(engine) {
          return _regeneratorRuntime().wrap(function _callee61$(_context61) {
            while (1) switch (_context61.prev = _context61.next) {
              case 0:
                _context61.next = 2;
                return engine.addParticleUpdater("destroy", function (container) {
                  return new DestroyUpdater(engine, container);
                });
              case 2:
              case "end":
                return _context61.stop();
            }
          }, _callee61);
        }));
        return _loadDestroyUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Shapes/Circle/CircleShape.js
      var CircleShape = /*#__PURE__*/function () {
        function CircleShape() {
          _classCallCheck(this, CircleShape);
        }
        _createClass(CircleShape, [{
          key: "randomPosition",
          value: function randomPosition(position, size, fill) {
            var generateTheta = function generateTheta(x, y) {
                var u = _getRandom() / 4.0,
                  theta = Math.atan(y / x * Math.tan(2 * Math.PI * u)),
                  v = _getRandom();
                if (v < 0.25) {
                  return theta;
                } else if (v < 0.5) {
                  return Math.PI - theta;
                } else if (v < 0.75) {
                  return Math.PI + theta;
                } else {
                  return -theta;
                }
              },
              radius = function radius(x, y, theta) {
                return x * y / Math.sqrt(Math.pow(y * Math.cos(theta), 2) + Math.pow(x * Math.sin(theta), 2));
              },
              a = size.width / 2,
              b = size.height / 2,
              randomTheta = generateTheta(a, b),
              maxRadius = radius(a, b, randomTheta),
              randomRadius = fill ? maxRadius * Math.sqrt(_getRandom()) : maxRadius;
            return {
              x: position.x + randomRadius * Math.cos(randomTheta),
              y: position.y + randomRadius * Math.sin(randomTheta)
            };
          }
        }]);
        return CircleShape;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Options/Classes/EmitterLife.js
      var EmitterLife = /*#__PURE__*/function () {
        function EmitterLife() {
          _classCallCheck(this, EmitterLife);
          this.wait = false;
        }
        _createClass(EmitterLife, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.count !== undefined) {
              this.count = data.count;
            }
            if (data.delay !== undefined) {
              this.delay = data.delay;
            }
            if (data.duration !== undefined) {
              this.duration = data.duration;
            }
            if (data.wait !== undefined) {
              this.wait = data.wait;
            }
          }
        }]);
        return EmitterLife;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Options/Classes/EmitterRate.js
      var EmitterRate = /*#__PURE__*/function () {
        function EmitterRate() {
          _classCallCheck(this, EmitterRate);
          this.quantity = 1;
          this.delay = 0.1;
        }
        _createClass(EmitterRate, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.quantity !== undefined) {
              this.quantity = _setRangeValue(data.quantity);
            }
            if (data.delay !== undefined) {
              this.delay = _setRangeValue(data.delay);
            }
          }
        }]);
        return EmitterRate;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Options/Classes/EmitterSize.js
      var EmitterSize = /*#__PURE__*/function () {
        function EmitterSize() {
          _classCallCheck(this, EmitterSize);
          this.mode = "percent";
          this.height = 0;
          this.width = 0;
        }
        _createClass(EmitterSize, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            if (data.height !== undefined) {
              this.height = data.height;
            }
            if (data.width !== undefined) {
              this.width = data.width;
            }
          }
        }]);
        return EmitterSize;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Options/Classes/Emitter.js
      var Emitter = /*#__PURE__*/function () {
        function Emitter() {
          _classCallCheck(this, Emitter);
          this.autoPlay = true;
          this.fill = true;
          this.life = new EmitterLife();
          this.rate = new EmitterRate();
          this.shape = "square";
          this.startCount = 0;
        }
        _createClass(Emitter, [{
          key: "load",
          value: function load(data) {
            if (data === undefined) {
              return;
            }
            if (data.autoPlay !== undefined) {
              this.autoPlay = data.autoPlay;
            }
            if (data.size !== undefined) {
              if (this.size === undefined) {
                this.size = new EmitterSize();
              }
              this.size.load(data.size);
            }
            if (data.direction !== undefined) {
              this.direction = data.direction;
            }
            this.domId = data.domId;
            if (data.fill !== undefined) {
              this.fill = data.fill;
            }
            this.life.load(data.life);
            this.name = data.name;
            this.particles = _executeOnSingleOrMultiple(data.particles, function (particles) {
              return _deepExtend({}, particles);
            });
            this.rate.load(data.rate);
            if (data.shape !== undefined) {
              this.shape = data.shape;
            }
            if (data.position !== undefined) {
              this.position = {};
              if (data.position.x !== undefined) {
                this.position.x = _setRangeValue(data.position.x);
              }
              if (data.position.y !== undefined) {
                this.position.y = _setRangeValue(data.position.y);
              }
            }
            if (data.spawnColor !== undefined) {
              if (this.spawnColor === undefined) {
                this.spawnColor = new _AnimatableColor();
              }
              this.spawnColor.load(data.spawnColor);
            }
            if (data.startCount !== undefined) {
              this.startCount = data.startCount;
            }
          }
        }]);
        return Emitter;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/EmitterInstance.js
      var EmitterInstance = /*#__PURE__*/function () {
        function EmitterInstance(engine, emitters, container, options, position) {
          _classCallCheck(this, EmitterInstance);
          var _a, _b, _c, _d, _e, _f, _g;
          var _h;
          this.emitters = emitters;
          this.container = container;
          this._engine = engine;
          this._currentDuration = 0;
          this._currentEmitDelay = 0;
          this._currentSpawnDelay = 0;
          this._initialPosition = position;
          if (options instanceof Emitter) {
            this.options = options;
          } else {
            this.options = new Emitter();
            this.options.load(options);
          }
          this._spawnDelay = ((_a = this.options.life.delay) !== null && _a !== void 0 ? _a : 0) * 1000 / this.container.retina.reduceFactor;
          this.position = (_b = this._initialPosition) !== null && _b !== void 0 ? _b : this.calcPosition();
          this.name = this.options.name;
          this._shape = (_c = this._engine.emitterShapeManager) === null || _c === void 0 ? void 0 : _c.getShape(this.options.shape);
          this.fill = this.options.fill;
          this._firstSpawn = !this.options.life.wait;
          this._startParticlesAdded = false;
          var particlesOptions = _deepExtend({}, this.options.particles);
          particlesOptions !== null && particlesOptions !== void 0 ? particlesOptions : particlesOptions = {};
          (_d = particlesOptions.move) !== null && _d !== void 0 ? _d : particlesOptions.move = {};
          (_e = (_h = particlesOptions.move).direction) !== null && _e !== void 0 ? _e : _h.direction = this.options.direction;
          if (this.options.spawnColor) {
            this.spawnColor = _rangeColorToHsl(this.options.spawnColor);
          }
          this._paused = !this.options.autoPlay;
          this._particlesOptions = particlesOptions;
          this.size = (_f = this.options.size) !== null && _f !== void 0 ? _f : function () {
            var size = new EmitterSize();
            size.load({
              height: 0,
              mode: "percent",
              width: 0
            });
            return size;
          }();
          this._lifeCount = (_g = this.options.life.count) !== null && _g !== void 0 ? _g : -1;
          this._immortal = this._lifeCount <= 0;
          this._engine.dispatchEvent("emitterCreated", {
            container: container,
            data: {
              emitter: this
            }
          });
          this.play();
        }
        _createClass(EmitterInstance, [{
          key: "externalPause",
          value: function externalPause() {
            this._paused = true;
            this.pause();
          }
        }, {
          key: "externalPlay",
          value: function externalPlay() {
            this._paused = false;
            this.play();
          }
        }, {
          key: "getPosition",
          value: function getPosition() {
            if (this.options.domId) {
              var container = this.container,
                element = document.getElementById(this.options.domId);
              if (element) {
                var elRect = element.getBoundingClientRect();
                return {
                  x: (elRect.x + elRect.width / 2) * container.retina.pixelRatio,
                  y: (elRect.y + elRect.height / 2) * container.retina.pixelRatio
                };
              }
            }
            return this.position;
          }
        }, {
          key: "getSize",
          value: function getSize() {
            var container = this.container;
            if (this.options.domId) {
              var element = document.getElementById(this.options.domId);
              if (element) {
                var elRect = element.getBoundingClientRect();
                return {
                  width: elRect.width * container.retina.pixelRatio,
                  height: elRect.height * container.retina.pixelRatio
                };
              }
            }
            return {
              width: this.size.mode === "percent" ? container.canvas.size.width * this.size.width / 100 : this.size.width,
              height: this.size.mode === "percent" ? container.canvas.size.height * this.size.height / 100 : this.size.height
            };
          }
        }, {
          key: "pause",
          value: function pause() {
            if (this._paused) {
              return;
            }
            delete this._emitDelay;
          }
        }, {
          key: "play",
          value: function play() {
            var _a;
            if (this._paused) {
              return;
            }
            if (!(this.container.retina.reduceFactor && (this._lifeCount > 0 || this._immortal || !this.options.life.count) && (this._firstSpawn || this._currentSpawnDelay >= ((_a = this._spawnDelay) !== null && _a !== void 0 ? _a : 0)))) {
              return;
            }
            if (this._emitDelay === undefined) {
              var delay = _getRangeValue(this.options.rate.delay);
              this._emitDelay = 1000 * delay / this.container.retina.reduceFactor;
            }
            if (this._lifeCount > 0 || this._immortal) {
              this.prepareToDie();
            }
          }
        }, {
          key: "resize",
          value: function resize() {
            var initialPosition = this._initialPosition;
            this.position = initialPosition && _isPointInside(initialPosition, this.container.canvas.size, _Vector.origin) ? initialPosition : this.calcPosition();
          }
        }, {
          key: "update",
          value: function update(delta) {
            var _a, _b, _c;
            if (this._paused) {
              return;
            }
            if (this._firstSpawn) {
              this._firstSpawn = false;
              this._currentSpawnDelay = (_a = this._spawnDelay) !== null && _a !== void 0 ? _a : 0;
              this._currentEmitDelay = (_b = this._emitDelay) !== null && _b !== void 0 ? _b : 0;
            }
            if (!this._startParticlesAdded) {
              this._startParticlesAdded = true;
              this.emitParticles(this.options.startCount);
            }
            if (this._duration !== undefined) {
              this._currentDuration += delta.value;
              if (this._currentDuration >= this._duration) {
                this.pause();
                if (this._spawnDelay !== undefined) {
                  delete this._spawnDelay;
                }
                if (!this._immortal) {
                  this._lifeCount--;
                }
                if (this._lifeCount > 0 || this._immortal) {
                  this.position = this.calcPosition();
                  this._spawnDelay = ((_c = this.options.life.delay) !== null && _c !== void 0 ? _c : 0) * 1000 / this.container.retina.reduceFactor;
                } else {
                  this.destroy();
                }
                this._currentDuration -= this._duration;
                delete this._duration;
              }
            }
            if (this._spawnDelay !== undefined) {
              this._currentSpawnDelay += delta.value;
              if (this._currentSpawnDelay >= this._spawnDelay) {
                this._engine.dispatchEvent("emitterPlay", {
                  container: this.container
                });
                this.play();
                this._currentSpawnDelay -= this._currentSpawnDelay;
                delete this._spawnDelay;
              }
            }
            if (this._emitDelay !== undefined) {
              this._currentEmitDelay += delta.value;
              if (this._currentEmitDelay >= this._emitDelay) {
                this.emit();
                this._currentEmitDelay -= this._emitDelay;
              }
            }
          }
        }, {
          key: "calcPosition",
          value: function calcPosition() {
            return _calcPositionOrRandomFromSizeRanged({
              size: this.container.canvas.size,
              position: this.options.position
            });
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this.emitters.removeEmitter(this);
            this._engine.dispatchEvent("emitterDestroyed", {
              container: this.container,
              data: {
                emitter: this
              }
            });
          }
        }, {
          key: "emit",
          value: function emit() {
            if (this._paused) {
              return;
            }
            var quantity = _getRangeValue(this.options.rate.quantity);
            this.emitParticles(quantity);
          }
        }, {
          key: "emitParticles",
          value: function emitParticles(quantity) {
            var _a, _b, _c;
            var position = this.getPosition(),
              size = this.getSize(),
              singleParticlesOptions = _itemFromSingleOrMultiple(this._particlesOptions);
            for (var i = 0; i < quantity; i++) {
              var particlesOptions = _deepExtend({}, singleParticlesOptions);
              if (this.spawnColor) {
                var hslAnimation = (_a = this.options.spawnColor) === null || _a === void 0 ? void 0 : _a.animation;
                if (hslAnimation) {
                  this.spawnColor.h = this.setColorAnimation(hslAnimation.h, this.spawnColor.h, 360);
                  this.spawnColor.s = this.setColorAnimation(hslAnimation.s, this.spawnColor.s, 100);
                  this.spawnColor.l = this.setColorAnimation(hslAnimation.l, this.spawnColor.l, 100);
                }
                if (!particlesOptions.color) {
                  particlesOptions.color = {
                    value: this.spawnColor
                  };
                } else {
                  particlesOptions.color.value = this.spawnColor;
                }
              }
              if (!position) {
                return;
              }
              var pPosition = (_c = (_b = this._shape) === null || _b === void 0 ? void 0 : _b.randomPosition(position, size, this.fill)) !== null && _c !== void 0 ? _c : position;
              this.container.particles.addParticle(pPosition, particlesOptions);
            }
          }
        }, {
          key: "prepareToDie",
          value: function prepareToDie() {
            var _a;
            if (this._paused) {
              return;
            }
            var duration = (_a = this.options.life) === null || _a === void 0 ? void 0 : _a.duration;
            if (this.container.retina.reduceFactor && (this._lifeCount > 0 || this._immortal) && duration !== undefined && duration > 0) {
              this._duration = duration * 1000;
            }
          }
        }, {
          key: "setColorAnimation",
          value: function setColorAnimation(animation, initValue, maxValue) {
            var _a;
            var container = this.container;
            if (!animation.enable) {
              return initValue;
            }
            var colorOffset = _randomInRange(animation.offset),
              delay = _getRangeValue(this.options.rate.delay),
              emitFactor = 1000 * delay / container.retina.reduceFactor,
              colorSpeed = _getRangeValue((_a = animation.speed) !== null && _a !== void 0 ? _a : 0);
            return (initValue + colorSpeed * container.fpsLimit / emitFactor + colorOffset * 3.6) % maxValue;
          }
        }]);
        return EmitterInstance;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Emitters.js
      var Emitters = /*#__PURE__*/function () {
        function Emitters(engine, container) {
          var _this34 = this;
          _classCallCheck(this, Emitters);
          this.container = container;
          this._engine = engine;
          this.array = [];
          this.emitters = [];
          this.interactivityEmitters = {
            random: {
              count: 1,
              enable: false
            },
            value: []
          };
          container.getEmitter = function (idxOrName) {
            return idxOrName === undefined || typeof idxOrName === "number" ? _this34.array[idxOrName || 0] : _this34.array.find(function (t) {
              return t.name === idxOrName;
            });
          };
          container.addEmitter = function (options, position) {
            return _this34.addEmitter(options, position);
          };
          container.removeEmitter = function (idxOrName) {
            var emitter = container.getEmitter(idxOrName);
            if (emitter) {
              _this34.removeEmitter(emitter);
            }
          };
          container.playEmitter = function (idxOrName) {
            var emitter = container.getEmitter(idxOrName);
            if (emitter) {
              emitter.externalPlay();
            }
          };
          container.pauseEmitter = function (idxOrName) {
            var emitter = container.getEmitter(idxOrName);
            if (emitter) {
              emitter.externalPause();
            }
          };
        }
        _createClass(Emitters, [{
          key: "addEmitter",
          value: function addEmitter(options, position) {
            var emitterOptions = new Emitter();
            emitterOptions.load(options);
            var emitter = new EmitterInstance(this._engine, this, this.container, emitterOptions, position);
            this.array.push(emitter);
            return emitter;
          }
        }, {
          key: "handleClickMode",
          value: function handleClickMode(mode) {
            var _this35 = this;
            var emitterOptions = this.emitters,
              modeEmitters = this.interactivityEmitters;
            if (mode === "emitter") {
              var emittersModeOptions;
              if (modeEmitters && modeEmitters.value instanceof Array) {
                if (modeEmitters.value.length > 0 && modeEmitters.random.enable) {
                  emittersModeOptions = [];
                  var usedIndexes = [];
                  for (var i = 0; i < modeEmitters.random.count; i++) {
                    var idx = _arrayRandomIndex(modeEmitters.value);
                    if (usedIndexes.includes(idx) && usedIndexes.length < modeEmitters.value.length) {
                      i--;
                      continue;
                    }
                    usedIndexes.push(idx);
                    emittersModeOptions.push(_itemFromArray(modeEmitters.value, idx));
                  }
                } else {
                  emittersModeOptions = modeEmitters.value;
                }
              } else {
                emittersModeOptions = modeEmitters === null || modeEmitters === void 0 ? void 0 : modeEmitters.value;
              }
              var emittersOptions = emittersModeOptions !== null && emittersModeOptions !== void 0 ? emittersModeOptions : emitterOptions,
                ePosition = this.container.interactivity.mouse.clickPosition;
              _executeOnSingleOrMultiple(emittersOptions, function (emitter) {
                _this35.addEmitter(emitter, ePosition);
              });
            }
          }
        }, {
          key: "init",
          value: function () {
            var _init4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee38() {
              var _iterator69, _step69, emitterOptions;
              return _regeneratorRuntime().wrap(function _callee38$(_context38) {
                while (1) switch (_context38.prev = _context38.next) {
                  case 0:
                    this.emitters = this.container.actualOptions.emitters;
                    this.interactivityEmitters = this.container.actualOptions.interactivity.modes.emitters;
                    if (this.emitters instanceof Array) {
                      _iterator69 = _createForOfIteratorHelper(this.emitters);
                      try {
                        for (_iterator69.s(); !(_step69 = _iterator69.n()).done;) {
                          emitterOptions = _step69.value;
                          this.addEmitter(emitterOptions);
                        }
                      } catch (err) {
                        _iterator69.e(err);
                      } finally {
                        _iterator69.f();
                      }
                    } else {
                      this.addEmitter(this.emitters);
                    }
                  case 3:
                  case "end":
                    return _context38.stop();
                }
              }, _callee38, this);
            }));
            function init() {
              return _init4.apply(this, arguments);
            }
            return init;
          }()
        }, {
          key: "pause",
          value: function pause() {
            var _iterator70 = _createForOfIteratorHelper(this.array),
              _step70;
            try {
              for (_iterator70.s(); !(_step70 = _iterator70.n()).done;) {
                var emitter = _step70.value;
                emitter.pause();
              }
            } catch (err) {
              _iterator70.e(err);
            } finally {
              _iterator70.f();
            }
          }
        }, {
          key: "play",
          value: function play() {
            var _iterator71 = _createForOfIteratorHelper(this.array),
              _step71;
            try {
              for (_iterator71.s(); !(_step71 = _iterator71.n()).done;) {
                var emitter = _step71.value;
                emitter.play();
              }
            } catch (err) {
              _iterator71.e(err);
            } finally {
              _iterator71.f();
            }
          }
        }, {
          key: "removeEmitter",
          value: function removeEmitter(emitter) {
            var index = this.array.indexOf(emitter);
            if (index >= 0) {
              this.array.splice(index, 1);
            }
          }
        }, {
          key: "resize",
          value: function resize() {
            var _iterator72 = _createForOfIteratorHelper(this.array),
              _step72;
            try {
              for (_iterator72.s(); !(_step72 = _iterator72.n()).done;) {
                var emitter = _step72.value;
                emitter.resize();
              }
            } catch (err) {
              _iterator72.e(err);
            } finally {
              _iterator72.f();
            }
          }
        }, {
          key: "stop",
          value: function stop() {
            this.array = [];
          }
        }, {
          key: "update",
          value: function update(delta) {
            var _iterator73 = _createForOfIteratorHelper(this.array),
              _step73;
            try {
              for (_iterator73.s(); !(_step73 = _iterator73.n()).done;) {
                var emitter = _step73.value;
                emitter.update(delta);
              }
            } catch (err) {
              _iterator73.e(err);
            } finally {
              _iterator73.f();
            }
          }
        }]);
        return Emitters;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/ShapeManager.js
      var shapes = new Map();
      var ShapeManager = /*#__PURE__*/function () {
        function ShapeManager(engine) {
          _classCallCheck(this, ShapeManager);
          this._engine = engine;
        }
        _createClass(ShapeManager, [{
          key: "addShape",
          value: function addShape(name, drawer) {
            if (!this.getShape(name)) {
              shapes.set(name, drawer);
            }
          }
        }, {
          key: "getShape",
          value: function getShape(name) {
            return shapes.get(name);
          }
        }, {
          key: "getSupportedShapes",
          value: function getSupportedShapes() {
            return shapes.keys();
          }
        }]);
        return ShapeManager;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/Shapes/Square/SquareShape.js

      function randomSquareCoordinate(position, offset) {
        return position + offset * (_getRandom() - 0.5);
      }
      var SquareShape = /*#__PURE__*/function () {
        function SquareShape() {
          _classCallCheck(this, SquareShape);
        }
        _createClass(SquareShape, [{
          key: "randomPosition",
          value: function randomPosition(position, size, fill) {
            if (fill) {
              return {
                x: randomSquareCoordinate(position.x, size.width),
                y: randomSquareCoordinate(position.y, size.height)
              };
            } else {
              var halfW = size.width / 2,
                halfH = size.height / 2,
                side = Math.floor(_getRandom() * 4),
                v = (_getRandom() - 0.5) * 2;
              switch (side) {
                case 0:
                  return {
                    x: position.x + v * halfW,
                    y: position.y - halfH
                  };
                case 1:
                  return {
                    x: position.x - halfW,
                    y: position.y + v * halfH
                  };
                case 2:
                  return {
                    x: position.x + v * halfW,
                    y: position.y + halfH
                  };
                case 3:
                default:
                  return {
                    x: position.x + halfW,
                    y: position.y + v * halfH
                  };
              }
            }
          }
        }]);
        return SquareShape;
      }();
      ; // CONCATENATED MODULE: ../../plugins/emitters/dist/esm/index.js
      var EmittersPlugin = /*#__PURE__*/function () {
        function EmittersPlugin(engine) {
          _classCallCheck(this, EmittersPlugin);
          this._engine = engine;
          this.id = "emitters";
        }
        _createClass(EmittersPlugin, [{
          key: "getPlugin",
          value: function getPlugin(container) {
            return new Emitters(this._engine, container);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options, source) {
            var _a, _b, _c, _d, _e, _f;
            if (!this.needsPlugin(options) && !this.needsPlugin(source)) {
              return;
            }
            if (source === null || source === void 0 ? void 0 : source.emitters) {
              options.emitters = _executeOnSingleOrMultiple(source.emitters, function (emitter) {
                var tmp = new Emitter();
                tmp.load(emitter);
                return tmp;
              });
            }
            var interactivityEmitters = (_b = (_a = source === null || source === void 0 ? void 0 : source.interactivity) === null || _a === void 0 ? void 0 : _a.modes) === null || _b === void 0 ? void 0 : _b.emitters;
            if (interactivityEmitters) {
              if (interactivityEmitters instanceof Array) {
                options.interactivity.modes.emitters = {
                  random: {
                    count: 1,
                    enable: true
                  },
                  value: interactivityEmitters.map(function (s) {
                    var tmp = new Emitter();
                    tmp.load(s);
                    return tmp;
                  })
                };
              } else {
                var emitterMode = interactivityEmitters;
                if (emitterMode.value !== undefined) {
                  if (emitterMode.value instanceof Array) {
                    options.interactivity.modes.emitters = {
                      random: {
                        count: (_c = emitterMode.random.count) !== null && _c !== void 0 ? _c : 1,
                        enable: (_d = emitterMode.random.enable) !== null && _d !== void 0 ? _d : false
                      },
                      value: emitterMode.value.map(function (s) {
                        var tmp = new Emitter();
                        tmp.load(s);
                        return tmp;
                      })
                    };
                  } else {
                    var tmp = new Emitter();
                    tmp.load(emitterMode.value);
                    options.interactivity.modes.emitters = {
                      random: {
                        count: (_e = emitterMode.random.count) !== null && _e !== void 0 ? _e : 1,
                        enable: (_f = emitterMode.random.enable) !== null && _f !== void 0 ? _f : false
                      },
                      value: tmp
                    };
                  }
                } else {
                  var emitterOptions = options.interactivity.modes.emitters = {
                    random: {
                      count: 1,
                      enable: false
                    },
                    value: new Emitter()
                  };
                  emitterOptions.value.load(interactivityEmitters);
                }
              }
            }
          }
        }, {
          key: "needsPlugin",
          value: function needsPlugin(options) {
            var _a, _b, _c;
            if (!options) {
              return false;
            }
            var emitters = options.emitters;
            return emitters instanceof Array && !!emitters.length || emitters !== undefined || !!((_c = (_b = (_a = options.interactivity) === null || _a === void 0 ? void 0 : _a.events) === null || _b === void 0 ? void 0 : _b.onClick) === null || _c === void 0 ? void 0 : _c.mode) && _isInArray("emitter", options.interactivity.events.onClick.mode);
          }
        }]);
        return EmittersPlugin;
      }();
      function loadEmittersPlugin(_x60) {
        return _loadEmittersPlugin.apply(this, arguments);
      }
      function _loadEmittersPlugin() {
        _loadEmittersPlugin = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee62(engine) {
          var plugin;
          return _regeneratorRuntime().wrap(function _callee62$(_context62) {
            while (1) switch (_context62.prev = _context62.next) {
              case 0:
                if (!engine.emitterShapeManager) {
                  engine.emitterShapeManager = new ShapeManager(engine);
                }
                if (!engine.addEmitterShape) {
                  engine.addEmitterShape = function (name, shape) {
                    var _a;
                    (_a = engine.emitterShapeManager) === null || _a === void 0 ? void 0 : _a.addShape(name, shape);
                  };
                }
                plugin = new EmittersPlugin(engine);
                _context62.next = 5;
                return engine.addPlugin(plugin);
              case 5:
                engine.addEmitterShape("circle", new CircleShape());
                engine.addEmitterShape("square", new SquareShape());
              case 7:
              case "end":
                return _context62.stop();
            }
          }, _callee62);
        }));
        return _loadEmittersPlugin.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/trail/dist/esm/Options/Classes/Trail.js
      var Trail = /*#__PURE__*/function () {
        function Trail() {
          _classCallCheck(this, Trail);
          this.delay = 1;
          this.pauseOnStop = false;
          this.quantity = 1;
        }
        _createClass(Trail, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.delay !== undefined) {
              this.delay = data.delay;
            }
            if (data.quantity !== undefined) {
              this.quantity = data.quantity;
            }
            if (data.particles !== undefined) {
              this.particles = _deepExtend({}, data.particles);
            }
            if (data.pauseOnStop !== undefined) {
              this.pauseOnStop = data.pauseOnStop;
            }
          }
        }]);
        return Trail;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/trail/dist/esm/TrailMaker.js
      var TrailMaker = /*#__PURE__*/function (_ExternalInteractorBa) {
        _inherits(TrailMaker, _ExternalInteractorBa);
        var _super14 = _createSuper(TrailMaker);
        function TrailMaker(container) {
          var _this36;
          _classCallCheck(this, TrailMaker);
          _this36 = _super14.call(this, container);
          _this36._delay = 0;
          return _this36;
        }
        _createClass(TrailMaker, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee39(delta) {
              var _a, _b, _c, _d, container, options, trailOptions, optDelay, canEmit;
              return _regeneratorRuntime().wrap(function _callee39$(_context39) {
                while (1) switch (_context39.prev = _context39.next) {
                  case 0:
                    if (this.container.retina.reduceFactor) {
                      _context39.next = 2;
                      break;
                    }
                    return _context39.abrupt("return");
                  case 2:
                    container = this.container, options = container.actualOptions, trailOptions = options.interactivity.modes.trail;
                    if (trailOptions) {
                      _context39.next = 5;
                      break;
                    }
                    return _context39.abrupt("return");
                  case 5:
                    optDelay = trailOptions.delay * 1000 / this.container.retina.reduceFactor;
                    if (this._delay < optDelay) {
                      this._delay += delta.value;
                    }
                    if (!(this._delay < optDelay)) {
                      _context39.next = 9;
                      break;
                    }
                    return _context39.abrupt("return");
                  case 9:
                    canEmit = true;
                    if (trailOptions.pauseOnStop) {
                      if (container.interactivity.mouse.position === this._lastPosition || ((_a = container.interactivity.mouse.position) === null || _a === void 0 ? void 0 : _a.x) === ((_b = this._lastPosition) === null || _b === void 0 ? void 0 : _b.x) && ((_c = container.interactivity.mouse.position) === null || _c === void 0 ? void 0 : _c.y) === ((_d = this._lastPosition) === null || _d === void 0 ? void 0 : _d.y)) {
                        canEmit = false;
                      }
                    }
                    if (container.interactivity.mouse.position) {
                      this._lastPosition = {
                        x: container.interactivity.mouse.position.x,
                        y: container.interactivity.mouse.position.y
                      };
                    } else {
                      delete this._lastPosition;
                    }
                    if (canEmit) {
                      container.particles.push(trailOptions.quantity, container.interactivity.mouse, trailOptions.particles);
                    }
                    this._delay -= optDelay;
                  case 14:
                  case "end":
                    return _context39.stop();
                }
              }, _callee39, this);
            }));
            function interact(_x61) {
              return _interact.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : options.interactivity).events;
            return mouse.clicking && mouse.inside && !!mouse.position && _isInArray("trail", events.onClick.mode) || mouse.inside && !!mouse.position && _isInArray("trail", events.onHover.mode);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.trail) {
              options.trail = new Trail();
            }
            for (var _len7 = arguments.length, sources = new Array(_len7 > 1 ? _len7 - 1 : 0), _key7 = 1; _key7 < _len7; _key7++) {
              sources[_key7 - 1] = arguments[_key7];
            }
            for (var _i6 = 0, _sources3 = sources; _i6 < _sources3.length; _i6++) {
              var source = _sources3[_i6];
              options.trail.load(source === null || source === void 0 ? void 0 : source.trail);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return TrailMaker;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/trail/dist/esm/index.js
      function loadExternalTrailInteraction(_x62) {
        return _loadExternalTrailInteraction.apply(this, arguments);
      }
      function _loadExternalTrailInteraction() {
        _loadExternalTrailInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee63(engine) {
          return _regeneratorRuntime().wrap(function _callee63$(_context63) {
            while (1) switch (_context63.prev = _context63.next) {
              case 0:
                _context63.next = 2;
                return engine.addInteractor("externalTrail", function (container) {
                  return new TrailMaker(container);
                });
              case 2:
              case "end":
                return _context63.stop();
            }
          }, _callee63);
        }));
        return _loadExternalTrailInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/roll/dist/esm/Options/Classes/RollLight.js
      var RollLight = /*#__PURE__*/function () {
        function RollLight() {
          _classCallCheck(this, RollLight);
          this.enable = false;
          this.value = 0;
        }
        _createClass(RollLight, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.value !== undefined) {
              this.value = _setRangeValue(data.value);
            }
          }
        }]);
        return RollLight;
      }();
      ; // CONCATENATED MODULE: ../../updaters/roll/dist/esm/Options/Classes/Roll.js
      var Roll = /*#__PURE__*/function () {
        function Roll() {
          _classCallCheck(this, Roll);
          this.darken = new RollLight();
          this.enable = false;
          this.enlighten = new RollLight();
          this.mode = "vertical";
          this.speed = 25;
        }
        _createClass(Roll, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.backColor !== undefined) {
              this.backColor = _OptionsColor.create(this.backColor, data.backColor);
            }
            this.darken.load(data.darken);
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            this.enlighten.load(data.enlighten);
            if (data.mode !== undefined) {
              this.mode = data.mode;
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
          }
        }]);
        return Roll;
      }();
      ; // CONCATENATED MODULE: ../../updaters/roll/dist/esm/RollUpdater.js

      function updateRoll(particle, delta) {
        var roll = particle.options.roll;
        if (!particle.roll || !(roll === null || roll === void 0 ? void 0 : roll.enable)) {
          return;
        }
        var speed = particle.roll.speed * delta.factor,
          max = 2 * Math.PI;
        particle.roll.angle += speed;
        if (particle.roll.angle > max) {
          particle.roll.angle -= max;
        }
      }
      var RollUpdater = /*#__PURE__*/function () {
        function RollUpdater() {
          _classCallCheck(this, RollUpdater);
        }
        _createClass(RollUpdater, [{
          key: "getTransformValues",
          value: function getTransformValues(particle) {
            var _a;
            var roll = ((_a = particle.roll) === null || _a === void 0 ? void 0 : _a.enable) && particle.roll,
              rollHorizontal = roll && roll.horizontal,
              rollVertical = roll && roll.vertical;
            return {
              a: rollHorizontal ? Math.cos(roll.angle) : undefined,
              d: rollVertical ? Math.sin(roll.angle) : undefined
            };
          }
        }, {
          key: "init",
          value: function init(particle) {
            var rollOpt = particle.options.roll;
            if (rollOpt === null || rollOpt === void 0 ? void 0 : rollOpt.enable) {
              particle.roll = {
                enable: rollOpt.enable,
                horizontal: rollOpt.mode === "horizontal" || rollOpt.mode === "both",
                vertical: rollOpt.mode === "vertical" || rollOpt.mode === "both",
                angle: _getRandom() * Math.PI * 2,
                speed: _getRangeValue(rollOpt.speed) / 360
              };
              if (rollOpt.backColor) {
                particle.backColor = _rangeColorToHsl(rollOpt.backColor);
              } else if (rollOpt.darken.enable && rollOpt.enlighten.enable) {
                var alterType = _getRandom() >= 0.5 ? "darken" : "enlighten";
                particle.roll.alter = {
                  type: alterType,
                  value: _getRangeValue(alterType === "darken" ? rollOpt.darken.value : rollOpt.enlighten.value)
                };
              } else if (rollOpt.darken.enable) {
                particle.roll.alter = {
                  type: "darken",
                  value: _getRangeValue(rollOpt.darken.value)
                };
              } else if (rollOpt.enlighten.enable) {
                particle.roll.alter = {
                  type: "enlighten",
                  value: _getRangeValue(rollOpt.enlighten.value)
                };
              }
            } else {
              particle.roll = {
                enable: false,
                horizontal: false,
                vertical: false,
                angle: 0,
                speed: 0
              };
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var roll = particle.options.roll;
            return !particle.destroyed && !particle.spawning && !!(roll === null || roll === void 0 ? void 0 : roll.enable);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.roll) {
              options.roll = new Roll();
            }
            for (var _len8 = arguments.length, sources = new Array(_len8 > 1 ? _len8 - 1 : 0), _key8 = 1; _key8 < _len8; _key8++) {
              sources[_key8 - 1] = arguments[_key8];
            }
            for (var _i7 = 0, _sources4 = sources; _i7 < _sources4.length; _i7++) {
              var source = _sources4[_i7];
              options.roll.load(source === null || source === void 0 ? void 0 : source.roll);
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateRoll(particle, delta);
          }
        }]);
        return RollUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/roll/dist/esm/index.js
      function loadRollUpdater(_x63) {
        return _loadRollUpdater.apply(this, arguments);
      }
      function _loadRollUpdater() {
        _loadRollUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee64(engine) {
          return _regeneratorRuntime().wrap(function _callee64$(_context64) {
            while (1) switch (_context64.prev = _context64.next) {
              case 0:
                _context64.next = 2;
                return engine.addParticleUpdater("roll", function () {
                  return new RollUpdater();
                });
              case 2:
              case "end":
                return _context64.stop();
            }
          }, _callee64);
        }));
        return _loadRollUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../pjs/dist/esm/index.js
      var initPjs = function initPjs(engine) {
        var particlesJS = function particlesJS(tagId, options) {
          return engine.load(tagId, options);
        };
        particlesJS.load = function (tagId, pathConfigJson, callback) {
          engine.loadJSON(tagId, pathConfigJson).then(function (container) {
            if (container) {
              callback(container);
            }
          })["catch"](function () {
            callback(undefined);
          });
        };
        particlesJS.setOnClickHandler = function (callback) {
          engine.setOnClickHandler(callback);
        };
        var pJSDom = engine.dom();
        return {
          particlesJS: particlesJS,
          pJSDom: pJSDom
        };
      };
      ; // CONCATENATED MODULE: ../../updaters/angle/dist/esm/Options/Classes/RotateAnimation.js
      var RotateAnimation = /*#__PURE__*/function () {
        function RotateAnimation() {
          _classCallCheck(this, RotateAnimation);
          this.enable = false;
          this.speed = 0;
          this.decay = 0;
          this.sync = false;
        }
        _createClass(RotateAnimation, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
            if (data.decay !== undefined) {
              this.decay = _setRangeValue(data.decay);
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return RotateAnimation;
      }();
      ; // CONCATENATED MODULE: ../../updaters/angle/dist/esm/Options/Classes/Rotate.js
      var Rotate = /*#__PURE__*/function (_ValueWithRandom9) {
        _inherits(Rotate, _ValueWithRandom9);
        var _super15 = _createSuper(Rotate);
        function Rotate() {
          var _this37;
          _classCallCheck(this, Rotate);
          _this37 = _super15.call(this);
          _this37.animation = new RotateAnimation();
          _this37.direction = "clockwise";
          _this37.path = false;
          _this37.value = 0;
          return _this37;
        }
        _createClass(Rotate, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(Rotate.prototype), "load", this).call(this, data);
            if (data.direction !== undefined) {
              this.direction = data.direction;
            }
            this.animation.load(data.animation);
            if (data.path !== undefined) {
              this.path = data.path;
            }
          }
        }]);
        return Rotate;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/angle/dist/esm/RotateUpdater.js

      function updateAngle(particle, delta) {
        var _a, _b;
        var rotate = particle.rotate,
          rotateOptions = particle.options.rotate;
        if (!rotate || !rotateOptions) {
          return;
        }
        var rotateAnimation = rotateOptions.animation,
          speed = ((_a = rotate.velocity) !== null && _a !== void 0 ? _a : 0) * delta.factor,
          max = 2 * Math.PI,
          decay = (_b = rotate.decay) !== null && _b !== void 0 ? _b : 1;
        if (!rotateAnimation.enable) {
          return;
        }
        switch (rotate.status) {
          case "increasing":
            rotate.value += speed;
            if (rotate.value > max) {
              rotate.value -= max;
            }
            break;
          case "decreasing":
          default:
            rotate.value -= speed;
            if (rotate.value < 0) {
              rotate.value += max;
            }
            break;
        }
        if (rotate.velocity && decay !== 1) {
          rotate.velocity *= decay;
        }
      }
      var RotateUpdater = /*#__PURE__*/function () {
        function RotateUpdater(container) {
          _classCallCheck(this, RotateUpdater);
          this.container = container;
        }
        _createClass(RotateUpdater, [{
          key: "init",
          value: function init(particle) {
            var rotateOptions = particle.options.rotate;
            if (!rotateOptions) {
              return;
            }
            particle.rotate = {
              enable: rotateOptions.animation.enable,
              value: _getRangeValue(rotateOptions.value) * Math.PI / 180
            };
            particle.pathRotation = rotateOptions.path;
            var rotateDirection = rotateOptions.direction;
            if (rotateDirection === "random") {
              var index = Math.floor(_getRandom() * 2);
              rotateDirection = index > 0 ? "counter-clockwise" : "clockwise";
            }
            switch (rotateDirection) {
              case "counter-clockwise":
              case "counterClockwise":
                particle.rotate.status = "decreasing";
                break;
              case "clockwise":
                particle.rotate.status = "increasing";
                break;
            }
            var rotateAnimation = rotateOptions.animation;
            if (rotateAnimation.enable) {
              particle.rotate.decay = 1 - _getRangeValue(rotateAnimation.decay);
              particle.rotate.velocity = _getRangeValue(rotateAnimation.speed) / 360 * this.container.retina.reduceFactor;
              if (!rotateAnimation.sync) {
                particle.rotate.velocity *= _getRandom();
              }
            }
            particle.rotation = particle.rotate.value;
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var rotate = particle.options.rotate;
            if (!rotate) {
              return false;
            }
            return !particle.destroyed && !particle.spawning && rotate.animation.enable && !rotate.path;
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.rotate) {
              options.rotate = new Rotate();
            }
            for (var _len9 = arguments.length, sources = new Array(_len9 > 1 ? _len9 - 1 : 0), _key9 = 1; _key9 < _len9; _key9++) {
              sources[_key9 - 1] = arguments[_key9];
            }
            for (var _i8 = 0, _sources5 = sources; _i8 < _sources5.length; _i8++) {
              var source = _sources5[_i8];
              options.rotate.load(source === null || source === void 0 ? void 0 : source.rotate);
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            var _a, _b;
            if (!this.isEnabled(particle)) {
              return;
            }
            updateAngle(particle, delta);
            particle.rotation = (_b = (_a = particle.rotate) === null || _a === void 0 ? void 0 : _a.value) !== null && _b !== void 0 ? _b : 0;
          }
        }]);
        return RotateUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/angle/dist/esm/index.js
      function loadAngleUpdater(_x64) {
        return _loadAngleUpdater.apply(this, arguments);
      }
      function _loadAngleUpdater() {
        _loadAngleUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee65(engine) {
          return _regeneratorRuntime().wrap(function _callee65$(_context65) {
            while (1) switch (_context65.prev = _context65.next) {
              case 0:
                _context65.next = 2;
                return engine.addParticleUpdater("rotate", function (container) {
                  return new RotateUpdater(container);
                });
              case 2:
              case "end":
                return _context65.stop();
            }
          }, _callee65);
        }));
        return _loadAngleUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../move/base/dist/esm/Utils.js

      function applyDistance(particle) {
        var initialPosition = particle.initialPosition,
          _getDistances4 = _getDistances(initialPosition, particle.position),
          dx = _getDistances4.dx,
          dy = _getDistances4.dy,
          dxFixed = Math.abs(dx),
          dyFixed = Math.abs(dy),
          hDistance = particle.retina.maxDistance.horizontal,
          vDistance = particle.retina.maxDistance.vertical;
        if (!hDistance && !vDistance) {
          return;
        }
        if ((hDistance && dxFixed >= hDistance || vDistance && dyFixed >= vDistance) && !particle.misplaced) {
          particle.misplaced = !!hDistance && dxFixed > hDistance || !!vDistance && dyFixed > vDistance;
          if (hDistance) {
            particle.velocity.x = particle.velocity.y / 2 - particle.velocity.x;
          }
          if (vDistance) {
            particle.velocity.y = particle.velocity.x / 2 - particle.velocity.y;
          }
        } else if ((!hDistance || dxFixed < hDistance) && (!vDistance || dyFixed < vDistance) && particle.misplaced) {
          particle.misplaced = false;
        } else if (particle.misplaced) {
          var pos = particle.position,
            vel = particle.velocity;
          if (hDistance && (pos.x < initialPosition.x && vel.x < 0 || pos.x > initialPosition.x && vel.x > 0)) {
            vel.x *= -_getRandom();
          }
          if (vDistance && (pos.y < initialPosition.y && vel.y < 0 || pos.y > initialPosition.y && vel.y > 0)) {
            vel.y *= -_getRandom();
          }
        }
      }
      function spin(particle, moveSpeed) {
        var container = particle.container;
        if (!particle.spin) {
          return;
        }
        var updateFunc = {
          x: particle.spin.direction === "clockwise" ? Math.cos : Math.sin,
          y: particle.spin.direction === "clockwise" ? Math.sin : Math.cos
        };
        particle.position.x = particle.spin.center.x + particle.spin.radius * updateFunc.x(particle.spin.angle);
        particle.position.y = particle.spin.center.y + particle.spin.radius * updateFunc.y(particle.spin.angle);
        particle.spin.radius += particle.spin.acceleration;
        var maxCanvasSize = Math.max(container.canvas.size.width, container.canvas.size.height);
        if (particle.spin.radius > maxCanvasSize / 2) {
          particle.spin.radius = maxCanvasSize / 2;
          particle.spin.acceleration *= -1;
        } else if (particle.spin.radius < 0) {
          particle.spin.radius = 0;
          particle.spin.acceleration *= -1;
        }
        particle.spin.angle += moveSpeed / 100 * (1 - particle.spin.radius / maxCanvasSize);
      }
      function applyPath(particle, delta) {
        var _a;
        var particlesOptions = particle.options,
          pathOptions = particlesOptions.move.path,
          pathEnabled = pathOptions.enable;
        if (!pathEnabled) {
          return;
        }
        if (particle.lastPathTime <= particle.pathDelay) {
          particle.lastPathTime += delta.value;
          return;
        }
        var path = (_a = particle.pathGenerator) === null || _a === void 0 ? void 0 : _a.generate(particle);
        if (path) {
          particle.velocity.addTo(path);
        }
        if (pathOptions.clamp) {
          particle.velocity.x = _clamp(particle.velocity.x, -1, 1);
          particle.velocity.y = _clamp(particle.velocity.y, -1, 1);
        }
        particle.lastPathTime -= particle.pathDelay;
      }
      function getProximitySpeedFactor(particle) {
        return particle.slow.inRange ? particle.slow.factor : 1;
      }
      ; // CONCATENATED MODULE: ../../move/base/dist/esm/BaseMover.js
      var BaseMover = /*#__PURE__*/function () {
        function BaseMover() {
          _classCallCheck(this, BaseMover);
        }
        _createClass(BaseMover, [{
          key: "init",
          value: function init(particle) {
            var _a;
            var container = particle.container,
              options = particle.options,
              gravityOptions = options.move.gravity,
              spinOptions = options.move.spin;
            particle.gravity = {
              enable: gravityOptions.enable,
              acceleration: _getRangeValue(gravityOptions.acceleration),
              inverse: gravityOptions.inverse
            };
            if (spinOptions.enable) {
              var spinPos = (_a = spinOptions.position) !== null && _a !== void 0 ? _a : {
                  x: 50,
                  y: 50
                },
                spinCenter = {
                  x: spinPos.x / 100 * container.canvas.size.width,
                  y: spinPos.y / 100 * container.canvas.size.height
                },
                pos = particle.getPosition(),
                distance = _getDistance(pos, spinCenter),
                spinAcceleration = _getRangeValue(spinOptions.acceleration);
              particle.retina.spinAcceleration = spinAcceleration * container.retina.pixelRatio;
              particle.spin = {
                center: spinCenter,
                direction: particle.velocity.x >= 0 ? "clockwise" : "counter-clockwise",
                angle: particle.velocity.angle,
                radius: distance,
                acceleration: particle.retina.spinAcceleration
              };
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return !particle.destroyed && particle.options.move.enable;
          }
        }, {
          key: "move",
          value: function move(particle, delta) {
            var _a, _b, _c;
            var _d, _e;
            var particleOptions = particle.options,
              moveOptions = particleOptions.move;
            if (!moveOptions.enable) {
              return;
            }
            var container = particle.container,
              slowFactor = getProximitySpeedFactor(particle),
              baseSpeed = ((_a = (_d = particle.retina).moveSpeed) !== null && _a !== void 0 ? _a : _d.moveSpeed = _getRangeValue(moveOptions.speed) * container.retina.pixelRatio) * container.retina.reduceFactor,
              moveDrift = (_b = (_e = particle.retina).moveDrift) !== null && _b !== void 0 ? _b : _e.moveDrift = _getRangeValue(particle.options.move.drift) * container.retina.pixelRatio,
              maxSize = _getRangeMax(particleOptions.size.value) * container.retina.pixelRatio,
              sizeFactor = moveOptions.size ? particle.getRadius() / maxSize : 1,
              speedFactor = sizeFactor * slowFactor * (delta.factor || 1),
              diffFactor = 2,
              moveSpeed = baseSpeed * speedFactor / diffFactor;
            if (moveOptions.spin.enable) {
              spin(particle, moveSpeed);
            } else {
              applyPath(particle, delta);
              var gravityOptions = particle.gravity,
                gravityFactor = (gravityOptions === null || gravityOptions === void 0 ? void 0 : gravityOptions.enable) && gravityOptions.inverse ? -1 : 1;
              if ((gravityOptions === null || gravityOptions === void 0 ? void 0 : gravityOptions.enable) && moveSpeed) {
                particle.velocity.y += gravityFactor * (gravityOptions.acceleration * delta.factor) / (60 * moveSpeed);
              }
              if (moveDrift && moveSpeed) {
                particle.velocity.x += moveDrift * delta.factor / (60 * moveSpeed);
              }
              var decay = particle.moveDecay;
              if (decay != 1) {
                particle.velocity.multTo(decay);
              }
              var velocity = particle.velocity.mult(moveSpeed),
                maxSpeed = (_c = particle.retina.maxSpeed) !== null && _c !== void 0 ? _c : container.retina.maxSpeed;
              if ((gravityOptions === null || gravityOptions === void 0 ? void 0 : gravityOptions.enable) && maxSpeed > 0 && (!gravityOptions.inverse && velocity.y >= 0 && velocity.y >= maxSpeed || gravityOptions.inverse && velocity.y <= 0 && velocity.y <= -maxSpeed)) {
                velocity.y = gravityFactor * maxSpeed;
                if (moveSpeed) {
                  particle.velocity.y = velocity.y / moveSpeed;
                }
              }
              var zIndexOptions = particle.options.zIndex,
                zVelocityFactor = Math.pow(1 - particle.zIndexFactor, zIndexOptions.velocityRate);
              if (zVelocityFactor != 1) {
                velocity.multTo(zVelocityFactor);
              }
              particle.position.addTo(velocity);
              if (moveOptions.vibrate) {
                particle.position.x += Math.sin(particle.position.x * Math.cos(particle.position.y));
                particle.position.y += Math.cos(particle.position.y * Math.sin(particle.position.x));
              }
            }
            applyDistance(particle);
          }
        }]);
        return BaseMover;
      }();
      ; // CONCATENATED MODULE: ../../move/base/dist/esm/index.js
      function loadBaseMover(_x65) {
        return _loadBaseMover.apply(this, arguments);
      }
      function _loadBaseMover() {
        _loadBaseMover = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee66(engine) {
          return _regeneratorRuntime().wrap(function _callee66$(_context66) {
            while (1) switch (_context66.prev = _context66.next) {
              case 0:
                engine.addMover("base", function () {
                  return new BaseMover();
                });
              case 1:
              case "end":
                return _context66.stop();
            }
          }, _callee66);
        }));
        return _loadBaseMover.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/circle/dist/esm/CircleDrawer.js
      var CircleDrawer = /*#__PURE__*/function () {
        function CircleDrawer() {
          _classCallCheck(this, CircleDrawer);
        }
        _createClass(CircleDrawer, [{
          key: "draw",
          value: function draw(context, particle, radius) {
            if (!particle.circleRange) {
              particle.circleRange = {
                min: 0,
                max: Math.PI * 2
              };
            }
            var circleRange = particle.circleRange;
            context.arc(0, 0, radius, circleRange.min, circleRange.max, false);
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 12;
          }
        }, {
          key: "particleInit",
          value: function particleInit(container, particle) {
            var _a;
            var shapeData = particle.shapeData,
              angle = (_a = shapeData === null || shapeData === void 0 ? void 0 : shapeData.angle) !== null && _a !== void 0 ? _a : {
                max: 360,
                min: 0
              };
            particle.circleRange = _typeof(angle) !== "object" ? {
              min: 0,
              max: angle * Math.PI / 180
            } : {
              min: angle.min * Math.PI / 180,
              max: angle.max * Math.PI / 180
            };
          }
        }]);
        return CircleDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/circle/dist/esm/index.js
      function loadCircleShape(_x66) {
        return _loadCircleShape.apply(this, arguments);
      }
      function _loadCircleShape() {
        _loadCircleShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee67(engine) {
          return _regeneratorRuntime().wrap(function _callee67$(_context67) {
            while (1) switch (_context67.prev = _context67.next) {
              case 0:
                _context67.next = 2;
                return engine.addShape("circle", new CircleDrawer());
              case 2:
              case "end":
                return _context67.stop();
            }
          }, _callee67);
        }));
        return _loadCircleShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/color/dist/esm/ColorUpdater.js

      function updateColorValue(delta, value, valueAnimation, max, decrease) {
        var _a, _b;
        var colorValue = value;
        if (!colorValue || !valueAnimation.enable || colorValue.loops !== undefined && colorValue.maxLoops !== undefined && colorValue.maxLoops > 0 && colorValue.loops >= colorValue.maxLoops) {
          return;
        }
        var offset = _randomInRange(valueAnimation.offset),
          velocity = ((_a = value.velocity) !== null && _a !== void 0 ? _a : 0) * delta.factor + offset * 3.6,
          decay = (_b = value.decay) !== null && _b !== void 0 ? _b : 1;
        if (!decrease || colorValue.status === "increasing") {
          colorValue.value += velocity;
          if (colorValue.value > max) {
            if (!colorValue.loops) {
              colorValue.loops = 0;
            }
            colorValue.loops++;
            if (decrease) {
              colorValue.status = "decreasing";
              colorValue.value -= colorValue.value % max;
            }
          }
        } else {
          colorValue.value -= velocity;
          if (colorValue.value < 0) {
            if (!colorValue.loops) {
              colorValue.loops = 0;
            }
            colorValue.loops++;
            colorValue.status = "increasing";
            colorValue.value += colorValue.value;
          }
        }
        if (colorValue.velocity && decay !== 1) {
          colorValue.velocity *= decay;
        }
        if (colorValue.value > max) {
          colorValue.value %= max;
        }
      }
      function updateColor(particle, delta) {
        var _a, _b, _c;
        var animationOptions = particle.options.color.animation;
        var h = (_a = particle.color) === null || _a === void 0 ? void 0 : _a.h,
          s = (_b = particle.color) === null || _b === void 0 ? void 0 : _b.s,
          l = (_c = particle.color) === null || _c === void 0 ? void 0 : _c.l;
        if (h) {
          updateColorValue(delta, h, animationOptions.h, 360, false);
        }
        if (s) {
          updateColorValue(delta, s, animationOptions.s, 100, true);
        }
        if (l) {
          updateColorValue(delta, l, animationOptions.l, 100, true);
        }
      }
      var ColorUpdater = /*#__PURE__*/function () {
        function ColorUpdater(container) {
          _classCallCheck(this, ColorUpdater);
          this.container = container;
        }
        _createClass(ColorUpdater, [{
          key: "init",
          value: function init(particle) {
            var hslColor = _rangeColorToHsl(particle.options.color, particle.id, particle.options.reduceDuplicates);
            if (hslColor) {
              particle.color = _getHslAnimationFromHsl(hslColor, particle.options.color.animation, this.container.retina.reduceFactor);
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a, _b, _c;
            var animationOptions = particle.options.color.animation;
            return !particle.destroyed && !particle.spawning && (((_a = particle.color) === null || _a === void 0 ? void 0 : _a.h.value) !== undefined && animationOptions.h.enable || ((_b = particle.color) === null || _b === void 0 ? void 0 : _b.s.value) !== undefined && animationOptions.s.enable || ((_c = particle.color) === null || _c === void 0 ? void 0 : _c.l.value) !== undefined && animationOptions.l.enable);
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            updateColor(particle, delta);
          }
        }]);
        return ColorUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/color/dist/esm/index.js
      function loadColorUpdater(_x67) {
        return _loadColorUpdater.apply(this, arguments);
      }
      function _loadColorUpdater() {
        _loadColorUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee68(engine) {
          return _regeneratorRuntime().wrap(function _callee68$(_context68) {
            while (1) switch (_context68.prev = _context68.next) {
              case 0:
                _context68.next = 2;
                return engine.addParticleUpdater("color", function (container) {
                  return new ColorUpdater(container);
                });
              case 2:
              case "end":
                return _context68.stop();
            }
          }, _callee68);
        }));
        return _loadColorUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/attract/dist/esm/Options/Classes/Attract.js
      var Attract = /*#__PURE__*/function () {
        function Attract() {
          _classCallCheck(this, Attract);
          this.distance = 200;
          this.duration = 0.4;
          this.easing = "ease-out-quad";
          this.factor = 1;
          this.maxSpeed = 50;
          this.speed = 1;
        }
        _createClass(Attract, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            if (data.duration !== undefined) {
              this.duration = data.duration;
            }
            if (data.easing !== undefined) {
              this.easing = data.easing;
            }
            if (data.factor !== undefined) {
              this.factor = data.factor;
            }
            if (data.maxSpeed !== undefined) {
              this.maxSpeed = data.maxSpeed;
            }
            if (data.speed !== undefined) {
              this.speed = data.speed;
            }
          }
        }]);
        return Attract;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/attract/dist/esm/Attractor.js
      var Attractor = /*#__PURE__*/function (_ExternalInteractorBa2) {
        _inherits(Attractor, _ExternalInteractorBa2);
        var _super16 = _createSuper(Attractor);
        function Attractor(engine, container) {
          var _this38;
          _classCallCheck(this, Attractor);
          _this38 = _super16.call(this, container);
          _this38._engine = engine;
          if (!container.attract) {
            container.attract = {
              particles: []
            };
          }
          _this38.handleClickMode = function (mode) {
            var options = _this38.container.actualOptions,
              attract = options.interactivity.modes.attract;
            if (!attract || mode !== "attract") {
              return;
            }
            if (!container.attract) {
              container.attract = {
                particles: []
              };
            }
            container.attract.clicking = true;
            container.attract.count = 0;
            var _iterator74 = _createForOfIteratorHelper(container.attract.particles),
              _step74;
            try {
              for (_iterator74.s(); !(_step74 = _iterator74.n()).done;) {
                var particle = _step74.value;
                if (!_this38.isEnabled(particle)) {
                  continue;
                }
                particle.velocity.setTo(particle.initialVelocity);
              }
            } catch (err) {
              _iterator74.e(err);
            } finally {
              _iterator74.f();
            }
            container.attract.particles = [];
            container.attract.finish = false;
            setTimeout(function () {
              if (!container.destroyed) {
                if (!container.attract) {
                  container.attract = {
                    particles: []
                  };
                }
                container.attract.clicking = false;
              }
            }, attract.duration * 1000);
          };
          return _this38;
        }
        _createClass(Attractor, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              attract = container.actualOptions.interactivity.modes.attract;
            if (!attract) {
              return;
            }
            container.retina.attractModeDistance = attract.distance * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee40() {
              var container, options, mouseMoveStatus, events, hoverEnabled, hoverMode, clickEnabled, clickMode;
              return _regeneratorRuntime().wrap(function _callee40$(_context40) {
                while (1) switch (_context40.prev = _context40.next) {
                  case 0:
                    container = this.container, options = container.actualOptions, mouseMoveStatus = container.interactivity.status === _mouseMoveEvent, events = options.interactivity.events, hoverEnabled = events.onHover.enable, hoverMode = events.onHover.mode, clickEnabled = events.onClick.enable, clickMode = events.onClick.mode;
                    if (mouseMoveStatus && hoverEnabled && _isInArray("attract", hoverMode)) {
                      this.hoverAttract();
                    } else if (clickEnabled && _isInArray("attract", clickMode)) {
                      this.clickAttract();
                    }
                  case 2:
                  case "end":
                    return _context40.stop();
                }
              }, _callee40, this);
            }));
            function interact() {
              return _interact2.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : options.interactivity).events;
            if ((!mouse.position || !events.onHover.enable) && (!mouse.clickPosition || !events.onClick.enable)) {
              return false;
            }
            var hoverMode = events.onHover.mode,
              clickMode = events.onClick.mode;
            return _isInArray("attract", hoverMode) || _isInArray("attract", clickMode);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.attract) {
              options.attract = new Attract();
            }
            for (var _len10 = arguments.length, sources = new Array(_len10 > 1 ? _len10 - 1 : 0), _key10 = 1; _key10 < _len10; _key10++) {
              sources[_key10 - 1] = arguments[_key10];
            }
            for (var _i9 = 0, _sources6 = sources; _i9 < _sources6.length; _i9++) {
              var source = _sources6[_i9];
              options.attract.load(source === null || source === void 0 ? void 0 : source.attract);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }, {
          key: "clickAttract",
          value: function clickAttract() {
            var container = this.container;
            if (!container.attract) {
              container.attract = {
                particles: []
              };
            }
            if (!container.attract.finish) {
              if (!container.attract.count) {
                container.attract.count = 0;
              }
              container.attract.count++;
              if (container.attract.count === container.particles.count) {
                container.attract.finish = true;
              }
            }
            if (container.attract.clicking) {
              var mousePos = container.interactivity.mouse.clickPosition,
                attractRadius = container.retina.attractModeDistance;
              if (!attractRadius || attractRadius < 0 || !mousePos) {
                return;
              }
              this.processAttract(mousePos, attractRadius, new _Circle(mousePos.x, mousePos.y, attractRadius));
            } else if (container.attract.clicking === false) {
              container.attract.particles = [];
            }
            return;
          }
        }, {
          key: "hoverAttract",
          value: function hoverAttract() {
            var container = this.container,
              mousePos = container.interactivity.mouse.position,
              attractRadius = container.retina.attractModeDistance;
            if (!attractRadius || attractRadius < 0 || !mousePos) {
              return;
            }
            this.processAttract(mousePos, attractRadius, new _Circle(mousePos.x, mousePos.y, attractRadius));
          }
        }, {
          key: "processAttract",
          value: function processAttract(position, attractRadius, area) {
            var _this39 = this;
            var container = this.container,
              attractOptions = container.actualOptions.interactivity.modes.attract;
            if (!attractOptions) {
              return;
            }
            var query = container.particles.quadTree.query(area, function (p) {
              return _this39.isEnabled(p);
            });
            var _iterator75 = _createForOfIteratorHelper(query),
              _step75;
            try {
              for (_iterator75.s(); !(_step75 = _iterator75.n()).done;) {
                var particle = _step75.value;
                var _getDistances5 = _getDistances(particle.position, position),
                  dx = _getDistances5.dx,
                  dy = _getDistances5.dy,
                  distance = _getDistances5.distance;
                var velocity = attractOptions.speed * attractOptions.factor;
                var attractFactor = _clamp(_getEasing(attractOptions.easing)(1 - distance / attractRadius) * velocity, 0, attractOptions.maxSpeed);
                var normVec = _Vector.create(distance === 0 ? velocity : dx / distance * attractFactor, distance === 0 ? velocity : dy / distance * attractFactor);
                particle.position.subFrom(normVec);
              }
            } catch (err) {
              _iterator75.e(err);
            } finally {
              _iterator75.f();
            }
          }
        }]);
        return Attractor;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/attract/dist/esm/index.js
      function loadExternalAttractInteraction(_x68) {
        return _loadExternalAttractInteraction.apply(this, arguments);
      }
      function _loadExternalAttractInteraction() {
        _loadExternalAttractInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee69(engine) {
          return _regeneratorRuntime().wrap(function _callee69$(_context69) {
            while (1) switch (_context69.prev = _context69.next) {
              case 0:
                _context69.next = 2;
                return engine.addInteractor("externalAttract", function (container) {
                  return new Attractor(engine, container);
                });
              case 2:
              case "end":
                return _context69.stop();
            }
          }, _callee69);
        }));
        return _loadExternalAttractInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/bounce/dist/esm/Options/Classes/Bounce.js
      var Bounce = /*#__PURE__*/function () {
        function Bounce() {
          _classCallCheck(this, Bounce);
          this.distance = 200;
        }
        _createClass(Bounce, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
          }
        }]);
        return Bounce;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/bounce/dist/esm/Bouncer.js
      var Bouncer = /*#__PURE__*/function (_ExternalInteractorBa3) {
        _inherits(Bouncer, _ExternalInteractorBa3);
        var _super17 = _createSuper(Bouncer);
        function Bouncer(container) {
          _classCallCheck(this, Bouncer);
          return _super17.call(this, container);
        }
        _createClass(Bouncer, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              bounce = container.actualOptions.interactivity.modes.bounce;
            if (!bounce) {
              return;
            }
            container.retina.bounceModeDistance = bounce.distance * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee41() {
              var _this40 = this;
              var container, options, events, mouseMoveStatus, hoverEnabled, hoverMode, divs;
              return _regeneratorRuntime().wrap(function _callee41$(_context41) {
                while (1) switch (_context41.prev = _context41.next) {
                  case 0:
                    container = this.container, options = container.actualOptions, events = options.interactivity.events, mouseMoveStatus = container.interactivity.status === _mouseMoveEvent, hoverEnabled = events.onHover.enable, hoverMode = events.onHover.mode, divs = events.onDiv;
                    if (mouseMoveStatus && hoverEnabled && _isInArray("bounce", hoverMode)) {
                      this.processMouseBounce();
                    } else {
                      _divModeExecute("bounce", divs, function (selector, div) {
                        return _this40.singleSelectorBounce(selector, div);
                      });
                    }
                  case 2:
                  case "end":
                    return _context41.stop();
                }
              }, _callee41, this);
            }));
            function interact() {
              return _interact3.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : options.interactivity).events,
              divs = events.onDiv;
            return mouse.position && events.onHover.enable && _isInArray("bounce", events.onHover.mode) || _isDivModeEnabled("bounce", divs);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.bounce) {
              options.bounce = new Bounce();
            }
            for (var _len11 = arguments.length, sources = new Array(_len11 > 1 ? _len11 - 1 : 0), _key11 = 1; _key11 < _len11; _key11++) {
              sources[_key11 - 1] = arguments[_key11];
            }
            for (var _i10 = 0, _sources7 = sources; _i10 < _sources7.length; _i10++) {
              var source = _sources7[_i10];
              options.bounce.load(source === null || source === void 0 ? void 0 : source.bounce);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }, {
          key: "processBounce",
          value: function processBounce(position, radius, area) {
            var _this41 = this;
            var query = this.container.particles.quadTree.query(area, function (p) {
              return _this41.isEnabled(p);
            });
            var _iterator76 = _createForOfIteratorHelper(query),
              _step76;
            try {
              for (_iterator76.s(); !(_step76 = _iterator76.n()).done;) {
                var particle = _step76.value;
                if (area instanceof _Circle) {
                  _circleBounce(_circleBounceDataFromParticle(particle), {
                    position: position,
                    radius: radius,
                    mass: Math.pow(radius, 2) * Math.PI / 2,
                    velocity: _Vector.origin,
                    factor: _Vector.origin
                  });
                } else if (area instanceof _Rectangle) {
                  _rectBounce(particle, _calculateBounds(position, radius));
                }
              }
            } catch (err) {
              _iterator76.e(err);
            } finally {
              _iterator76.f();
            }
          }
        }, {
          key: "processMouseBounce",
          value: function processMouseBounce() {
            var container = this.container,
              pxRatio = container.retina.pixelRatio,
              tolerance = 10 * pxRatio,
              mousePos = container.interactivity.mouse.position,
              radius = container.retina.bounceModeDistance;
            if (!radius || radius < 0 || !mousePos) {
              return;
            }
            this.processBounce(mousePos, radius, new _Circle(mousePos.x, mousePos.y, radius + tolerance));
          }
        }, {
          key: "singleSelectorBounce",
          value: function singleSelectorBounce(selector, div) {
            var _this42 = this;
            var container = this.container,
              query = document.querySelectorAll(selector);
            if (!query.length) {
              return;
            }
            query.forEach(function (item) {
              var elem = item,
                pxRatio = container.retina.pixelRatio,
                pos = {
                  x: (elem.offsetLeft + elem.offsetWidth / 2) * pxRatio,
                  y: (elem.offsetTop + elem.offsetHeight / 2) * pxRatio
                },
                radius = elem.offsetWidth / 2 * pxRatio,
                tolerance = 10 * pxRatio,
                area = div.type === "circle" ? new _Circle(pos.x, pos.y, radius + tolerance) : new _Rectangle(elem.offsetLeft * pxRatio - tolerance, elem.offsetTop * pxRatio - tolerance, elem.offsetWidth * pxRatio + tolerance * 2, elem.offsetHeight * pxRatio + tolerance * 2);
              _this42.processBounce(pos, radius, area);
            });
          }
        }]);
        return Bouncer;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/bounce/dist/esm/index.js
      function loadExternalBounceInteraction(_x69) {
        return _loadExternalBounceInteraction.apply(this, arguments);
      }
      function _loadExternalBounceInteraction() {
        _loadExternalBounceInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee70(engine) {
          return _regeneratorRuntime().wrap(function _callee70$(_context70) {
            while (1) switch (_context70.prev = _context70.next) {
              case 0:
                _context70.next = 2;
                return engine.addInteractor("externalBounce", function (container) {
                  return new Bouncer(container);
                });
              case 2:
              case "end":
                return _context70.stop();
            }
          }, _callee70);
        }));
        return _loadExternalBounceInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/bubble/dist/esm/Options/Classes/BubbleBase.js
      var BubbleBase = /*#__PURE__*/function () {
        function BubbleBase() {
          _classCallCheck(this, BubbleBase);
          this.distance = 200;
          this.duration = 0.4;
          this.mix = false;
        }
        _createClass(BubbleBase, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            if (data.duration !== undefined) {
              this.duration = data.duration;
            }
            if (data.mix !== undefined) {
              this.mix = data.mix;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
            if (data.color !== undefined) {
              var sourceColor = this.color instanceof Array ? undefined : this.color;
              this.color = _executeOnSingleOrMultiple(data.color, function (color) {
                return _OptionsColor.create(sourceColor, color);
              });
            }
            if (data.size !== undefined) {
              this.size = data.size;
            }
          }
        }]);
        return BubbleBase;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/bubble/dist/esm/Options/Classes/BubbleDiv.js
      var BubbleDiv = /*#__PURE__*/function (_BubbleBase) {
        _inherits(BubbleDiv, _BubbleBase);
        var _super18 = _createSuper(BubbleDiv);
        function BubbleDiv() {
          var _this43;
          _classCallCheck(this, BubbleDiv);
          _this43 = _super18.call(this);
          _this43.selectors = [];
          return _this43;
        }
        _createClass(BubbleDiv, [{
          key: "ids",
          get: function get() {
            return _executeOnSingleOrMultiple(this.selectors, function (t) {
              return t.replace("#", "");
            });
          },
          set: function set(value) {
            this.selectors = _executeOnSingleOrMultiple(value, function (t) {
              return "#".concat(t);
            });
          }
        }, {
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(BubbleDiv.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            if (data.ids !== undefined) {
              this.ids = data.ids;
            }
            if (data.selectors !== undefined) {
              this.selectors = data.selectors;
            }
          }
        }]);
        return BubbleDiv;
      }(BubbleBase);
      ; // CONCATENATED MODULE: ../../interactions/external/bubble/dist/esm/Options/Classes/Bubble.js
      var Bubble = /*#__PURE__*/function (_BubbleBase2) {
        _inherits(Bubble, _BubbleBase2);
        var _super19 = _createSuper(Bubble);
        function Bubble() {
          _classCallCheck(this, Bubble);
          return _super19.apply(this, arguments);
        }
        _createClass(Bubble, [{
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(Bubble.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            this.divs = _executeOnSingleOrMultiple(data.divs, function (div) {
              var tmp = new BubbleDiv();
              tmp.load(div);
              return tmp;
            });
          }
        }]);
        return Bubble;
      }(BubbleBase);
      ; // CONCATENATED MODULE: ../../interactions/external/bubble/dist/esm/Bubbler.js

      function calculateBubbleValue(particleValue, modeValue, optionsValue, ratio) {
        if (modeValue >= optionsValue) {
          var value = particleValue + (modeValue - optionsValue) * ratio;
          return _clamp(value, particleValue, modeValue);
        } else if (modeValue < optionsValue) {
          var _value2 = particleValue - (optionsValue - modeValue) * ratio;
          return _clamp(_value2, modeValue, particleValue);
        }
      }
      var Bubbler = /*#__PURE__*/function (_ExternalInteractorBa4) {
        _inherits(Bubbler, _ExternalInteractorBa4);
        var _super20 = _createSuper(Bubbler);
        function Bubbler(container) {
          var _this44;
          _classCallCheck(this, Bubbler);
          _this44 = _super20.call(this, container);
          if (!container.bubble) {
            container.bubble = {};
          }
          _this44.handleClickMode = function (mode) {
            if (mode !== "bubble") {
              return;
            }
            if (!container.bubble) {
              container.bubble = {};
            }
            container.bubble.clicking = true;
          };
          return _this44;
        }
        _createClass(Bubbler, [{
          key: "clear",
          value: function clear(particle, delta, force) {
            if (particle.bubble.inRange && !force) {
              return;
            }
            delete particle.bubble.div;
            delete particle.bubble.opacity;
            delete particle.bubble.radius;
            delete particle.bubble.color;
          }
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              bubble = container.actualOptions.interactivity.modes.bubble;
            if (!bubble) {
              return;
            }
            container.retina.bubbleModeDistance = bubble.distance * container.retina.pixelRatio;
            if (bubble.size !== undefined) {
              container.retina.bubbleModeSize = bubble.size * container.retina.pixelRatio;
            }
          }
        }, {
          key: "interact",
          value: function () {
            var _interact4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee42(delta) {
              var _this45 = this;
              var options, events, onHover, onClick, hoverEnabled, hoverMode, clickEnabled, clickMode, divs;
              return _regeneratorRuntime().wrap(function _callee42$(_context42) {
                while (1) switch (_context42.prev = _context42.next) {
                  case 0:
                    options = this.container.actualOptions, events = options.interactivity.events, onHover = events.onHover, onClick = events.onClick, hoverEnabled = onHover.enable, hoverMode = onHover.mode, clickEnabled = onClick.enable, clickMode = onClick.mode, divs = events.onDiv;
                    if (hoverEnabled && _isInArray("bubble", hoverMode)) {
                      this.hoverBubble(delta);
                    } else if (clickEnabled && _isInArray("bubble", clickMode)) {
                      this.clickBubble(delta);
                    } else {
                      _divModeExecute("bubble", divs, function (selector, div) {
                        return _this45.singleSelectorHover(delta, selector, div);
                      });
                    }
                  case 2:
                  case "end":
                    return _context42.stop();
                }
              }, _callee42, this);
            }));
            function interact(_x70) {
              return _interact4.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : options.interactivity).events,
              divs = events.onDiv,
              divBubble = _isDivModeEnabled("bubble", divs);
            if (!(divBubble || events.onHover.enable && mouse.position || events.onClick.enable && mouse.clickPosition)) {
              return false;
            }
            var hoverMode = events.onHover.mode;
            var clickMode = events.onClick.mode;
            return _isInArray("bubble", hoverMode) || _isInArray("bubble", clickMode) || divBubble;
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.bubble) {
              options.bubble = new Bubble();
            }
            for (var _len12 = arguments.length, sources = new Array(_len12 > 1 ? _len12 - 1 : 0), _key12 = 1; _key12 < _len12; _key12++) {
              sources[_key12 - 1] = arguments[_key12];
            }
            for (var _i11 = 0, _sources8 = sources; _i11 < _sources8.length; _i11++) {
              var source = _sources8[_i11];
              options.bubble.load(source === null || source === void 0 ? void 0 : source.bubble);
            }
          }
        }, {
          key: "reset",
          value: function reset(particle) {
            particle.bubble.inRange = false;
          }
        }, {
          key: "clickBubble",
          value: function clickBubble(delta) {
            var _this46 = this;
            var _a, _b;
            var container = this.container,
              options = container.actualOptions,
              mouseClickPos = container.interactivity.mouse.clickPosition,
              bubble = options.interactivity.modes.bubble;
            if (!bubble || !mouseClickPos) {
              return;
            }
            if (!container.bubble) {
              container.bubble = {};
            }
            var distance = container.retina.bubbleModeDistance;
            if (!distance || distance < 0) {
              return;
            }
            var query = container.particles.quadTree.queryCircle(mouseClickPos, distance, function (p) {
              return _this46.isEnabled(p);
            });
            var _iterator77 = _createForOfIteratorHelper(query),
              _step77;
            try {
              for (_iterator77.s(); !(_step77 = _iterator77.n()).done;) {
                var particle = _step77.value;
                if (!container.bubble.clicking) {
                  continue;
                }
                particle.bubble.inRange = !container.bubble.durationEnd;
                var pos = particle.getPosition(),
                  distMouse = _getDistance(pos, mouseClickPos),
                  timeSpent = (new Date().getTime() - (container.interactivity.mouse.clickTime || 0)) / 1000;
                if (timeSpent > bubble.duration) {
                  container.bubble.durationEnd = true;
                }
                if (timeSpent > bubble.duration * 2) {
                  container.bubble.clicking = false;
                  container.bubble.durationEnd = false;
                }
                var sizeData = {
                  bubbleObj: {
                    optValue: container.retina.bubbleModeSize,
                    value: particle.bubble.radius
                  },
                  particlesObj: {
                    optValue: _getRangeMax(particle.options.size.value) * container.retina.pixelRatio,
                    value: particle.size.value
                  },
                  type: "size"
                };
                this.process(particle, distMouse, timeSpent, sizeData);
                var opacityData = {
                  bubbleObj: {
                    optValue: bubble.opacity,
                    value: particle.bubble.opacity
                  },
                  particlesObj: {
                    optValue: _getRangeMax(particle.options.opacity.value),
                    value: (_b = (_a = particle.opacity) === null || _a === void 0 ? void 0 : _a.value) !== null && _b !== void 0 ? _b : 1
                  },
                  type: "opacity"
                };
                this.process(particle, distMouse, timeSpent, opacityData);
                if (!container.bubble.durationEnd) {
                  if (distMouse <= distance) {
                    this.hoverBubbleColor(particle, distMouse);
                  } else {
                    delete particle.bubble.color;
                  }
                } else {
                  delete particle.bubble.color;
                }
              }
            } catch (err) {
              _iterator77.e(err);
            } finally {
              _iterator77.f();
            }
          }
        }, {
          key: "hoverBubble",
          value: function hoverBubble(delta) {
            var _this47 = this;
            var container = this.container,
              mousePos = container.interactivity.mouse.position,
              distance = container.retina.bubbleModeDistance;
            if (!distance || distance < 0 || mousePos === undefined) {
              return;
            }
            var query = container.particles.quadTree.queryCircle(mousePos, distance, function (p) {
              return _this47.isEnabled(p);
            });
            var _iterator78 = _createForOfIteratorHelper(query),
              _step78;
            try {
              for (_iterator78.s(); !(_step78 = _iterator78.n()).done;) {
                var particle = _step78.value;
                particle.bubble.inRange = true;
                var pos = particle.getPosition(),
                  pointDistance = _getDistance(pos, mousePos),
                  ratio = 1 - pointDistance / distance;
                if (pointDistance <= distance) {
                  if (ratio >= 0 && container.interactivity.status === _mouseMoveEvent) {
                    this.hoverBubbleSize(particle, ratio);
                    this.hoverBubbleOpacity(particle, ratio);
                    this.hoverBubbleColor(particle, ratio);
                  }
                } else {
                  this.reset(particle);
                }
                if (container.interactivity.status === _mouseLeaveEvent) {
                  this.reset(particle);
                }
              }
            } catch (err) {
              _iterator78.e(err);
            } finally {
              _iterator78.f();
            }
          }
        }, {
          key: "hoverBubbleColor",
          value: function hoverBubbleColor(particle, ratio, divBubble) {
            var options = this.container.actualOptions;
            var bubbleOptions = divBubble !== null && divBubble !== void 0 ? divBubble : options.interactivity.modes.bubble;
            if (!bubbleOptions) {
              return;
            }
            if (!particle.bubble.finalColor) {
              var modeColor = bubbleOptions.color;
              if (!modeColor) {
                return;
              }
              var bubbleColor = _itemFromSingleOrMultiple(modeColor);
              particle.bubble.finalColor = _rangeColorToHsl(bubbleColor);
            }
            if (!particle.bubble.finalColor) {
              return;
            }
            if (bubbleOptions.mix) {
              particle.bubble.color = undefined;
              var pColor = particle.getFillColor();
              particle.bubble.color = pColor ? _rgbToHsl(_colorMix(pColor, particle.bubble.finalColor, 1 - ratio, ratio)) : particle.bubble.finalColor;
            } else {
              particle.bubble.color = particle.bubble.finalColor;
            }
          }
        }, {
          key: "hoverBubbleOpacity",
          value: function hoverBubbleOpacity(particle, ratio, divBubble) {
            var _a, _b, _c, _d;
            var container = this.container,
              options = container.actualOptions,
              modeOpacity = (_a = divBubble === null || divBubble === void 0 ? void 0 : divBubble.opacity) !== null && _a !== void 0 ? _a : (_b = options.interactivity.modes.bubble) === null || _b === void 0 ? void 0 : _b.opacity;
            if (!modeOpacity) {
              return;
            }
            var optOpacity = particle.options.opacity.value;
            var pOpacity = (_d = (_c = particle.opacity) === null || _c === void 0 ? void 0 : _c.value) !== null && _d !== void 0 ? _d : 1;
            var opacity = calculateBubbleValue(pOpacity, modeOpacity, _getRangeMax(optOpacity), ratio);
            if (opacity !== undefined) {
              particle.bubble.opacity = opacity;
            }
          }
        }, {
          key: "hoverBubbleSize",
          value: function hoverBubbleSize(particle, ratio, divBubble) {
            var container = this.container,
              modeSize = (divBubble === null || divBubble === void 0 ? void 0 : divBubble.size) ? divBubble.size * container.retina.pixelRatio : container.retina.bubbleModeSize;
            if (modeSize === undefined) {
              return;
            }
            var optSize = _getRangeMax(particle.options.size.value) * container.retina.pixelRatio;
            var pSize = particle.size.value;
            var size = calculateBubbleValue(pSize, modeSize, optSize, ratio);
            if (size !== undefined) {
              particle.bubble.radius = size;
            }
          }
        }, {
          key: "process",
          value: function process(particle, distMouse, timeSpent, data) {
            var container = this.container,
              bubbleParam = data.bubbleObj.optValue,
              options = container.actualOptions,
              bubble = options.interactivity.modes.bubble;
            if (!bubble || bubbleParam === undefined) {
              return;
            }
            var bubbleDuration = bubble.duration,
              bubbleDistance = container.retina.bubbleModeDistance,
              particlesParam = data.particlesObj.optValue,
              pObjBubble = data.bubbleObj.value,
              pObj = data.particlesObj.value || 0,
              type = data.type;
            if (!bubbleDistance || bubbleDistance < 0 || bubbleParam === particlesParam) {
              return;
            }
            if (!container.bubble) {
              container.bubble = {};
            }
            if (!container.bubble.durationEnd) {
              if (distMouse <= bubbleDistance) {
                var obj = pObjBubble !== null && pObjBubble !== void 0 ? pObjBubble : pObj;
                if (obj !== bubbleParam) {
                  var value = pObj - timeSpent * (pObj - bubbleParam) / bubbleDuration;
                  if (type === "size") {
                    particle.bubble.radius = value;
                  }
                  if (type === "opacity") {
                    particle.bubble.opacity = value;
                  }
                }
              } else {
                if (type === "size") {
                  delete particle.bubble.radius;
                }
                if (type === "opacity") {
                  delete particle.bubble.opacity;
                }
              }
            } else if (pObjBubble) {
              if (type === "size") {
                delete particle.bubble.radius;
              }
              if (type === "opacity") {
                delete particle.bubble.opacity;
              }
            }
          }
        }, {
          key: "singleSelectorHover",
          value: function singleSelectorHover(delta, selector, div) {
            var _this48 = this;
            var container = this.container,
              selectors = document.querySelectorAll(selector),
              bubble = container.actualOptions.interactivity.modes.bubble;
            if (!bubble || !selectors.length) {
              return;
            }
            selectors.forEach(function (item) {
              var elem = item,
                pxRatio = container.retina.pixelRatio,
                pos = {
                  x: (elem.offsetLeft + elem.offsetWidth / 2) * pxRatio,
                  y: (elem.offsetTop + elem.offsetHeight / 2) * pxRatio
                },
                repulseRadius = elem.offsetWidth / 2 * pxRatio,
                area = div.type === "circle" ? new _Circle(pos.x, pos.y, repulseRadius) : new _Rectangle(elem.offsetLeft * pxRatio, elem.offsetTop * pxRatio, elem.offsetWidth * pxRatio, elem.offsetHeight * pxRatio),
                query = container.particles.quadTree.query(area, function (p) {
                  return _this48.isEnabled(p);
                });
              var _iterator79 = _createForOfIteratorHelper(query),
                _step79;
              try {
                for (_iterator79.s(); !(_step79 = _iterator79.n()).done;) {
                  var particle = _step79.value;
                  if (!area.contains(particle.getPosition())) {
                    continue;
                  }
                  particle.bubble.inRange = true;
                  var divs = bubble.divs;
                  var divBubble = _divMode(divs, elem);
                  if (!particle.bubble.div || particle.bubble.div !== elem) {
                    _this48.clear(particle, delta, true);
                    particle.bubble.div = elem;
                  }
                  _this48.hoverBubbleSize(particle, 1, divBubble);
                  _this48.hoverBubbleOpacity(particle, 1, divBubble);
                  _this48.hoverBubbleColor(particle, 1, divBubble);
                }
              } catch (err) {
                _iterator79.e(err);
              } finally {
                _iterator79.f();
              }
            });
          }
        }]);
        return Bubbler;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/bubble/dist/esm/index.js
      function loadExternalBubbleInteraction(_x71) {
        return _loadExternalBubbleInteraction.apply(this, arguments);
      }
      function _loadExternalBubbleInteraction() {
        _loadExternalBubbleInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee71(engine) {
          return _regeneratorRuntime().wrap(function _callee71$(_context71) {
            while (1) switch (_context71.prev = _context71.next) {
              case 0:
                _context71.next = 2;
                return engine.addInteractor("externalBubble", function (container) {
                  return new Bubbler(container);
                });
              case 2:
              case "end":
                return _context71.stop();
            }
          }, _callee71);
        }));
        return _loadExternalBubbleInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/connect/dist/esm/Options/Classes/ConnectLinks.js
      var ConnectLinks = /*#__PURE__*/function () {
        function ConnectLinks() {
          _classCallCheck(this, ConnectLinks);
          this.opacity = 0.5;
        }
        _createClass(ConnectLinks, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
          }
        }]);
        return ConnectLinks;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/connect/dist/esm/Options/Classes/Connect.js
      var Connect = /*#__PURE__*/function () {
        function Connect() {
          _classCallCheck(this, Connect);
          this.distance = 80;
          this.links = new ConnectLinks();
          this.radius = 60;
        }
        _createClass(Connect, [{
          key: "lineLinked",
          get: function get() {
            return this.links;
          },
          set: function set(value) {
            this.links = value;
          }
        }, {
          key: "line_linked",
          get: function get() {
            return this.links;
          },
          set: function set(value) {
            this.links = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b;
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            this.links.load((_b = (_a = data.links) !== null && _a !== void 0 ? _a : data.lineLinked) !== null && _b !== void 0 ? _b : data.line_linked);
            if (data.radius !== undefined) {
              this.radius = data.radius;
            }
          }
        }]);
        return Connect;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/connect/dist/esm/Connector.js

      function gradient(context, p1, p2, opacity) {
        var gradStop = Math.floor(p2.getRadius() / p1.getRadius()),
          color1 = p1.getFillColor(),
          color2 = p2.getFillColor();
        if (!color1 || !color2) {
          return;
        }
        var sourcePos = p1.getPosition(),
          destPos = p2.getPosition(),
          midRgb = _colorMix(color1, color2, p1.getRadius(), p2.getRadius()),
          grad = context.createLinearGradient(sourcePos.x, sourcePos.y, destPos.x, destPos.y);
        grad.addColorStop(0, _getStyleFromHsl(color1, opacity));
        grad.addColorStop(gradStop > 1 ? 1 : gradStop, _getStyleFromRgb(midRgb, opacity));
        grad.addColorStop(1, _getStyleFromHsl(color2, opacity));
        return grad;
      }
      function drawConnectLine(context, width, lineStyle, begin, end) {
        _drawLine(context, begin, end);
        context.lineWidth = width;
        context.strokeStyle = lineStyle;
        context.stroke();
      }
      function lineStyle(container, ctx, p1, p2) {
        var options = container.actualOptions,
          connectOptions = options.interactivity.modes.connect;
        if (!connectOptions) {
          return;
        }
        return gradient(ctx, p1, p2, connectOptions.links.opacity);
      }
      function drawConnection(container, p1, p2) {
        container.canvas.draw(function (ctx) {
          var _a;
          var ls = lineStyle(container, ctx, p1, p2);
          if (!ls) {
            return;
          }
          var pos1 = p1.getPosition(),
            pos2 = p2.getPosition();
          drawConnectLine(ctx, (_a = p1.retina.linksWidth) !== null && _a !== void 0 ? _a : 0, ls, pos1, pos2);
        });
      }
      var Connector = /*#__PURE__*/function (_ExternalInteractorBa5) {
        _inherits(Connector, _ExternalInteractorBa5);
        var _super21 = _createSuper(Connector);
        function Connector(container) {
          _classCallCheck(this, Connector);
          return _super21.call(this, container);
        }
        _createClass(Connector, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              connect = container.actualOptions.interactivity.modes.connect;
            if (!connect) {
              return;
            }
            container.retina.connectModeDistance = connect.distance * container.retina.pixelRatio;
            container.retina.connectModeRadius = connect.radius * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee43() {
              var _this49 = this;
              var container, options, mousePos, distance, query, i, _iterator80, _step80, p1, pos1, _iterator81, _step81, p2, pos2, distMax, xDiff, yDiff;
              return _regeneratorRuntime().wrap(function _callee43$(_context43) {
                while (1) switch (_context43.prev = _context43.next) {
                  case 0:
                    container = this.container, options = container.actualOptions;
                    if (!(options.interactivity.events.onHover.enable && container.interactivity.status === "pointermove")) {
                      _context43.next = 9;
                      break;
                    }
                    mousePos = container.interactivity.mouse.position;
                    if (!(!container.retina.connectModeDistance || container.retina.connectModeDistance < 0 || !container.retina.connectModeRadius || container.retina.connectModeRadius < 0 || !mousePos)) {
                      _context43.next = 5;
                      break;
                    }
                    return _context43.abrupt("return");
                  case 5:
                    distance = Math.abs(container.retina.connectModeRadius), query = container.particles.quadTree.queryCircle(mousePos, distance, function (p) {
                      return _this49.isEnabled(p);
                    });
                    i = 0;
                    _iterator80 = _createForOfIteratorHelper(query);
                    try {
                      for (_iterator80.s(); !(_step80 = _iterator80.n()).done;) {
                        p1 = _step80.value;
                        pos1 = p1.getPosition();
                        _iterator81 = _createForOfIteratorHelper(query.slice(i + 1));
                        try {
                          for (_iterator81.s(); !(_step81 = _iterator81.n()).done;) {
                            p2 = _step81.value;
                            pos2 = p2.getPosition(), distMax = Math.abs(container.retina.connectModeDistance), xDiff = Math.abs(pos1.x - pos2.x), yDiff = Math.abs(pos1.y - pos2.y);
                            if (xDiff < distMax && yDiff < distMax) {
                              drawConnection(container, p1, p2);
                            }
                          }
                        } catch (err) {
                          _iterator81.e(err);
                        } finally {
                          _iterator81.f();
                        }
                        ++i;
                      }
                    } catch (err) {
                      _iterator80.e(err);
                    } finally {
                      _iterator80.f();
                    }
                  case 9:
                  case "end":
                    return _context43.stop();
                }
              }, _callee43, this);
            }));
            function interact() {
              return _interact5.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : container.actualOptions.interactivity).events;
            if (!(events.onHover.enable && mouse.position)) {
              return false;
            }
            return _isInArray("connect", events.onHover.mode);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.connect) {
              options.connect = new Connect();
            }
            for (var _len13 = arguments.length, sources = new Array(_len13 > 1 ? _len13 - 1 : 0), _key13 = 1; _key13 < _len13; _key13++) {
              sources[_key13 - 1] = arguments[_key13];
            }
            for (var _i12 = 0, _sources9 = sources; _i12 < _sources9.length; _i12++) {
              var source = _sources9[_i12];
              options.connect.load(source === null || source === void 0 ? void 0 : source.connect);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Connector;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/connect/dist/esm/index.js
      function loadExternalConnectInteraction(_x72) {
        return _loadExternalConnectInteraction.apply(this, arguments);
      }
      function _loadExternalConnectInteraction() {
        _loadExternalConnectInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee72(engine) {
          return _regeneratorRuntime().wrap(function _callee72$(_context72) {
            while (1) switch (_context72.prev = _context72.next) {
              case 0:
                _context72.next = 2;
                return engine.addInteractor("externalConnect", function (container) {
                  return new Connector(container);
                });
              case 2:
              case "end":
                return _context72.stop();
            }
          }, _callee72);
        }));
        return _loadExternalConnectInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/grab/dist/esm/Options/Classes/GrabLinks.js
      var GrabLinks = /*#__PURE__*/function () {
        function GrabLinks() {
          _classCallCheck(this, GrabLinks);
          this.blink = false;
          this.consent = false;
          this.opacity = 1;
        }
        _createClass(GrabLinks, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.blink !== undefined) {
              this.blink = data.blink;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.consent !== undefined) {
              this.consent = data.consent;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
          }
        }]);
        return GrabLinks;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/grab/dist/esm/Options/Classes/Grab.js
      var Grab = /*#__PURE__*/function () {
        function Grab() {
          _classCallCheck(this, Grab);
          this.distance = 100;
          this.links = new GrabLinks();
        }
        _createClass(Grab, [{
          key: "lineLinked",
          get: function get() {
            return this.links;
          },
          set: function set(value) {
            this.links = value;
          }
        }, {
          key: "line_linked",
          get: function get() {
            return this.links;
          },
          set: function set(value) {
            this.links = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a, _b;
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            this.links.load((_b = (_a = data.links) !== null && _a !== void 0 ? _a : data.lineLinked) !== null && _b !== void 0 ? _b : data.line_linked);
          }
        }]);
        return Grab;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/grab/dist/esm/Grabber.js

      function drawGrabLine(context, width, begin, end, colorLine, opacity) {
        _drawLine(context, begin, end);
        context.strokeStyle = _getStyleFromRgb(colorLine, opacity);
        context.lineWidth = width;
        context.stroke();
      }
      function drawGrab(container, particle, lineColor, opacity, mousePos) {
        container.canvas.draw(function (ctx) {
          var _a;
          var beginPos = particle.getPosition();
          drawGrabLine(ctx, (_a = particle.retina.linksWidth) !== null && _a !== void 0 ? _a : 0, beginPos, mousePos, lineColor, opacity);
        });
      }
      var Grabber = /*#__PURE__*/function (_ExternalInteractorBa6) {
        _inherits(Grabber, _ExternalInteractorBa6);
        var _super22 = _createSuper(Grabber);
        function Grabber(container) {
          _classCallCheck(this, Grabber);
          return _super22.call(this, container);
        }
        _createClass(Grabber, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              grab = container.actualOptions.interactivity.modes.grab;
            if (!grab) {
              return;
            }
            container.retina.grabModeDistance = grab.distance * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee44() {
              var _this50 = this;
              var _a, _b, container, options, interactivity, mousePos, distance, query, _iterator82, _step82, particle, pos, pointDistance, grabLineOptions, lineOpacity, opacityLine, optColor, linksOptions, colorLine;
              return _regeneratorRuntime().wrap(function _callee44$(_context44) {
                while (1) switch (_context44.prev = _context44.next) {
                  case 0:
                    container = this.container, options = container.actualOptions, interactivity = options.interactivity;
                    if (!(!interactivity.modes.grab || !interactivity.events.onHover.enable || container.interactivity.status !== _mouseMoveEvent)) {
                      _context44.next = 3;
                      break;
                    }
                    return _context44.abrupt("return");
                  case 3:
                    mousePos = container.interactivity.mouse.position;
                    if (mousePos) {
                      _context44.next = 6;
                      break;
                    }
                    return _context44.abrupt("return");
                  case 6:
                    distance = container.retina.grabModeDistance;
                    if (!(!distance || distance < 0)) {
                      _context44.next = 9;
                      break;
                    }
                    return _context44.abrupt("return");
                  case 9:
                    query = container.particles.quadTree.queryCircle(mousePos, distance, function (p) {
                      return _this50.isEnabled(p);
                    });
                    _iterator82 = _createForOfIteratorHelper(query);
                    _context44.prev = 11;
                    _iterator82.s();
                  case 13:
                    if ((_step82 = _iterator82.n()).done) {
                      _context44.next = 29;
                      break;
                    }
                    particle = _step82.value;
                    pos = particle.getPosition(), pointDistance = _getDistance(pos, mousePos);
                    if (!(pointDistance > distance)) {
                      _context44.next = 18;
                      break;
                    }
                    return _context44.abrupt("continue", 27);
                  case 18:
                    grabLineOptions = interactivity.modes.grab.links, lineOpacity = grabLineOptions.opacity, opacityLine = lineOpacity - pointDistance * lineOpacity / distance;
                    if (!(opacityLine <= 0)) {
                      _context44.next = 21;
                      break;
                    }
                    return _context44.abrupt("continue", 27);
                  case 21:
                    optColor = (_a = grabLineOptions.color) !== null && _a !== void 0 ? _a : (_b = particle.options.links) === null || _b === void 0 ? void 0 : _b.color;
                    if (!container.particles.grabLineColor && optColor) {
                      linksOptions = interactivity.modes.grab.links;
                      container.particles.grabLineColor = _getLinkRandomColor(optColor, linksOptions.blink, linksOptions.consent);
                    }
                    colorLine = _getLinkColor(particle, undefined, container.particles.grabLineColor);
                    if (colorLine) {
                      _context44.next = 26;
                      break;
                    }
                    return _context44.abrupt("return");
                  case 26:
                    drawGrab(container, particle, colorLine, opacityLine, mousePos);
                  case 27:
                    _context44.next = 13;
                    break;
                  case 29:
                    _context44.next = 34;
                    break;
                  case 31:
                    _context44.prev = 31;
                    _context44.t0 = _context44["catch"](11);
                    _iterator82.e(_context44.t0);
                  case 34:
                    _context44.prev = 34;
                    _iterator82.f();
                    return _context44.finish(34);
                  case 37:
                  case "end":
                    return _context44.stop();
                }
              }, _callee44, this, [[11, 31, 34, 37]]);
            }));
            function interact() {
              return _interact6.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : container.actualOptions.interactivity).events;
            return events.onHover.enable && !!mouse.position && _isInArray("grab", events.onHover.mode);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.grab) {
              options.grab = new Grab();
            }
            for (var _len14 = arguments.length, sources = new Array(_len14 > 1 ? _len14 - 1 : 0), _key14 = 1; _key14 < _len14; _key14++) {
              sources[_key14 - 1] = arguments[_key14];
            }
            for (var _i13 = 0, _sources10 = sources; _i13 < _sources10.length; _i13++) {
              var source = _sources10[_i13];
              options.grab.load(source === null || source === void 0 ? void 0 : source.grab);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Grabber;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/grab/dist/esm/index.js
      function loadExternalGrabInteraction(_x73) {
        return _loadExternalGrabInteraction.apply(this, arguments);
      }
      function _loadExternalGrabInteraction() {
        _loadExternalGrabInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee73(engine) {
          return _regeneratorRuntime().wrap(function _callee73$(_context73) {
            while (1) switch (_context73.prev = _context73.next) {
              case 0:
                _context73.next = 2;
                return engine.addInteractor("externalGrab", function (container) {
                  return new Grabber(container);
                });
              case 2:
              case "end":
                return _context73.stop();
            }
          }, _callee73);
        }));
        return _loadExternalGrabInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/pause/dist/esm/Pauser.js
      var Pauser = /*#__PURE__*/function (_ExternalInteractorBa7) {
        _inherits(Pauser, _ExternalInteractorBa7);
        var _super23 = _createSuper(Pauser);
        function Pauser(container) {
          var _this51;
          _classCallCheck(this, Pauser);
          _this51 = _super23.call(this, container);
          _this51.handleClickMode = function (mode) {
            if (mode !== "pause") {
              return;
            }
            var container = _this51.container;
            if (container.getAnimationStatus()) {
              container.pause();
            } else {
              container.play();
            }
          };
          return _this51;
        }
        _createClass(Pauser, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact7 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee45() {
              return _regeneratorRuntime().wrap(function _callee45$(_context45) {
                while (1) switch (_context45.prev = _context45.next) {
                  case 0:
                  case "end":
                    return _context45.stop();
                }
              }, _callee45);
            }));
            function interact() {
              return _interact7.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled() {
            return true;
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Pauser;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/pause/dist/esm/index.js

      function loadExternalPauseInteraction(engine) {
        engine.addInteractor("externalPause", function (container) {
          return new Pauser(container);
        });
      }
      ; // CONCATENATED MODULE: ../../interactions/external/push/dist/esm/Options/Classes/Push.js
      var Push = /*#__PURE__*/function () {
        function Push() {
          _classCallCheck(this, Push);
          this["default"] = true;
          this.groups = [];
          this.quantity = 4;
        }
        _createClass(Push, [{
          key: "particles_nb",
          get: function get() {
            return this.quantity;
          },
          set: function set(value) {
            this.quantity = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            if (data["default"] !== undefined) {
              this["default"] = data["default"];
            }
            if (data.groups !== undefined) {
              this.groups = data.groups.map(function (t) {
                return t;
              });
            }
            if (!this.groups.length) {
              this["default"] = true;
            }
            var quantity = (_a = data.quantity) !== null && _a !== void 0 ? _a : data.particles_nb;
            if (quantity !== undefined) {
              this.quantity = quantity;
            }
          }
        }]);
        return Push;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/push/dist/esm/Pusher.js
      var Pusher = /*#__PURE__*/function (_ExternalInteractorBa8) {
        _inherits(Pusher, _ExternalInteractorBa8);
        var _super24 = _createSuper(Pusher);
        function Pusher(container) {
          var _this52;
          _classCallCheck(this, Pusher);
          _this52 = _super24.call(this, container);
          _this52.handleClickMode = function (mode) {
            if (mode !== "push") {
              return;
            }
            var container = _this52.container,
              options = container.actualOptions,
              pushOptions = options.interactivity.modes.push;
            if (!pushOptions) {
              return;
            }
            var pushNb = pushOptions.quantity;
            if (pushNb <= 0) {
              return;
            }
            var group = _itemFromArray([undefined].concat(_toConsumableArray(pushOptions.groups))),
              groupOptions = group !== undefined ? container.actualOptions.particles.groups[group] : undefined;
            container.particles.push(pushNb, container.interactivity.mouse, groupOptions, group);
          };
          return _this52;
        }
        _createClass(Pusher, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact8 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee46() {
              return _regeneratorRuntime().wrap(function _callee46$(_context46) {
                while (1) switch (_context46.prev = _context46.next) {
                  case 0:
                  case "end":
                    return _context46.stop();
                }
              }, _callee46);
            }));
            function interact() {
              return _interact8.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled() {
            return true;
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.push) {
              options.push = new Push();
            }
            for (var _len15 = arguments.length, sources = new Array(_len15 > 1 ? _len15 - 1 : 0), _key15 = 1; _key15 < _len15; _key15++) {
              sources[_key15 - 1] = arguments[_key15];
            }
            for (var _i14 = 0, _sources11 = sources; _i14 < _sources11.length; _i14++) {
              var source = _sources11[_i14];
              options.push.load(source === null || source === void 0 ? void 0 : source.push);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Pusher;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/push/dist/esm/index.js
      function loadExternalPushInteraction(_x74) {
        return _loadExternalPushInteraction.apply(this, arguments);
      }
      function _loadExternalPushInteraction() {
        _loadExternalPushInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee74(engine) {
          return _regeneratorRuntime().wrap(function _callee74$(_context74) {
            while (1) switch (_context74.prev = _context74.next) {
              case 0:
                _context74.next = 2;
                return engine.addInteractor("externalPush", function (container) {
                  return new Pusher(container);
                });
              case 2:
              case "end":
                return _context74.stop();
            }
          }, _callee74);
        }));
        return _loadExternalPushInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/remove/dist/esm/Options/Classes/Remove.js
      var Remove = /*#__PURE__*/function () {
        function Remove() {
          _classCallCheck(this, Remove);
          this.quantity = 2;
        }
        _createClass(Remove, [{
          key: "particles_nb",
          get: function get() {
            return this.quantity;
          },
          set: function set(value) {
            this.quantity = value;
          }
        }, {
          key: "load",
          value: function load(data) {
            var _a;
            if (!data) {
              return;
            }
            var quantity = (_a = data.quantity) !== null && _a !== void 0 ? _a : data.particles_nb;
            if (quantity !== undefined) {
              this.quantity = quantity;
            }
          }
        }]);
        return Remove;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/remove/dist/esm/Remover.js
      var Remover = /*#__PURE__*/function (_ExternalInteractorBa9) {
        _inherits(Remover, _ExternalInteractorBa9);
        var _super25 = _createSuper(Remover);
        function Remover(container) {
          var _this53;
          _classCallCheck(this, Remover);
          _this53 = _super25.call(this, container);
          _this53.handleClickMode = function (mode) {
            var container = _this53.container,
              options = container.actualOptions;
            if (!options.interactivity.modes.remove || mode !== "remove") {
              return;
            }
            var removeNb = options.interactivity.modes.remove.quantity;
            container.particles.removeQuantity(removeNb);
          };
          return _this53;
        }
        _createClass(Remover, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact9 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee47() {
              return _regeneratorRuntime().wrap(function _callee47$(_context47) {
                while (1) switch (_context47.prev = _context47.next) {
                  case 0:
                  case "end":
                    return _context47.stop();
                }
              }, _callee47);
            }));
            function interact() {
              return _interact9.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled() {
            return true;
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.remove) {
              options.remove = new Remove();
            }
            for (var _len16 = arguments.length, sources = new Array(_len16 > 1 ? _len16 - 1 : 0), _key16 = 1; _key16 < _len16; _key16++) {
              sources[_key16 - 1] = arguments[_key16];
            }
            for (var _i15 = 0, _sources12 = sources; _i15 < _sources12.length; _i15++) {
              var source = _sources12[_i15];
              options.remove.load(source === null || source === void 0 ? void 0 : source.remove);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Remover;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/remove/dist/esm/index.js

      function loadExternalRemoveInteraction(engine) {
        engine.addInteractor("externalRemove", function (container) {
          return new Remover(container);
        });
      }
      ; // CONCATENATED MODULE: ../../interactions/external/repulse/dist/esm/Options/Classes/RepulseBase.js
      var RepulseBase = /*#__PURE__*/function () {
        function RepulseBase() {
          _classCallCheck(this, RepulseBase);
          this.distance = 200;
          this.duration = 0.4;
          this.factor = 100;
          this.speed = 1;
          this.maxSpeed = 50;
          this.easing = "ease-out-quad";
        }
        _createClass(RepulseBase, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            if (data.duration !== undefined) {
              this.duration = data.duration;
            }
            if (data.easing !== undefined) {
              this.easing = data.easing;
            }
            if (data.factor !== undefined) {
              this.factor = data.factor;
            }
            if (data.speed !== undefined) {
              this.speed = data.speed;
            }
            if (data.maxSpeed !== undefined) {
              this.maxSpeed = data.maxSpeed;
            }
          }
        }]);
        return RepulseBase;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/repulse/dist/esm/Options/Classes/RepulseDiv.js
      var RepulseDiv = /*#__PURE__*/function (_RepulseBase) {
        _inherits(RepulseDiv, _RepulseBase);
        var _super26 = _createSuper(RepulseDiv);
        function RepulseDiv() {
          var _this54;
          _classCallCheck(this, RepulseDiv);
          _this54 = _super26.call(this);
          _this54.selectors = [];
          return _this54;
        }
        _createClass(RepulseDiv, [{
          key: "ids",
          get: function get() {
            return _executeOnSingleOrMultiple(this.selectors, function (t) {
              return t.replace("#", "");
            });
          },
          set: function set(value) {
            this.selectors = _executeOnSingleOrMultiple(value, function (t) {
              return "#".concat(t);
            });
          }
        }, {
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(RepulseDiv.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            if (data.ids !== undefined) {
              this.ids = data.ids;
            }
            if (data.selectors !== undefined) {
              this.selectors = data.selectors;
            }
          }
        }]);
        return RepulseDiv;
      }(RepulseBase);
      ; // CONCATENATED MODULE: ../../interactions/external/repulse/dist/esm/Options/Classes/Repulse.js
      var Repulse = /*#__PURE__*/function (_RepulseBase2) {
        _inherits(Repulse, _RepulseBase2);
        var _super27 = _createSuper(Repulse);
        function Repulse() {
          _classCallCheck(this, Repulse);
          return _super27.apply(this, arguments);
        }
        _createClass(Repulse, [{
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(Repulse.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            this.divs = _executeOnSingleOrMultiple(data.divs, function (div) {
              var tmp = new RepulseDiv();
              tmp.load(div);
              return tmp;
            });
          }
        }]);
        return Repulse;
      }(RepulseBase);
      ; // CONCATENATED MODULE: ../../interactions/external/repulse/dist/esm/Repulser.js
      var Repulser = /*#__PURE__*/function (_ExternalInteractorBa10) {
        _inherits(Repulser, _ExternalInteractorBa10);
        var _super28 = _createSuper(Repulser);
        function Repulser(engine, container) {
          var _this55;
          _classCallCheck(this, Repulser);
          _this55 = _super28.call(this, container);
          _this55._engine = engine;
          if (!container.repulse) {
            container.repulse = {
              particles: []
            };
          }
          _this55.handleClickMode = function (mode) {
            var options = _this55.container.actualOptions,
              repulse = options.interactivity.modes.repulse;
            if (!repulse || mode !== "repulse") {
              return;
            }
            if (!container.repulse) {
              container.repulse = {
                particles: []
              };
            }
            container.repulse.clicking = true;
            container.repulse.count = 0;
            var _iterator83 = _createForOfIteratorHelper(container.repulse.particles),
              _step83;
            try {
              for (_iterator83.s(); !(_step83 = _iterator83.n()).done;) {
                var particle = _step83.value;
                if (!_this55.isEnabled(particle)) {
                  continue;
                }
                particle.velocity.setTo(particle.initialVelocity);
              }
            } catch (err) {
              _iterator83.e(err);
            } finally {
              _iterator83.f();
            }
            container.repulse.particles = [];
            container.repulse.finish = false;
            setTimeout(function () {
              if (!container.destroyed) {
                if (!container.repulse) {
                  container.repulse = {
                    particles: []
                  };
                }
                container.repulse.clicking = false;
              }
            }, repulse.duration * 1000);
          };
          return _this55;
        }
        _createClass(Repulser, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              repulse = container.actualOptions.interactivity.modes.repulse;
            if (!repulse) {
              return;
            }
            container.retina.repulseModeDistance = repulse.distance * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact10 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee48() {
              var _this56 = this;
              var container, options, mouseMoveStatus, events, hoverEnabled, hoverMode, clickEnabled, clickMode, divs;
              return _regeneratorRuntime().wrap(function _callee48$(_context48) {
                while (1) switch (_context48.prev = _context48.next) {
                  case 0:
                    container = this.container, options = container.actualOptions, mouseMoveStatus = container.interactivity.status === _mouseMoveEvent, events = options.interactivity.events, hoverEnabled = events.onHover.enable, hoverMode = events.onHover.mode, clickEnabled = events.onClick.enable, clickMode = events.onClick.mode, divs = events.onDiv;
                    if (mouseMoveStatus && hoverEnabled && _isInArray("repulse", hoverMode)) {
                      this.hoverRepulse();
                    } else if (clickEnabled && _isInArray("repulse", clickMode)) {
                      this.clickRepulse();
                    } else {
                      _divModeExecute("repulse", divs, function (selector, div) {
                        return _this56.singleSelectorRepulse(selector, div);
                      });
                    }
                  case 2:
                  case "end":
                    return _context48.stop();
                }
              }, _callee48, this);
            }));
            function interact() {
              return _interact10.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              options = container.actualOptions,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : options.interactivity).events,
              divs = events.onDiv,
              divRepulse = _isDivModeEnabled("repulse", divs);
            if (!(divRepulse || events.onHover.enable && mouse.position || events.onClick.enable && mouse.clickPosition)) {
              return false;
            }
            var hoverMode = events.onHover.mode,
              clickMode = events.onClick.mode;
            return _isInArray("repulse", hoverMode) || _isInArray("repulse", clickMode) || divRepulse;
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.repulse) {
              options.repulse = new Repulse();
            }
            for (var _len17 = arguments.length, sources = new Array(_len17 > 1 ? _len17 - 1 : 0), _key17 = 1; _key17 < _len17; _key17++) {
              sources[_key17 - 1] = arguments[_key17];
            }
            for (var _i16 = 0, _sources13 = sources; _i16 < _sources13.length; _i16++) {
              var source = _sources13[_i16];
              options.repulse.load(source === null || source === void 0 ? void 0 : source.repulse);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }, {
          key: "clickRepulse",
          value: function clickRepulse() {
            var _this57 = this;
            var container = this.container,
              repulse = container.actualOptions.interactivity.modes.repulse;
            if (!repulse) {
              return;
            }
            if (!container.repulse) {
              container.repulse = {
                particles: []
              };
            }
            if (!container.repulse.finish) {
              if (!container.repulse.count) {
                container.repulse.count = 0;
              }
              container.repulse.count++;
              if (container.repulse.count === container.particles.count) {
                container.repulse.finish = true;
              }
            }
            if (container.repulse.clicking) {
              var repulseDistance = container.retina.repulseModeDistance;
              if (!repulseDistance || repulseDistance < 0) {
                return;
              }
              var repulseRadius = Math.pow(repulseDistance / 6, 3),
                mouseClickPos = container.interactivity.mouse.clickPosition;
              if (mouseClickPos === undefined) {
                return;
              }
              var range = new _Circle(mouseClickPos.x, mouseClickPos.y, repulseRadius),
                query = container.particles.quadTree.query(range, function (p) {
                  return _this57.isEnabled(p);
                });
              var _iterator84 = _createForOfIteratorHelper(query),
                _step84;
              try {
                for (_iterator84.s(); !(_step84 = _iterator84.n()).done;) {
                  var particle = _step84.value;
                  var _getDistances6 = _getDistances(mouseClickPos, particle.position),
                    dx = _getDistances6.dx,
                    dy = _getDistances6.dy,
                    distance = _getDistances6.distance,
                    d = Math.pow(distance, 2),
                    velocity = repulse.speed,
                    force = -repulseRadius * velocity / d;
                  if (d <= repulseRadius) {
                    container.repulse.particles.push(particle);
                    var vect = _Vector.create(dx, dy);
                    vect.length = force;
                    particle.velocity.setTo(vect);
                  }
                }
              } catch (err) {
                _iterator84.e(err);
              } finally {
                _iterator84.f();
              }
            } else if (container.repulse.clicking === false) {
              var _iterator85 = _createForOfIteratorHelper(container.repulse.particles),
                _step85;
              try {
                for (_iterator85.s(); !(_step85 = _iterator85.n()).done;) {
                  var _particle3 = _step85.value;
                  _particle3.velocity.setTo(_particle3.initialVelocity);
                }
              } catch (err) {
                _iterator85.e(err);
              } finally {
                _iterator85.f();
              }
              container.repulse.particles = [];
            }
          }
        }, {
          key: "hoverRepulse",
          value: function hoverRepulse() {
            var container = this.container,
              mousePos = container.interactivity.mouse.position,
              repulseRadius = container.retina.repulseModeDistance;
            if (!repulseRadius || repulseRadius < 0 || !mousePos) {
              return;
            }
            this.processRepulse(mousePos, repulseRadius, new _Circle(mousePos.x, mousePos.y, repulseRadius));
          }
        }, {
          key: "processRepulse",
          value: function processRepulse(position, repulseRadius, area, divRepulse) {
            var _this58 = this;
            var _a;
            var container = this.container,
              query = container.particles.quadTree.query(area, function (p) {
                return _this58.isEnabled(p);
              }),
              repulseOptions = container.actualOptions.interactivity.modes.repulse;
            if (!repulseOptions) {
              return;
            }
            var _iterator86 = _createForOfIteratorHelper(query),
              _step86;
            try {
              for (_iterator86.s(); !(_step86 = _iterator86.n()).done;) {
                var particle = _step86.value;
                var _getDistances7 = _getDistances(particle.position, position),
                  dx = _getDistances7.dx,
                  dy = _getDistances7.dy,
                  distance = _getDistances7.distance,
                  velocity = ((_a = divRepulse === null || divRepulse === void 0 ? void 0 : divRepulse.speed) !== null && _a !== void 0 ? _a : repulseOptions.speed) * repulseOptions.factor,
                  repulseFactor = _clamp(_getEasing(repulseOptions.easing)(1 - distance / repulseRadius) * velocity, 0, repulseOptions.maxSpeed),
                  normVec = _Vector.create(distance === 0 ? velocity : dx / distance * repulseFactor, distance === 0 ? velocity : dy / distance * repulseFactor);
                particle.position.addTo(normVec);
              }
            } catch (err) {
              _iterator86.e(err);
            } finally {
              _iterator86.f();
            }
          }
        }, {
          key: "singleSelectorRepulse",
          value: function singleSelectorRepulse(selector, div) {
            var _this59 = this;
            var container = this.container,
              repulse = container.actualOptions.interactivity.modes.repulse;
            if (!repulse) {
              return;
            }
            var query = document.querySelectorAll(selector);
            if (!query.length) {
              return;
            }
            query.forEach(function (item) {
              var elem = item,
                pxRatio = container.retina.pixelRatio,
                pos = {
                  x: (elem.offsetLeft + elem.offsetWidth / 2) * pxRatio,
                  y: (elem.offsetTop + elem.offsetHeight / 2) * pxRatio
                },
                repulseRadius = elem.offsetWidth / 2 * pxRatio,
                area = div.type === "circle" ? new _Circle(pos.x, pos.y, repulseRadius) : new _Rectangle(elem.offsetLeft * pxRatio, elem.offsetTop * pxRatio, elem.offsetWidth * pxRatio, elem.offsetHeight * pxRatio),
                divs = repulse.divs,
                divRepulse = _divMode(divs, elem);
              _this59.processRepulse(pos, repulseRadius, area, divRepulse);
            });
          }
        }]);
        return Repulser;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/repulse/dist/esm/index.js
      function loadExternalRepulseInteraction(_x75) {
        return _loadExternalRepulseInteraction.apply(this, arguments);
      }
      function _loadExternalRepulseInteraction() {
        _loadExternalRepulseInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee75(engine) {
          return _regeneratorRuntime().wrap(function _callee75$(_context75) {
            while (1) switch (_context75.prev = _context75.next) {
              case 0:
                _context75.next = 2;
                return engine.addInteractor("externalRepulse", function (container) {
                  return new Repulser(engine, container);
                });
              case 2:
              case "end":
                return _context75.stop();
            }
          }, _callee75);
        }));
        return _loadExternalRepulseInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/external/slow/dist/esm/Options/Classes/Slow.js
      var Slow = /*#__PURE__*/function () {
        function Slow() {
          _classCallCheck(this, Slow);
          this.factor = 3;
          this.radius = 200;
        }
        _createClass(Slow, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.factor !== undefined) {
              this.factor = data.factor;
            }
            if (data.radius !== undefined) {
              this.radius = data.radius;
            }
          }
        }]);
        return Slow;
      }();
      ; // CONCATENATED MODULE: ../../interactions/external/slow/dist/esm/Slower.js
      var Slower = /*#__PURE__*/function (_ExternalInteractorBa11) {
        _inherits(Slower, _ExternalInteractorBa11);
        var _super29 = _createSuper(Slower);
        function Slower(container) {
          _classCallCheck(this, Slower);
          return _super29.call(this, container);
        }
        _createClass(Slower, [{
          key: "clear",
          value: function clear(particle, delta, force) {
            if (particle.slow.inRange && !force) {
              return;
            }
            particle.slow.factor = 1;
          }
        }, {
          key: "init",
          value: function init() {
            var container = this.container,
              slow = container.actualOptions.interactivity.modes.slow;
            if (!slow) {
              return;
            }
            container.retina.slowModeRadius = slow.radius * container.retina.pixelRatio;
          }
        }, {
          key: "interact",
          value: function () {
            var _interact11 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee49() {
              return _regeneratorRuntime().wrap(function _callee49$(_context49) {
                while (1) switch (_context49.prev = _context49.next) {
                  case 0:
                  case "end":
                    return _context49.stop();
                }
              }, _callee49);
            }));
            function interact() {
              return _interact11.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var container = this.container,
              mouse = container.interactivity.mouse,
              events = ((_a = particle === null || particle === void 0 ? void 0 : particle.interactivity) !== null && _a !== void 0 ? _a : container.actualOptions.interactivity).events;
            return events.onHover.enable && !!mouse.position && _isInArray("slow", events.onHover.mode);
          }
        }, {
          key: "loadModeOptions",
          value: function loadModeOptions(options) {
            if (!options.slow) {
              options.slow = new Slow();
            }
            for (var _len18 = arguments.length, sources = new Array(_len18 > 1 ? _len18 - 1 : 0), _key18 = 1; _key18 < _len18; _key18++) {
              sources[_key18 - 1] = arguments[_key18];
            }
            for (var _i17 = 0, _sources14 = sources; _i17 < _sources14.length; _i17++) {
              var source = _sources14[_i17];
              options.slow.load(source === null || source === void 0 ? void 0 : source.slow);
            }
          }
        }, {
          key: "reset",
          value: function reset(particle) {
            particle.slow.inRange = false;
            var container = this.container,
              options = container.actualOptions,
              mousePos = container.interactivity.mouse.position,
              radius = container.retina.slowModeRadius,
              slow = options.interactivity.modes.slow;
            if (!slow || !radius || radius < 0 || !mousePos) {
              return;
            }
            var particlePos = particle.getPosition(),
              dist = _getDistance(mousePos, particlePos),
              proximityFactor = dist / radius,
              slowFactor = slow.factor;
            if (dist <= radius) {
              particle.slow.inRange = true;
              particle.slow.factor = proximityFactor / slowFactor;
            }
          }
        }]);
        return Slower;
      }(_ExternalInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/external/slow/dist/esm/index.js
      function loadExternalSlowInteraction(_x76) {
        return _loadExternalSlowInteraction.apply(this, arguments);
      }
      function _loadExternalSlowInteraction() {
        _loadExternalSlowInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee76(engine) {
          return _regeneratorRuntime().wrap(function _callee76$(_context76) {
            while (1) switch (_context76.prev = _context76.next) {
              case 0:
                _context76.next = 2;
                return engine.addInteractor("externalSlow", function (container) {
                  return new Slower(container);
                });
              case 2:
              case "end":
                return _context76.stop();
            }
          }, _callee76);
        }));
        return _loadExternalSlowInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/image/dist/esm/Utils.js

      var currentColorRegex = /(#(?:[0-9a-f]{2}){2,4}|(#[0-9a-f]{3})|(rgb|hsl)a?\((-?\d+%?[,\s]+){2,3}\s*[\d.]+%?\))|currentcolor/gi;
      function replaceColorSvg(imageShape, color, opacity) {
        var svgData = imageShape.svgData;
        if (!svgData) {
          return "";
        }
        var colorStyle = _getStyleFromHsl(color, opacity);
        if (svgData.includes("fill")) {
          return svgData.replace(currentColorRegex, function () {
            return colorStyle;
          });
        }
        var preFillIndex = svgData.indexOf(">");
        return "".concat(svgData.substring(0, preFillIndex), " fill=\"").concat(colorStyle, "\"").concat(svgData.substring(preFillIndex));
      }
      function loadImage(_x77) {
        return _loadImage.apply(this, arguments);
      }
      function _loadImage() {
        _loadImage = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee77(image) {
          return _regeneratorRuntime().wrap(function _callee77$(_context77) {
            while (1) switch (_context77.prev = _context77.next) {
              case 0:
                return _context77.abrupt("return", new Promise(function (resolve) {
                  image.loading = true;
                  var img = new Image();
                  image.element = img;
                  img.addEventListener("load", function () {
                    image.loading = false;
                    resolve();
                  });
                  img.addEventListener("error", function () {
                    image.element = undefined;
                    image.error = true;
                    image.loading = false;
                    console.error("Error tsParticles - loading image: ".concat(image.source));
                    resolve();
                  });
                  img.src = image.source;
                }));
              case 1:
              case "end":
                return _context77.stop();
            }
          }, _callee77);
        }));
        return _loadImage.apply(this, arguments);
      }
      function downloadSvgImage(_x78) {
        return _downloadSvgImage.apply(this, arguments);
      }
      function _downloadSvgImage() {
        _downloadSvgImage = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee78(image) {
          var response;
          return _regeneratorRuntime().wrap(function _callee78$(_context78) {
            while (1) switch (_context78.prev = _context78.next) {
              case 0:
                if (!(image.type !== "svg")) {
                  _context78.next = 4;
                  break;
                }
                _context78.next = 3;
                return loadImage(image);
              case 3:
                return _context78.abrupt("return");
              case 4:
                image.loading = true;
                _context78.next = 7;
                return fetch(image.source);
              case 7:
                response = _context78.sent;
                if (!response.ok) {
                  console.error("Error tsParticles - Image not found");
                  image.error = true;
                }
                if (image.error) {
                  _context78.next = 13;
                  break;
                }
                _context78.next = 12;
                return response.text();
              case 12:
                image.svgData = _context78.sent;
              case 13:
                image.loading = false;
              case 14:
              case "end":
                return _context78.stop();
            }
          }, _callee78);
        }));
        return _downloadSvgImage.apply(this, arguments);
      }
      function replaceImageColor(image, imageData, color, particle) {
        var _a, _b, _c;
        var svgColoredData = replaceColorSvg(image, color, (_b = (_a = particle.opacity) === null || _a === void 0 ? void 0 : _a.value) !== null && _b !== void 0 ? _b : 1),
          imageRes = {
            color: color,
            data: Object.assign(Object.assign({}, image), {
              svgData: svgColoredData
            }),
            loaded: false,
            ratio: imageData.width / imageData.height,
            replaceColor: (_c = imageData.replaceColor) !== null && _c !== void 0 ? _c : imageData.replace_color,
            source: imageData.src
          };
        return new Promise(function (resolve) {
          var svg = new Blob([svgColoredData], {
              type: "image/svg+xml"
            }),
            domUrl = URL || window.URL || window.webkitURL || window,
            url = domUrl.createObjectURL(svg),
            img = new Image();
          img.addEventListener("load", function () {
            imageRes.loaded = true;
            imageRes.element = img;
            resolve(imageRes);
            domUrl.revokeObjectURL(url);
          });
          img.addEventListener("error", /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee50() {
            var img2;
            return _regeneratorRuntime().wrap(function _callee50$(_context50) {
              while (1) switch (_context50.prev = _context50.next) {
                case 0:
                  domUrl.revokeObjectURL(url);
                  img2 = Object.assign(Object.assign({}, image), {
                    error: false,
                    loading: true
                  });
                  _context50.next = 4;
                  return loadImage(img2);
                case 4:
                  imageRes.loaded = true;
                  imageRes.element = img2.element;
                  resolve(imageRes);
                case 7:
                case "end":
                  return _context50.stop();
              }
            }, _callee50);
          })));
          img.src = url;
        });
      }
      ; // CONCATENATED MODULE: ../../shapes/image/dist/esm/ImageDrawer.js
      var ImageDrawer = /*#__PURE__*/function () {
        function ImageDrawer() {
          _classCallCheck(this, ImageDrawer);
          this._images = [];
        }
        _createClass(ImageDrawer, [{
          key: "addImage",
          value: function addImage(container, image) {
            var containerImages = this.getImages(container);
            containerImages === null || containerImages === void 0 ? void 0 : containerImages.images.push(image);
          }
        }, {
          key: "destroy",
          value: function destroy() {
            this._images = [];
          }
        }, {
          key: "draw",
          value: function draw(context, particle, radius, opacity) {
            var _a;
            var image = particle.image,
              element = image === null || image === void 0 ? void 0 : image.element;
            if (!element) {
              return;
            }
            var ratio = (_a = image === null || image === void 0 ? void 0 : image.ratio) !== null && _a !== void 0 ? _a : 1,
              pos = {
                x: -radius,
                y: -radius
              };
            context.globalAlpha = opacity;
            context.drawImage(element, pos.x, pos.y, radius * 2, radius * 2 / ratio);
            context.globalAlpha = 1;
          }
        }, {
          key: "getImages",
          value: function getImages(container) {
            var containerImages = this._images.find(function (t) {
              return t.id === container.id;
            });
            if (!containerImages) {
              this._images.push({
                id: container.id,
                images: []
              });
              return this.getImages(container);
            } else {
              return containerImages;
            }
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 12;
          }
        }, {
          key: "loadShape",
          value: function loadShape(particle) {
            var _this60 = this;
            if (particle.shape !== "image" && particle.shape !== "images") {
              return;
            }
            var container = particle.container,
              images = this.getImages(container).images,
              imageData = particle.shapeData,
              image = images.find(function (t) {
                return t.source === imageData.src;
              });
            if (!image) {
              this.loadImageShape(container, imageData).then(function () {
                _this60.loadShape(particle);
              });
            }
          }
        }, {
          key: "particleInit",
          value: function particleInit(container, particle) {
            var _this61 = this;
            var _a;
            if (particle.shape !== "image" && particle.shape !== "images") {
              return;
            }
            var images = this.getImages(container).images,
              imageData = particle.shapeData,
              color = particle.getFillColor(),
              replaceColor = (_a = imageData.replaceColor) !== null && _a !== void 0 ? _a : imageData.replace_color,
              image = images.find(function (t) {
                return t.source === imageData.src;
              });
            if (!image) {
              return;
            }
            if (image.loading) {
              setTimeout(function () {
                _this61.particleInit(container, particle);
              });
              return;
            }
            _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee51() {
              var _a, _b, imageRes, fill, close, imageShape;
              return _regeneratorRuntime().wrap(function _callee51$(_context51) {
                while (1) switch (_context51.prev = _context51.next) {
                  case 0:
                    if (!(image.svgData && color)) {
                      _context51.next = 6;
                      break;
                    }
                    _context51.next = 3;
                    return replaceImageColor(image, imageData, color, particle);
                  case 3:
                    imageRes = _context51.sent;
                    _context51.next = 7;
                    break;
                  case 6:
                    imageRes = {
                      color: color,
                      data: image,
                      element: image.element,
                      loaded: true,
                      ratio: imageData.width / imageData.height,
                      replaceColor: replaceColor,
                      source: imageData.src
                    };
                  case 7:
                    if (!imageRes.ratio) {
                      imageRes.ratio = 1;
                    }
                    fill = (_a = imageData.fill) !== null && _a !== void 0 ? _a : particle.fill, close = (_b = imageData.close) !== null && _b !== void 0 ? _b : particle.close, imageShape = {
                      image: imageRes,
                      fill: fill,
                      close: close
                    };
                    particle.image = imageShape.image;
                    particle.fill = imageShape.fill;
                    particle.close = imageShape.close;
                  case 12:
                  case "end":
                    return _context51.stop();
                }
              }, _callee51);
            }))();
          }
        }, {
          key: "loadImageShape",
          value: function () {
            var _loadImageShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee52(container, imageShape) {
              var _a, source, image, imageFunc;
              return _regeneratorRuntime().wrap(function _callee52$(_context52) {
                while (1) switch (_context52.prev = _context52.next) {
                  case 0:
                    source = imageShape.src;
                    if (source) {
                      _context52.next = 3;
                      break;
                    }
                    throw new Error("Error tsParticles - No image.src");
                  case 3:
                    _context52.prev = 3;
                    image = {
                      source: source,
                      type: source.substring(source.length - 3),
                      error: false,
                      loading: true
                    };
                    this.addImage(container, image);
                    imageFunc = ((_a = imageShape.replaceColor) !== null && _a !== void 0 ? _a : imageShape.replace_color) ? downloadSvgImage : loadImage;
                    _context52.next = 9;
                    return imageFunc(image);
                  case 9:
                    _context52.next = 14;
                    break;
                  case 11:
                    _context52.prev = 11;
                    _context52.t0 = _context52["catch"](3);
                    throw new Error("tsParticles error - ".concat(imageShape.src, " not found"));
                  case 14:
                  case "end":
                    return _context52.stop();
                }
              }, _callee52, this, [[3, 11]]);
            }));
            function loadImageShape(_x79, _x80) {
              return _loadImageShape.apply(this, arguments);
            }
            return loadImageShape;
          }()
        }]);
        return ImageDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/image/dist/esm/index.js
      function loadImageShape(_x81) {
        return _loadImageShape2.apply(this, arguments);
      }
      function _loadImageShape2() {
        _loadImageShape2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee79(engine) {
          return _regeneratorRuntime().wrap(function _callee79$(_context79) {
            while (1) switch (_context79.prev = _context79.next) {
              case 0:
                _context79.next = 2;
                return engine.addShape(["image", "images"], new ImageDrawer());
              case 2:
              case "end":
                return _context79.stop();
            }
          }, _callee79);
        }));
        return _loadImageShape2.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/life/dist/esm/Options/Classes/LifeDelay.js
      var LifeDelay = /*#__PURE__*/function (_ValueWithRandom10) {
        _inherits(LifeDelay, _ValueWithRandom10);
        var _super30 = _createSuper(LifeDelay);
        function LifeDelay() {
          var _this62;
          _classCallCheck(this, LifeDelay);
          _this62 = _super30.call(this);
          _this62.sync = false;
          return _this62;
        }
        _createClass(LifeDelay, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(LifeDelay.prototype), "load", this).call(this, data);
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return LifeDelay;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/life/dist/esm/Options/Classes/LifeDuration.js
      var LifeDuration = /*#__PURE__*/function (_ValueWithRandom11) {
        _inherits(LifeDuration, _ValueWithRandom11);
        var _super31 = _createSuper(LifeDuration);
        function LifeDuration() {
          var _this63;
          _classCallCheck(this, LifeDuration);
          _this63 = _super31.call(this);
          _this63.random.minimumValue = 0.0001;
          _this63.sync = false;
          return _this63;
        }
        _createClass(LifeDuration, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            _get(_getPrototypeOf(LifeDuration.prototype), "load", this).call(this, data);
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return LifeDuration;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/life/dist/esm/Options/Classes/Life.js
      var Life = /*#__PURE__*/function () {
        function Life() {
          _classCallCheck(this, Life);
          this.count = 0;
          this.delay = new LifeDelay();
          this.duration = new LifeDuration();
        }
        _createClass(Life, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.count !== undefined) {
              this.count = data.count;
            }
            this.delay.load(data.delay);
            this.duration.load(data.duration);
          }
        }]);
        return Life;
      }();
      ; // CONCATENATED MODULE: ../../updaters/life/dist/esm/LifeUpdater.js
      var LifeUpdater = /*#__PURE__*/function () {
        function LifeUpdater(container) {
          _classCallCheck(this, LifeUpdater);
          this.container = container;
        }
        _createClass(LifeUpdater, [{
          key: "init",
          value: function init(particle) {
            var container = this.container,
              particlesOptions = particle.options,
              lifeOptions = particlesOptions.life;
            if (!lifeOptions) {
              return;
            }
            particle.life = {
              delay: container.retina.reduceFactor ? _getRangeValue(lifeOptions.delay.value) * (lifeOptions.delay.sync ? 1 : _getRandom()) / container.retina.reduceFactor * 1000 : 0,
              delayTime: 0,
              duration: container.retina.reduceFactor ? _getRangeValue(lifeOptions.duration.value) * (lifeOptions.duration.sync ? 1 : _getRandom()) / container.retina.reduceFactor * 1000 : 0,
              time: 0,
              count: lifeOptions.count
            };
            if (particle.life.duration <= 0) {
              particle.life.duration = -1;
            }
            if (particle.life.count <= 0) {
              particle.life.count = -1;
            }
            if (particle.life) {
              particle.spawning = particle.life.delay > 0;
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return !particle.destroyed;
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.life) {
              options.life = new Life();
            }
            for (var _len19 = arguments.length, sources = new Array(_len19 > 1 ? _len19 - 1 : 0), _key19 = 1; _key19 < _len19; _key19++) {
              sources[_key19 - 1] = arguments[_key19];
            }
            for (var _i18 = 0, _sources15 = sources; _i18 < _sources15.length; _i18++) {
              var source = _sources15[_i18];
              options.life.load(source === null || source === void 0 ? void 0 : source.life);
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle) || !particle.life) {
              return;
            }
            var life = particle.life;
            var justSpawned = false;
            if (particle.spawning) {
              life.delayTime += delta.value;
              if (life.delayTime >= particle.life.delay) {
                justSpawned = true;
                particle.spawning = false;
                life.delayTime = 0;
                life.time = 0;
              } else {
                return;
              }
            }
            if (life.duration === -1) {
              return;
            }
            if (particle.spawning) {
              return;
            }
            if (justSpawned) {
              life.time = 0;
            } else {
              life.time += delta.value;
            }
            if (life.time < life.duration) {
              return;
            }
            life.time = 0;
            if (particle.life.count > 0) {
              particle.life.count--;
            }
            if (particle.life.count === 0) {
              particle.destroy();
              return;
            }
            var canvasSize = this.container.canvas.size,
              widthRange = _setRangeValue(0, canvasSize.width),
              heightRange = _setRangeValue(0, canvasSize.width);
            particle.position.x = _randomInRange(widthRange);
            particle.position.y = _randomInRange(heightRange);
            particle.spawning = true;
            life.delayTime = 0;
            life.time = 0;
            particle.reset();
            var lifeOptions = particle.options.life;
            if (lifeOptions) {
              life.delay = _getRangeValue(lifeOptions.delay.value) * 1000;
              life.duration = _getRangeValue(lifeOptions.duration.value) * 1000;
            }
          }
        }]);
        return LifeUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/life/dist/esm/index.js
      function loadLifeUpdater(_x82) {
        return _loadLifeUpdater.apply(this, arguments);
      }
      function _loadLifeUpdater() {
        _loadLifeUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee80(engine) {
          return _regeneratorRuntime().wrap(function _callee80$(_context80) {
            while (1) switch (_context80.prev = _context80.next) {
              case 0:
                _context80.next = 2;
                return engine.addParticleUpdater("life", function (container) {
                  return new LifeUpdater(container);
                });
              case 2:
              case "end":
                return _context80.stop();
            }
          }, _callee80);
        }));
        return _loadLifeUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/line/dist/esm/LineDrawer.js
      var LineDrawer = /*#__PURE__*/function () {
        function LineDrawer() {
          _classCallCheck(this, LineDrawer);
        }
        _createClass(LineDrawer, [{
          key: "draw",
          value: function draw(context, particle, radius) {
            context.moveTo(-radius / 2, 0);
            context.lineTo(radius / 2, 0);
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 1;
          }
        }]);
        return LineDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/line/dist/esm/index.js
      function loadLineShape(_x83) {
        return _loadLineShape.apply(this, arguments);
      }
      function _loadLineShape() {
        _loadLineShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee81(engine) {
          return _regeneratorRuntime().wrap(function _callee81$(_context81) {
            while (1) switch (_context81.prev = _context81.next) {
              case 0:
                _context81.next = 2;
                return engine.addShape("line", new LineDrawer());
              case 2:
              case "end":
                return _context81.stop();
            }
          }, _callee81);
        }));
        return _loadLineShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/opacity/dist/esm/OpacityUpdater.js

      function checkDestroy(particle, value, minValue, maxValue) {
        switch (particle.options.opacity.animation.destroy) {
          case "max":
            if (value >= maxValue) {
              particle.destroy();
            }
            break;
          case "min":
            if (value <= minValue) {
              particle.destroy();
            }
            break;
        }
      }
      function updateOpacity(particle, delta) {
        var _a, _b, _c, _d, _e, _f;
        if (!particle.opacity) {
          return;
        }
        var minValue = particle.opacity.min,
          maxValue = particle.opacity.max,
          decay = (_a = particle.opacity.decay) !== null && _a !== void 0 ? _a : 1;
        if (particle.destroyed || !particle.opacity.enable || ((_b = particle.opacity.maxLoops) !== null && _b !== void 0 ? _b : 0) > 0 && ((_c = particle.opacity.loops) !== null && _c !== void 0 ? _c : 0) > ((_d = particle.opacity.maxLoops) !== null && _d !== void 0 ? _d : 0)) {
          return;
        }
        switch (particle.opacity.status) {
          case "increasing":
            if (particle.opacity.value >= maxValue) {
              particle.opacity.status = "decreasing";
              if (!particle.opacity.loops) {
                particle.opacity.loops = 0;
              }
              particle.opacity.loops++;
            } else {
              particle.opacity.value += ((_e = particle.opacity.velocity) !== null && _e !== void 0 ? _e : 0) * delta.factor;
            }
            break;
          case "decreasing":
            if (particle.opacity.value <= minValue) {
              particle.opacity.status = "increasing";
              if (!particle.opacity.loops) {
                particle.opacity.loops = 0;
              }
              particle.opacity.loops++;
            } else {
              particle.opacity.value -= ((_f = particle.opacity.velocity) !== null && _f !== void 0 ? _f : 0) * delta.factor;
            }
            break;
        }
        if (particle.opacity.velocity && particle.opacity.decay !== 1) {
          particle.opacity.velocity *= decay;
        }
        checkDestroy(particle, particle.opacity.value, minValue, maxValue);
        if (!particle.destroyed) {
          particle.opacity.value = _clamp(particle.opacity.value, minValue, maxValue);
        }
      }
      var OpacityUpdater = /*#__PURE__*/function () {
        function OpacityUpdater(container) {
          _classCallCheck(this, OpacityUpdater);
          this.container = container;
        }
        _createClass(OpacityUpdater, [{
          key: "init",
          value: function init(particle) {
            var opacityOptions = particle.options.opacity;
            particle.opacity = {
              enable: opacityOptions.animation.enable,
              max: _getRangeMax(opacityOptions.value),
              min: _getRangeMin(opacityOptions.value),
              value: _getRangeValue(opacityOptions.value),
              loops: 0,
              maxLoops: _getRangeValue(opacityOptions.animation.count)
            };
            var opacityAnimation = opacityOptions.animation;
            if (opacityAnimation.enable) {
              particle.opacity.decay = 1 - _getRangeValue(opacityAnimation.decay);
              particle.opacity.status = "increasing";
              var opacityRange = opacityOptions.value;
              particle.opacity.min = _getRangeMin(opacityRange);
              particle.opacity.max = _getRangeMax(opacityRange);
              switch (opacityAnimation.startValue) {
                case "min":
                  particle.opacity.value = particle.opacity.min;
                  particle.opacity.status = "increasing";
                  break;
                case "random":
                  particle.opacity.value = _randomInRange(particle.opacity);
                  particle.opacity.status = _getRandom() >= 0.5 ? "increasing" : "decreasing";
                  break;
                case "max":
                default:
                  particle.opacity.value = particle.opacity.max;
                  particle.opacity.status = "decreasing";
                  break;
              }
              particle.opacity.velocity = _getRangeValue(opacityAnimation.speed) / 100 * this.container.retina.reduceFactor;
              if (!opacityAnimation.sync) {
                particle.opacity.velocity *= _getRandom();
              }
            }
            particle.opacity.initialValue = particle.opacity.value;
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a, _b, _c, _d;
            return !particle.destroyed && !particle.spawning && !!particle.opacity && particle.opacity.enable && (((_a = particle.opacity.maxLoops) !== null && _a !== void 0 ? _a : 0) <= 0 || ((_b = particle.opacity.maxLoops) !== null && _b !== void 0 ? _b : 0) > 0 && ((_c = particle.opacity.loops) !== null && _c !== void 0 ? _c : 0) < ((_d = particle.opacity.maxLoops) !== null && _d !== void 0 ? _d : 0));
          }
        }, {
          key: "reset",
          value: function reset(particle) {
            if (particle.opacity) {
              particle.opacity.loops = 0;
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateOpacity(particle, delta);
          }
        }]);
        return OpacityUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/opacity/dist/esm/index.js
      function loadOpacityUpdater(_x84) {
        return _loadOpacityUpdater.apply(this, arguments);
      }
      function _loadOpacityUpdater() {
        _loadOpacityUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee82(engine) {
          return _regeneratorRuntime().wrap(function _callee82$(_context82) {
            while (1) switch (_context82.prev = _context82.next) {
              case 0:
                _context82.next = 2;
                return engine.addParticleUpdater("opacity", function (container) {
                  return new OpacityUpdater(container);
                });
              case 2:
              case "end":
                return _context82.stop();
            }
          }, _callee82);
        }));
        return _loadOpacityUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/Utils.js

      function bounceHorizontal(data) {
        if (data.outMode !== "bounce" && data.outMode !== "bounce-horizontal" && data.outMode !== "bounceHorizontal" && data.outMode !== "split") {
          return;
        }
        if (data.bounds.right < 0) {
          data.particle.position.x = data.size + data.offset.x;
        } else if (data.bounds.left > data.canvasSize.width) {
          data.particle.position.x = data.canvasSize.width - data.size - data.offset.x;
        }
        var velocity = data.particle.velocity.x;
        var bounced = false;
        if (data.direction === "right" && data.bounds.right >= data.canvasSize.width && velocity > 0 || data.direction === "left" && data.bounds.left <= 0 && velocity < 0) {
          var newVelocity = _getValue(data.particle.options.bounce.horizontal);
          data.particle.velocity.x *= -newVelocity;
          bounced = true;
        }
        if (!bounced) {
          return;
        }
        var minPos = data.offset.x + data.size;
        if (data.bounds.right >= data.canvasSize.width) {
          data.particle.position.x = data.canvasSize.width - minPos;
        } else if (data.bounds.left <= 0) {
          data.particle.position.x = minPos;
        }
        if (data.outMode === "split") {
          data.particle.destroy();
        }
      }
      function bounceVertical(data) {
        if (data.outMode !== "bounce" && data.outMode !== "bounce-vertical" && data.outMode !== "bounceVertical" && data.outMode !== "split") {
          return;
        }
        if (data.bounds.bottom < 0) {
          data.particle.position.y = data.size + data.offset.y;
        } else if (data.bounds.top > data.canvasSize.height) {
          data.particle.position.y = data.canvasSize.height - data.size - data.offset.y;
        }
        var velocity = data.particle.velocity.y;
        var bounced = false;
        if (data.direction === "bottom" && data.bounds.bottom >= data.canvasSize.height && velocity > 0 || data.direction === "top" && data.bounds.top <= 0 && velocity < 0) {
          var newVelocity = _getValue(data.particle.options.bounce.vertical);
          data.particle.velocity.y *= -newVelocity;
          bounced = true;
        }
        if (!bounced) {
          return;
        }
        var minPos = data.offset.y + data.size;
        if (data.bounds.bottom >= data.canvasSize.height) {
          data.particle.position.y = data.canvasSize.height - minPos;
        } else if (data.bounds.top <= 0) {
          data.particle.position.y = minPos;
        }
        if (data.outMode === "split") {
          data.particle.destroy();
        }
      }
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/BounceOutMode.js
      var BounceOutMode = /*#__PURE__*/function () {
        function BounceOutMode(container) {
          _classCallCheck(this, BounceOutMode);
          this.container = container;
          this.modes = ["bounce", "bounce-vertical", "bounce-horizontal", "bounceVertical", "bounceHorizontal", "split"];
        }
        _createClass(BounceOutMode, [{
          key: "update",
          value: function update(particle, direction, delta, outMode) {
            if (!this.modes.includes(outMode)) {
              return;
            }
            var container = this.container;
            var handled = false;
            var _iterator87 = _createForOfIteratorHelper(container.plugins),
              _step87;
            try {
              for (_iterator87.s(); !(_step87 = _iterator87.n()).done;) {
                var _step87$value = _slicedToArray(_step87.value, 2),
                  plugin = _step87$value[1];
                if (plugin.particleBounce !== undefined) {
                  handled = plugin.particleBounce(particle, delta, direction);
                }
                if (handled) {
                  break;
                }
              }
            } catch (err) {
              _iterator87.e(err);
            } finally {
              _iterator87.f();
            }
            if (handled) {
              return;
            }
            var pos = particle.getPosition(),
              offset = particle.offset,
              size = particle.getRadius(),
              bounds = _calculateBounds(pos, size),
              canvasSize = container.canvas.size;
            bounceHorizontal({
              particle: particle,
              outMode: outMode,
              direction: direction,
              bounds: bounds,
              canvasSize: canvasSize,
              offset: offset,
              size: size
            });
            bounceVertical({
              particle: particle,
              outMode: outMode,
              direction: direction,
              bounds: bounds,
              canvasSize: canvasSize,
              offset: offset,
              size: size
            });
          }
        }]);
        return BounceOutMode;
      }();
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/DestroyOutMode.js
      var DestroyOutMode = /*#__PURE__*/function () {
        function DestroyOutMode(container) {
          _classCallCheck(this, DestroyOutMode);
          this.container = container;
          this.modes = ["destroy"];
        }
        _createClass(DestroyOutMode, [{
          key: "update",
          value: function update(particle, direction, delta, outMode) {
            if (!this.modes.includes(outMode)) {
              return;
            }
            var container = this.container;
            switch (particle.outType) {
              case "normal":
              case "outside":
                if (_isPointInside(particle.position, container.canvas.size, _Vector.origin, particle.getRadius(), direction)) {
                  return;
                }
                break;
              case "inside":
                {
                  var _getDistances8 = _getDistances(particle.position, particle.moveCenter),
                    dx = _getDistances8.dx,
                    dy = _getDistances8.dy;
                  var _particle$velocity = particle.velocity,
                    vx = _particle$velocity.x,
                    vy = _particle$velocity.y;
                  if (vx < 0 && dx > particle.moveCenter.radius || vy < 0 && dy > particle.moveCenter.radius || vx >= 0 && dx < -particle.moveCenter.radius || vy >= 0 && dy < -particle.moveCenter.radius) {
                    return;
                  }
                  break;
                }
            }
            container.particles.remove(particle, undefined, true);
          }
        }]);
        return DestroyOutMode;
      }();
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/NoneOutMode.js
      var NoneOutMode = /*#__PURE__*/function () {
        function NoneOutMode(container) {
          _classCallCheck(this, NoneOutMode);
          this.container = container;
          this.modes = ["none"];
        }
        _createClass(NoneOutMode, [{
          key: "update",
          value: function update(particle, direction, delta, outMode) {
            if (!this.modes.includes(outMode)) {
              return;
            }
            if (particle.options.move.distance.horizontal && (direction === "left" || direction === "right") || particle.options.move.distance.vertical && (direction === "top" || direction === "bottom")) {
              return;
            }
            var gravityOptions = particle.options.move.gravity,
              container = this.container;
            var canvasSize = container.canvas.size;
            var pRadius = particle.getRadius();
            if (!gravityOptions.enable) {
              if (particle.velocity.y > 0 && particle.position.y <= canvasSize.height + pRadius || particle.velocity.y < 0 && particle.position.y >= -pRadius || particle.velocity.x > 0 && particle.position.x <= canvasSize.width + pRadius || particle.velocity.x < 0 && particle.position.x >= -pRadius) {
                return;
              }
              if (!_isPointInside(particle.position, container.canvas.size, _Vector.origin, pRadius, direction)) {
                container.particles.remove(particle);
              }
            } else {
              var position = particle.position;
              if (!gravityOptions.inverse && position.y > canvasSize.height + pRadius && direction === "bottom" || gravityOptions.inverse && position.y < -pRadius && direction === "top") {
                container.particles.remove(particle);
              }
            }
          }
        }]);
        return NoneOutMode;
      }();
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/OutOutMode.js
      var OutOutMode = /*#__PURE__*/function () {
        function OutOutMode(container) {
          _classCallCheck(this, OutOutMode);
          this.container = container;
          this.modes = ["out"];
        }
        _createClass(OutOutMode, [{
          key: "update",
          value: function update(particle, direction, delta, outMode) {
            if (!this.modes.includes(outMode)) {
              return;
            }
            var container = this.container;
            switch (particle.outType) {
              case "inside":
                {
                  var _particle$velocity2 = particle.velocity,
                    vx = _particle$velocity2.x,
                    vy = _particle$velocity2.y;
                  var circVec = _Vector.origin;
                  circVec.length = particle.moveCenter.radius;
                  circVec.angle = particle.velocity.angle + Math.PI;
                  circVec.addTo(_Vector.create(particle.moveCenter));
                  var _getDistances9 = _getDistances(particle.position, circVec),
                    dx = _getDistances9.dx,
                    dy = _getDistances9.dy;
                  if (vx <= 0 && dx >= 0 || vy <= 0 && dy >= 0 || vx >= 0 && dx <= 0 || vy >= 0 && dy <= 0) {
                    return;
                  }
                  particle.position.x = Math.floor(_randomInRange({
                    min: 0,
                    max: container.canvas.size.width
                  }));
                  particle.position.y = Math.floor(_randomInRange({
                    min: 0,
                    max: container.canvas.size.height
                  }));
                  var _getDistances10 = _getDistances(particle.position, particle.moveCenter),
                    newDx = _getDistances10.dx,
                    newDy = _getDistances10.dy;
                  particle.direction = Math.atan2(-newDy, -newDx);
                  particle.velocity.angle = particle.direction;
                  break;
                }
              default:
                {
                  if (_isPointInside(particle.position, container.canvas.size, _Vector.origin, particle.getRadius(), direction)) {
                    return;
                  }
                  switch (particle.outType) {
                    case "outside":
                      {
                        particle.position.x = Math.floor(_randomInRange({
                          min: -particle.moveCenter.radius,
                          max: particle.moveCenter.radius
                        })) + particle.moveCenter.x;
                        particle.position.y = Math.floor(_randomInRange({
                          min: -particle.moveCenter.radius,
                          max: particle.moveCenter.radius
                        })) + particle.moveCenter.y;
                        var _getDistances11 = _getDistances(particle.position, particle.moveCenter),
                          _dx = _getDistances11.dx,
                          _dy = _getDistances11.dy;
                        if (particle.moveCenter.radius) {
                          particle.direction = Math.atan2(_dy, _dx);
                          particle.velocity.angle = particle.direction;
                        }
                        break;
                      }
                    case "normal":
                      {
                        var wrap = particle.options.move.warp,
                          canvasSize = container.canvas.size,
                          newPos = {
                            bottom: canvasSize.height + particle.getRadius() + particle.offset.y,
                            left: -particle.getRadius() - particle.offset.x,
                            right: canvasSize.width + particle.getRadius() + particle.offset.x,
                            top: -particle.getRadius() - particle.offset.y
                          },
                          sizeValue = particle.getRadius(),
                          nextBounds = _calculateBounds(particle.position, sizeValue);
                        if (direction === "right" && nextBounds.left > canvasSize.width + particle.offset.x) {
                          particle.position.x = newPos.left;
                          particle.initialPosition.x = particle.position.x;
                          if (!wrap) {
                            particle.position.y = _getRandom() * canvasSize.height;
                            particle.initialPosition.y = particle.position.y;
                          }
                        } else if (direction === "left" && nextBounds.right < -particle.offset.x) {
                          particle.position.x = newPos.right;
                          particle.initialPosition.x = particle.position.x;
                          if (!wrap) {
                            particle.position.y = _getRandom() * canvasSize.height;
                            particle.initialPosition.y = particle.position.y;
                          }
                        }
                        if (direction === "bottom" && nextBounds.top > canvasSize.height + particle.offset.y) {
                          if (!wrap) {
                            particle.position.x = _getRandom() * canvasSize.width;
                            particle.initialPosition.x = particle.position.x;
                          }
                          particle.position.y = newPos.top;
                          particle.initialPosition.y = particle.position.y;
                        } else if (direction === "top" && nextBounds.bottom < -particle.offset.y) {
                          if (!wrap) {
                            particle.position.x = _getRandom() * canvasSize.width;
                            particle.initialPosition.x = particle.position.x;
                          }
                          particle.position.y = newPos.bottom;
                          particle.initialPosition.y = particle.position.y;
                        }
                        break;
                      }
                  }
                  break;
                }
            }
          }
        }]);
        return OutOutMode;
      }();
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/OutOfCanvasUpdater.js
      var OutOfCanvasUpdater = /*#__PURE__*/function () {
        function OutOfCanvasUpdater(container) {
          _classCallCheck(this, OutOfCanvasUpdater);
          this.container = container;
          this.updaters = [new BounceOutMode(container), new DestroyOutMode(container), new OutOutMode(container), new NoneOutMode(container)];
        }
        _createClass(OutOfCanvasUpdater, [{
          key: "init",
          value: function init() {}
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return !particle.destroyed && !particle.spawning;
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            var _a, _b, _c, _d;
            var outModes = particle.options.move.outModes;
            this.updateOutMode(particle, delta, (_a = outModes.bottom) !== null && _a !== void 0 ? _a : outModes["default"], "bottom");
            this.updateOutMode(particle, delta, (_b = outModes.left) !== null && _b !== void 0 ? _b : outModes["default"], "left");
            this.updateOutMode(particle, delta, (_c = outModes.right) !== null && _c !== void 0 ? _c : outModes["default"], "right");
            this.updateOutMode(particle, delta, (_d = outModes.top) !== null && _d !== void 0 ? _d : outModes["default"], "top");
          }
        }, {
          key: "updateOutMode",
          value: function updateOutMode(particle, delta, outMode, direction) {
            var _iterator88 = _createForOfIteratorHelper(this.updaters),
              _step88;
            try {
              for (_iterator88.s(); !(_step88 = _iterator88.n()).done;) {
                var updater = _step88.value;
                updater.update(particle, direction, delta, outMode);
              }
            } catch (err) {
              _iterator88.e(err);
            } finally {
              _iterator88.f();
            }
          }
        }]);
        return OutOfCanvasUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/outModes/dist/esm/index.js
      function loadOutModesUpdater(_x85) {
        return _loadOutModesUpdater.apply(this, arguments);
      }
      function _loadOutModesUpdater() {
        _loadOutModesUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee83(engine) {
          return _regeneratorRuntime().wrap(function _callee83$(_context83) {
            while (1) switch (_context83.prev = _context83.next) {
              case 0:
                _context83.next = 2;
                return engine.addParticleUpdater("outModes", function (container) {
                  return new OutOfCanvasUpdater(container);
                });
              case 2:
              case "end":
                return _context83.stop();
            }
          }, _callee83);
        }));
        return _loadOutModesUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../move/parallax/dist/esm/ParallaxMover.js
      var ParallaxMover = /*#__PURE__*/function () {
        function ParallaxMover() {
          _classCallCheck(this, ParallaxMover);
        }
        _createClass(ParallaxMover, [{
          key: "init",
          value: function init() {}
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return !_isSsr() && !particle.destroyed && particle.container.actualOptions.interactivity.events.onHover.parallax.enable;
          }
        }, {
          key: "move",
          value: function move(particle) {
            var container = particle.container,
              options = container.actualOptions;
            if (_isSsr() || !options.interactivity.events.onHover.parallax.enable) {
              return;
            }
            var parallaxForce = options.interactivity.events.onHover.parallax.force,
              mousePos = container.interactivity.mouse.position;
            if (!mousePos) {
              return;
            }
            var canvasCenter = {
                x: container.canvas.size.width / 2,
                y: container.canvas.size.height / 2
              },
              parallaxSmooth = options.interactivity.events.onHover.parallax.smooth,
              factor = particle.getRadius() / parallaxForce,
              centerDistance = {
                x: (mousePos.x - canvasCenter.x) * factor,
                y: (mousePos.y - canvasCenter.y) * factor
              };
            particle.offset.x += (centerDistance.x - particle.offset.x) / parallaxSmooth;
            particle.offset.y += (centerDistance.y - particle.offset.y) / parallaxSmooth;
          }
        }]);
        return ParallaxMover;
      }();
      ; // CONCATENATED MODULE: ../../move/parallax/dist/esm/index.js
      function loadParallaxMover(_x86) {
        return _loadParallaxMover.apply(this, arguments);
      }
      function _loadParallaxMover() {
        _loadParallaxMover = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee84(engine) {
          return _regeneratorRuntime().wrap(function _callee84$(_context84) {
            while (1) switch (_context84.prev = _context84.next) {
              case 0:
                engine.addMover("parallax", function () {
                  return new ParallaxMover();
                });
              case 1:
              case "end":
                return _context84.stop();
            }
          }, _callee84);
        }));
        return _loadParallaxMover.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/attract/dist/esm/Attractor.js
      var Attractor_Attractor = /*#__PURE__*/function (_ParticlesInteractorB) {
        _inherits(Attractor_Attractor, _ParticlesInteractorB);
        var _super32 = _createSuper(Attractor_Attractor);
        function Attractor_Attractor(container) {
          _classCallCheck(this, Attractor_Attractor);
          return _super32.call(this, container);
        }
        _createClass(Attractor_Attractor, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact12 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee53(p1) {
              var _a, container, distance, pos1, query, _iterator89, _step89, p2, pos2, _getDistances12, dx, dy, rotate, ax, ay, p1Factor, p2Factor;
              return _regeneratorRuntime().wrap(function _callee53$(_context53) {
                while (1) switch (_context53.prev = _context53.next) {
                  case 0:
                    container = this.container, distance = (_a = p1.retina.attractDistance) !== null && _a !== void 0 ? _a : container.retina.attractDistance, pos1 = p1.getPosition(), query = container.particles.quadTree.queryCircle(pos1, distance);
                    _iterator89 = _createForOfIteratorHelper(query);
                    _context53.prev = 2;
                    _iterator89.s();
                  case 4:
                    if ((_step89 = _iterator89.n()).done) {
                      _context53.next = 15;
                      break;
                    }
                    p2 = _step89.value;
                    if (!(p1 === p2 || !p2.options.move.attract.enable || p2.destroyed || p2.spawning)) {
                      _context53.next = 8;
                      break;
                    }
                    return _context53.abrupt("continue", 13);
                  case 8:
                    pos2 = p2.getPosition(), _getDistances12 = _getDistances(pos1, pos2), dx = _getDistances12.dx, dy = _getDistances12.dy, rotate = p1.options.move.attract.rotate, ax = dx / (rotate.x * 1000), ay = dy / (rotate.y * 1000), p1Factor = p2.size.value / p1.size.value, p2Factor = 1 / p1Factor;
                    p1.velocity.x -= ax * p1Factor;
                    p1.velocity.y -= ay * p1Factor;
                    p2.velocity.x += ax * p2Factor;
                    p2.velocity.y += ay * p2Factor;
                  case 13:
                    _context53.next = 4;
                    break;
                  case 15:
                    _context53.next = 20;
                    break;
                  case 17:
                    _context53.prev = 17;
                    _context53.t0 = _context53["catch"](2);
                    _iterator89.e(_context53.t0);
                  case 20:
                    _context53.prev = 20;
                    _iterator89.f();
                    return _context53.finish(20);
                  case 23:
                  case "end":
                    return _context53.stop();
                }
              }, _callee53, this, [[2, 17, 20, 23]]);
            }));
            function interact(_x87) {
              return _interact12.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return particle.options.move.attract.enable;
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Attractor_Attractor;
      }(_ParticlesInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/particles/attract/dist/esm/index.js
      function loadParticlesAttractInteraction(_x88) {
        return _loadParticlesAttractInteraction.apply(this, arguments);
      }
      function _loadParticlesAttractInteraction() {
        _loadParticlesAttractInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee85(engine) {
          return _regeneratorRuntime().wrap(function _callee85$(_context85) {
            while (1) switch (_context85.prev = _context85.next) {
              case 0:
                _context85.next = 2;
                return engine.addInteractor("particlesAttract", function (container) {
                  return new Attractor_Attractor(container);
                });
              case 2:
              case "end":
                return _context85.stop();
            }
          }, _callee85);
        }));
        return _loadParticlesAttractInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/Absorb.js

      function updateAbsorb(p1, r1, p2, r2, delta, pixelRatio) {
        var factor = _clamp(p1.options.collisions.absorb.speed * delta.factor / 10, 0, r2);
        p1.size.value += factor / 2;
        p2.size.value -= factor;
        if (r2 <= pixelRatio) {
          p2.size.value = 0;
          p2.destroy();
        }
      }
      function absorb(p1, p2, delta, pixelRatio) {
        var r1 = p1.getRadius(),
          r2 = p2.getRadius();
        if (r1 === undefined && r2 !== undefined) {
          p1.destroy();
        } else if (r1 !== undefined && r2 === undefined) {
          p2.destroy();
        } else if (r1 !== undefined && r2 !== undefined) {
          if (r1 >= r2) {
            updateAbsorb(p1, r1, p2, r2, delta, pixelRatio);
          } else {
            updateAbsorb(p2, r2, p1, r1, delta, pixelRatio);
          }
        }
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/Bounce.js

      function bounce(p1, p2) {
        _circleBounce(_circleBounceDataFromParticle(p1), _circleBounceDataFromParticle(p2));
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/Destroy.js

      function destroy(p1, p2) {
        if (!p1.unbreakable && !p2.unbreakable) {
          bounce(p1, p2);
        }
        if (p1.getRadius() === undefined && p2.getRadius() !== undefined) {
          p1.destroy();
        } else if (p1.getRadius() !== undefined && p2.getRadius() === undefined) {
          p2.destroy();
        } else if (p1.getRadius() !== undefined && p2.getRadius() !== undefined) {
          var deleteP = p1.getRadius() >= p2.getRadius() ? p1 : p2;
          deleteP.destroy();
        }
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/ResolveCollision.js

      function resolveCollision(p1, p2, delta, pixelRatio) {
        switch (p1.options.collisions.mode) {
          case "absorb":
            {
              absorb(p1, p2, delta, pixelRatio);
              break;
            }
          case "bounce":
            {
              bounce(p1, p2);
              break;
            }
          case "destroy":
            {
              destroy(p1, p2);
              break;
            }
        }
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/Collider.js
      var Collider = /*#__PURE__*/function (_ParticlesInteractorB2) {
        _inherits(Collider, _ParticlesInteractorB2);
        var _super33 = _createSuper(Collider);
        function Collider(container) {
          _classCallCheck(this, Collider);
          return _super33.call(this, container);
        }
        _createClass(Collider, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "interact",
          value: function () {
            var _interact13 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee54(p1, delta) {
              var container, pos1, radius1, query, _iterator90, _step90, p2, pos2, radius2, dist, distP;
              return _regeneratorRuntime().wrap(function _callee54$(_context54) {
                while (1) switch (_context54.prev = _context54.next) {
                  case 0:
                    container = this.container, pos1 = p1.getPosition(), radius1 = p1.getRadius(), query = container.particles.quadTree.queryCircle(pos1, radius1 * 2);
                    _iterator90 = _createForOfIteratorHelper(query);
                    _context54.prev = 2;
                    _iterator90.s();
                  case 4:
                    if ((_step90 = _iterator90.n()).done) {
                      _context54.next = 17;
                      break;
                    }
                    p2 = _step90.value;
                    if (!(p1 === p2 || !p2.options.collisions.enable || p1.options.collisions.mode !== p2.options.collisions.mode || p2.destroyed || p2.spawning)) {
                      _context54.next = 8;
                      break;
                    }
                    return _context54.abrupt("continue", 15);
                  case 8:
                    pos2 = p2.getPosition(), radius2 = p2.getRadius();
                    if (!(Math.abs(Math.round(pos1.z) - Math.round(pos2.z)) > radius1 + radius2)) {
                      _context54.next = 11;
                      break;
                    }
                    return _context54.abrupt("continue", 15);
                  case 11:
                    dist = _getDistance(pos1, pos2), distP = radius1 + radius2;
                    if (!(dist > distP)) {
                      _context54.next = 14;
                      break;
                    }
                    return _context54.abrupt("continue", 15);
                  case 14:
                    resolveCollision(p1, p2, delta, container.retina.pixelRatio);
                  case 15:
                    _context54.next = 4;
                    break;
                  case 17:
                    _context54.next = 22;
                    break;
                  case 19:
                    _context54.prev = 19;
                    _context54.t0 = _context54["catch"](2);
                    _iterator90.e(_context54.t0);
                  case 22:
                    _context54.prev = 22;
                    _iterator90.f();
                    return _context54.finish(22);
                  case 25:
                  case "end":
                    return _context54.stop();
                }
              }, _callee54, this, [[2, 19, 22, 25]]);
            }));
            function interact(_x89, _x90) {
              return _interact13.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            return particle.options.collisions.enable;
          }
        }, {
          key: "reset",
          value: function reset() {}
        }]);
        return Collider;
      }(_ParticlesInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/particles/collisions/dist/esm/index.js
      function loadParticlesCollisionsInteraction(_x91) {
        return _loadParticlesCollisionsInteraction.apply(this, arguments);
      }
      function _loadParticlesCollisionsInteraction() {
        _loadParticlesCollisionsInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee86(engine) {
          return _regeneratorRuntime().wrap(function _callee86$(_context86) {
            while (1) switch (_context86.prev = _context86.next) {
              case 0:
                _context86.next = 2;
                return engine.addInteractor("particlesCollisions", function (container) {
                  return new Collider(container);
                });
              case 2:
              case "end":
                return _context86.stop();
            }
          }, _callee86);
        }));
        return _loadParticlesCollisionsInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/CircleWarp.js
      var CircleWarp = /*#__PURE__*/function (_Circle2) {
        _inherits(CircleWarp, _Circle2);
        var _super34 = _createSuper(CircleWarp);
        function CircleWarp(x, y, radius, canvasSize) {
          var _this64;
          _classCallCheck(this, CircleWarp);
          _this64 = _super34.call(this, x, y, radius);
          _this64.canvasSize = canvasSize;
          _this64.canvasSize = Object.assign({}, canvasSize);
          return _this64;
        }
        _createClass(CircleWarp, [{
          key: "contains",
          value: function contains(point) {
            if (_get(_getPrototypeOf(CircleWarp.prototype), "contains", this).call(this, point)) {
              return true;
            }
            var posNE = {
              x: point.x - this.canvasSize.width,
              y: point.y
            };
            if (_get(_getPrototypeOf(CircleWarp.prototype), "contains", this).call(this, posNE)) {
              return true;
            }
            var posSE = {
              x: point.x - this.canvasSize.width,
              y: point.y - this.canvasSize.height
            };
            if (_get(_getPrototypeOf(CircleWarp.prototype), "contains", this).call(this, posSE)) {
              return true;
            }
            var posSW = {
              x: point.x,
              y: point.y - this.canvasSize.height
            };
            return _get(_getPrototypeOf(CircleWarp.prototype), "contains", this).call(this, posSW);
          }
        }, {
          key: "intersects",
          value: function intersects(range) {
            if (_get(_getPrototypeOf(CircleWarp.prototype), "intersects", this).call(this, range)) {
              return true;
            }
            var rect = range,
              circle = range,
              newPos = {
                x: range.position.x - this.canvasSize.width,
                y: range.position.y - this.canvasSize.height
              };
            if (circle.radius !== undefined) {
              var biggerCircle = new _Circle(newPos.x, newPos.y, circle.radius * 2);
              return _get(_getPrototypeOf(CircleWarp.prototype), "intersects", this).call(this, biggerCircle);
            } else if (rect.size !== undefined) {
              var rectSW = new _Rectangle(newPos.x, newPos.y, rect.size.width * 2, rect.size.height * 2);
              return _get(_getPrototypeOf(CircleWarp.prototype), "intersects", this).call(this, rectSW);
            }
            return false;
          }
        }]);
        return CircleWarp;
      }(_Circle);
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/Options/Classes/LinksShadow.js
      var LinksShadow = /*#__PURE__*/function () {
        function LinksShadow() {
          _classCallCheck(this, LinksShadow);
          this.blur = 5;
          this.color = new _OptionsColor();
          this.color.value = "#000";
          this.enable = false;
        }
        _createClass(LinksShadow, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.blur !== undefined) {
              this.blur = data.blur;
            }
            this.color = _OptionsColor.create(this.color, data.color);
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
          }
        }]);
        return LinksShadow;
      }();
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/Options/Classes/LinksTriangle.js
      var LinksTriangle = /*#__PURE__*/function () {
        function LinksTriangle() {
          _classCallCheck(this, LinksTriangle);
          this.enable = false;
          this.frequency = 1;
        }
        _createClass(LinksTriangle, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.frequency !== undefined) {
              this.frequency = data.frequency;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
          }
        }]);
        return LinksTriangle;
      }();
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/Options/Classes/Links.js
      var Links = /*#__PURE__*/function () {
        function Links() {
          _classCallCheck(this, Links);
          this.blink = false;
          this.color = new _OptionsColor();
          this.color.value = "#fff";
          this.consent = false;
          this.distance = 100;
          this.enable = false;
          this.frequency = 1;
          this.opacity = 1;
          this.shadow = new LinksShadow();
          this.triangles = new LinksTriangle();
          this.width = 1;
          this.warp = false;
        }
        _createClass(Links, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.id !== undefined) {
              this.id = data.id;
            }
            if (data.blink !== undefined) {
              this.blink = data.blink;
            }
            this.color = _OptionsColor.create(this.color, data.color);
            if (data.consent !== undefined) {
              this.consent = data.consent;
            }
            if (data.distance !== undefined) {
              this.distance = data.distance;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.frequency !== undefined) {
              this.frequency = data.frequency;
            }
            if (data.opacity !== undefined) {
              this.opacity = data.opacity;
            }
            this.shadow.load(data.shadow);
            this.triangles.load(data.triangles);
            if (data.width !== undefined) {
              this.width = data.width;
            }
            if (data.warp !== undefined) {
              this.warp = data.warp;
            }
          }
        }]);
        return Links;
      }();
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/Linker.js

      function getLinkDistance(pos1, pos2, optDistance, canvasSize, warp) {
        var distance = _getDistance(pos1, pos2);
        if (!warp || distance <= optDistance) {
          return distance;
        }
        var pos2NE = {
          x: pos2.x - canvasSize.width,
          y: pos2.y
        };
        distance = _getDistance(pos1, pos2NE);
        if (distance <= optDistance) {
          return distance;
        }
        var pos2SE = {
          x: pos2.x - canvasSize.width,
          y: pos2.y - canvasSize.height
        };
        distance = _getDistance(pos1, pos2SE);
        if (distance <= optDistance) {
          return distance;
        }
        var pos2SW = {
          x: pos2.x,
          y: pos2.y - canvasSize.height
        };
        distance = _getDistance(pos1, pos2SW);
        return distance;
      }
      var Linker = /*#__PURE__*/function (_ParticlesInteractorB3) {
        _inherits(Linker, _ParticlesInteractorB3);
        var _super35 = _createSuper(Linker);
        function Linker(container) {
          var _this65;
          _classCallCheck(this, Linker);
          _this65 = _super35.call(this, container);
          _this65.linkContainer = container;
          return _this65;
        }
        _createClass(Linker, [{
          key: "clear",
          value: function clear() {}
        }, {
          key: "init",
          value: function init() {
            this.linkContainer.particles.linksColor = undefined;
            this.linkContainer.particles.linksColors = new Map();
          }
        }, {
          key: "interact",
          value: function () {
            var _interact14 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee55(p1) {
              var _a, pos1, container, canvasSize, linkOpt1, optOpacity, optDistance, warp, range, query, _iterator91, _step91, p2, linkOpt2, pos2, distance, opacityLine;
              return _regeneratorRuntime().wrap(function _callee55$(_context55) {
                while (1) switch (_context55.prev = _context55.next) {
                  case 0:
                    if (p1.options.links) {
                      _context55.next = 2;
                      break;
                    }
                    return _context55.abrupt("return");
                  case 2:
                    p1.links = [];
                    pos1 = p1.getPosition(), container = this.container, canvasSize = container.canvas.size;
                    if (!(pos1.x < 0 || pos1.y < 0 || pos1.x > canvasSize.width || pos1.y > canvasSize.height)) {
                      _context55.next = 6;
                      break;
                    }
                    return _context55.abrupt("return");
                  case 6:
                    linkOpt1 = p1.options.links, optOpacity = linkOpt1.opacity, optDistance = (_a = p1.retina.linksDistance) !== null && _a !== void 0 ? _a : 0, warp = linkOpt1.warp, range = warp ? new CircleWarp(pos1.x, pos1.y, optDistance, canvasSize) : new _Circle(pos1.x, pos1.y, optDistance), query = container.particles.quadTree.query(range);
                    _iterator91 = _createForOfIteratorHelper(query);
                    _context55.prev = 8;
                    _iterator91.s();
                  case 10:
                    if ((_step91 = _iterator91.n()).done) {
                      _context55.next = 26;
                      break;
                    }
                    p2 = _step91.value;
                    linkOpt2 = p2.options.links;
                    if (!(p1 === p2 || !(linkOpt2 === null || linkOpt2 === void 0 ? void 0 : linkOpt2.enable) || linkOpt1.id !== linkOpt2.id || p2.spawning || p2.destroyed || !p2.links || p1.links.map(function (t) {
                      return t.destination;
                    }).indexOf(p2) !== -1 || p2.links.map(function (t) {
                      return t.destination;
                    }).indexOf(p1) !== -1)) {
                      _context55.next = 15;
                      break;
                    }
                    return _context55.abrupt("continue", 24);
                  case 15:
                    pos2 = p2.getPosition();
                    if (!(pos2.x < 0 || pos2.y < 0 || pos2.x > canvasSize.width || pos2.y > canvasSize.height)) {
                      _context55.next = 18;
                      break;
                    }
                    return _context55.abrupt("continue", 24);
                  case 18:
                    distance = getLinkDistance(pos1, pos2, optDistance, canvasSize, warp && linkOpt2.warp);
                    if (!(distance > optDistance)) {
                      _context55.next = 21;
                      break;
                    }
                    return _context55.abrupt("return");
                  case 21:
                    opacityLine = (1 - distance / optDistance) * optOpacity;
                    this.setColor(p1);
                    p1.links.push({
                      destination: p2,
                      opacity: opacityLine
                    });
                  case 24:
                    _context55.next = 10;
                    break;
                  case 26:
                    _context55.next = 31;
                    break;
                  case 28:
                    _context55.prev = 28;
                    _context55.t0 = _context55["catch"](8);
                    _iterator91.e(_context55.t0);
                  case 31:
                    _context55.prev = 31;
                    _iterator91.f();
                    return _context55.finish(31);
                  case 34:
                  case "end":
                    return _context55.stop();
                }
              }, _callee55, this, [[8, 28, 31, 34]]);
            }));
            function interact(_x92) {
              return _interact14.apply(this, arguments);
            }
            return interact;
          }()
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            return !!((_a = particle.options.links) === null || _a === void 0 ? void 0 : _a.enable);
          }
        }, {
          key: "loadParticlesOptions",
          value: function loadParticlesOptions(options) {
            var _a, _b;
            if (!options.links) {
              options.links = new Links();
            }
            for (var _len20 = arguments.length, sources = new Array(_len20 > 1 ? _len20 - 1 : 0), _key20 = 1; _key20 < _len20; _key20++) {
              sources[_key20 - 1] = arguments[_key20];
            }
            for (var _i19 = 0, _sources16 = sources; _i19 < _sources16.length; _i19++) {
              var source = _sources16[_i19];
              options.links.load((_b = (_a = source === null || source === void 0 ? void 0 : source.links) !== null && _a !== void 0 ? _a : source === null || source === void 0 ? void 0 : source.lineLinked) !== null && _b !== void 0 ? _b : source === null || source === void 0 ? void 0 : source.line_linked);
            }
          }
        }, {
          key: "reset",
          value: function reset() {}
        }, {
          key: "setColor",
          value: function setColor(p1) {
            if (!p1.options.links) {
              return;
            }
            var container = this.linkContainer,
              linksOptions = p1.options.links;
            var linkColor = linksOptions.id === undefined ? container.particles.linksColor : container.particles.linksColors.get(linksOptions.id);
            if (linkColor) {
              return;
            }
            var optColor = linksOptions.color;
            linkColor = _getLinkRandomColor(optColor, linksOptions.blink, linksOptions.consent);
            if (linksOptions.id === undefined) {
              container.particles.linksColor = linkColor;
            } else {
              container.particles.linksColors.set(linksOptions.id, linkColor);
            }
          }
        }]);
        return Linker;
      }(_ParticlesInteractorBase);
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/interaction.js
      function loadInteraction(_x93) {
        return _loadInteraction.apply(this, arguments);
      }
      function _loadInteraction() {
        _loadInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee87(engine) {
          return _regeneratorRuntime().wrap(function _callee87$(_context87) {
            while (1) switch (_context87.prev = _context87.next) {
              case 0:
                _context87.next = 2;
                return engine.addInteractor("particlesLinks", function (container) {
                  return new Linker(container);
                });
              case 2:
              case "end":
                return _context87.stop();
            }
          }, _callee87);
        }));
        return _loadInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/Utils.js

      function _drawLinkLine(context, width, begin, end, maxDistance, canvasSize, warp, backgroundMask, composite, colorLine, opacity, shadow) {
        var drawn = false;
        if (_getDistance(begin, end) <= maxDistance) {
          _drawLine(context, begin, end);
          drawn = true;
        } else if (warp) {
          var pi1;
          var pi2;
          var endNE = {
            x: end.x - canvasSize.width,
            y: end.y
          };
          var d1 = _getDistances(begin, endNE);
          if (d1.distance <= maxDistance) {
            var yi = begin.y - d1.dy / d1.dx * begin.x;
            pi1 = {
              x: 0,
              y: yi
            };
            pi2 = {
              x: canvasSize.width,
              y: yi
            };
          } else {
            var endSW = {
              x: end.x,
              y: end.y - canvasSize.height
            };
            var d2 = _getDistances(begin, endSW);
            if (d2.distance <= maxDistance) {
              var _yi = begin.y - d2.dy / d2.dx * begin.x;
              var xi = -_yi / (d2.dy / d2.dx);
              pi1 = {
                x: xi,
                y: 0
              };
              pi2 = {
                x: xi,
                y: canvasSize.height
              };
            } else {
              var endSE = {
                x: end.x - canvasSize.width,
                y: end.y - canvasSize.height
              };
              var d3 = _getDistances(begin, endSE);
              if (d3.distance <= maxDistance) {
                var _yi2 = begin.y - d3.dy / d3.dx * begin.x;
                var _xi = -_yi2 / (d3.dy / d3.dx);
                pi1 = {
                  x: _xi,
                  y: _yi2
                };
                pi2 = {
                  x: pi1.x + canvasSize.width,
                  y: pi1.y + canvasSize.height
                };
              }
            }
          }
          if (pi1 && pi2) {
            _drawLine(context, begin, pi1);
            _drawLine(context, end, pi2);
            drawn = true;
          }
        }
        if (!drawn) {
          return;
        }
        context.lineWidth = width;
        if (backgroundMask) {
          context.globalCompositeOperation = composite;
        }
        context.strokeStyle = _getStyleFromRgb(colorLine, opacity);
        if (shadow.enable) {
          var shadowColor = _rangeColorToRgb(shadow.color);
          if (shadowColor) {
            context.shadowBlur = shadow.blur;
            context.shadowColor = _getStyleFromRgb(shadowColor);
          }
        }
        context.stroke();
      }
      function _drawLinkTriangle(context, pos1, pos2, pos3, backgroundMask, composite, colorTriangle, opacityTriangle) {
        _drawTriangle(context, pos1, pos2, pos3);
        if (backgroundMask) {
          context.globalCompositeOperation = composite;
        }
        context.fillStyle = _getStyleFromRgb(colorTriangle, opacityTriangle);
        context.fill();
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/LinkInstance.js

      function getLinkKey(ids) {
        ids.sort(function (a, b) {
          return a - b;
        });
        return ids.join("_");
      }
      function setLinkFrequency(particles, dictionary) {
        var key = getLinkKey(particles.map(function (t) {
          return t.id;
        }));
        var res = dictionary.get(key);
        if (res === undefined) {
          res = _getRandom();
          dictionary.set(key, res);
        }
        return res;
      }
      var LinkInstance = /*#__PURE__*/function () {
        function LinkInstance(container) {
          _classCallCheck(this, LinkInstance);
          this.container = container;
          this._freqs = {
            links: new Map(),
            triangles: new Map()
          };
        }
        _createClass(LinkInstance, [{
          key: "drawParticle",
          value: function drawParticle(context, particle) {
            var _this66 = this;
            var _a;
            var pOptions = particle.options;
            if (!particle.links || particle.links.length <= 0) {
              return;
            }
            var p1Links = particle.links.filter(function (l) {
              return pOptions.links && _this66.getLinkFrequency(particle, l.destination) <= pOptions.links.frequency;
            });
            var _iterator92 = _createForOfIteratorHelper(p1Links),
              _step92;
            try {
              for (_iterator92.s(); !(_step92 = _iterator92.n()).done;) {
                var link = _step92.value;
                this.drawTriangles(pOptions, particle, link, p1Links);
                if (link.opacity > 0 && ((_a = particle.retina.linksWidth) !== null && _a !== void 0 ? _a : 0) > 0) {
                  this.drawLinkLine(particle, link);
                }
              }
            } catch (err) {
              _iterator92.e(err);
            } finally {
              _iterator92.f();
            }
          }
        }, {
          key: "init",
          value: function () {
            var _init5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee56() {
              return _regeneratorRuntime().wrap(function _callee56$(_context56) {
                while (1) switch (_context56.prev = _context56.next) {
                  case 0:
                    this._freqs.links = new Map();
                    this._freqs.triangles = new Map();
                  case 2:
                  case "end":
                    return _context56.stop();
                }
              }, _callee56, this);
            }));
            function init() {
              return _init5.apply(this, arguments);
            }
            return init;
          }()
        }, {
          key: "particleCreated",
          value: function particleCreated(particle) {
            particle.links = [];
            if (!particle.options.links) {
              return;
            }
            var ratio = this.container.retina.pixelRatio;
            particle.retina.linksDistance = particle.options.links.distance * ratio;
            particle.retina.linksWidth = particle.options.links.width * ratio;
          }
        }, {
          key: "particleDestroyed",
          value: function particleDestroyed(particle) {
            particle.links = [];
          }
        }, {
          key: "drawLinkLine",
          value: function drawLinkLine(p1, link) {
            var container = this.container,
              options = container.actualOptions,
              p2 = link.destination,
              pos1 = p1.getPosition(),
              pos2 = p2.getPosition();
            var opacity = link.opacity;
            container.canvas.draw(function (ctx) {
              var _a, _b, _c;
              if (!p1.options.links) {
                return;
              }
              var colorLine;
              var twinkle = (_a = p1.options.twinkle) === null || _a === void 0 ? void 0 : _a.lines;
              if (twinkle === null || twinkle === void 0 ? void 0 : twinkle.enable) {
                var twinkleFreq = twinkle.frequency,
                  twinkleRgb = _rangeColorToRgb(twinkle.color),
                  twinkling = _getRandom() < twinkleFreq;
                if (twinkling && twinkleRgb) {
                  colorLine = twinkleRgb;
                  opacity = _getRangeValue(twinkle.opacity);
                }
              }
              if (!colorLine) {
                var linksOptions = p1.options.links,
                  linkColor = (linksOptions === null || linksOptions === void 0 ? void 0 : linksOptions.id) !== undefined ? container.particles.linksColors.get(linksOptions.id) : container.particles.linksColor;
                colorLine = _getLinkColor(p1, p2, linkColor);
              }
              if (!colorLine) {
                return;
              }
              var width = (_b = p1.retina.linksWidth) !== null && _b !== void 0 ? _b : 0,
                maxDistance = (_c = p1.retina.linksDistance) !== null && _c !== void 0 ? _c : 0;
              _drawLinkLine(ctx, width, pos1, pos2, maxDistance, container.canvas.size, p1.options.links.warp, options.backgroundMask.enable, options.backgroundMask.composite, colorLine, opacity, p1.options.links.shadow);
            });
          }
        }, {
          key: "drawLinkTriangle",
          value: function drawLinkTriangle(p1, link1, link2) {
            var _a;
            if (!p1.options.links) {
              return;
            }
            var container = this.container,
              options = container.actualOptions,
              p2 = link1.destination,
              p3 = link2.destination,
              triangleOptions = p1.options.links.triangles,
              opacityTriangle = (_a = triangleOptions.opacity) !== null && _a !== void 0 ? _a : (link1.opacity + link2.opacity) / 2;
            if (opacityTriangle <= 0) {
              return;
            }
            container.canvas.draw(function (ctx) {
              var _a;
              var pos1 = p1.getPosition(),
                pos2 = p2.getPosition(),
                pos3 = p3.getPosition(),
                linksDistance = (_a = p1.retina.linksDistance) !== null && _a !== void 0 ? _a : 0;
              if (_getDistance(pos1, pos2) > linksDistance || _getDistance(pos3, pos2) > linksDistance || _getDistance(pos3, pos1) > linksDistance) {
                return;
              }
              var colorTriangle = _rangeColorToRgb(triangleOptions.color);
              if (!colorTriangle) {
                var linksOptions = p1.options.links,
                  linkColor = (linksOptions === null || linksOptions === void 0 ? void 0 : linksOptions.id) !== undefined ? container.particles.linksColors.get(linksOptions.id) : container.particles.linksColor;
                colorTriangle = _getLinkColor(p1, p2, linkColor);
              }
              if (!colorTriangle) {
                return;
              }
              _drawLinkTriangle(ctx, pos1, pos2, pos3, options.backgroundMask.enable, options.backgroundMask.composite, colorTriangle, opacityTriangle);
            });
          }
        }, {
          key: "drawTriangles",
          value: function drawTriangles(options, p1, link, p1Links) {
            var _this67 = this;
            var _a, _b, _c;
            var p2 = link.destination;
            if (!(((_a = options.links) === null || _a === void 0 ? void 0 : _a.triangles.enable) && ((_b = p2.options.links) === null || _b === void 0 ? void 0 : _b.triangles.enable))) {
              return;
            }
            var vertices = (_c = p2.links) === null || _c === void 0 ? void 0 : _c.filter(function (t) {
              var linkFreq = _this67.getLinkFrequency(p2, t.destination);
              return p2.options.links && linkFreq <= p2.options.links.frequency && p1Links.findIndex(function (l) {
                return l.destination === t.destination;
              }) >= 0;
            });
            if (!(vertices === null || vertices === void 0 ? void 0 : vertices.length)) {
              return;
            }
            var _iterator93 = _createForOfIteratorHelper(vertices),
              _step93;
            try {
              for (_iterator93.s(); !(_step93 = _iterator93.n()).done;) {
                var vertex = _step93.value;
                var p3 = vertex.destination,
                  triangleFreq = this.getTriangleFrequency(p1, p2, p3);
                if (triangleFreq > options.links.triangles.frequency) {
                  continue;
                }
                this.drawLinkTriangle(p1, link, vertex);
              }
            } catch (err) {
              _iterator93.e(err);
            } finally {
              _iterator93.f();
            }
          }
        }, {
          key: "getLinkFrequency",
          value: function getLinkFrequency(p1, p2) {
            return setLinkFrequency([p1, p2], this._freqs.links);
          }
        }, {
          key: "getTriangleFrequency",
          value: function getTriangleFrequency(p1, p2, p3) {
            return setLinkFrequency([p1, p2, p3], this._freqs.triangles);
          }
        }]);
        return LinkInstance;
      }();
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/plugin.js
      var LinksPlugin = /*#__PURE__*/function () {
        function LinksPlugin() {
          _classCallCheck(this, LinksPlugin);
          this.id = "links";
        }
        _createClass(LinksPlugin, [{
          key: "getPlugin",
          value: function getPlugin(container) {
            return new LinkInstance(container);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions() {}
        }, {
          key: "needsPlugin",
          value: function needsPlugin() {
            return true;
          }
        }]);
        return LinksPlugin;
      }();
      function loadPlugin(_x94) {
        return _loadPlugin.apply(this, arguments);
      }
      function _loadPlugin() {
        _loadPlugin = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee88(engine) {
          var plugin;
          return _regeneratorRuntime().wrap(function _callee88$(_context88) {
            while (1) switch (_context88.prev = _context88.next) {
              case 0:
                plugin = new LinksPlugin();
                _context88.next = 3;
                return engine.addPlugin(plugin);
              case 3:
              case "end":
                return _context88.stop();
            }
          }, _callee88);
        }));
        return _loadPlugin.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../interactions/particles/links/dist/esm/index.js
      function loadParticlesLinksInteraction(_x95) {
        return _loadParticlesLinksInteraction.apply(this, arguments);
      }
      function _loadParticlesLinksInteraction() {
        _loadParticlesLinksInteraction = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee89(engine) {
          return _regeneratorRuntime().wrap(function _callee89$(_context89) {
            while (1) switch (_context89.prev = _context89.next) {
              case 0:
                _context89.next = 2;
                return loadInteraction(engine);
              case 2:
                _context89.next = 4;
                return loadPlugin(engine);
              case 4:
              case "end":
                return _context89.stop();
            }
          }, _callee89);
        }));
        return _loadParticlesLinksInteraction.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/polygon/dist/esm/PolygonDrawerBase.js
      var PolygonDrawerBase = /*#__PURE__*/function () {
        function PolygonDrawerBase() {
          _classCallCheck(this, PolygonDrawerBase);
        }
        _createClass(PolygonDrawerBase, [{
          key: "draw",
          value: function draw(context, particle, radius) {
            var start = this.getCenter(particle, radius),
              side = this.getSidesData(particle, radius),
              sideCount = side.count.numerator * side.count.denominator,
              decimalSides = side.count.numerator / side.count.denominator,
              interiorAngleDegrees = 180 * (decimalSides - 2) / decimalSides,
              interiorAngle = Math.PI - Math.PI * interiorAngleDegrees / 180;
            if (!context) {
              return;
            }
            context.beginPath();
            context.translate(start.x, start.y);
            context.moveTo(0, 0);
            for (var i = 0; i < sideCount; i++) {
              context.lineTo(side.length, 0);
              context.translate(side.length, 0);
              context.rotate(interiorAngle);
            }
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount(particle) {
            var _a, _b;
            var polygon = particle.shapeData,
              sides = Math.round(_getRangeValue((_b = (_a = polygon === null || polygon === void 0 ? void 0 : polygon.sides) !== null && _a !== void 0 ? _a : polygon === null || polygon === void 0 ? void 0 : polygon.nb_sides) !== null && _b !== void 0 ? _b : 5));
            return sides;
          }
        }]);
        return PolygonDrawerBase;
      }();
      ; // CONCATENATED MODULE: ../../shapes/polygon/dist/esm/PolygonDrawer.js
      var PolygonDrawer = /*#__PURE__*/function (_PolygonDrawerBase) {
        _inherits(PolygonDrawer, _PolygonDrawerBase);
        var _super36 = _createSuper(PolygonDrawer);
        function PolygonDrawer() {
          _classCallCheck(this, PolygonDrawer);
          return _super36.apply(this, arguments);
        }
        _createClass(PolygonDrawer, [{
          key: "getCenter",
          value: function getCenter(particle, radius) {
            return {
              x: -radius / (particle.sides / 3.5),
              y: -radius / (2.66 / 3.5)
            };
          }
        }, {
          key: "getSidesData",
          value: function getSidesData(particle, radius) {
            var sides = particle.sides;
            return {
              count: {
                denominator: 1,
                numerator: sides
              },
              length: radius * 2.66 / (sides / 3)
            };
          }
        }]);
        return PolygonDrawer;
      }(PolygonDrawerBase);
      ; // CONCATENATED MODULE: ../../shapes/polygon/dist/esm/TriangleDrawer.js
      var TriangleDrawer = /*#__PURE__*/function (_PolygonDrawerBase2) {
        _inherits(TriangleDrawer, _PolygonDrawerBase2);
        var _super37 = _createSuper(TriangleDrawer);
        function TriangleDrawer() {
          _classCallCheck(this, TriangleDrawer);
          return _super37.apply(this, arguments);
        }
        _createClass(TriangleDrawer, [{
          key: "getCenter",
          value: function getCenter(particle, radius) {
            return {
              x: -radius,
              y: radius / 1.66
            };
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 3;
          }
        }, {
          key: "getSidesData",
          value: function getSidesData(particle, radius) {
            return {
              count: {
                denominator: 2,
                numerator: 3
              },
              length: radius * 2
            };
          }
        }]);
        return TriangleDrawer;
      }(PolygonDrawerBase);
      ; // CONCATENATED MODULE: ../../shapes/polygon/dist/esm/index.js
      function loadGenericPolygonShape(_x96) {
        return _loadGenericPolygonShape.apply(this, arguments);
      }
      function _loadGenericPolygonShape() {
        _loadGenericPolygonShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee90(engine) {
          return _regeneratorRuntime().wrap(function _callee90$(_context90) {
            while (1) switch (_context90.prev = _context90.next) {
              case 0:
                _context90.next = 2;
                return engine.addShape("polygon", new PolygonDrawer());
              case 2:
              case "end":
                return _context90.stop();
            }
          }, _callee90);
        }));
        return _loadGenericPolygonShape.apply(this, arguments);
      }
      function loadTriangleShape(_x97) {
        return _loadTriangleShape.apply(this, arguments);
      }
      function _loadTriangleShape() {
        _loadTriangleShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee91(engine) {
          return _regeneratorRuntime().wrap(function _callee91$(_context91) {
            while (1) switch (_context91.prev = _context91.next) {
              case 0:
                _context91.next = 2;
                return engine.addShape("triangle", new TriangleDrawer());
              case 2:
              case "end":
                return _context91.stop();
            }
          }, _callee91);
        }));
        return _loadTriangleShape.apply(this, arguments);
      }
      function loadPolygonShape(_x98) {
        return _loadPolygonShape.apply(this, arguments);
      }
      function _loadPolygonShape() {
        _loadPolygonShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee92(engine) {
          return _regeneratorRuntime().wrap(function _callee92$(_context92) {
            while (1) switch (_context92.prev = _context92.next) {
              case 0:
                _context92.next = 2;
                return loadGenericPolygonShape(engine);
              case 2:
                _context92.next = 4;
                return loadTriangleShape(engine);
              case 4:
              case "end":
                return _context92.stop();
            }
          }, _callee92);
        }));
        return _loadPolygonShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/size/dist/esm/SizeUpdater.js

      function SizeUpdater_checkDestroy(particle, value, minValue, maxValue) {
        switch (particle.options.size.animation.destroy) {
          case "max":
            if (value >= maxValue) {
              particle.destroy();
            }
            break;
          case "min":
            if (value <= minValue) {
              particle.destroy();
            }
            break;
        }
      }
      function updateSize(particle, delta) {
        var _a, _b, _c, _d, _e;
        var sizeVelocity = ((_a = particle.size.velocity) !== null && _a !== void 0 ? _a : 0) * delta.factor,
          minValue = particle.size.min,
          maxValue = particle.size.max,
          decay = (_b = particle.size.decay) !== null && _b !== void 0 ? _b : 1;
        if (particle.destroyed || !particle.size.enable || ((_c = particle.size.maxLoops) !== null && _c !== void 0 ? _c : 0) > 0 && ((_d = particle.size.loops) !== null && _d !== void 0 ? _d : 0) > ((_e = particle.size.maxLoops) !== null && _e !== void 0 ? _e : 0)) {
          return;
        }
        switch (particle.size.status) {
          case "increasing":
            if (particle.size.value >= maxValue) {
              particle.size.status = "decreasing";
              if (!particle.size.loops) {
                particle.size.loops = 0;
              }
              particle.size.loops++;
            } else {
              particle.size.value += sizeVelocity;
            }
            break;
          case "decreasing":
            if (particle.size.value <= minValue) {
              particle.size.status = "increasing";
              if (!particle.size.loops) {
                particle.size.loops = 0;
              }
              particle.size.loops++;
            } else {
              particle.size.value -= sizeVelocity;
            }
        }
        if (particle.size.velocity && decay !== 1) {
          particle.size.velocity *= decay;
        }
        SizeUpdater_checkDestroy(particle, particle.size.value, minValue, maxValue);
        if (!particle.destroyed) {
          particle.size.value = _clamp(particle.size.value, minValue, maxValue);
        }
      }
      var SizeUpdater = /*#__PURE__*/function () {
        function SizeUpdater() {
          _classCallCheck(this, SizeUpdater);
        }
        _createClass(SizeUpdater, [{
          key: "init",
          value: function init(particle) {
            var _a;
            var container = particle.container,
              sizeOptions = particle.options.size,
              sizeAnimation = sizeOptions.animation;
            if (sizeAnimation.enable) {
              particle.size.velocity = ((_a = particle.retina.sizeAnimationSpeed) !== null && _a !== void 0 ? _a : container.retina.sizeAnimationSpeed) / 100 * container.retina.reduceFactor;
              if (!sizeAnimation.sync) {
                particle.size.velocity *= _getRandom();
              }
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a, _b, _c, _d;
            return !particle.destroyed && !particle.spawning && particle.size.enable && (((_a = particle.size.maxLoops) !== null && _a !== void 0 ? _a : 0) <= 0 || ((_b = particle.size.maxLoops) !== null && _b !== void 0 ? _b : 0) > 0 && ((_c = particle.size.loops) !== null && _c !== void 0 ? _c : 0) < ((_d = particle.size.maxLoops) !== null && _d !== void 0 ? _d : 0));
          }
        }, {
          key: "reset",
          value: function reset(particle) {
            particle.size.loops = 0;
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateSize(particle, delta);
          }
        }]);
        return SizeUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/size/dist/esm/index.js
      function loadSizeUpdater(_x99) {
        return _loadSizeUpdater.apply(this, arguments);
      }
      function _loadSizeUpdater() {
        _loadSizeUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee93(engine) {
          return _regeneratorRuntime().wrap(function _callee93$(_context93) {
            while (1) switch (_context93.prev = _context93.next) {
              case 0:
                _context93.next = 2;
                return engine.addParticleUpdater("size", function () {
                  return new SizeUpdater();
                });
              case 2:
              case "end":
                return _context93.stop();
            }
          }, _callee93);
        }));
        return _loadSizeUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/square/dist/esm/SquareDrawer.js
      var fixFactor = Math.sqrt(2);
      var SquareDrawer = /*#__PURE__*/function () {
        function SquareDrawer() {
          _classCallCheck(this, SquareDrawer);
        }
        _createClass(SquareDrawer, [{
          key: "draw",
          value: function draw(context, particle, radius) {
            context.rect(-radius / fixFactor, -radius / fixFactor, radius * 2 / fixFactor, radius * 2 / fixFactor);
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 4;
          }
        }]);
        return SquareDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/square/dist/esm/index.js
      function loadSquareShape(_x100) {
        return _loadSquareShape.apply(this, arguments);
      }
      function _loadSquareShape() {
        _loadSquareShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee94(engine) {
          var drawer;
          return _regeneratorRuntime().wrap(function _callee94$(_context94) {
            while (1) switch (_context94.prev = _context94.next) {
              case 0:
                drawer = new SquareDrawer();
                _context94.next = 3;
                return engine.addShape(["edge", "square"], drawer);
              case 3:
              case "end":
                return _context94.stop();
            }
          }, _callee94);
        }));
        return _loadSquareShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/star/dist/esm/StarDrawer.js
      var StarDrawer = /*#__PURE__*/function () {
        function StarDrawer() {
          _classCallCheck(this, StarDrawer);
        }
        _createClass(StarDrawer, [{
          key: "draw",
          value: function draw(context, particle, radius) {
            var _a;
            var sides = particle.sides,
              inset = (_a = particle.starInset) !== null && _a !== void 0 ? _a : 2;
            context.moveTo(0, 0 - radius);
            for (var i = 0; i < sides; i++) {
              context.rotate(Math.PI / sides);
              context.lineTo(0, 0 - radius * inset);
              context.rotate(Math.PI / sides);
              context.lineTo(0, 0 - radius);
            }
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount(particle) {
            var _a, _b;
            var star = particle.shapeData;
            return Math.round(_getRangeValue((_b = (_a = star === null || star === void 0 ? void 0 : star.sides) !== null && _a !== void 0 ? _a : star === null || star === void 0 ? void 0 : star.nb_sides) !== null && _b !== void 0 ? _b : 5));
          }
        }, {
          key: "particleInit",
          value: function particleInit(container, particle) {
            var _a;
            var star = particle.shapeData,
              inset = _getRangeValue((_a = star === null || star === void 0 ? void 0 : star.inset) !== null && _a !== void 0 ? _a : 2);
            particle.starInset = inset;
          }
        }]);
        return StarDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/star/dist/esm/index.js
      function loadStarShape(_x101) {
        return _loadStarShape.apply(this, arguments);
      }
      function _loadStarShape() {
        _loadStarShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee95(engine) {
          return _regeneratorRuntime().wrap(function _callee95$(_context95) {
            while (1) switch (_context95.prev = _context95.next) {
              case 0:
                _context95.next = 2;
                return engine.addShape("star", new StarDrawer());
              case 2:
              case "end":
                return _context95.stop();
            }
          }, _callee95);
        }));
        return _loadStarShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/strokeColor/dist/esm/StrokeColorUpdater.js

      function StrokeColorUpdater_updateColorValue(delta, value, valueAnimation, max, decrease) {
        var _a, _b;
        var colorValue = value;
        if (!colorValue || !colorValue.enable || colorValue.loops !== undefined && colorValue.maxLoops !== undefined && colorValue.maxLoops > 0 && colorValue.loops >= colorValue.maxLoops) {
          return;
        }
        var offset = _randomInRange(valueAnimation.offset),
          velocity = ((_a = value.velocity) !== null && _a !== void 0 ? _a : 0) * delta.factor + offset * 3.6,
          decay = (_b = value.decay) !== null && _b !== void 0 ? _b : 1;
        if (!decrease || colorValue.status === "increasing") {
          colorValue.value += velocity;
          if (colorValue.value > max) {
            if (!colorValue.loops) {
              colorValue.loops = 0;
            }
            colorValue.loops++;
            if (decrease) {
              colorValue.status = "decreasing";
              colorValue.value -= colorValue.value % max;
            }
          }
        } else {
          colorValue.value -= velocity;
          if (colorValue.value < 0) {
            if (!colorValue.loops) {
              colorValue.loops = 0;
            }
            colorValue.loops++;
            colorValue.status = "increasing";
            colorValue.value += colorValue.value;
          }
        }
        if (colorValue.velocity && decay !== 1) {
          colorValue.velocity *= decay;
        }
        if (colorValue.value > max) {
          colorValue.value %= max;
        }
      }
      function updateStrokeColor(particle, delta) {
        if (!particle.strokeColor || !particle.strokeAnimation) {
          return;
        }
        var h = particle.strokeColor.h;
        if (h) {
          StrokeColorUpdater_updateColorValue(delta, h, particle.strokeAnimation.h, 360, false);
        }
        var s = particle.strokeColor.s;
        if (s) {
          StrokeColorUpdater_updateColorValue(delta, s, particle.strokeAnimation.s, 100, true);
        }
        var l = particle.strokeColor.l;
        if (l) {
          StrokeColorUpdater_updateColorValue(delta, l, particle.strokeAnimation.l, 100, true);
        }
      }
      var StrokeColorUpdater = /*#__PURE__*/function () {
        function StrokeColorUpdater(container) {
          _classCallCheck(this, StrokeColorUpdater);
          this.container = container;
        }
        _createClass(StrokeColorUpdater, [{
          key: "init",
          value: function init(particle) {
            var _a, _b, _c;
            var container = this.container;
            var stroke = _itemFromSingleOrMultiple(particle.options.stroke, particle.id, particle.options.reduceDuplicates);
            particle.strokeWidth = _getRangeValue(stroke.width) * container.retina.pixelRatio;
            particle.strokeOpacity = _getRangeValue((_a = stroke.opacity) !== null && _a !== void 0 ? _a : 1);
            particle.strokeAnimation = (_b = stroke.color) === null || _b === void 0 ? void 0 : _b.animation;
            var strokeHslColor = (_c = _rangeColorToHsl(stroke.color)) !== null && _c !== void 0 ? _c : particle.getFillColor();
            if (strokeHslColor) {
              particle.strokeColor = _getHslAnimationFromHsl(strokeHslColor, particle.strokeAnimation, container.retina.reduceFactor);
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a, _b, _c;
            var color = particle.strokeAnimation;
            return !particle.destroyed && !particle.spawning && !!color && (((_a = particle.strokeColor) === null || _a === void 0 ? void 0 : _a.h.value) !== undefined && particle.strokeColor.h.enable || ((_b = particle.strokeColor) === null || _b === void 0 ? void 0 : _b.s.value) !== undefined && particle.strokeColor.s.enable || ((_c = particle.strokeColor) === null || _c === void 0 ? void 0 : _c.l.value) !== undefined && particle.strokeColor.l.enable);
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateStrokeColor(particle, delta);
          }
        }]);
        return StrokeColorUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/strokeColor/dist/esm/index.js
      function loadStrokeColorUpdater(_x102) {
        return _loadStrokeColorUpdater.apply(this, arguments);
      }
      function _loadStrokeColorUpdater() {
        _loadStrokeColorUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee96(engine) {
          return _regeneratorRuntime().wrap(function _callee96$(_context96) {
            while (1) switch (_context96.prev = _context96.next) {
              case 0:
                _context96.next = 2;
                return engine.addParticleUpdater("strokeColor", function (container) {
                  return new StrokeColorUpdater(container);
                });
              case 2:
              case "end":
                return _context96.stop();
            }
          }, _callee96);
        }));
        return _loadStrokeColorUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../shapes/text/dist/esm/TextDrawer.js

      var validTypes = ["text", "character", "char"];
      var TextDrawer = /*#__PURE__*/function () {
        function TextDrawer() {
          _classCallCheck(this, TextDrawer);
        }
        _createClass(TextDrawer, [{
          key: "draw",
          value: function draw(context, particle, radius, opacity) {
            var _a, _b, _c;
            var character = particle.shapeData;
            if (character === undefined) {
              return;
            }
            var textData = character.value;
            if (textData === undefined) {
              return;
            }
            var textParticle = particle;
            if (textParticle.text === undefined) {
              textParticle.text = _itemFromSingleOrMultiple(textData, particle.randomIndexData);
            }
            var text = textParticle.text,
              style = (_a = character.style) !== null && _a !== void 0 ? _a : "",
              weight = (_b = character.weight) !== null && _b !== void 0 ? _b : "400",
              size = Math.round(radius) * 2,
              font = (_c = character.font) !== null && _c !== void 0 ? _c : "Verdana",
              fill = particle.fill,
              offsetX = text.length * radius / 2;
            context.font = "".concat(style, " ").concat(weight, " ").concat(size, "px \"").concat(font, "\"");
            var pos = {
              x: -offsetX,
              y: radius / 2
            };
            context.globalAlpha = opacity;
            if (fill) {
              context.fillText(text, pos.x, pos.y);
            } else {
              context.strokeText(text, pos.x, pos.y);
            }
            context.globalAlpha = 1;
          }
        }, {
          key: "getSidesCount",
          value: function getSidesCount() {
            return 12;
          }
        }, {
          key: "init",
          value: function () {
            var _init6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee57(container) {
              var options, shapeOptions, promises;
              return _regeneratorRuntime().wrap(function _callee57$(_context57) {
                while (1) switch (_context57.prev = _context57.next) {
                  case 0:
                    options = container.actualOptions;
                    if (!validTypes.find(function (t) {
                      return _isInArray(t, options.particles.shape.type);
                    })) {
                      _context57.next = 6;
                      break;
                    }
                    shapeOptions = validTypes.map(function (t) {
                      return options.particles.shape.options[t];
                    }).find(function (t) {
                      return !!t;
                    }), promises = [];
                    _executeOnSingleOrMultiple(shapeOptions, function (shape) {
                      promises.push(_loadFont(shape.font, shape.weight));
                    });
                    _context57.next = 6;
                    return Promise.all(promises);
                  case 6:
                  case "end":
                    return _context57.stop();
                }
              }, _callee57);
            }));
            function init(_x103) {
              return _init6.apply(this, arguments);
            }
            return init;
          }()
        }]);
        return TextDrawer;
      }();
      ; // CONCATENATED MODULE: ../../shapes/text/dist/esm/index.js
      function loadTextShape(_x104) {
        return _loadTextShape.apply(this, arguments);
      }
      function _loadTextShape() {
        _loadTextShape = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee97(engine) {
          return _regeneratorRuntime().wrap(function _callee97$(_context97) {
            while (1) switch (_context97.prev = _context97.next) {
              case 0:
                _context97.next = 2;
                return engine.addShape(validTypes, new TextDrawer());
              case 2:
              case "end":
                return _context97.stop();
            }
          }, _callee97);
        }));
        return _loadTextShape.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../slim/dist/esm/index.js
      function _loadSlim(_x105) {
        return _loadSlim2.apply(this, arguments);
      }
      function _loadSlim2() {
        _loadSlim2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee98(engine) {
          return _regeneratorRuntime().wrap(function _callee98$(_context98) {
            while (1) switch (_context98.prev = _context98.next) {
              case 0:
                _context98.next = 2;
                return loadBaseMover(engine);
              case 2:
                _context98.next = 4;
                return loadParallaxMover(engine);
              case 4:
                _context98.next = 6;
                return loadExternalAttractInteraction(engine);
              case 6:
                _context98.next = 8;
                return loadExternalBounceInteraction(engine);
              case 8:
                _context98.next = 10;
                return loadExternalBubbleInteraction(engine);
              case 10:
                _context98.next = 12;
                return loadExternalConnectInteraction(engine);
              case 12:
                _context98.next = 14;
                return loadExternalGrabInteraction(engine);
              case 14:
                _context98.next = 16;
                return loadExternalPauseInteraction(engine);
              case 16:
                _context98.next = 18;
                return loadExternalPushInteraction(engine);
              case 18:
                _context98.next = 20;
                return loadExternalRemoveInteraction(engine);
              case 20:
                _context98.next = 22;
                return loadExternalRepulseInteraction(engine);
              case 22:
                _context98.next = 24;
                return loadExternalSlowInteraction(engine);
              case 24:
                _context98.next = 26;
                return loadParticlesAttractInteraction(engine);
              case 26:
                _context98.next = 28;
                return loadParticlesCollisionsInteraction(engine);
              case 28:
                _context98.next = 30;
                return loadParticlesLinksInteraction(engine);
              case 30:
                _context98.next = 32;
                return loadCircleShape(engine);
              case 32:
                _context98.next = 34;
                return loadImageShape(engine);
              case 34:
                _context98.next = 36;
                return loadLineShape(engine);
              case 36:
                _context98.next = 38;
                return loadPolygonShape(engine);
              case 38:
                _context98.next = 40;
                return loadSquareShape(engine);
              case 40:
                _context98.next = 42;
                return loadStarShape(engine);
              case 42:
                _context98.next = 44;
                return loadTextShape(engine);
              case 44:
                _context98.next = 46;
                return loadLifeUpdater(engine);
              case 46:
                _context98.next = 48;
                return loadOpacityUpdater(engine);
              case 48:
                _context98.next = 50;
                return loadSizeUpdater(engine);
              case 50:
                _context98.next = 52;
                return loadAngleUpdater(engine);
              case 52:
                _context98.next = 54;
                return loadColorUpdater(engine);
              case 54:
                _context98.next = 56;
                return loadStrokeColorUpdater(engine);
              case 56:
                _context98.next = 58;
                return loadOutModesUpdater(engine);
              case 58:
                _context98.next = 60;
                return initPjs(engine);
              case 60:
              case "end":
                return _context98.stop();
            }
          }, _callee98);
        }));
        return _loadSlim2.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/tilt/dist/esm/Options/Classes/TiltAnimation.js
      var TiltAnimation = /*#__PURE__*/function () {
        function TiltAnimation() {
          _classCallCheck(this, TiltAnimation);
          this.enable = false;
          this.speed = 0;
          this.decay = 0;
          this.sync = false;
        }
        _createClass(TiltAnimation, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.speed !== undefined) {
              this.speed = _setRangeValue(data.speed);
            }
            if (data.decay !== undefined) {
              this.decay = _setRangeValue(data.decay);
            }
            if (data.sync !== undefined) {
              this.sync = data.sync;
            }
          }
        }]);
        return TiltAnimation;
      }();
      ; // CONCATENATED MODULE: ../../updaters/tilt/dist/esm/Options/Classes/Tilt.js
      var Tilt = /*#__PURE__*/function (_ValueWithRandom12) {
        _inherits(Tilt, _ValueWithRandom12);
        var _super38 = _createSuper(Tilt);
        function Tilt() {
          var _this68;
          _classCallCheck(this, Tilt);
          _this68 = _super38.call(this);
          _this68.animation = new TiltAnimation();
          _this68.direction = "clockwise";
          _this68.enable = false;
          _this68.value = 0;
          return _this68;
        }
        _createClass(Tilt, [{
          key: "load",
          value: function load(data) {
            _get(_getPrototypeOf(Tilt.prototype), "load", this).call(this, data);
            if (!data) {
              return;
            }
            this.animation.load(data.animation);
            if (data.direction !== undefined) {
              this.direction = data.direction;
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
          }
        }]);
        return Tilt;
      }(_ValueWithRandom);
      ; // CONCATENATED MODULE: ../../updaters/tilt/dist/esm/TiltUpdater.js

      function updateTilt(particle, delta) {
        var _a, _b;
        if (!particle.tilt || !particle.options.tilt) {
          return;
        }
        var tilt = particle.options.tilt,
          tiltAnimation = tilt.animation,
          speed = ((_a = particle.tilt.velocity) !== null && _a !== void 0 ? _a : 0) * delta.factor,
          max = 2 * Math.PI,
          decay = (_b = particle.tilt.decay) !== null && _b !== void 0 ? _b : 1;
        if (!tiltAnimation.enable) {
          return;
        }
        switch (particle.tilt.status) {
          case "increasing":
            particle.tilt.value += speed;
            if (particle.tilt.value > max) {
              particle.tilt.value -= max;
            }
            break;
          case "decreasing":
          default:
            particle.tilt.value -= speed;
            if (particle.tilt.value < 0) {
              particle.tilt.value += max;
            }
            break;
        }
        if (particle.tilt.velocity && decay !== 1) {
          particle.tilt.velocity *= decay;
        }
      }
      var TiltUpdater = /*#__PURE__*/function () {
        function TiltUpdater(container) {
          _classCallCheck(this, TiltUpdater);
          this.container = container;
        }
        _createClass(TiltUpdater, [{
          key: "getTransformValues",
          value: function getTransformValues(particle) {
            var _a;
            var tilt = ((_a = particle.tilt) === null || _a === void 0 ? void 0 : _a.enable) && particle.tilt;
            return {
              b: tilt ? Math.cos(tilt.value) * tilt.cosDirection : undefined,
              c: tilt ? Math.sin(tilt.value) * tilt.sinDirection : undefined
            };
          }
        }, {
          key: "init",
          value: function init(particle) {
            var _a;
            var tiltOptions = particle.options.tilt;
            if (!tiltOptions) {
              return;
            }
            particle.tilt = {
              enable: tiltOptions.enable,
              value: _getRangeValue(tiltOptions.value) * Math.PI / 180,
              sinDirection: _getRandom() >= 0.5 ? 1 : -1,
              cosDirection: _getRandom() >= 0.5 ? 1 : -1
            };
            var tiltDirection = tiltOptions.direction;
            if (tiltDirection === "random") {
              var index = Math.floor(_getRandom() * 2);
              tiltDirection = index > 0 ? "counter-clockwise" : "clockwise";
            }
            switch (tiltDirection) {
              case "counter-clockwise":
              case "counterClockwise":
                particle.tilt.status = "decreasing";
                break;
              case "clockwise":
                particle.tilt.status = "increasing";
                break;
            }
            var tiltAnimation = (_a = particle.options.tilt) === null || _a === void 0 ? void 0 : _a.animation;
            if (tiltAnimation === null || tiltAnimation === void 0 ? void 0 : tiltAnimation.enable) {
              particle.tilt.decay = 1 - _getRangeValue(tiltAnimation.decay);
              particle.tilt.velocity = _getRangeValue(tiltAnimation.speed) / 360 * this.container.retina.reduceFactor;
              if (!tiltAnimation.sync) {
                particle.tilt.velocity *= _getRandom();
              }
            }
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            var tiltAnimation = (_a = particle.options.tilt) === null || _a === void 0 ? void 0 : _a.animation;
            return !particle.destroyed && !particle.spawning && !!(tiltAnimation === null || tiltAnimation === void 0 ? void 0 : tiltAnimation.enable);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.tilt) {
              options.tilt = new Tilt();
            }
            for (var _len21 = arguments.length, sources = new Array(_len21 > 1 ? _len21 - 1 : 0), _key21 = 1; _key21 < _len21; _key21++) {
              sources[_key21 - 1] = arguments[_key21];
            }
            for (var _i20 = 0, _sources17 = sources; _i20 < _sources17.length; _i20++) {
              var source = _sources17[_i20];
              options.tilt.load(source === null || source === void 0 ? void 0 : source.tilt);
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateTilt(particle, delta);
          }
        }]);
        return TiltUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/tilt/dist/esm/index.js
      function loadTiltUpdater(_x106) {
        return _loadTiltUpdater.apply(this, arguments);
      }
      function _loadTiltUpdater() {
        _loadTiltUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee99(engine) {
          return _regeneratorRuntime().wrap(function _callee99$(_context99) {
            while (1) switch (_context99.prev = _context99.next) {
              case 0:
                _context99.next = 2;
                return engine.addParticleUpdater("tilt", function (container) {
                  return new TiltUpdater(container);
                });
              case 2:
              case "end":
                return _context99.stop();
            }
          }, _callee99);
        }));
        return _loadTiltUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/twinkle/dist/esm/Options/Classes/TwinkleValues.js
      var TwinkleValues = /*#__PURE__*/function () {
        function TwinkleValues() {
          _classCallCheck(this, TwinkleValues);
          this.enable = false;
          this.frequency = 0.05;
          this.opacity = 1;
        }
        _createClass(TwinkleValues, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.color !== undefined) {
              this.color = _OptionsColor.create(this.color, data.color);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.frequency !== undefined) {
              this.frequency = data.frequency;
            }
            if (data.opacity !== undefined) {
              this.opacity = _setRangeValue(data.opacity);
            }
          }
        }]);
        return TwinkleValues;
      }();
      ; // CONCATENATED MODULE: ../../updaters/twinkle/dist/esm/Options/Classes/Twinkle.js
      var Twinkle = /*#__PURE__*/function () {
        function Twinkle() {
          _classCallCheck(this, Twinkle);
          this.lines = new TwinkleValues();
          this.particles = new TwinkleValues();
        }
        _createClass(Twinkle, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            this.lines.load(data.lines);
            this.particles.load(data.particles);
          }
        }]);
        return Twinkle;
      }();
      ; // CONCATENATED MODULE: ../../updaters/twinkle/dist/esm/TwinkleUpdater.js
      var TwinkleUpdater = /*#__PURE__*/function () {
        function TwinkleUpdater() {
          _classCallCheck(this, TwinkleUpdater);
        }
        _createClass(TwinkleUpdater, [{
          key: "getColorStyles",
          value: function getColorStyles(particle, context, radius, opacity) {
            var pOptions = particle.options,
              twinkleOptions = pOptions.twinkle;
            if (!twinkleOptions) {
              return {};
            }
            var twinkle = twinkleOptions.particles,
              twinkling = twinkle.enable && _getRandom() < twinkle.frequency,
              zIndexOptions = particle.options.zIndex,
              zOpacityFactor = Math.pow(1 - particle.zIndexFactor, zIndexOptions.opacityRate),
              twinklingOpacity = twinkling ? _getRangeValue(twinkle.opacity) * zOpacityFactor : opacity,
              twinkleRgb = _rangeColorToHsl(twinkle.color),
              twinkleStyle = twinkleRgb ? _getStyleFromHsl(twinkleRgb, twinklingOpacity) : undefined,
              res = {},
              needsTwinkle = twinkling && twinkleStyle;
            res.fill = needsTwinkle ? twinkleStyle : undefined;
            res.stroke = needsTwinkle ? twinkleStyle : undefined;
            return res;
          }
        }, {
          key: "init",
          value: function init() {}
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var pOptions = particle.options,
              twinkleOptions = pOptions.twinkle;
            if (!twinkleOptions) {
              return false;
            }
            return twinkleOptions.particles.enable;
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.twinkle) {
              options.twinkle = new Twinkle();
            }
            for (var _len22 = arguments.length, sources = new Array(_len22 > 1 ? _len22 - 1 : 0), _key22 = 1; _key22 < _len22; _key22++) {
              sources[_key22 - 1] = arguments[_key22];
            }
            for (var _i21 = 0, _sources18 = sources; _i21 < _sources18.length; _i21++) {
              var source = _sources18[_i21];
              options.twinkle.load(source === null || source === void 0 ? void 0 : source.twinkle);
            }
          }
        }, {
          key: "update",
          value: function update() {}
        }]);
        return TwinkleUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/twinkle/dist/esm/index.js
      function loadTwinkleUpdater(_x107) {
        return _loadTwinkleUpdater.apply(this, arguments);
      }
      function _loadTwinkleUpdater() {
        _loadTwinkleUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee100(engine) {
          return _regeneratorRuntime().wrap(function _callee100$(_context100) {
            while (1) switch (_context100.prev = _context100.next) {
              case 0:
                _context100.next = 2;
                return engine.addParticleUpdater("twinkle", function () {
                  return new TwinkleUpdater();
                });
              case 2:
              case "end":
                return _context100.stop();
            }
          }, _callee100);
        }));
        return _loadTwinkleUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ../../updaters/wobble/dist/esm/Options/Classes/WobbleSpeed.js
      var WobbleSpeed = /*#__PURE__*/function () {
        function WobbleSpeed() {
          _classCallCheck(this, WobbleSpeed);
          this.angle = 50;
          this.move = 10;
        }
        _createClass(WobbleSpeed, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.angle !== undefined) {
              this.angle = _setRangeValue(data.angle);
            }
            if (data.move !== undefined) {
              this.move = _setRangeValue(data.move);
            }
          }
        }]);
        return WobbleSpeed;
      }();
      ; // CONCATENATED MODULE: ../../updaters/wobble/dist/esm/Options/Classes/Wobble.js
      var Wobble = /*#__PURE__*/function () {
        function Wobble() {
          _classCallCheck(this, Wobble);
          this.distance = 5;
          this.enable = false;
          this.speed = new WobbleSpeed();
        }
        _createClass(Wobble, [{
          key: "load",
          value: function load(data) {
            if (!data) {
              return;
            }
            if (data.distance !== undefined) {
              this.distance = _setRangeValue(data.distance);
            }
            if (data.enable !== undefined) {
              this.enable = data.enable;
            }
            if (data.speed !== undefined) {
              if (typeof data.speed === "number") {
                this.speed.load({
                  angle: data.speed
                });
              } else {
                var rangeSpeed = data.speed;
                if (rangeSpeed.min !== undefined) {
                  this.speed.load({
                    angle: rangeSpeed
                  });
                } else {
                  this.speed.load(data.speed);
                }
              }
            }
          }
        }]);
        return Wobble;
      }();
      ; // CONCATENATED MODULE: ../../updaters/wobble/dist/esm/WobbleUpdater.js

      function updateWobble(particle, delta) {
        var _a;
        var wobble = particle.options.wobble;
        if (!(wobble === null || wobble === void 0 ? void 0 : wobble.enable) || !particle.wobble) {
          return;
        }
        var angleSpeed = particle.wobble.angleSpeed * delta.factor,
          moveSpeed = particle.wobble.moveSpeed * delta.factor,
          distance = moveSpeed * (((_a = particle.retina.wobbleDistance) !== null && _a !== void 0 ? _a : 0) * delta.factor) / (1000 / 60),
          max = 2 * Math.PI;
        particle.wobble.angle += angleSpeed;
        if (particle.wobble.angle > max) {
          particle.wobble.angle -= max;
        }
        particle.position.x += distance * Math.cos(particle.wobble.angle);
        particle.position.y += distance * Math.abs(Math.sin(particle.wobble.angle));
      }
      var WobbleUpdater = /*#__PURE__*/function () {
        function WobbleUpdater(container) {
          _classCallCheck(this, WobbleUpdater);
          this.container = container;
        }
        _createClass(WobbleUpdater, [{
          key: "init",
          value: function init(particle) {
            var _a;
            var wobbleOpt = particle.options.wobble;
            if (wobbleOpt === null || wobbleOpt === void 0 ? void 0 : wobbleOpt.enable) {
              particle.wobble = {
                angle: _getRandom() * Math.PI * 2,
                angleSpeed: _getRangeValue(wobbleOpt.speed.angle) / 360,
                moveSpeed: _getRangeValue(wobbleOpt.speed.move) / 10
              };
            } else {
              particle.wobble = {
                angle: 0,
                angleSpeed: 0,
                moveSpeed: 0
              };
            }
            particle.retina.wobbleDistance = _getRangeValue((_a = wobbleOpt === null || wobbleOpt === void 0 ? void 0 : wobbleOpt.distance) !== null && _a !== void 0 ? _a : 0) * this.container.retina.pixelRatio;
          }
        }, {
          key: "isEnabled",
          value: function isEnabled(particle) {
            var _a;
            return !particle.destroyed && !particle.spawning && !!((_a = particle.options.wobble) === null || _a === void 0 ? void 0 : _a.enable);
          }
        }, {
          key: "loadOptions",
          value: function loadOptions(options) {
            if (!options.wobble) {
              options.wobble = new Wobble();
            }
            for (var _len23 = arguments.length, sources = new Array(_len23 > 1 ? _len23 - 1 : 0), _key23 = 1; _key23 < _len23; _key23++) {
              sources[_key23 - 1] = arguments[_key23];
            }
            for (var _i22 = 0, _sources19 = sources; _i22 < _sources19.length; _i22++) {
              var source = _sources19[_i22];
              options.wobble.load(source === null || source === void 0 ? void 0 : source.wobble);
            }
          }
        }, {
          key: "update",
          value: function update(particle, delta) {
            if (!this.isEnabled(particle)) {
              return;
            }
            updateWobble(particle, delta);
          }
        }]);
        return WobbleUpdater;
      }();
      ; // CONCATENATED MODULE: ../../updaters/wobble/dist/esm/index.js
      function loadWobbleUpdater(_x108) {
        return _loadWobbleUpdater.apply(this, arguments);
      }
      function _loadWobbleUpdater() {
        _loadWobbleUpdater = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee101(engine) {
          return _regeneratorRuntime().wrap(function _callee101$(_context101) {
            while (1) switch (_context101.prev = _context101.next) {
              case 0:
                _context101.next = 2;
                return engine.addParticleUpdater("wobble", function (container) {
                  return new WobbleUpdater(container);
                });
              case 2:
              case "end":
                return _context101.stop();
            }
          }, _callee101);
        }));
        return _loadWobbleUpdater.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ./dist/browser/index.js
      function _loadFull(_x109) {
        return _loadFull2.apply(this, arguments);
      }
      function _loadFull2() {
        _loadFull2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee102(engine) {
          return _regeneratorRuntime().wrap(function _callee102$(_context102) {
            while (1) switch (_context102.prev = _context102.next) {
              case 0:
                _context102.next = 2;
                return _loadSlim(engine);
              case 2:
                _context102.next = 4;
                return loadDestroyUpdater(engine);
              case 4:
                _context102.next = 6;
                return loadRollUpdater(engine);
              case 6:
                _context102.next = 8;
                return loadTiltUpdater(engine);
              case 8:
                _context102.next = 10;
                return loadTwinkleUpdater(engine);
              case 10:
                _context102.next = 12;
                return loadWobbleUpdater(engine);
              case 12:
                _context102.next = 14;
                return loadExternalTrailInteraction(engine);
              case 14:
                _context102.next = 16;
                return loadAbsorbersPlugin(engine);
              case 16:
                _context102.next = 18;
                return loadEmittersPlugin(engine);
              case 18:
              case "end":
                return _context102.stop();
            }
          }, _callee102);
        }));
        return _loadFull2.apply(this, arguments);
      }
      ; // CONCATENATED MODULE: ./dist/browser/bundle.js

      _loadFull(_tsParticles);

      /******/
      return __nested_webpack_exports__;
      /******/
    }()
  );
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			loaded: false,
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/node module decorator */
/******/ 	(() => {
/******/ 		__webpack_require__.nmd = (module) => {
/******/ 			module.paths = [];
/******/ 			if (!module.children) module.children = [];
/******/ 			return module;
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/assets/tsparticles.bundle.js");
/******/ 	
/******/ })()
;