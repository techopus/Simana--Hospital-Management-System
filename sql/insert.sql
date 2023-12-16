INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId)  VALUES (1, 'Krishna', 'Neurosurgeon','220002222' ,'Bremen' , '400k', NULL, NULL);

INSERT INTO group27.Hospital (HId, HName, HType, HAddress) VALUES(7340, 'Simana Hospital', 'All in One', 'Chitwan');

UPDATE group27.Doctor
SET HId = 7340
WHERE DId = 1;

INSERT INTO group27.Department (DepId, DepName, HId) VALUES (100, 'OPD', 7340);

UPDATE group27.Doctor
SET DepId = 100
WHERE DId = 1;

INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (2, 'Charchit', 'Gastrology','2200022453' ,'Turkey' , '300k',7340, 100);
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (3, 'Krishna', 'Cardiologist','2342002222' ,'Berlin' , '400k',7340, 100);

--NURSING
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (4, 'Nischal', 'Orthopedics','2203452222' ,'Hongkong' , '100k',7340, NULL);

INSERT INTO group27.Department (DepId, DepName, HId) VALUES (101, 'Nursing', 7340);

UPDATE group27.Doctor
SET DepId = 101
WHERE DId = 4;
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (6, 'Aashik', 'Orthology','220345645622' ,'Singapore' , '25000k',7340, 101);
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (7, 'Kabita', 'Gynecologist','24525234526' ,'New York' , '5000k',7340, 101);

--Pharmacy
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (8, 'Sumit', 'Endocronlogist','225234542222' ,'New York' , '100k',7340, NULL);

INSERT INTO group27.Department (DepId, DepName, HId) VALUES (102, 'Pharmacy', 7340);

UPDATE group27.Doctor
SET DepId = 102
WHERE DId = 8;

INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (9, 'Aashik', 'Orthology','220345645622' ,'Singapore' , '25000k',7340, 102);
INSERT INTO group27.Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) VALUES (10, 'Nishan', 'Orthology','220345345622' ,'Thailand' , '2000k',7340, 102);

--Patient 
INSERT INTO group27.Patient (PId, PName, PAge, PAddress, PPhone, RId, HId) VALUES(1000, 'Nischal', 24, 'Ktm', '848536925', NULL, 7340);
INSERT INTO group27.Patient VALUES(1001, 'Aashik', 22, 'Paris', '3479573975', NULL, 7340);
INSERT INTO group27.Patient VALUES(1002, 'Suhanan', 50, 'Vie', '0099080080', NULL, 7340);

--MedicalReport
INSERT INTO group27.MedicalRecord (RId, AdmitDate, IReport, FReport, PId, DId) VALUES(200, '2020-03-04', 'Spine Injury', 'Recovered', 1000, 1);
UPDATE group27.Patient
SET RId = 200
WHERE PId = 1000;

INSERT INTO group27.MedicalRecord VALUES(201, '2020-06-24', 'Heart Attack', 'Successful Heart Surgery', 1001, 2);
UPDATE group27.Patient
SET RId = 201
WHERE PId = 1001;

INSERT INTO group27.MedicalRecord VALUES(202, '2022-03-12', 'Diabetes', 'Feeling Better', 1002, 4);
UPDATE group27.Patient
SET RId = 202
WHERE PId = 1002;

--Medicine
INSERT INTO group27.Medicine (MId, MName, MType) VALUES(3001,'Penicilin', 'Capsule');
INSERT INTO group27.Medicine VALUES(3002, 'Omeoprazole', 'Liquid');
INSERT INTO group27.Medicine VALUES(3003, 'Prednisone', 'Steroids');
INSERT INTO group27.Medicine VALUES(3004, 'Omerprazole', 'Tablet');

--Bill
INSERT INTO group27.Bill (BId, PId, DoctorCharge,TestType,TestCharge, Roomcharge, Miscellaneous, Total) VALUES(100001, 1000, 100, 'Blood Test', 50, 400, 50, 500);
INSERT INTO group27.Bill (BId, PId, DoctorCharge,TestType,TestCharge, Roomcharge, Miscellaneous, Total) VALUES(100002, 1001, 200, 'Sugar Test', 500, 600, 50, 1150);
INSERT INTO group27.Bill (BId, PId, DoctorCharge,TestType,TestCharge, Roomcharge, Miscellaneous, Total) VALUES(100003, 1002, 100, 'Stool Test', 500, 500, 50, 1150);

--treats
INSERT INTO group27.treats (DId, PId, totalcredits) VALUES (1, 1000, 500);
INSERT INTO group27.treats (DId, PId, totalcredits) VALUES (1, 1001, 501);
INSERT INTO group27.treats (DId, PId, totalcredits) VALUES (1, 1002, 502);
INSERT INTO group27.treats (DId, PId, totalcredits) VALUES (2, 1001, 342);
INSERT INTO group27.treats (DId, PId, totalcredits) VALUES (3, 1001, 523);
