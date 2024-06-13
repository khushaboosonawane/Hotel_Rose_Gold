<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
    /*!
 * Sticker v1.0.1
 * Copyright 2021-2021 Arthur Shlain
 * Copyright 2021-2021 Yep!
 * Licensed under MIT (https://github.com/yepteam/sticker-button/blob/main/LICENSE)
 */
.btn-sticker {
  vertical-align: middle;
  box-sizing: border-box;
  border-radius: 50rem;
  white-space: nowrap;
  position: relative;
  transition: clip-path 0.3s ease-out;
  box-shadow: none !important;
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker::after {
  content: "";
  position: absolute;
  display: block;
  border-radius: 50rem;
  background-color: rgba(255, 255, 255, 0.5);
  border: 1px solid #fff;
  transition: transform 0.3s ease-out;
}
.btn-sticker-shadow {
  filter: drop-shadow(0 1rem 0.5rem rgba(0, 0, 0, 0.25));
}
.btn-sticker.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-0 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(0deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-0:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(0deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-corner-hover::after {
  transform: rotate(0deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-corner-hover:hover::after {
  transform: rotate(0deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-0[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0[data-bs-toggle="button"]::after {
  transform: rotate(0deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-0[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.59375rem) 0,
    calc(100% - 0.59375rem) 0,
    calc(100% + -0.59375rem) 100%,
    calc(100% + -0.59375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0[data-bs-toggle="button"].active::after {
  transform: rotate(0deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(0deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(0deg) translateX(3rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(0deg) translateX(3rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(0deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(0deg) translateX(3rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.75rem) 0,
    calc(100% - 0.75rem) 0,
    calc(100% + -0.75rem) 100%,
    calc(100% + -0.75rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(0deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(0deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(0deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(0deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(0deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0rem) 0rem,
    calc(100% + 0rem) calc(100% - 0rem),
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(0deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-0.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.484375rem) 0,
    calc(100% - 0.484375rem) 0,
    calc(100% + -0.484375rem) 100%,
    calc(100% + -0.484375rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-0.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(0deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-15 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-15deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-15:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-15deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-corner-hover::after {
  transform: rotate(-15deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-corner-hover:hover::after {
  transform: rotate(-15deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-15[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.3174759745rem) -0.153673808rem,
    calc(100% + 0.3189033575rem) calc(100% - 0.153673808rem),
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15[data-bs-toggle="button"]::after {
  transform: rotate(-15deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-15[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% - 0.8909944339rem) 0,
    calc(100% + -0.2546151019rem) 100%,
    calc(100% + -0.2546151019rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15[data-bs-toggle="button"].active::after {
  transform: rotate(-15deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-15deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-15deg) translateX(3rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-15deg) translateX(3rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-15deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 0.4010222836rem) -0.1941142838rem,
    calc(100% + 0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-15deg) translateX(3rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% - 1.1254666533rem) 0,
    calc(100% + -0.321619076rem) 100%,
    calc(100% + -0.321619076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-15deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-15deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-15deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-15deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-15deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.2589935582rem) -0.125365475rem,
    calc(100% + 0.2601580022rem) calc(100% - 0.125365475rem),
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-15deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-15.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% - 0.7268638803rem) 0,
    calc(100% + -0.2077123199rem) 100%,
    calc(100% + -0.2077123199rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-15.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-15deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-30 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-30:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-30[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 0.6732974165rem) -0.296875rem,
    calc(100% + 0.6979094728rem) calc(100% - 0.296875rem),
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-30[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.1875rem) 0,
    calc(100% - 1.1875rem) 0,
    calc(100% + 0.1837068893rem) 100%,
    calc(100% + 0.1837068893rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 0.8504809472rem) -0.375rem,
    calc(100% + 0.8815698604rem) calc(100% - 0.375rem),
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(3rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5rem) 0,
    calc(100% - 1.5rem) 0,
    calc(100% + 0.2320508076rem) 100%,
    calc(100% + 0.2320508076rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.549268945rem) -0.2421875rem,
    calc(100% + 0.5693472015rem) calc(100% - 0.2421875rem),
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-30deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-30.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.96875rem) 0,
    calc(100% - 0.96875rem) 0,
    calc(100% + 0.1498661466rem) 100%,
    calc(100% + 0.1498661466rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-30.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-30deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-45 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-45deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-45:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-45deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-corner-hover::after {
  transform: rotate(-45deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-corner-hover:hover::after {
  transform: rotate(-45deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-45[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.115466046rem) -0.4198446513rem,
    calc(100% + 1.259533954rem) calc(100% - 0.4198446513rem),
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45[data-bs-toggle="button"]::after {
  transform: rotate(-45deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-45[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% - 1.5353106973rem) 0,
    calc(100% + 0.8396893027rem) 100%,
    calc(100% + 0.8396893027rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45[data-bs-toggle="button"].active::after {
  transform: rotate(-45deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-45deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-45deg) translateX(3rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-45deg) translateX(3rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-45deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.4090097423rem) -0.5303300859rem,
    calc(100% + 1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-45deg) translateX(3rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% - 1.9393398282rem) 0,
    calc(100% + 1.0606601718rem) 100%,
    calc(100% + 1.0606601718rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-45deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-45deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-45deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-45deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-45deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 0.9099854586rem) -0.3425048471rem,
    calc(100% + 1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-45deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-45.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% - 1.2524903057rem) 0,
    calc(100% + 0.6850096943rem) 100%,
    calc(100% + 0.6850096943rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-45.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-45deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-135 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(225deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-135:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(225deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-corner-hover::after {
  transform: rotate(225deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-corner-hover:hover::after {
  transform: rotate(225deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-135[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.115466046rem) -0.4198446513rem,
    calc(-1.259533954rem) calc(100% - 0.4198446513rem),
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135[data-bs-toggle="button"]::after {
  transform: rotate(225deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-135[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5353106973rem) 0,
    calc(1.5353106973rem) 0,
    calc(-0.8396893027rem) 100%,
    calc(-0.8396893027rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135[data-bs-toggle="button"].active::after {
  transform: rotate(225deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(225deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(225deg) translateX(3rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(225deg) translateX(3rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(225deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.4090097423rem) -0.5303300859rem,
    calc(-1.5909902577rem) calc(100% - 0.5303300859rem),
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(225deg) translateX(3rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.9393398282rem) 0,
    calc(1.9393398282rem) 0,
    calc(-1.0606601718rem) 100%,
    calc(-1.0606601718rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(225deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(225deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(225deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(225deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(225deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(0.9099854586rem) -0.3425048471rem,
    calc(-1.0275145414rem) calc(100% - 0.3425048471rem),
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(225deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-135.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.2524903057rem) 0,
    calc(1.2524903057rem) 0,
    calc(-0.6850096943rem) 100%,
    calc(-0.6850096943rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-135.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(225deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-150 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(210deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-150:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(210deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-corner-hover::after {
  transform: rotate(210deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-corner-hover:hover::after {
  transform: rotate(210deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-150[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(0.6732974165rem) -0.296875rem,
    calc(-0.6979094728rem) calc(100% - 0.296875rem),
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150[data-bs-toggle="button"]::after {
  transform: rotate(210deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-150[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1875rem) 0,
    calc(1.1875rem) 0,
    calc(-0.1837068893rem) 100%,
    calc(-0.1837068893rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150[data-bs-toggle="button"].active::after {
  transform: rotate(210deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(210deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(210deg) translateX(3rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(210deg) translateX(3rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(210deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(0.8504809472rem) -0.375rem,
    calc(-0.8815698604rem) calc(100% - 0.375rem),
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(210deg) translateX(3rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.5rem) 0,
    calc(1.5rem) 0,
    calc(-0.2320508076rem) 100%,
    calc(-0.2320508076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(210deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(210deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(210deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(210deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(210deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.549268945rem) -0.2421875rem,
    calc(-0.5693472015rem) calc(100% - 0.2421875rem),
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(210deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-150.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.96875rem) 0,
    calc(0.96875rem) 0,
    calc(-0.1498661466rem) 100%,
    calc(-0.1498661466rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-150.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(210deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-165 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(195deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-165:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(195deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-corner-hover::after {
  transform: rotate(195deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-corner-hover:hover::after {
  transform: rotate(195deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-165[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.3174759745rem) -0.153673808rem,
    calc(-0.3189033575rem) calc(100% - 0.153673808rem),
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165[data-bs-toggle="button"]::after {
  transform: rotate(195deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-165[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.8909944339rem) 0,
    calc(0.8909944339rem) 0,
    calc(0.2546151019rem) 100%,
    calc(0.2546151019rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165[data-bs-toggle="button"].active::after {
  transform: rotate(195deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(195deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(195deg) translateX(3rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(195deg) translateX(3rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(195deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(0.4010222836rem) -0.1941142838rem,
    calc(-0.4028252937rem) calc(100% - 0.1941142838rem),
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(195deg) translateX(3rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(1.1254666533rem) 0,
    calc(1.1254666533rem) 0,
    calc(0.321619076rem) 100%,
    calc(0.321619076rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(195deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(195deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(195deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(195deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(195deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.2589935582rem) -0.125365475rem,
    calc(-0.2601580022rem) calc(100% - 0.125365475rem),
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(195deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-165.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.7268638803rem) 0,
    calc(0.7268638803rem) 0,
    calc(0.2077123199rem) 100%,
    calc(0.2077123199rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-165.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(195deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-180 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(180deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-180:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(180deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-corner-hover::after {
  transform: rotate(180deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-corner-hover:hover::after {
  transform: rotate(180deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-180[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180[data-bs-toggle="button"]::after {
  transform: rotate(180deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-180[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 0,
    calc(0.59375rem) 100%,
    calc(0.59375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180[data-bs-toggle="button"].active::after {
  transform: rotate(180deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(180deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(180deg) translateX(3rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(180deg) translateX(3rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(180deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(180deg) translateX(3rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.75rem) 0,
    calc(0.75rem) 0,
    calc(0.75rem) 100%,
    calc(0.75rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(180deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(180deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(180deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(180deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(180deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0rem) 0rem,
    calc(0rem) calc(100% - 0rem),
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(180deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-180.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 0,
    calc(0.484375rem) 100%,
    calc(0.484375rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-180.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(180deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-195 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(165deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-195:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(165deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-corner-hover::after {
  transform: rotate(165deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-corner-hover:hover::after {
  transform: rotate(165deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-195[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(-0.3189033575rem) 0.153673808rem,
    calc(0.3174759745rem) calc(100% - -0.153673808rem),
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195[data-bs-toggle="button"]::after {
  transform: rotate(165deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-195[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2546151019rem) 0,
    calc(0.2546151019rem) 0,
    calc(0.8909944339rem) 100%,
    calc(0.8909944339rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195[data-bs-toggle="button"].active::after {
  transform: rotate(165deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(165deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(165deg) translateX(3rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(165deg) translateX(3rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(165deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(-0.4028252937rem) 0.1941142838rem,
    calc(0.4010222836rem) calc(100% - -0.1941142838rem),
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(165deg) translateX(3rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.321619076rem) 0,
    calc(0.321619076rem) 0,
    calc(1.1254666533rem) 100%,
    calc(1.1254666533rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(165deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(165deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(165deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(165deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(165deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(-0.2601580022rem) 0.125365475rem,
    calc(0.2589935582rem) calc(100% - -0.125365475rem),
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(165deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-195.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(0.2077123199rem) 0,
    calc(0.2077123199rem) 0,
    calc(0.7268638803rem) 100%,
    calc(0.7268638803rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-195.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(165deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-210 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(150deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-210:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(150deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-corner-hover::after {
  transform: rotate(150deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-corner-hover:hover::after {
  transform: rotate(150deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-210[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.6979094728rem) 0.296875rem,
    calc(0.6732974165rem) calc(100% - -0.296875rem),
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210[data-bs-toggle="button"]::after {
  transform: rotate(150deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-210[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1837068893rem) 0,
    calc(-0.1837068893rem) 0,
    calc(1.1875rem) 100%,
    calc(1.1875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210[data-bs-toggle="button"].active::after {
  transform: rotate(150deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(150deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(150deg) translateX(3rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(150deg) translateX(3rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(150deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.8815698604rem) 0.375rem,
    calc(0.8504809472rem) calc(100% - -0.375rem),
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(150deg) translateX(3rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.2320508076rem) 0,
    calc(-0.2320508076rem) 0,
    calc(1.5rem) 100%,
    calc(1.5rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(150deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(150deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(150deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(150deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(150deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.5693472015rem) 0.2421875rem,
    calc(0.549268945rem) calc(100% - -0.2421875rem),
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(150deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-210.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.1498661466rem) 0,
    calc(-0.1498661466rem) 0,
    calc(0.96875rem) 100%,
    calc(0.96875rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-210.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(150deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-225 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  left: -1px;
  transform: rotate(135deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-225:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(135deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-corner-hover::after {
  transform: rotate(135deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-corner-hover:hover::after {
  transform: rotate(135deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-225[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-1.259533954rem) 0.4198446513rem,
    calc(1.115466046rem) calc(100% - -0.4198446513rem),
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225[data-bs-toggle="button"]::after {
  transform: rotate(135deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-225[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.8396893027rem) 0,
    calc(-0.8396893027rem) 0,
    calc(1.5353106973rem) 100%,
    calc(1.5353106973rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225[data-bs-toggle="button"].active::after {
  transform: rotate(135deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  left: -1px;
  transform: rotate(135deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(135deg) translateX(3rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(135deg) translateX(3rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(135deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.5909902577rem) 0.5303300859rem,
    calc(1.4090097423rem) calc(100% - -0.5303300859rem),
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(135deg) translateX(3rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-1.0606601718rem) 0,
    calc(-1.0606601718rem) 0,
    calc(1.9393398282rem) 100%,
    calc(1.9393398282rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(135deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  left: -1px;
  transform: rotate(135deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(135deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(135deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(135deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-1.0275145414rem) 0.3425048471rem,
    calc(0.9099854586rem) calc(100% - -0.3425048471rem),
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(135deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-225.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
  clip-path: polygon(
    100% 0,
    calc(-0.6850096943rem) 0,
    calc(-0.6850096943rem) 0,
    calc(1.2524903057rem) 100%,
    calc(1.2524903057rem) 100%,
    100% 100%
  );
}
.btn-sticker.btn-sticker-225.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(135deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-315 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-315deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-315:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-315deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-corner-hover::after {
  transform: rotate(-315deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-corner-hover:hover::after {
  transform: rotate(-315deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-315[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -1.2594970692rem) 0.4198423396rem,
    calc(100% + -1.1154484209rem) calc(100% - -0.4198423396rem),
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315[data-bs-toggle="button"]::after {
  transform: rotate(-315deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-315[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% - -0.8396427877rem) 0,
    calc(100% + -1.5353027025rem) 100%,
    calc(100% + -1.5353027025rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315[data-bs-toggle="button"].active::after {
  transform: rotate(-315deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-315deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-315deg) translateX(3rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-315deg) translateX(3rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-315deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.5909436664rem) 0.5303271658rem,
    calc(100% + -1.408987479rem) calc(100% - -0.5303271658rem),
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-315deg) translateX(3rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% - -1.060601416rem) 0,
    calc(100% + -1.9393297295rem) 100%,
    calc(100% + -1.9393297295rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-315deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-315deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-315deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-315deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-315deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -1.0274844512rem) 0.3425029612rem,
    calc(100% + -0.9099710802rem) calc(100% - -0.3425029612rem),
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-315deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-315.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% - -0.6849717478rem) 0,
    calc(100% + -1.2524837836rem) 100%,
    calc(100% + -1.2524837836rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-315.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-315deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-330 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-330deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-330:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-330deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-corner-hover::after {
  transform: rotate(-330deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-corner-hover:hover::after {
  transform: rotate(-330deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-330[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.6978649833rem) 0.2968682925rem,
    calc(100% + -0.6732706976rem) calc(100% - -0.2968682925rem),
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330[data-bs-toggle="button"]::after {
  transform: rotate(-330deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-330[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% - -0.1836357383rem) 0,
    calc(100% + -1.1874999426rem) 100%,
    calc(100% + -1.1874999426rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330[data-bs-toggle="button"].active::after {
  transform: rotate(-330deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-330deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-330deg) translateX(3rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-330deg) translateX(3rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-330deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.8815136631rem) 0.3749915274rem,
    calc(100% + -0.850447197rem) calc(100% - -0.3749915274rem),
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-330deg) translateX(3rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% - -0.2319609326rem) 0,
    calc(100% + -1.4999999275rem) 100%,
    calc(100% + -1.4999999275rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-330deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-330deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-330deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-330deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-330deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.5693109074rem) 0.2421820281rem,
    calc(100% + -0.5492471481rem) calc(100% - -0.2421820281rem),
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-330deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-330.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% - -0.1498081023rem) 0,
    calc(100% + -0.9687499532rem) 100%,
    calc(100% + -0.9687499532rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-330.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-330deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-345 {
  border-width: 1px;
  font-size: 1rem;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345::after {
  height: 2.375rem;
  width: 2.375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-345deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-345:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-345deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-corner-hover::after {
  transform: rotate(-345deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-corner-hover:hover::after {
  transform: rotate(-345deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-345[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - -0.3188589932rem) 0.1536552541rem,
    calc(100% + -0.317441717rem) calc(100% - -0.1536552541rem),
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345[data-bs-toggle="button"]::after {
  transform: rotate(-345deg) translateX(2.375rem);
}
.btn-sticker.btn-sticker-345[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% - 0.2547299801rem) 0,
    calc(100% + -0.8910306903rem) 100%,
    calc(100% + -0.8910306903rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345[data-bs-toggle="button"].active::after {
  transform: rotate(-345deg) translateX(1.1875rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg {
  border-width: 1px;
  font-size: 1.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg::after {
  height: 3rem;
  width: 3rem;
  top: -1px;
  right: -1px;
  transform: rotate(-345deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-345deg) translateX(3rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg.btn-sticker-corner-hover::after {
  transform: rotate(-345deg) translateX(3rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg.btn-sticker-corner-hover:hover::after {
  transform: rotate(-345deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - -0.4027692546rem) 0.1940908473rem,
    calc(100% + -0.400979011rem) calc(100% - -0.1940908473rem),
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg[data-bs-toggle="button"]::after {
  transform: rotate(-345deg) translateX(3rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-lg[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% - 0.3217641854rem) 0,
    calc(100% + -1.1255124509rem) 100%,
    calc(100% + -1.1255124509rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-lg[data-bs-toggle="button"].active::after {
  transform: rotate(-345deg) translateX(1.5rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm {
  border-width: 1px;
  font-size: 0.875rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  line-height: 1.5;
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm::after {
  height: 1.9375rem;
  width: 1.9375rem;
  top: -1px;
  right: -1px;
  transform: rotate(-345deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm:not(.btn-sticker-corner-static):hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm:not(.btn-sticker-corner-static):hover::after {
  transform: rotate(-345deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm.btn-sticker-corner-hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm.btn-sticker-corner-hover::after {
  transform: rotate(-345deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm.btn-sticker-corner-hover:hover {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm.btn-sticker-corner-hover:hover::after {
  transform: rotate(-345deg) translateX(0.96875rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm[data-bs-toggle="button"] {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - -0.2601218102rem) 0.1253503389rem,
    calc(100% + -0.2589656112rem) calc(100% - -0.1253503389rem),
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm[data-bs-toggle="button"]::after {
  transform: rotate(-345deg) translateX(1.9375rem);
}
.btn-sticker.btn-sticker-345.btn-sticker-sm[data-bs-toggle="button"].active {
  -webkit-clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
  clip-path: polygon(
    0 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% - 0.2078060364rem) 0,
    calc(100% + -0.7268934579rem) 100%,
    calc(100% + -0.7268934579rem) 100%,
    0 100%
  );
}
.btn-sticker.btn-sticker-345.btn-sticker-sm[data-bs-toggle="button"].active::after {
  transform: rotate(-345deg) translateX(0.96875rem);
}

.btn-sticker-corner-dark::after {
  background-color: rgba(0, 0, 0, 0.5);
  border: 1px solid #000;
}

.btn-sticker-corner-border-inherit::after {
  border-color: inherit;
  border-width: inherit;
}

.btn-sticker-corner-border-inherit-fill::after {
  border-color: inherit;
  border-width: calc(0.59375rem + 1px);
}

.example--w-125px {
  width: 125px;
}

.highlight {
  padding: 1rem 1.5rem;
  margin-bottom: 1rem;
  background-color: #f8f9fa;
}

</style>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/metting_events.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90">
					<h5><?= $basic_info[0]['hotel_name'] ?></h5>
					<h1>Metting & Events Hall</h1>
				</div>
			</div>
        </div>
    </div>

    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if(count($metting_hall)>0){
                        foreach($metting_hall as $key=>$row){
                            if($key%2==0){
                                ?>
                                <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                                    <figure>
                                        <img src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>" alt="" class="img-fluid" style="height:400px;width:100%;object-fit:cover">
                                    </figure>
                                    <div class="caption">
                                        <?php
                                        if(count($hall_book_status)>0){
                                            foreach($hall_book_status as $key=>$row1){
                                                if($row1['mt_id']==$row['mt_id']){
                                                    ?>
                                                    <button type="button" class="btn btn-sticker btn-primary">Booked</button>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                    
                                        <h3 style="color:#ff512f"><?= number_format($row['hall_price']) ?> &#8377;<span>/ <?= $row['hall_subtitle'] ?></span></h3>
                                        <h4><a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>"><?= $row['hall_title'] ?></a></h4>
                                        <p><?= $row['hall_info'] ?></p>
                                        <div class="row room-facilities">
                                            <div class="col-md-4">
                                                <ul>
                                                    <li><i class="flaticon-group"></i> <?= $row['number_person'] ?>Persons</li>
                                                    <?php
                                                    if($row['wifi']=="Avilable"){
                                                        ?>
                                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <?php
                                                    if($row['breakfast']=="Avilable"){
                                                        ?>
                                                    <li><i class="flaticon-breakfast"></i> Breakfast</li>

                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li><i class="flaticon-clock-1"></i> <?= $row['hall_size'] ?>sqft</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <hr class="border-2">
                                        <div class="info-wrapper">
                                            <div class="butn-dark"> <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>" ><span>Book Now</span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }else{
                                ?>
                                 <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                                    <figure><img src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>" alt="" class="img-fluid" style="height:400px;width:100%;object-fit:cover"></figure>
                                    <div class="caption">
                                    <?php
                                        if(count($hall_book_status)>0){

                                            foreach($hall_book_status as $key=>$row1){
                                                if($row1['mt_id']==$row['mt_id']){
                                                    ?>
                                                    <button type="button" class="btn btn-sticker btn-primary">Booked</button>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                        <h3 style="color:#ff512f"><?= number_format($row['hall_price']) ?> &#8377;<span>/ <?= $row['hall_subtitle'] ?></span></h3>
                                        <h4><a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>"><?= $row['hall_title'] ?></a></h4>
                                        <p><?= $row['hall_info'] ?></p>
                                        <div class="row room-facilities">
                                            <div class="col-md-4">
                                                <ul>
                                                    <li><i class="flaticon-group"></i><?= $row['number_person'] ?> Persons</li>
                                                    <?php
                                                    if($row['wifi']=="Avilable"){
                                                        ?>
                                                         <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                                        <?php
                                                    }
                                                    ?>
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <?php
                                                    if($row['breakfast']=="Avilable"){
                                                        ?>
                                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li><i class="flaticon-clock-1"></i> <?= $row['hall_size'] ?> sqft </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <hr class="border-2">
                                        <div class="info-wrapper">
                                           
                                            <div class="butn-dark"> <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>" ><span>Book Now</span></a> </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }

                    }else{
                        ?>
                        <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/4.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>150$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Junior Suite</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/3.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>200$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Family Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/3.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>250$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Double Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/2.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>300$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Deluxe Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>