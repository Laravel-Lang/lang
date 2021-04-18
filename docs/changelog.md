[Laravel Lang](https://github.com/Laravel-Lang/lang) / [Main Page](index.md) / Changelog

# Changelog

All notable changes to this project will be documented in this file, since v7.0.0.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres
to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

 * feature: [az] #1694 validation.php
 * feature: [de] #1622 #1623 validation.php validation-inline.php json file
 * feature: [de] #1696 validation.php validation-inline.php json file
 * feature: [de_CH] #1695 validation.php validation-inline.php json file
 * feature: [fa] #1693 json file
 * feature: [id] #1616 #1621 validation.php validation-inline.php json file
 * feature: [ko] #1608 validation.php validation-inline.php json file
 * feature: [ko] #1636 json file
 * feature: [pt] #1646 validation.php validation-inline.php json file
 * feature: [vi] #1617 #1624 validation.php validation-inline.php json file
 * feature: [zh_CN] #1666 validation.php validation-inline.php json file
 * feature: [zh_HK] #1667 validation.php validation-inline.php json file
 * feature: [zh_TW] #1668 validation.php validation-inline.php json file

### Documentation

 * feature: #1618 readme

### Todo script

 * feature: #1619 Added check for ":Attribute" when running tests
 * feature: #1620 Adding a percentage of translations
 * feature: #1625 Added processors for translating localizations
 * feature: #1629 Removed duplicate call line
 * feature: #1691 Added a script for creating commits separated by localizations

## [9.0.0] - 2021-04-14

New structure of files:

 * `source/` - stores php and json source files
 * `locales/{locale}` - stores php and json files with translations.

For more information, see #1606 and #1607.

## [8.1.3] - 2021-04-14

### Changed

 * feature: [hu] #1609 auth.php
 * feature: [nl] #1603 #1610 validation.php validation-inline.php json file

### Documentation

 * feature: #1599 contributing to dev
 * feature: #1601 referents
 * feature: #1614 readme

### Todo script

 * feature: #1600 Added validation for the `:attribute` string in the `validation-inline.php` files
 * feature: #1602 Added auto-update `docs/referents.md` file
 * feature: #1604 Added check of exclusion files for keys relevance

## [8.1.2] - 2021-04-07

### Changed

 * feature: [it] #1596 #1597 validation.php validation-inline.php json file
 * feature: [fr]

## [8.1.1] - 2021-04-02

## Added

* #1565 Add prohibited validation rule
* #1510 [af] Added Afrikaans language support

### Changed

* feature: [ar] #1584 validation.php validation-inline.php json file
* feature: [es] #1566 #1579 #1585 validation.php validation-inline.php json file
* feature: [fr] #1580 json file
* feature: [hy] #1572 #1573 #1574 auth.php validation.php
* feature: [it] #1568 json file
* feature: [nl] #1587 json file
* feature: [pt] #1575 auth.php
* feature: [pt_BR] #1564 #1575 auth.php json file
* feature: [ru] #1576 #1582 validation.php validation-inline.php json file
* feature: [tr] #1565 validation.php validation-inline.php

### Todo script

* New version with automatic add needed tags
* One page by language

## [8.1.0] - 2021-01-23

### Added

* Laravel Cashier
* Laravel Nova
* Script to update translation files

### Changed

* feature: [ar] #1538 #1553 json file
* feature: [de] #1532 json file
* feature: [es] #1534 #1545 #1550 #1556 json file
* feature: [fa] #1527 #1531 validation.php json file
* feature: [fr] #1528 #1539 json file
* feature: [it] #1535 #1548 #1552 json file
* feature: [ja] #1558 json file
* feature: [ko] #1524 json file
* feature: [mk] #1536 #1549 json file
* feature: [nl] #1529 json file
* feature: [pl] #1530 auth, json file
* feature: [ru] #1537 #1546 #1551 #1554 json file
* feature: [sk] json file
* feature: [vi] #1530 #1543 #1557 validation.php validation-inline.php json file
* feature: [zh_*] #1544 #1559 json file

## [8.0.3] - 2021-01-29

### Changed

* feature: [fr] json file
* feature: [zh_CN] #1523 auth.php validation.php validation-inline.php exclude.php json file
* feature: [zh_HK] #1523 auth.php validation.php validation-inline.php exclude.php json file
* feature: [zh_TW] #1523 auth.php validation.php validation-inline.php exclude.php json file

## [8.0.2] - 2021-01-25

### Added

* feature: #1481 Added new Jetstream 2.0 translation keys
* feature: #1485 Add missing tags and translate new tags for Jetstream 2.0
* feature: #1488 Add missing tags related to button's labels for mail - team
* feature: #1494 Translate subject of Team Invitation email
* feature: #1506 Translate cancel button of team invitation

### Changed

* feature: [ar] #1483 #1486 #1489 #1504 #1508 json file
* feature: [bs] #1500 #1505 auth.php passwords.php validation.php
* feature: [de] #1493 #1507 auth.php validation.php json file
* feature: [el] #1509 json file
* feature: [es] #1485 #1487 #1488 #1494 #1506 #1518 validation.php json file
* feature: [fr] #1501 json file
* feature: [it] #1491 #1502 #1511 json file
* feature: [ka] #1497 #1498 #1499 #1503 auth.php passwords.php validation.php
* feature: [lt] #1521 json file
* feature: [mk] #1521 #1522 auth.php passwords.php validation.php validation-inline.php json file
* feature: [nl] #1482 auth.php
* feature: [ro] #1517 auth.php
* feature: [ru] #1481 #1490 #1515 #1516 validation.php json file
* feature: [sl] #1480 excluse file and json file
* feature: [sr_Cyrl] #1521 validation-inline.php
* feature: [sr_Latn] #1521 validation-inline.php
* feature: [sv] #1492 json file
* feature: [uk] #1484 auth.php validation.php validation-inline.php json file

## [8.0.1] - 2021-01-03

### Added

* new: [oc] #1466

### Changed

* feature: [ar] #1476 json file
* feature: [de] #1471 #1472 json file
* feature: [fa] #1467 #1468 #1470 #1477 auth.php validation.php validation-inline.php json file
* feature: [fr] #1469 auth.php
* feature: [ja] #1461 exclude file and json file
* feature: [ru] #1465 #1475 json file
* feature: [sl] #1479 auth.php passwords.php validation.php validation-inline.php
* feature: [sr_Latn_ME] #1463 auth.php pagination.php passwords.php validation.php

## [8.0.0] - 2020-11-30

### Changed

* feature: [sr, uz, me] #1453 Rename \*\_Cyrillic to \*\_Cyrl and \*\_Latin to \*\_Latn (php Intl)]

## [7.0.9] - 2020-11-30

### Changed

* feature: [ar] #1419 #1431 #1447 #1462 validation-inline.php validation.php auth.php json file
* feature: [es] #1414 #1416 #1417 #1422 #1442 #1450 #1452 validation.php validation-inline.php passwords.php json file
* feature: [fr] #1441 json file
* feature: [id] #1439 auth.php
* feature: [it] #1435 #1459 validation-inline.php validation.php auth.php json file
* feature: [km] #1418 auth.php validation.php passwords.php
* feature: [ko] #1444 validation-inline.php validation.php auth.php json file
* feature: [lt] #1434 #1436 #1449 validation-inline.php validation.php auth.php json file
* feature: [nl] #1424 #1425 #1428 #1457 auth.php validation.php validation-inline.php json file
* feature: [pl] #1420 validation-inline.php validation.php
* feature: [de_CH] #1458 validation-inline.php validation.php
* feature: [pt_Br] #1415 json file
* feature: [ru] #1426 #1427 #1445 #1454 validation-inline.php validation.php auth.php json file
* feature: [sv] #1430 json file
* feature: [tr] #1448 #1456 json file
* feature: [uk] #1446 json file
* feature: [fa] #1451 json file
* feature: [vi] #1433 #1443 validation-inline.php validation.php passwords.php auth.php json file

## [7.0.8] - 2020-10-11

### Changed

* feature: [ar] #1390 #1398 json file
* feature: [de] #1412 json file
* feature: [el] #1385 json file
* feature: [en] #1393 #1394 add tags
* feature: [es] #1394 json file
* feature: [fr] #1383 #1411 json file
* feature: [it] #1402 #1413 validation-inline.php auth.php passwords.php json file
* feature: [lt] #1400 json file
* feature: [ms] #1387 #1388 #1392 validation.php validation-inline.php passwords.php
* feature: [pl] #1395 json file
* feature: [pt] #1404 json file
* feature: [ru] #1393 #1397 json file

### Documentation

* feature: #1386 Contributing

### Status script

* fix: #1406 ignores the additional informations

### Workflow

* feature: #1401 #1403 Make todo
* feature: #1405 template bug report

## [7.0.7] - 2020-10-02

### Changed

* feature: [hr] #1379 passwords.php
* feature: [id] #1381 json file
* feature: [ms] #1380 validation.php
* feature: [pt_BR] #1375 json file
* feature: [tr] #1382 json file

### Todo script

* feature: #1378 exclude translation

## [7.0.6] - 2020-09-30

### Changed

* feature: [ar] #1339 #1369 json file
* feature: [de] #1370 json file
* feature: [en] #1361 #1368 json file
* feature: [es] #1361 #1371 json file
* feature: [fr] json file
* feature: [pl] #1360 #1367 #1373 json file
* feature: [pt] #1358 #1374 json file
* feature: [ru] #1356 #1362 #1368 json file
* feature: [sr_*] #1363 json file
* feature: [uz_*] #1352 validation auth password

## [7.0.5] - 2020-09-23

### Changed

* feature: #1333 Laravel 8 support
* feature: #1335 #1354 Add support for Laravel JetStream
* feature: [en] #1341 #1346 json files
* feature: [es] #1341 json files
* feature: [hu] #1332 validation.php
* feature: [it] #1345 json files
* feature: [nl] #1330 #1331 json file validation-inline.php
* feature: [pl] #1351 json files
* feature: [pt] #1342 json files
* feature: [ru] #1346 json files
* feature: [tr] #1327 #1328 validation.php

## [7.0.4] - 2020-09-11

### Changed

* feature: [es] #1317 json file
* feature: [fa] #1318 validation.password
* feature: [id] #1323 #1324 json and validation-inline
* feature: [ko] #1326 validation-inline
* feature: [lt] #1320 validation-inline and validation
* feature: [sr_*] #1316 validation-inline file
* feature: new organization

## [7.0.3] - 2020-08-23

### Changed

* feature: [da] #1310 passwords.throttlled
* feature: [es] #1312 validation and validation-inline
* feature: [ne] #1302 #1306 #1307 Translated to Nepali Language (Validation-inline and json)
* feature: [sq] #1313 validation-inline and validation translations

## [7.0.2] - 2020-08-05

### Added

* Changelog file

### Changed

* feature: #1294 Update readme
* feature: [da] #1293 Add json
* feature: [es] #1292 Update json
* feature: [pl] #1290 Translate validation-inline; tweak some validation translations
* feature: [pt] #1295 Update json, validation-inline, validation and passwords
* feature: [pt_BR] #1291 Update validation-inline
* feature: [si] #1298 Update passwords
* feature: [sq] #1297 Update auth, passwords and validation
* feature: [uk] #1300 #1301 validation-inline json file
* feature: [zh_*] #1299 Update json and validation-inline

## [7.0.1] - 2020-07-14

### Added

* json files for uz_Cyrillic and uz_Latin

### Changed

* fix: #1269 json file names to follow ISO-15897

## [7.0.0] - 2020-07-13

### Changed

* feature: #1269 Rename locale folders following ISO 15897 format

[Unreleased]: https://github.com/caouecs/Laravel-lang/compare/9.0.0...master
[9.0.0]: https://github.com/caouecs/Laravel-lang/compare/8.1.3...9.0.0
[8.1.3]: https://github.com/caouecs/Laravel-lang/compare/8.1.2...8.1.3
[8.1.2]: https://github.com/caouecs/Laravel-lang/compare/8.1.1...8.1.2
[8.1.1]: https://github.com/caouecs/Laravel-lang/compare/8.1.0...8.1.1
[8.1.0]: https://github.com/caouecs/Laravel-lang/compare/8.0.3...8.1.0
[8.0.3]: https://github.com/caouecs/Laravel-lang/compare/8.0.2...8.0.3
[8.0.2]: https://github.com/caouecs/Laravel-lang/compare/8.0.1...8.0.2
[8.0.1]: https://github.com/caouecs/Laravel-lang/compare/8.0.0...8.0.1
[8.0.0]: https://github.com/caouecs/Laravel-lang/compare/7.0.9...8.0.0
[7.0.9]: https://github.com/caouecs/Laravel-lang/compare/7.0.8...7.0.9
[7.0.8]: https://github.com/caouecs/Laravel-lang/compare/7.0.7...7.0.8
[7.0.7]: https://github.com/caouecs/Laravel-lang/compare/7.0.6...7.0.7
[7.0.6]: https://github.com/caouecs/Laravel-lang/compare/7.0.5...7.0.6
[7.0.5]: https://github.com/caouecs/Laravel-lang/compare/7.0.4...7.0.5
[7.0.4]: https://github.com/caouecs/Laravel-lang/compare/7.0.3...7.0.4
[7.0.3]: https://github.com/caouecs/Laravel-lang/compare/7.0.2...7.0.3
[7.0.2]: https://github.com/caouecs/Laravel-lang/compare/7.0.1...7.0.2
[7.0.1]: https://github.com/caouecs/Laravel-lang/compare/7.0.0...7.0.1
[7.0.0]: https://github.com/caouecs/Laravel-lang/compare/6.1.4...7.0.0
