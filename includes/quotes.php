<?php
$quotes = array(
'None',
#1
'More than 346 million people worldwide have diabetes. There is an emerging global epidemic of diabetes that can be traced back to rapid increases in overweight, obesity and physical inactivity. - WHO',
#2
'Did you know regular physical exercise can help control your blood glucose and also help keep your weight down? - Medical News Today',
#3
'If you have not exercised for a long time, you will need to start with a little light exercise and build up slowly over time and try to increase the intensity each week. - Medical News Today',
#4
'Remember regular exercise is what matters. 5 days of 30 minutes each every week is great. One day per week at 150 minutes is not. - Medical News Today',
#5
'Diabetes is predicted to become the seventh leading cause of death in the world by the year 2030. Total deaths from diabetes are projected to rise by more than 50% in the next 10 years. - WHO',
#6
'Have you been going to the bathroom to urinate more often recently? Too much glucose (sugar) in your blood will cause you to urinate more often. - Medical News Today',
#7
'If you are urinating more than usual, you will need to replace that lost liquid. You will be drinking more than usual. Have you been drinking more than usual lately? Consult your Doctor. - Medical News Today',
#8
'There are two major forms of diabetes.Type 1 diabetes is characterized by a lack of insulin production & type 2 diabetes results from the body\'s ineffective use of insulin. - WHO',
#9
'As the insulin in your blood is not working properly, or is not there at all, and your cells are not getting their energy, your body may react by trying to find more energy or food thereby causing intense hunger. - Medical News Today',
#10
'Experiencing intense hunger can lead to weight gain due to insuficient amount or lack of insulin in the blood? - Medical News Today',
#11
'If your insulin is not working properly, or is not there at all, glucose will not be entering your cells and providing them with energy. This will make you feel tired and listless. - Medical News Today',
#12
'A third type of diabetes is gestational diabetes. This type is characterized by hyperglycaemia, or raised blood sugar, which has first appeared or been recognized during pregnancy. - WHO',
#13
'Diabetes causes blurred vision which occurs as a result of tissues being pulled from your eye lenses. This affects your eyes\' ability to focus. With proper treatment this can be treated but here are severe cases where blindness or prolonged vision problems can occur. - Medical News Today',
#14
'Do your cuts and bruises take much longer time than usual to heal? When there is more sugar (glucose) in your body, its ability to heal can be undermined. - Medical News Today',
#15
'Type 2 diabetes is much more common than type 1 diabetes. Type 2 accounts for around 90% of all diabetes worldwide. Reports of type 2 diabetes in children – previously rare – have increased worldwide. In some countries, it accounts for almost half of newly diagnosed cases in children and adolescents. - WHO',
#16
'When there is more sugar in your body, its ability to recover from infections is affected. Women with diabetes find it especially difficult to recover from bladder and vaginal infections. - Medical News Today',
#17
'If your gums are tender, red and/or swollen this could be a sign of diabetes. Your teeth could become loose as the gums pull away from them causing you to experience more frequent gum diseases and/or gum infections. - Medical News Today',
#18
'Cardiovascular disease is responsible for between 50% and 80% of deaths in people with diabetes. Diabetes has become one of the major causes of premature illness and death in most countries, mainly through the increased risk of cardiovascular disease (CVD). - WHO',
#19
'If you are over 50 and experience frequent or constant sexual dysfunction (erectile dysfunction), it could be a symptom of diabetes. - Medical News Today',
#20
'If there is too much sugar in your body your nerves could become damaged, as could the tiny blood vessels that feed those nerves. You may experience tingling and/or numbness in your hands and feet. - Medical News Today',
#21
'In 2004, an estimated 3.4 million people died from consequences of high blood sugar. - WHO',
#22
'Did you know obesity is a very important contributor to diabetes and a major factor that leads to the epidemic of diabetes? - Medical News Today',
#23
'Did you know that there are many causes of diabetes but sugar isn\'t one of them. But eating too much sugar can make you to put on weight and obesity is a risk factor. - Medical News Today',
#24
'80% of diabetes deaths occur in low- and middle-income countries. In developed countries most people with diabetes are above the age of retirement, whereas in developing countries those most frequently affected are aged between 35 and 64. - WHO',
#25
'Diabetes is a leading cause of blindness, amputation and kidney failure. Lack of awareness about diabetes, combined with insufficient access to health services and essential medicines, can lead to complications such as blindness, amputation and kidney failure. - WHO',
#26
'Did you know Type 2 diabetes can be prevented? Thirty minutes of moderate-intensity physical activity on most days and a healthy diet can drastically reduce the risk of developing type 2 diabetes. Type 1 diabetes cannot be prevented. - WHO',
);
$limit = count($quotes) - 1;

//Doctor's results
$doc = array(
//Age
'Below 20yrs' => 'Your age indicates you are at risk of developing type 1 diabetes.',
'Between 20yrs - 60yrs' => 'Your age indicates you are at risk of developing type 1 or type 2 diabetes.',
'Above 60yrs' => 'Your age indicates you are at risk of developing type 1 or type 2 diabetes.',

//Sugar Intake
'Less than 10' => 'Your sugar intake is also OK for now but reducing it will help reduce future cases.',
'Between 11 - 20' => 'Your sugar intake is also OK for now but reducing it will help reduce future cases.',
'Between 21 - 30' => 'You need to reduce your sugar intake or you will become obese which can easily lead to the development of diabetes.',
'More than 30' => 'Your sugar intake level is abnormal. Please consult your Doctor immediately.',

//Alcohol Intake
'None' => 'Your daily alcohol intake is none which is also OK because the body can produce some on it\'s own.',
'2 - 3' => 'Your alchol intake is normal but reducing it is a plus.',
'3 - 4' => 'Your alchol intake is normal but reducing it is a plus.',
'5 or more' => 'Your alcohol intake is high. Please reduce it to prevent the body for demanding for more insulin which is bad for your health.',

//Exercise
'None in a week' => 'You need to exercise 5 days of 30 minutes each every week to reduce your body fat which helps to prevent diabetes.',
'Once' => 'You need to add 4 more days to your exercising days to make it 5 days of 30 minutes each every week to reduce your body fat which helps to prevent diabetes.',
'3 times' => 'You need to add 2 more days to your exercising days to make it 5 days of 30 minutes each every week to reduce your body fat which helps to prevent diabetes.',
'5 times' => 'You exercise regularly. Please continue and this will reduce your body fat which helps to prevent diabetes.',
);
?>
