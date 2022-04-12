"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resource/js/components/inicio/registrar"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js ***!
  \**********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      nome: '',
      email: '',
      senha: ''
    };
  },
  methods: {
    adicionarUsuario: function adicionarUsuario() {
      var _this = this;

      var name = this.nome;
      var password = this.senha;
      var email = this.email;
      this.axios.get("/api/newuser?name=".concat(name, "&password=").concat(password, "&email=").concat(email)).then(function (promise) {
        return _this.$router.push({
          name: "indexAdmin"
        }) //console.log(promise.data.data)
        ;
      })["catch"](function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24":
/*!**************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24 ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "menu"
};
var _hoisted_2 = {
  "class": "navbar-nav mr-auto"
};
var _hoisted_3 = {
  "class": "nav-item"
};

var _hoisted_4 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("Home");

var _hoisted_5 = {
  "class": "nav-item"
};

var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("Login");

var _hoisted_7 = {
  "class": "nav-item"
};

var _hoisted_8 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("Registre-se");

var _hoisted_9 = {
  "class": "conteudo"
};

var _hoisted_10 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("header", null, " Gerenciamento Biblioteca - Registrar-se ", -1
/* HOISTED */
);

var _hoisted_11 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "name"
}, "Nome:", -1
/* HOISTED */
);

var _hoisted_12 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("br", null, null, -1
/* HOISTED */
);

var _hoisted_13 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "email"
}, "E-mail:", -1
/* HOISTED */
);

var _hoisted_14 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("br", null, null, -1
/* HOISTED */
);

var _hoisted_15 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "password"
}, "Senha:", -1
/* HOISTED */
);

var _hoisted_16 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("br", null, null, -1
/* HOISTED */
);

var _hoisted_17 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("br", null, null, -1
/* HOISTED */
);

var _hoisted_18 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", null, "Registrar", -1
/* HOISTED */
);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("aside", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
    "class": "nav-link",
    to: "/"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_4];
    }),
    _: 1
    /* STABLE */

  })]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
    "class": "nav-link",
    to: "/login"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_6];
    }),
    _: 1
    /* STABLE */

  })]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
    to: "/registrar",
    "class": "nav-link"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_8];
    }),
    _: 1
    /* STABLE */

  })])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("main", _hoisted_9, [_hoisted_10, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("form", {
    onSubmit: _cache[3] || (_cache[3] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function () {
      return $options.adicionarUsuario && $options.adicionarUsuario.apply($options, arguments);
    }, ["prevent"]))
  }, [_hoisted_11, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    "onUpdate:modelValue": _cache[0] || (_cache[0] = function ($event) {
      return $data.nome = $event;
    }),
    type: "text",
    id: "name",
    name: "name",
    "class": "form-control",
    required: ""
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $data.nome]]), _hoisted_12, _hoisted_13, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    "onUpdate:modelValue": _cache[1] || (_cache[1] = function ($event) {
      return $data.email = $event;
    }),
    type: "text",
    id: "email",
    name: "email",
    "class": "form-control",
    required: ""
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $data.email]]), _hoisted_14, _hoisted_15, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
    "onUpdate:modelValue": _cache[2] || (_cache[2] = function ($event) {
      return $data.senha = $event;
    }),
    type: "password",
    id: "password",
    name: "password",
    "class": "form-control",
    required: ""
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $data.senha]]), _hoisted_16, _hoisted_17, _hoisted_18], 32
  /* HYDRATE_EVENTS */
  )])])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css":
/*!***********************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\nform{\n    display: block;\n    text-align: center;\n    padding: 20px;\n}\nform label{\n    font-size: xx-large;\n    text-align: center;\n}\nform input{\n    width: 600px;\n    height: 40px;\n    margin-top: 8px;\n    padding: 3px;\n    margin-left: 5px;\n}\nform button{\n    background-color: #04AA6D;\n    border: none;\n    color: white;\n    padding: 16px 32px;\n    text-decoration: none;\n    margin: 4px 2px;\n    cursor: pointer;\n    border-radius: 25px;\n}\nul {\n    -webkit-padding-start: 5px;\n            padding-inline-start: 5px;\n    margin-top: 80px;\n    list-style: none;\n    width: 120px;\n    height: 50px;\n    padding: 10px;\n}\nli {\n    position: relative;\n    margin-top: 40px;\n    list-style: none;\n    width: 120px;\n    height: 30px;\n    text-align: center;\n    padding: 10px 0px 0px;\n}\n.nav-link {\n    color: rgb(0, 0, 255);\n    cursor: pointer;\n    border-radius: 25px;\n}\n.nav-link:hover {\n    padding: 10px;\n    color: blue;\n    background-color: #ababab;\n    border-radius: 25px;\n    border: 1px solid black;\n    cursor: pointer;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_style_index_0_id_6ae27b24_lang_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_style_index_0_id_6ae27b24_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_style_index_0_id_6ae27b24_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/inicio/Registrar.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/inicio/Registrar.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Registrar_vue_vue_type_template_id_6ae27b24__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Registrar.vue?vue&type=template&id=6ae27b24 */ "./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24");
/* harmony import */ var _Registrar_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Registrar.vue?vue&type=script&lang=js */ "./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js");
/* harmony import */ var _Registrar_vue_vue_type_style_index_0_id_6ae27b24_lang_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css */ "./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css");
<<<<<<< HEAD
/* harmony import */ var _Users_tmax_Downloads_laravel_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");
=======
/* harmony import */ var _Users_tmax_Downloads_BibliotecManagent_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33




;


<<<<<<< HEAD
const __exports__ = /*#__PURE__*/(0,_Users_tmax_Downloads_laravel_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__["default"])(_Registrar_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Registrar_vue_vue_type_template_id_6ae27b24__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/inicio/Registrar.vue"]])
=======
const __exports__ = /*#__PURE__*/(0,_Users_tmax_Downloads_BibliotecManagent_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__["default"])(_Registrar_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Registrar_vue_vue_type_template_id_6ae27b24__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/inicio/Registrar.vue"]])
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js":
/*!******************************************************************************!*\
  !*** ./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Registrar.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24":
/*!************************************************************************************!*\
  !*** ./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24 ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_template_id_6ae27b24__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_template_id_6ae27b24__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Registrar.vue?vue&type=template&id=6ae27b24 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=template&id=6ae27b24");


/***/ }),

/***/ "./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Registrar_vue_vue_type_style_index_0_id_6ae27b24_lang_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/inicio/Registrar.vue?vue&type=style&index=0&id=6ae27b24&lang=css");


/***/ })

}]);