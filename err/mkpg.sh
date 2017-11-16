#!/bin/bash
# set -x

err_n="ERROR_N=$1"
err_name="ERROR_NAME=$2"
err_message="ERROR_MESSAGE=$3"
cppflags="-undef"


cpp $cppflags "-D$err_n" "-D$err_name" "-D$err_message" 4xx.html | sed -e '{/^#/d}' > $1.html
