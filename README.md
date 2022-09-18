<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://scoreboard.sipekong.com/img/scoreboard-logo-red.png" width="400"></a></p>


## About ScoreboardS

ScoreboardS is an internal web application for [Web Imp Pte Ltd.](https://webimp.com.sg) Front End Team.
ScoreboardS is running under the [Laravel](https://laravel.com) framework.
That being said, ScoreboardS and Laravel has no affiliation other than previously stated above.

## Background
This application will be used to track the progress of the Front-End Developers in Web Imp Pte. Ltd.  
The main aim is to Output :
* Manpower hour usage for every developer per week/month and for the whole team per week/month
* Efficiency of individual developers and team
* The development of each developer and the whole team by monitoring their scores in several field of interest
***
## Concept
* The main entity is the **Developer** which will produce the raw data for the whole app
* **Project** is only there to support other entity
* **Score** will be entered weekly and calculated towards Delays, Manpowers usage, and Efficiency
    * Type of scores will be
        * Speed - Tells how fast a developer can come out with solution to a problem, any delay or not
        * Quality - Tells how good a developer solve problem, the quality of the project done
        * Communication - Tells how good a developer communicate project issue, progress and additional information to their peers.
    * Each type will have weight defined for each month
* **Delay** Report should be tracked and the **reason** of the delay, **additional hours** needed will be used to calculate the efficiency of the Developer
    * Each reason will have value by default:
        * Insufficient Time = 1 (Low Fault: Dev don't have control on the requirement and time allocation)
        * Insufficient knowledge = 2 (Medium Fault: Should communicate prior to entering timeline or ask for help)
        * Miscommunication = 3 (High Fault: Fail in doing proper communication and follow-ups)
        * Changes in requirement = 0 (No Fault: Not caused by Dev mistake)
        * Too much ad-hoc = 1 (Low Fault : Should be able to manage timeline)
        * Negligence in QC = 3 (High Fault : Didn't do the due diligence)
* **Manpower** for each developer will be calculated based on 5 days working hour in 8 hours/day
    * Manpower targeted will be affected by the leave and holiday during the period of calculation
* **Efficiency** should be calculated based on the Manpower usage percentage times weekly score
* **Leave** and **Holiday** will have impact on Manpower calculation and **Efficiency** calculation
    * Leave is a used manpower and will not affect the number of targeted manpower
    * Holiday is unused manpower and will affect the targeted manpower

### Calculations
* **Manpower**
    * *Targeted/Regular*
        * Working week = the number of monday in a month.
            * e.g. if the month start on Tuesday, the first monday will be on 7th on that month
            * e.g. if the month ended on Tuesday, the last monday will be on the EOD-1. This means that the 1st to 3rd day of next month will be counted toward the current month manpower
        * Developer weekly = 8 hours x 5 days = 40 hours
            * If developer have leave the number will stay the same
            * If there are holidays the number will be deducted by how many days x 8 hours
        * Team weekly = Number of active Developers x Developer weekly value
        * Team Monthly = Team weekly value x Number of working week in the month
    * *Used*
        * Reported by the Developer at Team Meeting
        * Confirmed by the Lead


* **Delays**
    * Single Delay report score = (Total of Reason Value) x (Additional Hours / Project Hours)
    * Weekly Delay Score = Average of Single Delay report score
        * e.g.(1) A dev produces a single delay with reason of insufficient time and Too much ad-hocs and asking for additional hours of 4 hours from a 5days project  
          Single Delay report score = (1 + 1) x (4 / (5 x 8)) = 2 x (4/40) = 0.2  
          Since Weekly Delay score is average of single delay report and for this example the dev produces only 1 so the Weekly Delay Score = 0.2
        * e.g.(2) Say the same Developer have another delay report for the same week with reason: Insufficient Knowledge, Miscommunication and Changes in Requirement with additional hours of 16 hours of 3days project.  
          Single Delay report score =   (2 + 3 + 0) x (16/ (3 x 8)) = 5 x (16/24) = 3.3  
          With the Single delay report from e.g(1) the Weekly Delay Score for this dev =  
          Average(0.2 + 3.3) = 1.75


* **Score**
    * Will be in the range of 1 to 10
    * Defined by the Lead at each Team Meeting or at anytime during the week
    * Every type will have weight
    * *Examples*
        * Given this month Score Weight : Speed = 30, Quality = 30, Communication = 40,
        * On Monday Lead input **Speed** score for Dev 1 = 2
        * Tue input **Speed** = 4, **Communication** = 7
        * Wed input **Quality** = 5, **Communication** = 6
        * Thur Dev 1 on sick leave
        * Fri, on team meeting input **Speed** = 3, **Quality** = 7, **Communication** = 6, **Delay** = 0.2
        * The Score for this week is = (((avg Speed x Speed Weight) + (avg Quality x Quality Weight) + (avg Communication x Communication Weight)) / (Total Weight)) - Weekly Delay Score
        * = (((3 x 30) + (7 x 30) + (6.3 x 40)) / 100) - 0.2 = 5.03

* **Efficiency**
    * *Weekly*
        * *Developer's Weekly*  
          ((Weekly Manpower Usage/Targeted Weekly Manpower) x 100) x (Weekly Score / 10 *(score is base on 10)*)
        * e.g using samples from previous, and Dev 1 is using 32 hours of his weekly manpower:  
          ((32/40) x 100) x (5.03 / 10) = 40.24
        * *Team Weekly*  
          Average(Developer Weekly) * Active Developer count
    * *Monthly*
        * *Developer's Monthly*  
          Average(Developer's Weekly Efficiency) x Total number of week in a month
        * *Team Monthly*


***
## Models
### Developers
#### Table Structure
* id
* full_name
* call_sign
* email
* joined_date
* released_date
* is_active

#### Relationship
* Score - Will track the score of the developer for each type and time
* Delay - List the delay report produces by the developer
* Project - Track which project the developer is assigned to at any given time
* Leave - Track the leave developer have taken

#### Details
Developers will be the center of the application.
***

### Delay
### Table Structure
* id
* developer_id
* project_id
* date
* hours

### Relationship
* Developer - Who created this delay report
*


## About Laravel in ScoreboardS

All documentation and licenses about laravel can be found in Laravel [documentation](https://laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within ScoreboardS, please send an e-mail to Gabriel Aswinta via [gabriel.aswinta@webimp.com.sg](mailto:gabriel.aswinta@webimp.com.sg). All security vulnerabilities will be promptly addressed.

## License

ScoreboardS is inheriting the Laravel framework licenses.
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

