[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Modul%20Version-0.01-blue.svg)]() 
[![Version](https://img.shields.io/badge/Symcon%20Version-4.3%20%3E-green.svg)](https://www.symcon.de/forum/threads/30857-IP-Symcon-4-3-%28Stable%29-Changelog)

# Growatt Inverters

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Software-Installation](#3-software-installation) 
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Anhang](#5-anhang)  
    1. [GUID der Module](#1-guid-der-module)
    2. [Changlog](#2-changlog)

## 1. Funktionsumfang

Ermöglich die Einbindung von PV anlagen von der Growatt ohne mehrere ModBus-Instanzen in IPS.
Zusätzlich können mehrere Growatt anlagen auf einem physikalischen RS485-Bus
betrieben werden.  

Folgende Module beinhaltet das Growatt Inverter Repository:

- __f3__  
	Ist für 3 fasen PV anlagen

- __f1__  
	Ist für 1 fasen PV anlagen (work in progress)

## 2. Voraussetzungen

 - IPS 4.3 oder höher  
 - Growatt Umrichter 
 - physikalisches RS485 Interface für die Growatt Umrichter 

## 3. Software-Installation

**IPS 4.3:**  
   Bei privater Nutzung: Über das 'Module-Control' in IPS folgende URL hinzufügen.  
    `git://github.com/dixi83/IPSGrowatt485.git`  

   **Bei kommerzieller Nutzung (z.B. als Errichter oder Integrator) wenden Sie sich bitte an den Autor.**  

## 4. Einrichten der Instanzen in IP-Symcon

Ist direkt in der Dokumentation der jeweiligen Module beschrieben.  

## 5. Anhang

###  1. GUID der Module

 
| Modul   | Typ    | Prefix  | GUID                                   |
| :-----: | :----: | :-----: | :------------------------------------: |
| f1      | Device | f1      | {0AD3B5B3-B801-44A3-860C-49343B083194} |
| f3      | Device | f3      | {42248B34-5DEF-4D6E-B2CD-AFB86566A2A6} |



### 2. Changlog

Version 0.1:  
 - Erste start von das modul 
