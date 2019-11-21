/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 17);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function (location) {
    var country = location || 'US';
    var validator = {};

    validator.required = function (val) {
        if (Array.isArray(val)) {
            return val.length > 0 ? { valid: true } : { valid: false, code: "required" };
        }

        return val ? { valid: true } : { valid: false, code: "required" };
    };

    validator.maxLength = function (val, maxlength) {
        if (!val) {
            return { valid: true };
        }

        if (!/^\d+$/.test(maxlength)) {
            return { valid: true }; //config error - ignore and continue
        }
        return val.length > maxlength ? { valid: false, code: "generic-maxlength" } : { valid: true };
    };

    validator.minLength = function (val, minlength) {
        if (!/^\d+$/.test(minlength)) {
            return { valid: true }; //config error - ignore and continue
        }

        if (minlength > 0 && !val) {
            return { valid: true };
        }
        return val.length < minlength ? { valid: false, code: "generic-minlength" } : { valid: true };
    };

    var BLACKLISTED_EMAIL_DOMAINS = "mailinator.com";

    var emailValidator = function emailValidator(val) {
        var re = /^([\w\-]+(?:\.[\w\-]+)*)@((?:[\w\-]+\.)*\w[\w\-]{0,66})\.([a-z]{2,32}(?:\.[a-z]{2})?)$/i;

        if (val && re.test(val)) {
            if (val.indexOf(BLACKLISTED_EMAIL_DOMAINS) > -1) {
                return { valid: false, code: "generic-blacklistedemaildomain" };
            }
            return { valid: true };
        }
        return { valid: false, code: "generic-invalidemail" };
    };

    validator.email = emailValidator;

    validator.number = function (val) {
        return val.match(/^\d*$/) ? { valid: true } : { valid: true, code: "generic-invalidnumber" };
    };

    validator.phoneNumber = function (val) {
        var phoneCountry = "OTHERS";

        val = val.replace(/[-\(\) \.]/g, '').replace(/^\+/g, '');

        if (!val || /\D/g.test(val)) {
            return { valid: false, code: "generic-invalidtel" };
        }

        var reMap = {
            "CA": /^1?[2-9]\d{2}\d{7}$/,
            "US": /^1?[2-9]\d{2}\d{7}$/,
            "IN": /^(91)?[1-9]\d{2}\d{7}$/,
            "OTHERS": /^\d{5,15}$/
        };

        var phoneFormat = reMap[phoneCountry] || reMap["OTHERS"];

        if (val && phoneFormat.test(val)) {
            return { valid: true };
        }
        return { valid: false, code: "generic-invalidtel" };
    };

    validator.emailOrYid = function (val) {
        if (val.indexOf("@") > -1) {
            return emailValidator(val);
        } else {
            return emailValidator(val + "@domain.tld");
        }
    };

    validator.answer = function (val) {
        return (/^[\x20-\x7E,\x80-\x9A,\x9F-\xA8]*$/.test(val) ? { valid: true } : { valid: false, code: "generic-invalidanswer" }
        );
    };

    var hasRepeatedCharacters = function hasRepeatedCharacters(value) {
        var length = value.length;
        var occurrences = 0;
        for (var l = length - 1; l > 0; l -= 1) {
            if (value.charAt(l) === value.charAt(l - 1)) {
                occurrences += 1;
            } else {
                occurrences = 0;
            }
            if (occurrences > 1) {
                return true;
            }
        }
        return false;
    };

    var containsNumber = function containsNumber(value) {
        return (/\d/.test(value)
        );
    };

    var containsLetter = function containsLetter(value) {
        return (/[a-zA-Z]/.test(value)
        );
    };

    var containsLowerCaseLetter = function containsLowerCaseLetter(value) {
        return (/[a-z]/.test(value)
        );
    };

    var containsUpperCaseLetter = function containsUpperCaseLetter(value) {
        return (/[A-Z]/.test(value)
        );
    };

    var containsSpecialChar = function containsSpecialChar(value) {
        return (/[^0-9a-z]/gi.test(value)
        );
    };

    validator.password = function (value) {
        if (value.length < 8) {
            return { valid: false, code: "generic-invalidpassword" };
        }

        if (containsNumber(value) && containsLowerCaseLetter(value) && containsUpperCaseLetter(value) && containsSpecialChar(value)) {
            return { valid: true };
        } else {
            return { valid: false, code: "generic-invalidpassword" };
        }
    };

    validator.humanName = function (val) {
        var re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/;
        if (val && re.test(val)) {
            return { valid: true };
        }
        return { valid: false, code: "generic-invalidname" };
    };

    validator.zip = function (val) {
        if (!val) {
            return { valid: true, code: "success" };
        }
        var reMap = {
            "CA": /^(\d{5}(-\d{4})?|[A-CEGHJ-NPRSTVXY]\d[A-CEGHJ-NPRSTV-Z] ?\d[A-CEGHJ-NPRSTV-Z]\d)$/,
            "US": /^\d{5}$|^\d{5}-\d{4}$/,
            "IN": /^\d{6}$/,
            "OTHERS": /.*/
        };

        var zipFormat = reMap[country] || reMap["OTHERS"];

        if (val && zipFormat.test(val)) {
            return { valid: true };
        }
        return { valid: false, code: "generic-invalidzip" };
    };

    validator.number = function (val) {
        return (/[^0-9]/.test(val) ? { valid: false, code: "generic-invalidnumber" } : { valid: true }
        );
    };
    validator.confirmMatches = function (valueOne, valueTwo) {
        if (valueOne === valueTwo) {
            return { valid: true };
        }
        return { valid: false, code: "cnewpasswd-notmatching" };
    };
    validator.alphaNumeric = function (val) {
        return (/[^a-zA-Z0-9 ]/.test(val) ? { valid: false, code: "generic-alphanumeric" } : { valid: true }
        );
    };

    return validator;
};

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {

Object.defineProperty(exports, "__esModule", {
    value: true
});
var csrfToken;
var tokenExpiration;
var tokenValidDuration = 1000 * 60 * 10; // 10 minutes
var tokenRequest;

var isValidToken = function isValidToken(token) {
    return csrfToken && csrfToken === token && tokenExpiration > Date.now();
};

var hasValidCsrf = function hasValidCsrf(form) {
    var $form = $(form);
    var token = $form.find("input[name=_csrf]").val();

    return isValidToken(token);
};

var refreshToken = function refreshToken() {
    var now = Date.now();

    if (isValidToken(csrfToken)) {
        return Promise.resolve(csrfToken);
    }

    if (!tokenRequest) {
        tokenRequest = new Promise(function (resolve, reject) {
            $.ajax({
                type: "GET",
                url: "/xhr/csrf/getToken",
                success: function success(res) {
                    if (res.success) {
                        resolve(res.result.token);
                    } else {
                        reject(res.error);
                    }
                },
                error: function error(err) {
                    reject(err);
                },
                complete: function complete() {
                    tokenRequest = null;
                }
            });
        }).then(function (token) {
            csrfToken = token;
            tokenExpiration = Date.now() + tokenValidDuration;
            return token;
        });
    }

    return tokenRequest;
};

var redirectTo = function redirectTo(redirectUrl) {
    window.location.href = redirectUrl;
};

var ajaxRequest = function ajaxRequest(options) {
    return new Promise(function (resolve, reject) {
        var successFunction = options.success;
        var failureFunction = options.error;

        options.success = function (res) {
            if (res.redirect) {
                redirectTo(res.redirect);
            }

            if (successFunction) {
                successFunction(res);
            }

            if (!res.success) {
                onError(res);
            }
            resolve(res.result || {});
        };

        var onError = function onError(res) {
            if (res.redirect) {
                redirectTo(res.redirect);
            }

            if (failureFunction) {
                failureFunction(res);
            }
            reject(res);
        };
        options.error = onError;

        $.ajax(options);
    });
};

exports.default = {
    request: function request(options) {
        return refreshToken().then(function (token) {
            if (!options.data) {
                options.data = {};
            }
            options.data._csrf = token;

            return ajaxRequest(options);
        });
    },
    injectCsrf: function injectCsrf(form) {
        var $form = $(form);
        var $csrf = $form.find('input[name=_csrf]');

        if (hasValidCsrf($form)) {
            return Promise.resolve();
        }

        return refreshToken().then(function (token) {
            if ($csrf.length <= 0) {
                $csrf = $('<input name="_csrf" value="" type="hidden"/>');
                $form.append($csrf);
            }

            $csrf.val(token);
        });
    },
    hasValidCsrf: hasValidCsrf
};
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(3)))

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
var formTools = {};

formTools.normalize = function (value, spec) {
    value = value || "";
    var normalizedValue = value.replace(/^\s+|\s+$/g, '');

    if (spec) {
        if (spec.lowercaseInput) {
            normalizedValue = normalizedValue.toLowerCase();
        }
    }
    return normalizedValue;
};

var getFieldValue = function getFieldValue($field, spec) {
    var fieldValue;
    if ($field.attr('type') == "radio") {
        var selectedElements = $('input[name=' + $field.attr('name') + ']:checked');
        if (selectedElements.length > 0) {
            fieldValue = selectedElements.val();
        }
    } else if ($field.attr('type') == "checkbox") {
        var selectedElements = $('input[name=' + $field.attr('name') + ']:checked');
        if (!spec || spec.multiple) {
            if (selectedElements.length > 0) {
                fieldValue = [];

                selectedElements.each(function () {
                    fieldValue.push(this.value);
                });
            }
        } else {
            if (selectedElements.length > 0) {
                fieldValue = selectedElements.val();
            }
        }
    } else {
        fieldValue = $field.val();
    }
    return fieldValue;
};
formTools.getFieldValue = getFieldValue;

formTools.getFormData = function ($form, spec) {
    var formFields = $form.find('input, select');
    var formData = {};

    formFields.each(function () {
        var $this = $(this);
        var fieldName = $this.attr('name');

        if (!spec[fieldName]) {
            return;
        }

        formData[fieldName] = getFieldValue($this, spec);
    });
    return formData;
};

exports.default = formTools;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = __webpack_require__(4).Promise;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(process, global) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;var require;

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*!
 * @overview es6-promise - a tiny implementation of Promises/A+.
 * @copyright Copyright (c) 2014 Yehuda Katz, Tom Dale, Stefan Penner and contributors (Conversion to ES6 API by Jake Archibald)
 * @license   Licensed under MIT license
 *            See https://raw.githubusercontent.com/stefanpenner/es6-promise/master/LICENSE
 * @version   3.3.1
 */

(function (global, factory) {
  ( false ? 'undefined' : _typeof(exports)) === 'object' && typeof module !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : global.ES6Promise = factory();
})(undefined, function () {
  'use strict';

  function objectOrFunction(x) {
    return typeof x === 'function' || (typeof x === 'undefined' ? 'undefined' : _typeof(x)) === 'object' && x !== null;
  }

  function isFunction(x) {
    return typeof x === 'function';
  }

  var _isArray = undefined;
  if (!Array.isArray) {
    _isArray = function _isArray(x) {
      return Object.prototype.toString.call(x) === '[object Array]';
    };
  } else {
    _isArray = Array.isArray;
  }

  var isArray = _isArray;

  var len = 0;
  var vertxNext = undefined;
  var customSchedulerFn = undefined;

  var asap = function asap(callback, arg) {
    queue[len] = callback;
    queue[len + 1] = arg;
    len += 2;
    if (len === 2) {
      // If len is 2, that means that we need to schedule an async flush.
      // If additional callbacks are queued before the queue is flushed, they
      // will be processed by this flush that we are scheduling.
      if (customSchedulerFn) {
        customSchedulerFn(flush);
      } else {
        scheduleFlush();
      }
    }
  };

  function setScheduler(scheduleFn) {
    customSchedulerFn = scheduleFn;
  }

  function setAsap(asapFn) {
    asap = asapFn;
  }

  var browserWindow = typeof window !== 'undefined' ? window : undefined;
  var browserGlobal = browserWindow || {};
  var BrowserMutationObserver = browserGlobal.MutationObserver || browserGlobal.WebKitMutationObserver;
  var isNode = typeof self === 'undefined' && typeof process !== 'undefined' && {}.toString.call(process) === '[object process]';

  // test for web worker but not in IE10
  var isWorker = typeof Uint8ClampedArray !== 'undefined' && typeof importScripts !== 'undefined' && typeof MessageChannel !== 'undefined';

  // node
  function useNextTick() {
    // node version 0.10.x displays a deprecation warning when nextTick is used recursively
    // see https://github.com/cujojs/when/issues/410 for details
    return function () {
      return process.nextTick(flush);
    };
  }

  // vertx
  function useVertxTimer() {
    return function () {
      vertxNext(flush);
    };
  }

  function useMutationObserver() {
    var iterations = 0;
    var observer = new BrowserMutationObserver(flush);
    var node = document.createTextNode('');
    observer.observe(node, { characterData: true });

    return function () {
      node.data = iterations = ++iterations % 2;
    };
  }

  // web worker
  function useMessageChannel() {
    var channel = new MessageChannel();
    channel.port1.onmessage = flush;
    return function () {
      return channel.port2.postMessage(0);
    };
  }

  function useSetTimeout() {
    // Store setTimeout reference so es6-promise will be unaffected by
    // other code modifying setTimeout (like sinon.useFakeTimers())
    var globalSetTimeout = setTimeout;
    return function () {
      return globalSetTimeout(flush, 1);
    };
  }

  var queue = new Array(1000);
  function flush() {
    for (var i = 0; i < len; i += 2) {
      var callback = queue[i];
      var arg = queue[i + 1];

      callback(arg);

      queue[i] = undefined;
      queue[i + 1] = undefined;
    }

    len = 0;
  }

  function attemptVertx() {
    try {
      var r = require;
      var vertx = __webpack_require__(7);
      vertxNext = vertx.runOnLoop || vertx.runOnContext;
      return useVertxTimer();
    } catch (e) {
      return useSetTimeout();
    }
  }

  var scheduleFlush = undefined;
  // Decide what async method to use to triggering processing of queued callbacks:
  if (isNode) {
    scheduleFlush = useNextTick();
  } else if (BrowserMutationObserver) {
    scheduleFlush = useMutationObserver();
  } else if (isWorker) {
    scheduleFlush = useMessageChannel();
  } else if (browserWindow === undefined && "function" === 'function') {
    scheduleFlush = attemptVertx();
  } else {
    scheduleFlush = useSetTimeout();
  }

  function then(onFulfillment, onRejection) {
    var _arguments = arguments;

    var parent = this;

    var child = new this.constructor(noop);

    if (child[PROMISE_ID] === undefined) {
      makePromise(child);
    }

    var _state = parent._state;

    if (_state) {
      (function () {
        var callback = _arguments[_state - 1];
        asap(function () {
          return invokeCallback(_state, child, callback, parent._result);
        });
      })();
    } else {
      subscribe(parent, child, onFulfillment, onRejection);
    }

    return child;
  }

  /**
    `Promise.resolve` returns a promise that will become resolved with the
    passed `value`. It is shorthand for the following:
  
    ```javascript
    let promise = new Promise(function(resolve, reject){
      resolve(1);
    });
  
    promise.then(function(value){
      // value === 1
    });
    ```
  
    Instead of writing the above, your code now simply becomes the following:
  
    ```javascript
    let promise = Promise.resolve(1);
  
    promise.then(function(value){
      // value === 1
    });
    ```
  
    @method resolve
    @static
    @param {Any} value value that the returned promise will be resolved with
    Useful for tooling.
    @return {Promise} a promise that will become fulfilled with the given
    `value`
  */
  function resolve(object) {
    /*jshint validthis:true */
    var Constructor = this;

    if (object && (typeof object === 'undefined' ? 'undefined' : _typeof(object)) === 'object' && object.constructor === Constructor) {
      return object;
    }

    var promise = new Constructor(noop);
    _resolve(promise, object);
    return promise;
  }

  var PROMISE_ID = Math.random().toString(36).substring(16);

  function noop() {}

  var PENDING = void 0;
  var FULFILLED = 1;
  var REJECTED = 2;

  var GET_THEN_ERROR = new ErrorObject();

  function selfFulfillment() {
    return new TypeError("You cannot resolve a promise with itself");
  }

  function cannotReturnOwn() {
    return new TypeError('A promises callback cannot return that same promise.');
  }

  function getThen(promise) {
    try {
      return promise.then;
    } catch (error) {
      GET_THEN_ERROR.error = error;
      return GET_THEN_ERROR;
    }
  }

  function tryThen(then, value, fulfillmentHandler, rejectionHandler) {
    try {
      then.call(value, fulfillmentHandler, rejectionHandler);
    } catch (e) {
      return e;
    }
  }

  function handleForeignThenable(promise, thenable, then) {
    asap(function (promise) {
      var sealed = false;
      var error = tryThen(then, thenable, function (value) {
        if (sealed) {
          return;
        }
        sealed = true;
        if (thenable !== value) {
          _resolve(promise, value);
        } else {
          fulfill(promise, value);
        }
      }, function (reason) {
        if (sealed) {
          return;
        }
        sealed = true;

        _reject(promise, reason);
      }, 'Settle: ' + (promise._label || ' unknown promise'));

      if (!sealed && error) {
        sealed = true;
        _reject(promise, error);
      }
    }, promise);
  }

  function handleOwnThenable(promise, thenable) {
    if (thenable._state === FULFILLED) {
      fulfill(promise, thenable._result);
    } else if (thenable._state === REJECTED) {
      _reject(promise, thenable._result);
    } else {
      subscribe(thenable, undefined, function (value) {
        return _resolve(promise, value);
      }, function (reason) {
        return _reject(promise, reason);
      });
    }
  }

  function handleMaybeThenable(promise, maybeThenable, then$$) {
    if (maybeThenable.constructor === promise.constructor && then$$ === then && maybeThenable.constructor.resolve === resolve) {
      handleOwnThenable(promise, maybeThenable);
    } else {
      if (then$$ === GET_THEN_ERROR) {
        _reject(promise, GET_THEN_ERROR.error);
      } else if (then$$ === undefined) {
        fulfill(promise, maybeThenable);
      } else if (isFunction(then$$)) {
        handleForeignThenable(promise, maybeThenable, then$$);
      } else {
        fulfill(promise, maybeThenable);
      }
    }
  }

  function _resolve(promise, value) {
    if (promise === value) {
      _reject(promise, selfFulfillment());
    } else if (objectOrFunction(value)) {
      handleMaybeThenable(promise, value, getThen(value));
    } else {
      fulfill(promise, value);
    }
  }

  function publishRejection(promise) {
    if (promise._onerror) {
      promise._onerror(promise._result);
    }

    publish(promise);
  }

  function fulfill(promise, value) {
    if (promise._state !== PENDING) {
      return;
    }

    promise._result = value;
    promise._state = FULFILLED;

    if (promise._subscribers.length !== 0) {
      asap(publish, promise);
    }
  }

  function _reject(promise, reason) {
    if (promise._state !== PENDING) {
      return;
    }
    promise._state = REJECTED;
    promise._result = reason;

    asap(publishRejection, promise);
  }

  function subscribe(parent, child, onFulfillment, onRejection) {
    var _subscribers = parent._subscribers;
    var length = _subscribers.length;

    parent._onerror = null;

    _subscribers[length] = child;
    _subscribers[length + FULFILLED] = onFulfillment;
    _subscribers[length + REJECTED] = onRejection;

    if (length === 0 && parent._state) {
      asap(publish, parent);
    }
  }

  function publish(promise) {
    var subscribers = promise._subscribers;
    var settled = promise._state;

    if (subscribers.length === 0) {
      return;
    }

    var child = undefined,
        callback = undefined,
        detail = promise._result;

    for (var i = 0; i < subscribers.length; i += 3) {
      child = subscribers[i];
      callback = subscribers[i + settled];

      if (child) {
        invokeCallback(settled, child, callback, detail);
      } else {
        callback(detail);
      }
    }

    promise._subscribers.length = 0;
  }

  function ErrorObject() {
    this.error = null;
  }

  var TRY_CATCH_ERROR = new ErrorObject();

  function tryCatch(callback, detail) {
    try {
      return callback(detail);
    } catch (e) {
      TRY_CATCH_ERROR.error = e;
      return TRY_CATCH_ERROR;
    }
  }

  function invokeCallback(settled, promise, callback, detail) {
    var hasCallback = isFunction(callback),
        value = undefined,
        error = undefined,
        succeeded = undefined,
        failed = undefined;

    if (hasCallback) {
      value = tryCatch(callback, detail);

      if (value === TRY_CATCH_ERROR) {
        failed = true;
        error = value.error;
        value = null;
      } else {
        succeeded = true;
      }

      if (promise === value) {
        _reject(promise, cannotReturnOwn());
        return;
      }
    } else {
      value = detail;
      succeeded = true;
    }

    if (promise._state !== PENDING) {
      // noop
    } else if (hasCallback && succeeded) {
      _resolve(promise, value);
    } else if (failed) {
      _reject(promise, error);
    } else if (settled === FULFILLED) {
      fulfill(promise, value);
    } else if (settled === REJECTED) {
      _reject(promise, value);
    }
  }

  function initializePromise(promise, resolver) {
    try {
      resolver(function resolvePromise(value) {
        _resolve(promise, value);
      }, function rejectPromise(reason) {
        _reject(promise, reason);
      });
    } catch (e) {
      _reject(promise, e);
    }
  }

  var id = 0;
  function nextId() {
    return id++;
  }

  function makePromise(promise) {
    promise[PROMISE_ID] = id++;
    promise._state = undefined;
    promise._result = undefined;
    promise._subscribers = [];
  }

  function Enumerator(Constructor, input) {
    this._instanceConstructor = Constructor;
    this.promise = new Constructor(noop);

    if (!this.promise[PROMISE_ID]) {
      makePromise(this.promise);
    }

    if (isArray(input)) {
      this._input = input;
      this.length = input.length;
      this._remaining = input.length;

      this._result = new Array(this.length);

      if (this.length === 0) {
        fulfill(this.promise, this._result);
      } else {
        this.length = this.length || 0;
        this._enumerate();
        if (this._remaining === 0) {
          fulfill(this.promise, this._result);
        }
      }
    } else {
      _reject(this.promise, validationError());
    }
  }

  function validationError() {
    return new Error('Array Methods must be provided an Array');
  };

  Enumerator.prototype._enumerate = function () {
    var length = this.length;
    var _input = this._input;

    for (var i = 0; this._state === PENDING && i < length; i++) {
      this._eachEntry(_input[i], i);
    }
  };

  Enumerator.prototype._eachEntry = function (entry, i) {
    var c = this._instanceConstructor;
    var resolve$$ = c.resolve;

    if (resolve$$ === resolve) {
      var _then = getThen(entry);

      if (_then === then && entry._state !== PENDING) {
        this._settledAt(entry._state, i, entry._result);
      } else if (typeof _then !== 'function') {
        this._remaining--;
        this._result[i] = entry;
      } else if (c === Promise) {
        var promise = new c(noop);
        handleMaybeThenable(promise, entry, _then);
        this._willSettleAt(promise, i);
      } else {
        this._willSettleAt(new c(function (resolve$$) {
          return resolve$$(entry);
        }), i);
      }
    } else {
      this._willSettleAt(resolve$$(entry), i);
    }
  };

  Enumerator.prototype._settledAt = function (state, i, value) {
    var promise = this.promise;

    if (promise._state === PENDING) {
      this._remaining--;

      if (state === REJECTED) {
        _reject(promise, value);
      } else {
        this._result[i] = value;
      }
    }

    if (this._remaining === 0) {
      fulfill(promise, this._result);
    }
  };

  Enumerator.prototype._willSettleAt = function (promise, i) {
    var enumerator = this;

    subscribe(promise, undefined, function (value) {
      return enumerator._settledAt(FULFILLED, i, value);
    }, function (reason) {
      return enumerator._settledAt(REJECTED, i, reason);
    });
  };

  /**
    `Promise.all` accepts an array of promises, and returns a new promise which
    is fulfilled with an array of fulfillment values for the passed promises, or
    rejected with the reason of the first passed promise to be rejected. It casts all
    elements of the passed iterable to promises as it runs this algorithm.
  
    Example:
  
    ```javascript
    let promise1 = resolve(1);
    let promise2 = resolve(2);
    let promise3 = resolve(3);
    let promises = [ promise1, promise2, promise3 ];
  
    Promise.all(promises).then(function(array){
      // The array here would be [ 1, 2, 3 ];
    });
    ```
  
    If any of the `promises` given to `all` are rejected, the first promise
    that is rejected will be given as an argument to the returned promises's
    rejection handler. For example:
  
    Example:
  
    ```javascript
    let promise1 = resolve(1);
    let promise2 = reject(new Error("2"));
    let promise3 = reject(new Error("3"));
    let promises = [ promise1, promise2, promise3 ];
  
    Promise.all(promises).then(function(array){
      // Code here never runs because there are rejected promises!
    }, function(error) {
      // error.message === "2"
    });
    ```
  
    @method all
    @static
    @param {Array} entries array of promises
    @param {String} label optional string for labeling the promise.
    Useful for tooling.
    @return {Promise} promise that is fulfilled when all `promises` have been
    fulfilled, or rejected if any of them become rejected.
    @static
  */
  function all(entries) {
    return new Enumerator(this, entries).promise;
  }

  /**
    `Promise.race` returns a new promise which is settled in the same way as the
    first passed promise to settle.
  
    Example:
  
    ```javascript
    let promise1 = new Promise(function(resolve, reject){
      setTimeout(function(){
        resolve('promise 1');
      }, 200);
    });
  
    let promise2 = new Promise(function(resolve, reject){
      setTimeout(function(){
        resolve('promise 2');
      }, 100);
    });
  
    Promise.race([promise1, promise2]).then(function(result){
      // result === 'promise 2' because it was resolved before promise1
      // was resolved.
    });
    ```
  
    `Promise.race` is deterministic in that only the state of the first
    settled promise matters. For example, even if other promises given to the
    `promises` array argument are resolved, but the first settled promise has
    become rejected before the other promises became fulfilled, the returned
    promise will become rejected:
  
    ```javascript
    let promise1 = new Promise(function(resolve, reject){
      setTimeout(function(){
        resolve('promise 1');
      }, 200);
    });
  
    let promise2 = new Promise(function(resolve, reject){
      setTimeout(function(){
        reject(new Error('promise 2'));
      }, 100);
    });
  
    Promise.race([promise1, promise2]).then(function(result){
      // Code here never runs
    }, function(reason){
      // reason.message === 'promise 2' because promise 2 became rejected before
      // promise 1 became fulfilled
    });
    ```
  
    An example real-world use case is implementing timeouts:
  
    ```javascript
    Promise.race([ajax('foo.json'), timeout(5000)])
    ```
  
    @method race
    @static
    @param {Array} promises array of promises to observe
    Useful for tooling.
    @return {Promise} a promise which settles in the same way as the first passed
    promise to settle.
  */
  function race(entries) {
    /*jshint validthis:true */
    var Constructor = this;

    if (!isArray(entries)) {
      return new Constructor(function (_, reject) {
        return reject(new TypeError('You must pass an array to race.'));
      });
    } else {
      return new Constructor(function (resolve, reject) {
        var length = entries.length;
        for (var i = 0; i < length; i++) {
          Constructor.resolve(entries[i]).then(resolve, reject);
        }
      });
    }
  }

  /**
    `Promise.reject` returns a promise rejected with the passed `reason`.
    It is shorthand for the following:
  
    ```javascript
    let promise = new Promise(function(resolve, reject){
      reject(new Error('WHOOPS'));
    });
  
    promise.then(function(value){
      // Code here doesn't run because the promise is rejected!
    }, function(reason){
      // reason.message === 'WHOOPS'
    });
    ```
  
    Instead of writing the above, your code now simply becomes the following:
  
    ```javascript
    let promise = Promise.reject(new Error('WHOOPS'));
  
    promise.then(function(value){
      // Code here doesn't run because the promise is rejected!
    }, function(reason){
      // reason.message === 'WHOOPS'
    });
    ```
  
    @method reject
    @static
    @param {Any} reason value that the returned promise will be rejected with.
    Useful for tooling.
    @return {Promise} a promise rejected with the given `reason`.
  */
  function reject(reason) {
    /*jshint validthis:true */
    var Constructor = this;
    var promise = new Constructor(noop);
    _reject(promise, reason);
    return promise;
  }

  function needsResolver() {
    throw new TypeError('You must pass a resolver function as the first argument to the promise constructor');
  }

  function needsNew() {
    throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.");
  }

  /**
    Promise objects represent the eventual result of an asynchronous operation. The
    primary way of interacting with a promise is through its `then` method, which
    registers callbacks to receive either a promise's eventual value or the reason
    why the promise cannot be fulfilled.
  
    Terminology
    -----------
  
    - `promise` is an object or function with a `then` method whose behavior conforms to this specification.
    - `thenable` is an object or function that defines a `then` method.
    - `value` is any legal JavaScript value (including undefined, a thenable, or a promise).
    - `exception` is a value that is thrown using the throw statement.
    - `reason` is a value that indicates why a promise was rejected.
    - `settled` the final resting state of a promise, fulfilled or rejected.
  
    A promise can be in one of three states: pending, fulfilled, or rejected.
  
    Promises that are fulfilled have a fulfillment value and are in the fulfilled
    state.  Promises that are rejected have a rejection reason and are in the
    rejected state.  A fulfillment value is never a thenable.
  
    Promises can also be said to *resolve* a value.  If this value is also a
    promise, then the original promise's settled state will match the value's
    settled state.  So a promise that *resolves* a promise that rejects will
    itself reject, and a promise that *resolves* a promise that fulfills will
    itself fulfill.
  
  
    Basic Usage:
    ------------
  
    ```js
    let promise = new Promise(function(resolve, reject) {
      // on success
      resolve(value);
  
      // on failure
      reject(reason);
    });
  
    promise.then(function(value) {
      // on fulfillment
    }, function(reason) {
      // on rejection
    });
    ```
  
    Advanced Usage:
    ---------------
  
    Promises shine when abstracting away asynchronous interactions such as
    `XMLHttpRequest`s.
  
    ```js
    function getJSON(url) {
      return new Promise(function(resolve, reject){
        let xhr = new XMLHttpRequest();
  
        xhr.open('GET', url);
        xhr.onreadystatechange = handler;
        xhr.responseType = 'json';
        xhr.setRequestHeader('Accept', 'application/json');
        xhr.send();
  
        function handler() {
          if (this.readyState === this.DONE) {
            if (this.status === 200) {
              resolve(this.response);
            } else {
              reject(new Error('getJSON: `' + url + '` failed with status: [' + this.status + ']'));
            }
          }
        };
      });
    }
  
    getJSON('/posts.json').then(function(json) {
      // on fulfillment
    }, function(reason) {
      // on rejection
    });
    ```
  
    Unlike callbacks, promises are great composable primitives.
  
    ```js
    Promise.all([
      getJSON('/posts'),
      getJSON('/comments')
    ]).then(function(values){
      values[0] // => postsJSON
      values[1] // => commentsJSON
  
      return values;
    });
    ```
  
    @class Promise
    @param {function} resolver
    Useful for tooling.
    @constructor
  */
  function Promise(resolver) {
    this[PROMISE_ID] = nextId();
    this._result = this._state = undefined;
    this._subscribers = [];

    if (noop !== resolver) {
      typeof resolver !== 'function' && needsResolver();
      this instanceof Promise ? initializePromise(this, resolver) : needsNew();
    }
  }

  Promise.all = all;
  Promise.race = race;
  Promise.resolve = resolve;
  Promise.reject = reject;
  Promise._setScheduler = setScheduler;
  Promise._setAsap = setAsap;
  Promise._asap = asap;

  Promise.prototype = {
    constructor: Promise,

    /**
      The primary way of interacting with a promise is through its `then` method,
      which registers callbacks to receive either a promise's eventual value or the
      reason why the promise cannot be fulfilled.
    
      ```js
      findUser().then(function(user){
        // user is available
      }, function(reason){
        // user is unavailable, and you are given the reason why
      });
      ```
    
      Chaining
      --------
    
      The return value of `then` is itself a promise.  This second, 'downstream'
      promise is resolved with the return value of the first promise's fulfillment
      or rejection handler, or rejected if the handler throws an exception.
    
      ```js
      findUser().then(function (user) {
        return user.name;
      }, function (reason) {
        return 'default name';
      }).then(function (userName) {
        // If `findUser` fulfilled, `userName` will be the user's name, otherwise it
        // will be `'default name'`
      });
    
      findUser().then(function (user) {
        throw new Error('Found user, but still unhappy');
      }, function (reason) {
        throw new Error('`findUser` rejected and we're unhappy');
      }).then(function (value) {
        // never reached
      }, function (reason) {
        // if `findUser` fulfilled, `reason` will be 'Found user, but still unhappy'.
        // If `findUser` rejected, `reason` will be '`findUser` rejected and we're unhappy'.
      });
      ```
      If the downstream promise does not specify a rejection handler, rejection reasons will be propagated further downstream.
    
      ```js
      findUser().then(function (user) {
        throw new PedagogicalException('Upstream error');
      }).then(function (value) {
        // never reached
      }).then(function (value) {
        // never reached
      }, function (reason) {
        // The `PedgagocialException` is propagated all the way down to here
      });
      ```
    
      Assimilation
      ------------
    
      Sometimes the value you want to propagate to a downstream promise can only be
      retrieved asynchronously. This can be achieved by returning a promise in the
      fulfillment or rejection handler. The downstream promise will then be pending
      until the returned promise is settled. This is called *assimilation*.
    
      ```js
      findUser().then(function (user) {
        return findCommentsByAuthor(user);
      }).then(function (comments) {
        // The user's comments are now available
      });
      ```
    
      If the assimliated promise rejects, then the downstream promise will also reject.
    
      ```js
      findUser().then(function (user) {
        return findCommentsByAuthor(user);
      }).then(function (comments) {
        // If `findCommentsByAuthor` fulfills, we'll have the value here
      }, function (reason) {
        // If `findCommentsByAuthor` rejects, we'll have the reason here
      });
      ```
    
      Simple Example
      --------------
    
      Synchronous Example
    
      ```javascript
      let result;
    
      try {
        result = findResult();
        // success
      } catch(reason) {
        // failure
      }
      ```
    
      Errback Example
    
      ```js
      findResult(function(result, err){
        if (err) {
          // failure
        } else {
          // success
        }
      });
      ```
    
      Promise Example;
    
      ```javascript
      findResult().then(function(result){
        // success
      }, function(reason){
        // failure
      });
      ```
    
      Advanced Example
      --------------
    
      Synchronous Example
    
      ```javascript
      let author, books;
    
      try {
        author = findAuthor();
        books  = findBooksByAuthor(author);
        // success
      } catch(reason) {
        // failure
      }
      ```
    
      Errback Example
    
      ```js
    
      function foundBooks(books) {
    
      }
    
      function failure(reason) {
    
      }
    
      findAuthor(function(author, err){
        if (err) {
          failure(err);
          // failure
        } else {
          try {
            findBoooksByAuthor(author, function(books, err) {
              if (err) {
                failure(err);
              } else {
                try {
                  foundBooks(books);
                } catch(reason) {
                  failure(reason);
                }
              }
            });
          } catch(error) {
            failure(err);
          }
          // success
        }
      });
      ```
    
      Promise Example;
    
      ```javascript
      findAuthor().
        then(findBooksByAuthor).
        then(function(books){
          // found books
      }).catch(function(reason){
        // something went wrong
      });
      ```
    
      @method then
      @param {Function} onFulfilled
      @param {Function} onRejected
      Useful for tooling.
      @return {Promise}
    */
    then: then,

    /**
      `catch` is simply sugar for `then(undefined, onRejection)` which makes it the same
      as the catch block of a try/catch statement.
    
      ```js
      function findAuthor(){
        throw new Error('couldn't find that author');
      }
    
      // synchronous
      try {
        findAuthor();
      } catch(reason) {
        // something went wrong
      }
    
      // async with promises
      findAuthor().catch(function(reason){
        // something went wrong
      });
      ```
    
      @method catch
      @param {Function} onRejection
      Useful for tooling.
      @return {Promise}
    */
    'catch': function _catch(onRejection) {
      return this.then(null, onRejection);
    }
  };

  function polyfill() {
    var local = undefined;

    if (typeof global !== 'undefined') {
      local = global;
    } else if (typeof self !== 'undefined') {
      local = self;
    } else {
      try {
        local = Function('return this')();
      } catch (e) {
        throw new Error('polyfill failed because global object is unavailable in this environment');
      }
    }

    var P = local.Promise;

    if (P) {
      var promiseToString = null;
      try {
        promiseToString = Object.prototype.toString.call(P.resolve());
      } catch (e) {
        // silently ignored
      }

      if (promiseToString === '[object Promise]' && !P.cast) {
        return;
      }
    }

    local.Promise = Promise;
  }

  polyfill();
  // Strange compat..
  Promise.polyfill = polyfill;
  Promise.Promise = Promise;

  return Promise;
});
//# sourceMappingURL=es6-promise.map
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(5), __webpack_require__(6)))

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout() {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
})();
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch (e) {
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch (e) {
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }
}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e) {
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e) {
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }
}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while (len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) {
    return [];
};

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () {
    return '/';
};
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function () {
    return 0;
};

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var g;

// This works in non-strict mode
g = function () {
	return this;
}();

try {
	// This works if eval is allowed (see CSP)
	g = g || Function("return this")() || (1, eval)("this");
} catch (e) {
	// This works if the window reference is available
	if ((typeof window === "undefined" ? "undefined" : _typeof(window)) === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;

/***/ }),
/* 7 */
/***/ (function(module, exports) {

/* (ignored) */

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

exports.default = function (form, formSpec, options) {
    return new FormValidator(form, formSpec, options);
};

var _validate = __webpack_require__(0);

var _validate2 = _interopRequireDefault(_validate);

var _errorMessages = __webpack_require__(9);

var _errorMessages2 = _interopRequireDefault(_errorMessages);

var _formTools = __webpack_require__(2);

var _formTools2 = _interopRequireDefault(_formTools);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var validate = (0, _validate2.default)();

var normalizeInput = function normalizeInput($field, spec) {
    if ($field.get(0).tagName.toLowerCase() === "select" || $field.attr('type') === "radio" || $field.attr('type') === "checkbox" || $field.attr('type') === "hidden" || $field.attr('type') === "button" || $field.attr('type') === "submit" || $field.attr('type') === "file") {
        return;
    }

    $field.val(_formTools2.default.normalize($field.val()), spec);
};

var showError = function showError($field, errorCode) {
    var errorMessage = _errorMessages2.default[errorCode];
    if (!errorMessage) {
        return;
    }

    displayErrorMessage($field, errorMessage);
};
var displayErrorMessage = function displayErrorMessage($field, message) {
    var inputContainer = $($field.closest('.input-group, .input-wrapper'));
    inputContainer.addClass('error');
    inputContainer.find('.error-message').html('<span class="icon-Information fa fa-info-circle"></span>&nbsp;' + message).show();
};
var clearError = function clearError($field) {
    var inputContainer = $($field.closest('.input-group, .input-wrapper'));
    inputContainer.removeClass('error');
    inputContainer.find('.error-message').text("").hide();
};

var getFieldValue = function getFieldValue($field) {
    var fieldValue;
    if ($field.attr('type') == "radio") {
        var selectedElements = $('input[name=' + $field.attr('name') + ']:checked');
        if (selectedElements.length > 0) {
            fieldValue = selectedElements.val();
        }
    } else if ($field.attr('type') == "checkbox") {
        var selectedElements = $('input[name=' + $field.attr('name') + ']:checked');
        if (selectedElements.length > 0) {
            fieldValue = [];

            selectedElements.each(function () {
                fieldValue.push(this.value);
            });
        }
    } else {
        fieldValue = $field.val();
    }
    return fieldValue;
};

var validateFieldValue = function validateFieldValue($field, fieldSpec) {

    var fieldName = $field.attr('name');
    var fieldValue = _formTools2.default.getFieldValue($field);

    if ($field.attr('type') === "button" || $field.attr('type') === "submit" || $field.attr('type') === "file") {
        return;
    }

    //Common Validation
    if ($field.attr("type") === "tel") {
        if (!fieldValue) {
            return { valid: false, code: "generic-invalidtel" };
        }
    }

    if ($field.attr("required")) {
        var result = validate.required(fieldValue);
        if (!result.valid) {
            return result;
        }
    }

    if ($field.attr("minlength")) {
        var result = validate.minLength(fieldValue, $field.attr("minlength"));
        if (!result.valid) {
            return result;
        }
    }
    if ($field.attr("maxlength")) {
        var result = validate.maxLength(fieldValue, $field.attr("maxlength"));
        if (!result.valid) {
            return result;
        }
    }
    //Field Specific Validation
    if (fieldSpec) {
        var validations = [];
        if (fieldSpec.validation) {
            validations = validations.concat(fieldSpec.validation);
        }

        if (fieldSpec.type && fieldSpec.type.validation) {
            validations = validations.concat(fieldSpec.type.validation);
        }

        for (var i = 0; i < validations.length; i++) {
            var result = validations[i](fieldValue);
            if (!result.valid) {
                return result;
            }
        }

        if (fieldSpec.confirm) {
            var $confirmField = $field.closest("form").find('input[name=' + fieldSpec.confirm + ']');
            var confirmFieldValue = _formTools2.default.getFieldValue($confirmField);
            var result = validate.confirmMatches(fieldValue, confirmFieldValue);
            if (!result.valid) {
                return result;
            }
        }
    }
};

var validateField = function validateField(field, fieldSpec, showErrors) {
    var $field = $(field);

    normalizeInput($field, fieldSpec);

    var result = validateFieldValue($field, fieldSpec);

    if (result && !result.valid) {
        if (showErrors) {
            showError($field, result.code);
        }
        return false;
    }

    clearError($field);
    return true;
};

var FormValidator = function () {
    function FormValidator(form, formSpec, opts) {
        _classCallCheck(this, FormValidator);

        var options = opts || {};
        this.spec = formSpec;
        this.$form = $(form);
        this.$formFields = this.$form.find('input, select');
        this.$captchaField = $('#gcaptcha');
        this.customValidations = [];

        this.$formFields.each(function (index, field) {
            var $this = $(field);

            if ($this.attr('type') === "hidden" || $this.attr('type') === "button" || $this.attr('type') === "submit") {
                return;
            }

            var $inputContainer = $this.closest(".input-wrapper");

            if ($inputContainer.length == 0) {

                var $floatlabel = $this.closest(".floatlabel-wrapper");
                if ($floatlabel.length > 0) {
                    $floatlabel.wrap("<div class='input-wrapper'></div>");
                } else {
                    $this.wrap("<div class='input-wrapper'></div>");
                }
                $inputContainer = $this.closest(".input-wrapper");
            }

            if ($inputContainer.find('.error-message').length > 0) {
                return;
            }

            var $errorContainer = $("<div class='error-message'></div>");
            $inputContainer.append($errorContainer);
        }.bind(this));

        this.$form.on('blur change', 'input, select', function (e) {
            validateField(e.target, this.spec[e.target.name], true);
            this.validateForm(false);
        }.bind(this));

        this.$form.on('keyup paste', 'input', function (e) {
            validateField(e.target, this.spec[e.target.name], false);
            this.validateForm(false);
        }.bind(this));

        if (!options.checkOnSubmit) {
            this.$form.on('submit', function (e) {
                if (!this.validateForm(true)) {
                    e.preventDefault();
                    e.stopPropagation();
                    return;
                }
            }.bind(this));
        }
        this.validateForm(false);
    }

    _createClass(FormValidator, [{
        key: "validateForm",
        value: function validateForm(showErrors) {
            var isValid = true;

            this.$formFields.each(function (index, field) {
                var isFieldValid = validateField(field, this.spec[field.name], showErrors);
                if (!isFieldValid) {
                    isValid = false;
                }
            }.bind(this));

            this.customValidations.forEach(function (validation) {
                var result = validation.bind(this)();
                if (!result.valid) {
                    isValid = false;

                    if (result.field) {
                        if (result.errorCode) {
                            showError($(result.field), result.errorCode);
                        } else if (result.error) {
                            displayErrorMessage($(result.field), result.error);
                        }
                    }
                    return;
                }

                if (result.field) {
                    clearError($(result.field));
                }
            });

            if (isValid) {
                this.$form.find("input[type=submit], button[type=submit], .submit").attr("disabled", false);
            } else {
                this.$form.find("input[type=submit], button[type=submit], .submit").attr("disabled", "disabled");
            }
            if (this.$form.find("#gcaptcha").length > 0 && typeof grecaptcha !== 'undefined' && grecaptcha.getResponse && !grecaptcha.getResponse()) {
                $('.captcha-error').show().html('<span class="icon-Information fa fa-info-circle"></span> <span>Please verify you\'re not a robot.</span>');
                isValid = false;
            } else {
                $('.captcha-error').hide();
            }

            return isValid;
        }
    }, {
        key: "addValidation",
        value: function addValidation(func) {
            this.customValidations.push(func);
        }
    }, {
        key: "removeValidation",
        value: function removeValidation(func) {
            if (this.customValidations.indexOf(func) > -1) {
                this.customValidations.splice(this.customValidations.indexOf(func), 1);
            }
        }
    }]);

    return FormValidator;
}();

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = {
    "required": "This field is required.",
    "agreetos-required": "You must agree to the terms and conditions.",

    "s-user-confirm-notmatching": "Oops! Looks like your email addresses don’t match.",
    "cpasswd-notmatching": "Oops! Looks like your passwords don’t match.",
    "cpassword-notmatching": "Oops! Looks like your passwords don’t match.",
    "cnewpasswd-notmatching": "Oops! Looks like your passwords don’t match. Please try again.",

    "generic-minlength": "Please enter minimum of # characters.",
    "generic-maxlength": "Please enter maximum of # characters.",
    "generic-invalidemail": "Please enter a valid email.",
    "generic-invalidnumber": "Please enter numbers only.",
    "generic-alphanumeric": "Please enter only letters, numbers and spaces only.",
    "generic-blacklistedemaildomain": "This email domain is blacklisted. Please try a different email.",
    "generic-invalidtel": "Please enter a valid phone number.",
    "generic-invalidpassword": "Password must be at least 8 characters and include an uppercase, lowercase, number, and special character",
    "generic-invalidanswer": "We only support latin characters.",
    "generic-passwordhasrepeatedchars": "Password has repeated characters.",
    "generic-invalidname": "Name cannot have special characters or numbers.",
    "generic-invalidzip": "Please enter a valid zip.",
    "sqa-save-success": "Your security questions have been updated.",
    "sqa-save-failure": "Your security questions were not saved. Please try again.",
    "updatesqa-rate-limited": "You have exceeded the maximum number of resets. Please retry after some time.",
    "fill-mandatory": "Fill in mandatory fields",
    "tfa-mandatory": "Please fill in the mobile number.",
    "tfacode-mandatory": "Please fill in the security code.",
    "pfa-mandatory": "Please fill in the mobile number.",
    "pfacode-mandatory": "Please fill in the security code.",
    "tfa-success": "We have sent you a code to your mobile device.",
    "pfa-success": "We have sent you a code to your mobile device.",
    "tfa-failure": "The code could not be sent at this time. Please review your mobile number and try again.",
    "pfa-failure": "The code could not be sent at this time. Please review your mobile number and try again.",
    "tfa-error": "The code could not be sent at this time. Please try again.",
    "pfa-error": "The code could not be sent at this time. Please try again.",
    "tfa-rate-limited": "You have exceeded the maximum number of attempts. Please try again later.",
    "pfa-rate-limited": "Your can request a new pin only after one minute has elapsed since last request.",
    "pfa-rate-limited-sendcode-ptfa": "Your can continue only after one minute has elapsed since last pin request.",
    "pfa-rate-limited-sendcode": "Your can request a new pin only after one minute has elapsed since last request.",
    "tfacode-enabled-success": "Success! We have enabled mobile, two-step verification for your account.",
    "pfacode-enabled-success": "We have verified you successfully.",
    "tfacode-disabled-success": "We have disabled mobile security for your account.",
    "tfacode-invalid": "The code you have entered is invalid.",
    "pfacode-invalid": "The code you have entered is invalid.",
    "tfacode-expired": "The code you have entered has expired.",
    "pfacode-expired": "The code you have entered has expired.",
    "tfacode-failure": "The code could not be verified at this time. Please try again.",
    "pfacode-failure": "The code could not be verified at this time. Please try again.",
    "tfacode-error": "The code could not be verified at this time. Please try again.",
    "pfacode-error": "The code could not be verified at this time. Please try again.",

    "passwd-requirement": "Password must be at least 8 characters and include an uppercase, lowercase, number, and special character",
    "-520": "Password must be at least 8 characters and include an uppercase, lowercase, number, and special character",
    "-519": "Password must be at least 8 characters and include an uppercase, lowercase, number, and special character",
    "-518": "Password must be at least 8 characters and include an uppercase, lowercase, number, and special character",
    "-517": "Current and new passwords cannot be the same.",
    "-515": "We were not able to change your password. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "-514": "We were not able to change your password. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "login-change-error": "We were not able to change your ID. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "form-save-error": "We were not able to save your form. Please try later.",
    "-513": "Unexpected error, please try again. If problem persists, please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "-511": "Unexpected error, please try again. If problem persists, please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "403": "Oops! Looks like you entered a wrong password. Please try again.",
    "-4004": "Two-step verification authentication failure.",
    "-510": "Oops! Looks like you entered a wrong password. Please try again.",
    "409": "This user ID is already in use or is registered as an alias to your account. Please try another email address.",
    "-530": "Current and new user IDs cannot be the same.",
    "resend-failure": "We were unable to send this email. Please try again in a few minutes.",
    "session-timeout": "Your session has timed out, redirecting to login.",
    "password-changed": "Success! Your password has been changed.",
    "email-sent": "We've sent you an email to confirm your new user ID.",

    "tfa-softdisabled-tooltip": "You must turn off two-step verification below to opt-out of this setting. We highly recommend that you keep two-step verification enabled.",
    "pfa-softdisabled-tooltip": 'You can opt-out of this setting in "My Profile" page.',

    "newpasswd-matching": "Current and new passwords cannot be the same.",
    "contactNumWidget-matching": "Alternate phone and mobile cannot be the same.",
    "altEmail-matching": "Alternate email and user ID cannot be the same.",

    "form-issue": "Please correct the highlighted errors and try again!",
    "altEmail-invalid-domain": "Please enter a valid email.",

    "form-review-address": "Please review the address your have entered. We provided some alternate suggestions.",
    "form-address-issue": "Please verify the address you entered is correct.",
    "form-saveaddress-error": "We were not able to locate your address.",

    "accountinfo-save-success": "Your profile has been updated.",
    "accountinfo-save-success-redirect": "Your profile has been updated. You will be now redirected.",
    "createprofile-save-success": "Your profile has been created. You will be now redirected.",
    "accact-success": "We've sent you another email.",
    "accact-failure": "An error occurred. Please try again in a few minutes.",
    "accact-failure-ratelimit": "You have exceeded the maximum number of retries in an hour.",
    "accact-failure-session": "Your session is invalid. We are not able to complete your request. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "mcc-success": "We've sent you another email.",
    "mcc-failure": "An error occurred. Please try again in a few minutes.",
    "mcc-failure-ratelimit": "You have exceeded the maximum number of retries in an hour.",
    "mcc-failure-session": "Your session is invalid. We are not able to complete your request. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>.",
    "mlc-success": "We've sent you another email.",
    "mlc-failure": "An error occurred. Please try again in a few minutes.",
    "mlc-failure-ratelimit": "You have exceeded the maximum number of retries in an hour.",
    "mlc-failure-session": "Your session is invalid. We are not able to complete your request. Please contact <a href='https://www.luminate.com/contact' target='_blank'>Customer Care</a>."
};

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var validate = __webpack_require__(0)();

var fieldTypes = {
    hidden: {
        inputType: "hidden"
    },
    email: {
        inputType: "email",
        validation: [validate.email]
    },
    name: {
        inputType: "text",
        properties: {
            minLength: 1,
            maxLength: 50
        }
    },
    phoneNumber: {
        inputType: "tel",
        properties: {
            minLength: 1,
            maxLength: 50
        },
        validation: [validate.phoneNumber]
    },
    verificationCode: {
        inputType: "text",
        properties: {
            minLength: 6,
            maxLength: 6
        },
        validation: [validate.number]
    },
    password: {
        inputType: "password"
    },
    newPassword: {
        inputType: "password",
        validation: [validate.password]
    },
    appPasswordName: {
        inputType: "text",
        validation: [validate.alphaNumeric]
    },
    consent: {
        inputType: "checkbox"
    }
    /*
        formName: {
            fieldName: {
                //Common field types e.g. email
                type: fieldType.type,
    
                //Flags
                multiple: true/false, //There may be multiple instances of this field in a form eg, radio or checkbox fields
                required: true/falase, //Makes sure a value is selected as part of validation
                lowercaseInput true/false, //Force input to be lowercase
                confirm: field value must match other field value
            }
        }
    */

};var forms = {
    login: {
        login: {
            type: fieldTypes.email,
            required: true
        },
        password: {
            type: fieldTypes.password,
            required: true
        },
        persistent: {
            type: fieldTypes.consent
        },
        done: {
            type: fieldTypes.hidden
        }
    },
    resetPassword: {
        email: {
            type: fieldTypes.email,
            required: true,
            lowercaseInput: true
        }
    },
    chooseRecoveryMethod: {
        method: {
            inputType: "radio",
            multiple: true,
            required: true
        },
        email: {
            type: fieldTypes.hidden,
            required: true
        }
    },
    verifyRecoveryCode: {
        code: {
            type: fieldTypes.verificationCode,
            required: true
        },
        email: {
            type: fieldTypes.hidden,
            required: true
        }
    },
    recoveryChangePassword: {
        password: {
            type: fieldTypes.newPassword,
            required: true
        },
        confirmPassword: {
            type: fieldTypes.password,
            required: true,
            confirm: "password"
        },
        sign: {
            type: fieldTypes.hidden
        }
    },
    createAppPassword: {
        appName: {
            type: fieldTypes.appPasswordName,
            required: true
        },
        customName: {
            type: fieldTypes.appPasswordName
        }
    },
    deleteAppPassword: {
        id: {
            type: fieldTypes.hidden,
            required: true
        },
        name: {
            type: fieldTypes.hidden,
            required: true
        }
    },
    setupPassword: {
        password: {
            type: fieldTypes.newPassword,
            required: true
        },
        confirmPassword: {
            type: fieldTypes.password,
            required: true,
            confirm: "password"
        },
        token: {
            type: fieldTypes.hidden
        },
        uuid: {
            type: fieldTypes.hidden
        },
        doneUrl: {
            type: fieldTypes.hidden
        },
        yahooConsent: {
            type: fieldTypes.consent,
            required: true
        }
    },
    transferSetup: {
        password: {
            type: fieldTypes.newPassword,
            required: true
        },
        confirmPassword: {
            type: fieldTypes.password,
            required: true,
            confirm: "password"
        },
        phoneNumber: {
            required: true,
            type: fieldTypes.phoneNumber
        },
        mobileConsent: {
            type: fieldTypes.consent
        },
        yahooConsent: {
            type: fieldTypes.consent,
            required: true
        }
    },
    agreeTOS: {
        token: {
            type: fieldTypes.hidden
        },
        uuid: {
            type: fieldTypes.hidden
        },
        doneUrl: {
            type: fieldTypes.hidden
        }
    },
    changePassword: {
        oldPassword: {
            type: fieldTypes.password,
            required: true
        },
        password: {
            type: fieldTypes.newPassword,
            required: true
        },
        confirmPassword: {
            type: fieldTypes.password,
            required: true,
            confirm: "password"
        }
    },
    updateProfile: {
        firstName: {
            type: fieldTypes.name
        },
        lastName: {
            type: fieldTypes.name
        },
        alternateEmail: {
            required: true,
            type: fieldTypes.email
        },
        phoneNumber: {
            required: true,
            type: fieldTypes.phoneNumber
        },
        mobileConsent: {
            type: fieldTypes.consent
        }
    }
};

module.exports = forms;

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var updateInputDisplay = function updateInputDisplay($fields, show) {
    if (show) {
        $fields.attr('type', 'text');
    } else {
        $fields.attr('type', 'password');
    }
};

var PasswordDisplayToggle = function () {
    function PasswordDisplayToggle(inputSelector) {
        _classCallCheck(this, PasswordDisplayToggle);

        this.$els = $(inputSelector);
        this.$inputGroups = this.$els.closest(".input-group, .input-wrapper");
        this.$els.after('<a href="javascript://" class="password-display-toggle-button"><span class="password-hidden">Show</span><span class="password-shown">Hide</span></a>');
        this.$inputGroups.on('click', '.password-display-toggle-button', function (e) {
            console.log('click');
            e.preventDefault();
            this.toggle();
        }.bind(this));
    }

    _createClass(PasswordDisplayToggle, [{
        key: 'toggle',
        value: function toggle() {
            this.$inputGroups.toggleClass("password-display-toggle-show-password");
            updateInputDisplay(this.$els, this.$inputGroups.hasClass("password-display-toggle-show-password"));
        }
    }, {
        key: 'show',
        value: function show() {
            this.$inputGroups.addClass("password-display-toggle-show-password");
            updateInputDisplay(this.$els, true);
        }
    }, {
        key: 'hide',
        value: function hide() {
            this.$inputGroups.removeClass("password-display-toggle-show-password");
            updateInputDisplay(this.$els, false);
        }
    }]);

    return PasswordDisplayToggle;
}();

exports.default = PasswordDisplayToggle;

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var PasswordIndicator = function () {
    function PasswordIndicator(inputSelector) {
        _classCallCheck(this, PasswordIndicator);

        this.$el = $(inputSelector);

        this.$el.on("focus", function () {
            this.$el.tipso('show');
        }.bind(this));

        this.$el.on("blur", function () {
            this.$el.tipso('hide');
        }.bind(this));

        this.$el.tipso({
            useTitle: true,
            background: "#333",
            position: "bottom",
            width: 250
        });
    }

    _createClass(PasswordIndicator, [{
        key: "show",
        value: function show() {
            this.$el.tipso('show');
        }
    }, {
        key: "hide",
        value: function hide() {
            this.$el.tipso('hide');
        }
    }]);

    return PasswordIndicator;
}();

exports.default = PasswordIndicator;

/***/ }),
/* 13 */,
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Modal = function () {
    function Modal($el) {
        _classCallCheck(this, Modal);

        this.$el = $el;
        this.currentView = null;
        this.stack = [];

        var views = [];
        var currentView;

        this.$el.find(".modal-view").each(function () {
            var view = new ModalView($(this));
            if (view.active) {
                currentView = view;
            }
            views.push(view);
        });
        this.$el.find(".modal-overlay, .modal-close").on('click', function (e) {
            e.preventDefault;
            this.close();
        }.bind(this));
        this.views = views;
        if (currentView) {
            this.currentView = currentView;
            this.stack.push(this.currentView);
        }
    }

    _createClass(Modal, [{
        key: "navigateToStart",
        value: function navigateToStart() {
            if (this.stack.length <= 1) {
                return;
            }

            if (this.currentView) {
                this.currentView.animateOut();
            }

            var view = this.stack[0];
            view.animateIn();

            this.currentView = view;
            this.stack = [view];
        }
    }, {
        key: "navigateTo",
        value: function navigateTo(viewName) {
            var view = this.getView(viewName);
            if (!view || view.active) {
                return;
            }

            if (this.currentView) {
                this.currentView.animateOut();
            }

            view.animateIn();
            this.currentView = view;
            this.stack.push(view);
        }
    }, {
        key: "navigateBack",
        value: function navigateBack() {
            if (this.stack.length <= 1) {
                return;
            }
            var previousView = this.stack.pop();

            var view = this.stack[this.stack.length - 1];

            if (this.currentView) {
                this.currentView.animateOut({ reverse: true });
            }

            view.animateIn({ reverse: true });
            this.currentView = view;
        }
    }, {
        key: "getView",
        value: function getView(className) {
            return this.views.find(function (view) {
                return view.is(className);
            });
        }
    }, {
        key: "show",
        value: function show() {
            this.$el.show();
            // some fancier show here
        }
    }, {
        key: "close",
        value: function close() {
            var view = this.stack[0];
            if (this.currentView) {
                this.currentView.makeInactive();
            }

            view.makeActive();
            this.currentView = view;
            this.stack = [view];

            this.views.forEach(function (view) {
                view.cleanAnimation();
            });
            this.$el.hide();
        }
    }]);

    return Modal;
}();

var ModalView = function () {
    function ModalView($el) {
        _classCallCheck(this, ModalView);

        this.$el = $el;
        this.active = this.$el.hasClass('modal-view-active');
        this.animating = false;

        this.$el.on("animationstart", function () {
            this.animating = true;
        }.bind(this));

        this.$el.on("animationend", function () {
            this.animating = false;
        }.bind(this));
    }

    _createClass(ModalView, [{
        key: "is",
        value: function is(className) {
            return this.$el.hasClass(className);
        }
    }, {
        key: "cleanAnimation",
        value: function cleanAnimation() {
            this.$el.removeClass('animate-in animate-out animate-reverse-in animate-reverse-out');
        }
    }, {
        key: "makeActive",
        value: function makeActive() {
            this.active = true;
            this.$el.addClass('modal-view-active');
        }
    }, {
        key: "makeInactive",
        value: function makeInactive() {
            this.active = false;
            this.$el.removeClass('modal-view-active');
        }
    }, {
        key: "animateIn",
        value: function animateIn(opts) {
            opts = opts || {};

            this.cleanAnimation();

            setTimeout(function () {
                this.makeActive();

                if (opts.reverse) {
                    this.$el.addClass('animate-reverse-in');
                } else {
                    this.$el.addClass('animate-in');
                }
            }.bind(this), 0);
        }
    }, {
        key: "animateOut",
        value: function animateOut(opts) {
            opts = opts || {};

            this.cleanAnimation();

            setTimeout(function () {
                this.makeInactive();

                if (opts.reverse) {
                    this.$el.addClass('animate-reverse-out');
                } else {
                    this.$el.addClass('animate-out');
                }
            }.bind(this), 0);
        }
    }]);

    return ModalView;
}();

exports.default = Modal;

/***/ }),
/* 15 */,
/* 16 */,
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _CsrfRequest = __webpack_require__(1);

var _CsrfRequest2 = _interopRequireDefault(_CsrfRequest);

var _AppPasswordModal = __webpack_require__(18);

var _AppPasswordModal2 = _interopRequireDefault(_AppPasswordModal);

var _ChangePasswordModal = __webpack_require__(20);

var _ChangePasswordModal2 = _interopRequireDefault(_ChangePasswordModal);

var _formValidator = __webpack_require__(8);

var _formValidator2 = _interopRequireDefault(_formValidator);

var _formTools = __webpack_require__(2);

var _formTools2 = _interopRequireDefault(_formTools);

var _forms = __webpack_require__(10);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

_AppPasswordModal2.default.ready().then(function (modal) {
    $("#mg-app-pw").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        modal.show();
    });
});

_ChangePasswordModal2.default.ready().then(function (modal) {
    $("#mg-chg-pw").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        modal.show();
    });
});

$(document).ready(function () {
    var $form = $("#idp-update-profile-form");
    var $saveStatus = $("#update-profile-save-status");
    var validator = (0, _formValidator2.default)($form, _forms.updateProfile);
    var currentUserId = _formTools2.default.normalize($("#current-user-id").text());
    var $alternateEmailInput = $('input[name=alternateEmail]');

    $form.find('input[name="phoneNumber"]').intlTelInput({
        preferredCountries: ['us', 'ca', 'in'],
        utilsScript: "/js/phoneutils.js",
        nationalMode: false
    });;

    validator.addValidation(function () {
        var alternateEmail = _formTools2.default.getFormData($form, _forms.updateProfile).alternateEmail;
        if (alternateEmail === currentUserId) {
            return {
                valid: false,
                field: $alternateEmailInput,
                error: "Your alternate email cannot be your account email."
            };
        }

        return {
            valid: true
        };
    });

    $form.on("submit", function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (validator.validateForm(false)) {
            $form.addClass('saving');

            _CsrfRequest2.default.request({
                type: "POST",
                url: "/accountinfo/xhr/update",
                data: _formTools2.default.getFormData($form, _forms.updateProfile)
            }).then(function (result) {
                $form.removeClass('saving');
                $saveStatus.removeClass("hide").removeClass("alert-danger").removeClass("alert-success");

                $saveStatus.addClass("alert-success");
                $saveStatus.text("Profile saved. You will be redirected to your mailbox.");
                setTimeout(function () {
                    document.location.href = $("#doneurl").val();
                }, 3000);
            }.bind(this), function (error) {
                $saveStatus.removeClass("hide").removeClass("alert-danger").removeClass("alert-success");
                $saveStatus.addClass("alert-danger");
                $saveStatus.text("Error while saving profile.");
                setTimeout(function () {
                    $saveStatus.addClass("hide");
                }, 3000);
            }.bind(this));
        }
    });

    $("#cancel-profile").click(function (e) {
        document.location.href = $("#doneurl").val();
    });
});

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _CsrfRequest = __webpack_require__(1);

var _CsrfRequest2 = _interopRequireDefault(_CsrfRequest);

var _formValidator = __webpack_require__(8);

var _formValidator2 = _interopRequireDefault(_formValidator);

var _forms = __webpack_require__(10);

var _formTools = __webpack_require__(2);

var _formTools2 = _interopRequireDefault(_formTools);

var _clipboardMin = __webpack_require__(19);

var _clipboardMin2 = _interopRequireDefault(_clipboardMin);

var _Modal = __webpack_require__(14);

var _Modal2 = _interopRequireDefault(_Modal);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var modalInitPromise = new Promise(function (resolve, reject) {
    $(document).ready(function () {
        var $modalElement = $("#app-password-modal");
        if ($modalElement.length <= 0) {
            reject();
            return;
        }

        var passwordModal = new _Modal2.default($modalElement);

        //Update object with modal
        AppPasswordModal.modal = passwordModal;

        var instructionsMap = {
            "Android Mail": ".instructions-android-mail",
            "iPhone Mail": ".instructions-iphone",
            "iPad Mail": ".instructions-ipad",
            "iPhone Calendar": ".instructions-iphone",
            "iPad Calendar": ".instructions-ipad",
            "Mac Mail": ".instructions-mac",
            "Mac Calendar": ".instructions-mac",
            "Outlook iOS": ".instructions-outlook-ios",
            "Outlook Android": ".instructions-outlook-android",
            "Outlook Desktop": ".instructions-outlook-desktop",
            "Other": ".instructions-other"
        };

        // Select UI elements
        var $passwordView = $modalElement.find(".generate-password-view");
        var $instructions = $passwordView.find(".instructions");
        var $passwordDisplay = $passwordView.find(".app-password-display");
        var $passwordContainer = $passwordView.find(".app-password-display-container");
        var $doneButton = $passwordView.find(".done-button");

        var $passwordListView = $modalElement.find(".password-list-view");
        var $passwordList = $passwordListView.find(".app-password-list-content");
        var $noPasswordsText = $passwordListView.find(".no-passwords-text");
        var $setupButton = $passwordListView.find(".setup-button");
        var $appPasswordTemplate = $passwordListView.find('.app-password-template');
        var $passwordCreateAlert = $passwordListView.find('.app-password-create-status');

        var $appPasswordCreateWrapper = $passwordListView.find(".app-password-create-block");
        var $appPasswordCreateForm = $passwordListView.find(".app-password-create-form");
        var $nameSelector = $appPasswordCreateForm.find("#app-name-selector");
        var $customNameInput = $appPasswordCreateForm.find(".custom-app-password-input");

        var $confirmDeleteView = $modalElement.find('.remove-password-view');
        var $deleteButton = $confirmDeleteView.find(".delete-password-button");
        var $cancelDeleteButton = $confirmDeleteView.find(".cancel-delete-button");
        var $passwordDeleteAlert = $confirmDeleteView.find('.app-password-delete-status');

        (0, _formValidator2.default)($appPasswordCreateForm, _forms.createAppPassword);

        var updateListUI = function updateListUI() {
            var formValues = _formTools2.default.getFormData($appPasswordCreateForm, _forms.createAppPassword);

            if ($passwordList.find(".app-password").length > 0) {
                $noPasswordsText.hide();
            } else {
                $noPasswordsText.show();
            }

            //Check if value is other
            if (formValues.appName == "Other") {
                //Show manual name entry
                $appPasswordCreateWrapper.addClass("app-password-show-other");
            } else {
                $appPasswordCreateWrapper.removeClass("app-password-show-other");
                $customNameInput.val();
            }

            if (!formValues.appName) {
                // Disable generate button
                $nameSelector.addClass("name-placeholder");
                $setupButton.attr("disabled", "disabled").addClass("disabled");
            } else {
                $setupButton.attr("disabled", null).removeClass("disabled");
                $nameSelector.removeClass("name-placeholder");
            }
        };
        updateListUI();

        $nameSelector.on("change", updateListUI);

        $doneButton.on("click", function () {
            $passwordCreateAlert.text("").hide();
            passwordModal.navigateToStart();
        });

        var createReq;
        $setupButton.on("click", function (e) {
            e.preventDefault();
            if (createReq) {
                return;
            }

            var formValues = _formTools2.default.getFormData($appPasswordCreateForm, _forms.createAppPassword);
            if (!formValues.appName) {
                return;
            }
            $setupButton.addClass('is-loading');
            $passwordCreateAlert.text("").hide();

            createReq = _CsrfRequest2.default.request({
                url: '/xhr/apppassword/create',
                method: "POST",
                data: formValues
            }).then(function (result) {
                createReq = null;
                $setupButton.removeClass('is-loading');

                var $instruction = $(instructionsMap[formValues.appName] || instructionsMap["Other"]);
                $instructions.not($instruction).hide();
                $instruction.show();

                //Update list
                var $appPassword = $appPasswordTemplate.clone();
                $appPassword.removeClass("app-password-template");

                $appPassword.find(".app-password-name").text(result.appPassword.name);
                $appPassword.find(".app-password-last-used").text(result.appPassword.lastUsedAt);
                $appPassword.find(".app-password-created-text").text(result.appPassword.createdAt);
                $appPassword.find("input[name=name]").val(result.appPassword.name);
                $appPassword.find("input[name=id]").val(result.appPassword.name);

                //Hide no password text
                $noPasswordsText.hide();

                //Append new element
                $passwordList.append($appPassword);

                //Navigate to next view
                $passwordDisplay.text(result.appPassword.password);
                passwordModal.navigateTo("generate-password-view");

                $nameSelector.get(0).selectedIndex = 0;
                updateListUI();
            }, function (error) {
                createReq = null;
                $passwordCreateAlert.text("There was an error while creating your app password. Please try again.").show();
                $setupButton.removeClass('is-loading');
            });
        });

        var $pendingDeletePassword;
        var deleteReq;

        $passwordList.on('click', '.app-password-remove', function (e) {
            $pendingDeletePassword = $(e.target).closest('.app-password');
            $confirmDeleteView.find('.app-password-name').text($pendingDeletePassword.find('.app-password-name').text());
            $confirmDeleteView.find('.app-password-last-used').text($pendingDeletePassword.find('.app-password-last-used').text());
            $confirmDeleteView.find('.app-password-created').text($pendingDeletePassword.find('.app-password-created').text());
            passwordModal.navigateTo("remove-password-view");
        });

        $cancelDeleteButton.on('click', function (e) {
            if (deleteReq) {
                return;
            }
            e.preventDefault();
            passwordModal.navigateBack();
            $pendingDeletePassword = null;

            $passwordCreateAlert.text("").hide();
            $passwordDeleteAlert.text("").hide();
        });

        $deleteButton.on('click', function (e) {
            e.preventDefault();
            if (deleteReq) {
                return;
            }
            var $removeForm = $pendingDeletePassword.find('.delete-app-password-form');
            var formValues = _formTools2.default.getFormData($removeForm, _forms.deleteAppPassword);

            $confirmDeleteView.addClass("is-loading");
            $passwordDeleteAlert.text("").hide();

            deleteReq = _CsrfRequest2.default.request({
                url: '/xhr/apppassword/delete',
                method: "POST",
                data: formValues
            }).then(function (result) {
                $confirmDeleteView.removeClass("is-loading");
                deleteReq = null;

                $pendingDeletePassword.remove();
                $pendingDeletePassword = null;
                passwordModal.navigateToStart();
                updateListUI();
            }, function () {
                $confirmDeleteView.removeClass("is-loading");
                deleteReq = null;

                $passwordDeleteAlert.text("There was an error while deleting your app password. Please try again.").show();
            });
        });

        if (_clipboardMin2.default.isSupported()) {
            $passwordContainer.addClass("clipboard-can-copy");
            var clipboardObj = new _clipboardMin2.default($passwordContainer.get(0), {
                text: function text(trigger) {
                    return $passwordDisplay.text();
                }
            });
            var copiedTimeout;
            clipboardObj.on('success', function (e) {
                e.clearSelection();
                $passwordContainer.addClass("clipboard-copied");

                clearTimeout(copiedTimeout);
                copiedTimeout = setTimeout(function () {
                    $passwordContainer.removeClass("clipboard-copied");
                }, 2000);
            });

            passwordModal.$el.addClass("clipboard-enabled");
        }

        resolve(passwordModal);
    });
});

var AppPasswordModal = {
    modal: null
};

AppPasswordModal.ready = function () {
    if (AppPasswordModal.modal) {
        return Promise.resolve(AppPasswordModal.modal);
    }
    return modalInitPromise;
};

exports.default = AppPasswordModal;
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(3)))

/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var require;var require;

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*!
 * clipboard.js v1.7.1
 * https://zenorocha.github.io/clipboard.js
 *
 * Licensed MIT © Zeno Rocha
 */
!function (t) {
  if ("object" == ( false ? "undefined" : _typeof(exports)) && "undefined" != typeof module) module.exports = t();else if (true) !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (t),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));else {
    var e;e = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : this, e.Clipboard = t();
  }
}(function () {
  var t, e, n;return function t(e, n, o) {
    function i(a, c) {
      if (!n[a]) {
        if (!e[a]) {
          var l = "function" == typeof require && require;if (!c && l) return require(a, !0);if (r) return r(a, !0);var s = new Error("Cannot find module '" + a + "'");throw s.code = "MODULE_NOT_FOUND", s;
        }var u = n[a] = { exports: {} };e[a][0].call(u.exports, function (t) {
          var n = e[a][1][t];return i(n || t);
        }, u, u.exports, t, e, n, o);
      }return n[a].exports;
    }for (var r = "function" == typeof require && require, a = 0; a < o.length; a++) {
      i(o[a]);
    }return i;
  }({ 1: [function (t, e, n) {
      function o(t, e) {
        for (; t && t.nodeType !== i;) {
          if ("function" == typeof t.matches && t.matches(e)) return t;t = t.parentNode;
        }
      }var i = 9;if ("undefined" != typeof Element && !Element.prototype.matches) {
        var r = Element.prototype;r.matches = r.matchesSelector || r.mozMatchesSelector || r.msMatchesSelector || r.oMatchesSelector || r.webkitMatchesSelector;
      }e.exports = o;
    }, {}], 2: [function (t, e, n) {
      function o(t, e, n, o, r) {
        var a = i.apply(this, arguments);return t.addEventListener(n, a, r), { destroy: function destroy() {
            t.removeEventListener(n, a, r);
          } };
      }function i(t, e, n, o) {
        return function (n) {
          n.delegateTarget = r(n.target, e), n.delegateTarget && o.call(t, n);
        };
      }var r = t("./closest");e.exports = o;
    }, { "./closest": 1 }], 3: [function (t, e, n) {
      n.node = function (t) {
        return void 0 !== t && t instanceof HTMLElement && 1 === t.nodeType;
      }, n.nodeList = function (t) {
        var e = Object.prototype.toString.call(t);return void 0 !== t && ("[object NodeList]" === e || "[object HTMLCollection]" === e) && "length" in t && (0 === t.length || n.node(t[0]));
      }, n.string = function (t) {
        return "string" == typeof t || t instanceof String;
      }, n.fn = function (t) {
        return "[object Function]" === Object.prototype.toString.call(t);
      };
    }, {}], 4: [function (t, e, n) {
      function o(t, e, n) {
        if (!t && !e && !n) throw new Error("Missing required arguments");if (!c.string(e)) throw new TypeError("Second argument must be a String");if (!c.fn(n)) throw new TypeError("Third argument must be a Function");if (c.node(t)) return i(t, e, n);if (c.nodeList(t)) return r(t, e, n);if (c.string(t)) return a(t, e, n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList");
      }function i(t, e, n) {
        return t.addEventListener(e, n), { destroy: function destroy() {
            t.removeEventListener(e, n);
          } };
      }function r(t, e, n) {
        return Array.prototype.forEach.call(t, function (t) {
          t.addEventListener(e, n);
        }), { destroy: function destroy() {
            Array.prototype.forEach.call(t, function (t) {
              t.removeEventListener(e, n);
            });
          } };
      }function a(t, e, n) {
        return l(document.body, t, e, n);
      }var c = t("./is"),
          l = t("delegate");e.exports = o;
    }, { "./is": 3, delegate: 2 }], 5: [function (t, e, n) {
      function o(t) {
        var e;if ("SELECT" === t.nodeName) t.focus(), e = t.value;else if ("INPUT" === t.nodeName || "TEXTAREA" === t.nodeName) {
          var n = t.hasAttribute("readonly");n || t.setAttribute("readonly", ""), t.select(), t.setSelectionRange(0, t.value.length), n || t.removeAttribute("readonly"), e = t.value;
        } else {
          t.hasAttribute("contenteditable") && t.focus();var o = window.getSelection(),
              i = document.createRange();i.selectNodeContents(t), o.removeAllRanges(), o.addRange(i), e = o.toString();
        }return e;
      }e.exports = o;
    }, {}], 6: [function (t, e, n) {
      function o() {}o.prototype = { on: function on(t, e, n) {
          var o = this.e || (this.e = {});return (o[t] || (o[t] = [])).push({ fn: e, ctx: n }), this;
        }, once: function once(t, e, n) {
          function o() {
            i.off(t, o), e.apply(n, arguments);
          }var i = this;return o._ = e, this.on(t, o, n);
        }, emit: function emit(t) {
          var e = [].slice.call(arguments, 1),
              n = ((this.e || (this.e = {}))[t] || []).slice(),
              o = 0,
              i = n.length;for (o; o < i; o++) {
            n[o].fn.apply(n[o].ctx, e);
          }return this;
        }, off: function off(t, e) {
          var n = this.e || (this.e = {}),
              o = n[t],
              i = [];if (o && e) for (var r = 0, a = o.length; r < a; r++) {
            o[r].fn !== e && o[r].fn._ !== e && i.push(o[r]);
          }return i.length ? n[t] = i : delete n[t], this;
        } }, e.exports = o;
    }, {}], 7: [function (e, n, o) {
      !function (i, r) {
        if ("function" == typeof t && t.amd) t(["module", "select"], r);else if (void 0 !== o) r(n, e("select"));else {
          var a = { exports: {} };r(a, i.select), i.clipboardAction = a.exports;
        }
      }(this, function (t, e) {
        "use strict";
        function n(t) {
          return t && t.__esModule ? t : { default: t };
        }function o(t, e) {
          if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
        }var i = n(e),
            r = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (t) {
          return typeof t === "undefined" ? "undefined" : _typeof(t);
        } : function (t) {
          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t === "undefined" ? "undefined" : _typeof(t);
        },
            a = function () {
          function t(t, e) {
            for (var n = 0; n < e.length; n++) {
              var o = e[n];o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o);
            }
          }return function (e, n, o) {
            return n && t(e.prototype, n), o && t(e, o), e;
          };
        }(),
            c = function () {
          function t(e) {
            o(this, t), this.resolveOptions(e), this.initSelection();
          }return a(t, [{ key: "resolveOptions", value: function t() {
              var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};this.action = e.action, this.container = e.container, this.emitter = e.emitter, this.target = e.target, this.text = e.text, this.trigger = e.trigger, this.selectedText = "";
            } }, { key: "initSelection", value: function t() {
              this.text ? this.selectFake() : this.target && this.selectTarget();
            } }, { key: "selectFake", value: function t() {
              var e = this,
                  n = "rtl" == document.documentElement.getAttribute("dir");this.removeFake(), this.fakeHandlerCallback = function () {
                return e.removeFake();
              }, this.fakeHandler = this.container.addEventListener("click", this.fakeHandlerCallback) || !0, this.fakeElem = document.createElement("textarea"), this.fakeElem.style.fontSize = "12pt", this.fakeElem.style.border = "0", this.fakeElem.style.padding = "0", this.fakeElem.style.margin = "0", this.fakeElem.style.position = "absolute", this.fakeElem.style[n ? "right" : "left"] = "-9999px";var o = window.pageYOffset || document.documentElement.scrollTop;this.fakeElem.style.top = o + "px", this.fakeElem.setAttribute("readonly", ""), this.fakeElem.value = this.text, this.container.appendChild(this.fakeElem), this.selectedText = (0, i.default)(this.fakeElem), this.copyText();
            } }, { key: "removeFake", value: function t() {
              this.fakeHandler && (this.container.removeEventListener("click", this.fakeHandlerCallback), this.fakeHandler = null, this.fakeHandlerCallback = null), this.fakeElem && (this.container.removeChild(this.fakeElem), this.fakeElem = null);
            } }, { key: "selectTarget", value: function t() {
              this.selectedText = (0, i.default)(this.target), this.copyText();
            } }, { key: "copyText", value: function t() {
              var e = void 0;try {
                e = document.execCommand(this.action);
              } catch (t) {
                e = !1;
              }this.handleResult(e);
            } }, { key: "handleResult", value: function t(e) {
              this.emitter.emit(e ? "success" : "error", { action: this.action, text: this.selectedText, trigger: this.trigger, clearSelection: this.clearSelection.bind(this) });
            } }, { key: "clearSelection", value: function t() {
              this.trigger && this.trigger.focus(), window.getSelection().removeAllRanges();
            } }, { key: "destroy", value: function t() {
              this.removeFake();
            } }, { key: "action", set: function t() {
              var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "copy";if (this._action = e, "copy" !== this._action && "cut" !== this._action) throw new Error('Invalid "action" value, use either "copy" or "cut"');
            }, get: function t() {
              return this._action;
            } }, { key: "target", set: function t(e) {
              if (void 0 !== e) {
                if (!e || "object" !== (void 0 === e ? "undefined" : r(e)) || 1 !== e.nodeType) throw new Error('Invalid "target" value, use a valid Element');if ("copy" === this.action && e.hasAttribute("disabled")) throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if ("cut" === this.action && (e.hasAttribute("readonly") || e.hasAttribute("disabled"))) throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target = e;
              }
            }, get: function t() {
              return this._target;
            } }]), t;
        }();t.exports = c;
      });
    }, { select: 5 }], 8: [function (e, n, o) {
      !function (i, r) {
        if ("function" == typeof t && t.amd) t(["module", "./clipboard-action", "tiny-emitter", "good-listener"], r);else if (void 0 !== o) r(n, e("./clipboard-action"), e("tiny-emitter"), e("good-listener"));else {
          var a = { exports: {} };r(a, i.clipboardAction, i.tinyEmitter, i.goodListener), i.clipboard = a.exports;
        }
      }(this, function (t, e, n, o) {
        "use strict";
        function i(t) {
          return t && t.__esModule ? t : { default: t };
        }function r(t, e) {
          if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
        }function a(t, e) {
          if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return !e || "object" != (typeof e === "undefined" ? "undefined" : _typeof(e)) && "function" != typeof e ? t : e;
        }function c(t, e) {
          if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + (typeof e === "undefined" ? "undefined" : _typeof(e)));t.prototype = Object.create(e && e.prototype, { constructor: { value: t, enumerable: !1, writable: !0, configurable: !0 } }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e);
        }function l(t, e) {
          var n = "data-clipboard-" + t;if (e.hasAttribute(n)) return e.getAttribute(n);
        }var s = i(e),
            u = i(n),
            f = i(o),
            d = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (t) {
          return typeof t === "undefined" ? "undefined" : _typeof(t);
        } : function (t) {
          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t === "undefined" ? "undefined" : _typeof(t);
        },
            h = function () {
          function t(t, e) {
            for (var n = 0; n < e.length; n++) {
              var o = e[n];o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o);
            }
          }return function (e, n, o) {
            return n && t(e.prototype, n), o && t(e, o), e;
          };
        }(),
            p = function (t) {
          function e(t, n) {
            r(this, e);var o = a(this, (e.__proto__ || Object.getPrototypeOf(e)).call(this));return o.resolveOptions(n), o.listenClick(t), o;
          }return c(e, t), h(e, [{ key: "resolveOptions", value: function t() {
              var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};this.action = "function" == typeof e.action ? e.action : this.defaultAction, this.target = "function" == typeof e.target ? e.target : this.defaultTarget, this.text = "function" == typeof e.text ? e.text : this.defaultText, this.container = "object" === d(e.container) ? e.container : document.body;
            } }, { key: "listenClick", value: function t(e) {
              var n = this;this.listener = (0, f.default)(e, "click", function (t) {
                return n.onClick(t);
              });
            } }, { key: "onClick", value: function t(e) {
              var n = e.delegateTarget || e.currentTarget;this.clipboardAction && (this.clipboardAction = null), this.clipboardAction = new s.default({ action: this.action(n), target: this.target(n), text: this.text(n), container: this.container, trigger: n, emitter: this });
            } }, { key: "defaultAction", value: function t(e) {
              return l("action", e);
            } }, { key: "defaultTarget", value: function t(e) {
              var n = l("target", e);if (n) return document.querySelector(n);
            } }, { key: "defaultText", value: function t(e) {
              return l("text", e);
            } }, { key: "destroy", value: function t() {
              this.listener.destroy(), this.clipboardAction && (this.clipboardAction.destroy(), this.clipboardAction = null);
            } }], [{ key: "isSupported", value: function t() {
              var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ["copy", "cut"],
                  n = "string" == typeof e ? [e] : e,
                  o = !!document.queryCommandSupported;return n.forEach(function (t) {
                o = o && !!document.queryCommandSupported(t);
              }), o;
            } }]), e;
        }(u.default);t.exports = p;
      });
    }, { "./clipboard-action": 7, "good-listener": 4, "tiny-emitter": 6 }] }, {}, [8])(8);
});

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(Promise) {

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _get = function get(object, property, receiver) { if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { return get(parent, property, receiver); } } else if ("value" in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } };

var _CsrfRequest = __webpack_require__(1);

var _CsrfRequest2 = _interopRequireDefault(_CsrfRequest);

var _formValidator = __webpack_require__(8);

var _formValidator2 = _interopRequireDefault(_formValidator);

var _formTools = __webpack_require__(2);

var _formTools2 = _interopRequireDefault(_formTools);

var _forms = __webpack_require__(10);

var _PasswordIndicator = __webpack_require__(12);

var _PasswordIndicator2 = _interopRequireDefault(_PasswordIndicator);

var _PasswordDisplayToggle = __webpack_require__(11);

var _PasswordDisplayToggle2 = _interopRequireDefault(_PasswordDisplayToggle);

var _Modal2 = __webpack_require__(14);

var _Modal3 = _interopRequireDefault(_Modal2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var ChangePasswordModal = function (_Modal) {
    _inherits(ChangePasswordModal, _Modal);

    function ChangePasswordModal(element) {
        _classCallCheck(this, ChangePasswordModal);

        // Init UI
        var _this = _possibleConstructorReturn(this, (ChangePasswordModal.__proto__ || Object.getPrototypeOf(ChangePasswordModal)).call(this, element));

        _this.$form = _this.$el.find("#idp-cp-form");
        _this.$formStatus = _this.$form.find("#psw-save-status");

        var $passwordInput = _this.$form.find("input[name=password]");

        _this.validator = (0, _formValidator2.default)(_this.$form, _forms.changePassword);
        _this.passwordChecker = new _PasswordIndicator2.default($passwordInput);

        _this.newPasswordToggle = new _PasswordDisplayToggle2.default(_this.$form.find("input[name=oldPassword]"));
        _this.passwordToggle = new _PasswordDisplayToggle2.default($passwordInput.add("input[name=confirmPassword]"));

        _this.$el.find("#btnCancelUPCL").on("click", function () {
            this.reset();
            this.close();
        }.bind(_this));

        _this.$form.on("submit", function (e) {
            e.preventDefault();
            e.stopPropagation();

            if (this.validator.validateForm(false)) {
                this.$form.addClass('saving');

                _CsrfRequest2.default.request({
                    type: "POST",
                    url: "/accountinfo/xhr/changePassword",
                    data: _formTools2.default.getFormData(this.$form, _forms.changePassword)
                }).then(function (result) {
                    this.$form.removeClass('saving').addClass('saved');
                    this.updateStatus("Password was successfully changed.", true);
                    setTimeout(this.close.bind(this), 3000);
                }.bind(this), function (error) {
                    this.$form.removeClass('saving');
                    this.updateStatus("Error while changing password. Please try again.", false);
                    setTimeout(this.hideStatus.bind(this), 3000);
                }.bind(this));
            }
        }.bind(_this));
        return _this;
    }

    _createClass(ChangePasswordModal, [{
        key: 'updateStatus',
        value: function updateStatus(text, success) {
            this.$formStatus.text(text);
            this.$formStatus.removeClass("alert-success").removeClass("alert-danger").removeClass("hide");

            if (success) {
                this.$formStatus.addClass("alert-success");
                this.$formStatus.focus();
            } else {
                this.$formStatus.addClass("alert-danger");
            }
        }
    }, {
        key: 'hideStatus',
        value: function hideStatus() {
            this.$formStatus.addClass("hide");
        }
    }, {
        key: 'reset',
        value: function reset() {
            this.$el.find("#idp-cp-form")[0].reset();
        }
    }, {
        key: 'show',
        value: function show() {
            this.reset();
            this.hideStatus();
            _get(ChangePasswordModal.prototype.__proto__ || Object.getPrototypeOf(ChangePasswordModal.prototype), 'show', this).call(this);
        }
    }, {
        key: 'close',
        value: function close() {
            _get(ChangePasswordModal.prototype.__proto__ || Object.getPrototypeOf(ChangePasswordModal.prototype), 'close', this).call(this);
            this.hideStatus();
            this.$form.removeClass('saving').removeClass('saved');
            this.reset();
            this.passwordChecker.hide();
            this.passwordToggle.hide();
        }
    }]);

    return ChangePasswordModal;
}(_Modal3.default);

var modalInitPromise = new Promise(function (resolve, reject) {

    $(document).ready(function () {

        var $modalElement = $("#change-password-modal");
        if ($modalElement.length <= 0) {
            reject();
            return;
        }

        var passwordModal = new ChangePasswordModal($modalElement);

        //Update object with modal
        ChangePasswordModalObject.modal = passwordModal;

        resolve(ChangePasswordModalObject.modal);
    });
});

var ChangePasswordModalObject = {
    modal: null
};

ChangePasswordModalObject.ready = function () {
    if (ChangePasswordModalObject.modal) {
        return Promise.resolve(ChangePasswordModalObject.modal);
    }
    return modalInitPromise;
};

exports.default = ChangePasswordModalObject;
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(3)))

/***/ })
/******/ ]);