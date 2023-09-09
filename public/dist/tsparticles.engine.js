/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/assets/tsparticles.engine.js":
/*!***************************************************!*\
  !*** ./resources/js/assets/tsparticles.engine.js ***!
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
 * tsParticles Engine v2.8.0
 * Author: Matteo Bruni
 * MIT license: https://opensource.org/licenses/MIT
 * Website: https://particles.js.org/
 * Confetti Website: https://confetti.js.org
 * GitHub: https://www.github.com/matteobruni/tsparticles
 * How to use?: Check the GitHub README
 * ------------------------------------------------------
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
      var __nested_webpack_require_18197__ = {};
      /******/
      /************************************************************************/
      /******/ /* webpack/runtime/define property getters */
      /******/
      (function () {
        /******/ // define getter functions for harmony exports
        /******/__nested_webpack_require_18197__.d = function (exports, definition) {
          /******/for (var key in definition) {
            /******/if (__nested_webpack_require_18197__.o(definition, key) && !__nested_webpack_require_18197__.o(exports, key)) {
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
        /******/__nested_webpack_require_18197__.o = function (obj, prop) {
          return Object.prototype.hasOwnProperty.call(obj, prop);
        };
        /******/
      })();
      /******/
      /******/ /* webpack/runtime/make namespace object */
      /******/
      (function () {
        /******/ // define __esModule on exports
        /******/__nested_webpack_require_18197__.r = function (exports) {
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
      __nested_webpack_require_18197__.r(__nested_webpack_exports__);

      // EXPORTS
      __nested_webpack_require_18197__.d(__nested_webpack_exports__, {
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
        "loadOptions": function loadOptions() {
          return (/* reexport */_loadOptions
          );
        },
        "loadParticlesOptions": function loadParticlesOptions() {
          return (/* reexport */_loadParticlesOptions
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
          return (/* binding */_tsParticles
          );
        },
        "visibilityChangeEvent": function visibilityChangeEvent() {
          return (/* reexport */_visibilityChangeEvent
          );
        }
      });
      ; // CONCATENATED MODULE: ./dist/browser/Utils/EventDispatcher.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Vector3d.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Vector.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/NumberUtils.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/Utils.js

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
        _loadFont2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee37(font, weight) {
          return _regeneratorRuntime().wrap(function _callee37$(_context37) {
            while (1) switch (_context37.prev = _context37.next) {
              case 0:
                _context37.prev = 0;
                _context37.next = 3;
                return document.fonts.load("".concat(weight !== null && weight !== void 0 ? weight : "400", " 36px '").concat(font !== null && font !== void 0 ? font : "Verdana", "'"));
              case 3:
                _context37.next = 7;
                break;
              case 5:
                _context37.prev = 5;
                _context37.t0 = _context37["catch"](0);
              case 7:
              case "end":
                return _context37.stop();
            }
          }, _callee37, null, [[0, 5]]);
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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/ColorUtils.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/CanvasUtils.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Constants.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Canvas.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/EventListeners.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/FrameManager.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/OptionsColor.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Background/Background.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/BackgroundMask/BackgroundMaskCover.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/BackgroundMask/BackgroundMask.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/FullScreen/FullScreen.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/ClickEvent.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/DivEvent.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/Parallax.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/HoverEvent.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/ResizeEvent.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Events/Events.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Modes/Modes.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Interactivity/Interactivity.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/ManualParticle.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Responsive.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Theme/ThemeDefault.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Theme/Theme.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/ColorAnimation.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/HslAnimation.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/AnimatableColor.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Collisions/CollisionsAbsorb.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Collisions/CollisionsOverlap.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Random.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/ValueWithRandom.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Bounce/ParticlesBounceFactor.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Bounce/ParticlesBounce.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Collisions/Collisions.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveAngle.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveAttract.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveCenter.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveGravity.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/Path/MovePath.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveTrailFill.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/MoveTrail.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/OutModes.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/Spin.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Move/Move.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/AnimationOptions.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Opacity/OpacityAnimation.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Opacity/Opacity.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Number/ParticlesDensity.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Number/ParticlesNumber.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Shadow.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Shape/Shape.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Size/SizeAnimation.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Size/Size.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/Stroke.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/ZIndex/ZIndex.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Particles/ParticlesOptions.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/OptionsUtils.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Options/Classes/Options.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/InteractionManager.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Particle.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Point.js
      var _Point = /*#__PURE__*/_createClass(function _Point(position, particle) {
        _classCallCheck(this, _Point);
        this.position = position;
        this.particle = particle;
      });
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Range.js
      var _Range = /*#__PURE__*/_createClass(function _Range(x, y) {
        _classCallCheck(this, _Range);
        this.position = {
          x: x,
          y: y
        };
      });
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Circle.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Rectangle.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/QuadTree.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Particles.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Retina.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Container.js

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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Loader.js
      function getDataFromUrl(_x12, _x13) {
        return _getDataFromUrl.apply(this, arguments);
      }
      function _getDataFromUrl() {
        _getDataFromUrl = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee38(jsonUrl, index) {
          var url, response;
          return _regeneratorRuntime().wrap(function _callee38$(_context38) {
            while (1) switch (_context38.prev = _context38.next) {
              case 0:
                url = _itemFromSingleOrMultiple(jsonUrl, index);
                if (url) {
                  _context38.next = 3;
                  break;
                }
                return _context38.abrupt("return");
              case 3:
                _context38.next = 5;
                return fetch(url);
              case 5:
                response = _context38.sent;
                if (!response.ok) {
                  _context38.next = 8;
                  break;
                }
                return _context38.abrupt("return", response.json());
              case 8:
                console.error("tsParticles - Error ".concat(response.status, " while retrieving config file"));
              case 9:
              case "end":
                return _context38.stop();
            }
          }, _callee38);
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/Plugins.js

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
      ; // CONCATENATED MODULE: ./dist/browser/engine.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/HslColorManager.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Utils/RgbColorManager.js
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
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/ExternalInteractorBase.js
      var _ExternalInteractorBase = /*#__PURE__*/_createClass(function _ExternalInteractorBase(container) {
        _classCallCheck(this, _ExternalInteractorBase);
        this.container = container;
        this.type = "external";
      });
      ; // CONCATENATED MODULE: ./dist/browser/Core/Utils/ParticlesInteractorBase.js
      var _ParticlesInteractorBase = /*#__PURE__*/_createClass(function _ParticlesInteractorBase(container) {
        _classCallCheck(this, _ParticlesInteractorBase);
        this.container = container;
        this.type = "particles";
      });
      ; // CONCATENATED MODULE: ./dist/browser/index.js

      var rgbColorManager = new _RgbColorManager(),
        hslColorManager = new _HslColorManager();
      _addColorManager(rgbColorManager);
      _addColorManager(hslColorManager);
      var _tsParticles = new Engine();
      _tsParticles.init();

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/assets/tsparticles.engine.js");
/******/ 	
/******/ })()
;