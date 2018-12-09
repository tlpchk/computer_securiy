var mime_samples = [
  { 'mime': 'application/xhtml+xml', 'samples': [
    { 'url': 'http://127.0.0.1:8000/', 'dir': '_m0/0', 'linked': 2, 'len': 335 },
    { 'url': 'http://127.0.0.1:8000/history.php', 'dir': '_m0/1', 'linked': 0, 'len': 233 },
    { 'url': 'http://127.0.0.1:8000/index.php', 'dir': '_m0/2', 'linked': 2, 'len': 453 },
    { 'url': 'http://127.0.0.1:8000/login.php', 'dir': '_m0/3', 'linked': 5, 'len': 750 },
    { 'url': 'http://127.0.0.1:8000/login.php', 'dir': '_m0/4', 'linked': 5, 'len': 751 },
    { 'url': 'http://127.0.0.1:8000/register.php', 'dir': '_m0/5', 'linked': 5, 'len': 1009 },
    { 'url': 'http://127.0.0.1:8000/register.php', 'dir': '_m0/6', 'linked': 5, 'len': 1080 },
    { 'url': 'http://127.0.0.1:8000/register.php', 'dir': '_m0/7', 'linked': 5, 'len': 1034 },
    { 'url': 'http://127.0.0.1:8000/transfer.php', 'dir': '_m0/8', 'linked': 0, 'len': 161 } ]
  },
  { 'mime': 'text/css', 'samples': [
    { 'url': 'http://127.0.0.1:8000/style.css', 'dir': '_m1/0', 'linked': 2, 'len': 1611 } ]
  }
];

var issue_samples = [
  { 'severity': 3, 'type': 40101, 'samples': [
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': 'injected \x27\x3csfi...\x3e\x27 tag seen in HTML', 'sid': '0', 'dir': '_i0/0' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': 'injected \x27\x3csfi...\x3e\x27 tag seen in HTML', 'sid': '0', 'dir': '_i0/1' } ]
  },
  { 'severity': 0, 'type': 10602, 'samples': [
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i1/0' },
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i1/1' },
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i1/2' },
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i1/3' },
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i1/4' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/5' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/6' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/7' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/8' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/9' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/10' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i1/11' } ]
  },
  { 'severity': 0, 'type': 10405, 'samples': [
    { 'url': 'http://127.0.0.1:8000/errors.php', 'extra': '', 'sid': '0', 'dir': '_i2/0' },
    { 'url': 'http://127.0.0.1:8000/history.php', 'extra': '', 'sid': '0', 'dir': '_i2/1' },
    { 'url': 'http://127.0.0.1:8000/login.php', 'extra': '', 'sid': '0', 'dir': '_i2/2' },
    { 'url': 'http://127.0.0.1:8000/register.php', 'extra': '', 'sid': '0', 'dir': '_i2/3' },
    { 'url': 'http://127.0.0.1:8000/transfer.php', 'extra': '', 'sid': '0', 'dir': '_i2/4' } ]
  },
  { 'severity': 0, 'type': 10205, 'samples': [
    { 'url': 'http://127.0.0.1:8000/sfi9876', 'extra': '', 'sid': '0', 'dir': '_i3/0' },
    { 'url': 'http://127.0.0.1:8000/sfi9876.css', 'extra': '', 'sid': '0', 'dir': '_i3/1' } ]
  },
  { 'severity': 0, 'type': 10204, 'samples': [
    { 'url': 'http://127.0.0.1:8000/', 'extra': 'X-Powered-By', 'sid': '0', 'dir': '_i4/0' },
    { 'url': 'http://127.0.0.1:8000/style.css', 'extra': 'X-Powered-By', 'sid': '0', 'dir': '_i4/1' } ]
  },
  { 'severity': 0, 'type': 10201, 'samples': [
    { 'url': 'http://127.0.0.1:8000/', 'extra': 'PHPSESSID', 'sid': '0', 'dir': '_i5/0' } ]
  }
];

