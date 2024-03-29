<?php

use Illuminate\Database\Seeder;

class Explains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('explains')->truncate();

        DB::table('explains')->insert([ 
            'id' => '1', 
            'user_id' => '1', 
            'question_list_id' => '1', 
            'explain_zh' => '50公里时速通常为居民区的限速，在居民区晚上11点到第二天早上7点，不要鸣笛。',
            'explain_en' => 'The speed of 50 kilometers per hour is usually the speed limit of residential areas. Do not whistle in the residential area from 11:00 pm to 7:00 the next morning.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '2', 
            'user_id' => '1', 
            'question_list_id' => '2', 
            'explain_zh' => '如果道路足够宽，车辆在等待右转的时候通常会让出左侧的空间方便直行车辆通过，此时从左侧超车符合法规，也比较安全。',
            'explain_en' => 'If the road is wide enough, the vehicle will usually let the space on the left side allow the straight-through vehicle to pass when waiting for the right turn. At this time, overtaking from the left side is in compliance with regulations and is safer.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '3', 
            'user_id' => '1', 
            'question_list_id' => '3', 
            'explain_zh' => '以上所有的情况下都应该使用近光灯，不要妨碍他人的工作或驾驶。',
            'explain_en' => 'In all of the above cases, you should use low beam lights, do not hinder the work or driving of others.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '4', 
            'user_id' => '1', 
            'question_list_id' => '4', 
            'explain_zh' => '新西兰开车转向灯使用很频繁，无论是转向还是并线，一定要提前至少三秒钟打相应方向的转向灯。',
            'explain_en' => 'New Zealand driving lights are used very frequently. Whether turning or merging, be sure to turn the steering lights in the direction at least three seconds in advance.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '5', 
            'user_id' => '1', 
            'question_list_id' => '5', 
            'explain_zh' => '除非对面和前面都没有车辆，且道路视线不好，才可以使用远光灯，否则一律使用近光灯。',
            'explain_en' => 'Unless there is no vehicle on the opposite side and in front, and the road is not good, you can use the high beam, otherwise you will use the low beam.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '6', 
            'user_id' => '1', 
            'question_list_id' => '6', 
            'explain_zh' => '夜间必须使用头灯以增加车辆的可视度。在倒车的时候如果头灯产生炫光，则可以关闭头灯用以安全的倒车。',
            'explain_en' => 'Headlights must be used at night to increase the visibility of the vehicle. If the headlights produce glare when reversing, you can turn off the headlights for safe reversing.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '7', 
            'user_id' => '1', 
            'question_list_id' => '7', 
            'explain_zh' => '摩托车在道路上也有与汽车相同的路权，不可以从它们的左侧超车。',
            'explain_en' => 'Motorcycles also have the same road rights as cars on the road and cannot be overtaken from their left side.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '8', 
            'user_id' => '1', 
            'question_list_id' => '8', 
            'explain_zh' => 'A不正确是因为需要超车后还能看清至少100米以内的路况，而不是在超车之前看清100米。C不正确是因为无论何时都不可以超速。',
            'explain_en' => 'A is incorrect because it is necessary to see the road conditions within at least 100 meters after overtaking, instead of seeing 100 meters before overtaking. C is incorrect because you can`t speed at any time.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '9', 
            'user_id' => '1', 
            'question_list_id' => '9', 
            'explain_zh' => '天气和路况良好的情况下，跟车适用两秒规则；天气潮湿道路湿滑，则使用四秒规则。',
            'explain_en' => 'In the case of good weather and good road conditions, the two-second rule applies to the following vehicles; when the wet road is wet, the four-second rule is used.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '10', 
            'user_id' => '1', 
            'question_list_id' => '10', 
            'explain_zh' => '黄灯闪烁代表信号灯出现了故障无法正常工作，这时候路口适用让路规则，你需要给所有右侧的车辆让行；如果你要在路口转弯，则需要给直行的车辆让行。',
            'explain_en' => 'The yellow light flashes to indicate that the signal light is faulty and cannot work properly. At this time, the intersection is suitable for the way of giving way. You need to give way to all the right vehicles. If you want to turn at the intersection, you need to give directions to the straight-through vehicles.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '11', 
            'user_id' => '1', 
            'question_list_id' => '11', 
            'explain_zh' => '在需要减速让行的路口，标线是白色的',
            'explain_en' => 'At the intersection where deceleration is required, the marking is white', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '12', 
            'user_id' => '1', 
            'question_list_id' => '12', 
            'explain_zh' => '这是消防栓的标识，如果车中有随时可以移动车辆的人，则可以在其上方停车；但禁止在车中无人的情况下停在它的上方。',
            'explain_en' => 'This is the sign of the fire hydrant. If there is a person in the car who can move the vehicle at any time, you can park it above it; but it is forbidden to park above it without anyone in the car.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '13', 
            'user_id' => '1', 
            'question_list_id' => '13', 
            'explain_zh' => '即便你从两边都看不到火车，也要等待信号灯熄灭才能前进。',
            'explain_en' => 'Even if you can`t see the train from both sides, wait for the signal to go out to move forward.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '14', 
            'user_id' => '1', 
            'question_list_id' => '14', 
            'explain_zh' => 'B不正确的原因是，你希望右转弯，不必考虑为行驶在你左侧的车辆让路；只需要为它们腾出足够的空间即可',
            'explain_en' => 'The reason why B is not correct is that you want to make a right turn and don`t have to think about giving way to the vehicle on your left side; just make room for them.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '15', 
            'user_id' => '1', 
            'question_list_id' => '15', 
            'explain_zh' => '即便你从两边都看不到火车，也要等待信号灯熄灭才能前进。',
            'explain_en' => 'Even if you can`t see the train from both sides, wait for the signal to go out to move forward.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '16', 
            'user_id' => '1', 
            'question_list_id' => '16', 
            'explain_zh' => '新西兰警察发现违章车辆将会跟随其后并亮灯、拉警笛，此时必须打左转向灯，并在路边停车接受警察的检查。不要下车，手扶方向盘等待警察过来即可，记得把驾驶侧的车窗降下来。',
            'explain_en' => 'The New Zealand police found that the illegal vehicle would follow and light up and pull the siren. At this time, the left turn signal must be used and the roadside parking should be checked by the police. Don`t get off the bus, hold the steering wheel and wait for the police to come over. Remember to lower the window on the driver`s side.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '17', 
            'user_id' => '1', 
            'question_list_id' => '17', 
            'explain_zh' => '警官在怀疑司机酒后驾车的时候，有权利要求对司机的血液进行酒精浓度检测。',
            'explain_en' => 'When the police officer suspects that the driver is drunk driving, he has the right to request the alcohol concentration of the driver`s blood.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '18', 
            'user_id' => '1', 
            'question_list_id' => '18', 
            'explain_zh' => '以上所有答案都正确，请牢记。',
            'explain_en' => 'All the above answers are correct, please keep in mind.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '19', 
            'user_id' => '1', 
            'question_list_id' => '19', 
            'explain_zh' => '新西兰司机极少使用汽车喇叭，只有在视线不好的情况下、为了提醒其它司机你的位置时，才应该使用鸣笛的方式提醒他人。打招呼、斗气车、或是前方有动物，均不可鸣笛',
            'explain_en' => 'New Zealand drivers rarely use car horns. They should only use whistle to remind others when the line of sight is not good and to remind other drivers of your location. You can’t whistle when you say hello, you’re angry, or have animals in front.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '20', 
            'user_id' => '1', 
            'question_list_id' => '20', 
            'explain_zh' => '新西兰政府对于20岁以下的年轻人饮酒驾车采取零容忍的态度',
            'explain_en' => 'The New Zealand government adopts a zero-tolerance attitude towards young people under the age of 20 drinking and driving', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '21', 
            'user_id' => '1', 
            'question_list_id' => '21', 
            'explain_zh' => '如果你准备左转弯且在你的这一侧路口没有减速让行的标记，那么对面右转的车辆应该给你让行',
            'explain_en' => 'If you are going to make a left turn and there is no deceleration mark on your side of the road, then the right turn of the vehicle should give you a pass.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '22', 
            'user_id' => '1', 
            'question_list_id' => '22', 
            'explain_zh' => '没有需要解释的地方，请牢记环岛直行的打灯方式',
            'explain_en' => 'There is no need to explain, please remember to go straight around the island to light the way', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '23', 
            'user_id' => '1', 
            'question_list_id' => '23', 
            'explain_zh' => '前方车辆左转，你还要从它的左侧超车，一定是脑子坏了',
            'explain_en' => 'Turn left in front of the vehicle, you have to overtake from the left side of it, it must be a broken brain.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '24', 
            'user_id' => '1', 
            'question_list_id' => '24', 
            'explain_zh' => '新西兰的限速牌与全球大部分国家和地区都一样，红色圈中的黑色数字标明这一段道路可以行驶的最高时速',
            'explain_en' => 'New Zealand`s speed limit cards are the same as most countries and regions around the world. The black numbers in the red circle indicate the maximum speed that this road can travel.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '25', 
            'user_id' => '1', 
            'question_list_id' => '25', 
            'explain_zh' => '只要开车，无论你是什么驾照，都要随身携带',
            'explain_en' => 'Just drive, no matter what driver`s license you are, carry it with you.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '26', 
            'user_id' => '1', 
            'question_list_id' => '26', 
            'explain_zh' => '见到这个标识，请以最高20公里时速前进，经过事故现场的时候不要停留不要好奇不要拍照',
            'explain_en' => 'When you see this logo, please go at a speed of up to 20 kilometers per hour. Don’t stay when you are at the scene of the accident. Don’t be curious to take pictures.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '27', 
            'user_id' => '1', 
            'question_list_id' => '27', 
            'explain_zh' => '驶入环岛的时候只需要给右侧的车辆让行，左侧的车辆应该让你才对',
            'explain_en' => 'When you enter the roundabout, you only need to give way to the right side of the vehicle. The left side of the vehicle should let you be right.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '28', 
            'user_id' => '1', 
            'question_list_id' => '28', 
            'explain_zh' => '如果对面没有直行或左转的车辆，你可以从路口右转弯；如果对面有直行或左转的车辆，即便你这边是绿灯，也要给他们让路，除非你能够确定对面是红灯',
            'explain_en' => 'If there is no straight or left turn on the opposite side, you can make a right turn from the intersection; if there is a straight or left turn on the opposite side, even if you have a green light on this side, give them a way, unless you can be sure that the opposite is red.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '29', 
            'user_id' => '1', 
            'question_list_id' => '29', 
            'explain_zh' => '信号灯出现故障，路口默认执行让路规则，为你右侧驶来的车辆让路，转弯为直行的车辆让路',
            'explain_en' => 'When the signal light fails, the intersection will execute the routing rule by default, giving way to the vehicle on your right, turning to the straight-through vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '30', 
            'user_id' => '1', 
            'question_list_id' => '30', 
            'explain_zh' => '保护少年儿童的生命安全很重要，校车在上下车学生的时候一定要以20公里的时速经过校车，防止突然出现的儿童',
            'explain_en' => 'It is very important to protect the safety of children and adolescents. School buses must pass the school bus at a speed of 20 kilometers per hour when getting on and off the bus to prevent sudden children.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '31', 
            'user_id' => '1', 
            'question_list_id' => '31', 
            'explain_zh' => '如果路口交通信号灯带有相位指示箭头，如果你的行驶方向与箭头方向相同，则需要按照信号灯的红与绿决定停车还是前进。如果路口只有直行绿灯而没有相位信号灯或是相位信号灯未亮起，那么需要让行对面过来的直行车辆后，再右转弯。',
            'explain_en' => 'If the intersection traffic light has a phase indicator arrow, if your direction of travel is the same as the direction of the arrow, you need to decide whether to stop or go according to the red and green of the signal. If there is only a straight green light at the intersection and there is no phase signal or the phase signal is not lit, then you need to make a straight-through vehicle from the opposite side of the line and then turn right.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '32', 
            'user_id' => '1', 
            'question_list_id' => '32', 
            'explain_zh' => '路口出现警官的时候代表前方有交通管制或是事故，请听从他们的指挥',
            'explain_en' => 'When there is a police officer at the intersection, there is traffic control or an accident in front of you. Please listen to their command.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '33', 
            'user_id' => '1', 
            'question_list_id' => '33', 
            'explain_zh' => '无照驾驶在新西兰是很严重的错误，警官可以直接扣留你的车辆',
            'explain_en' => 'Unlicensed driving in New Zealand is a serious mistake, police officers can directly detain your vehicle', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '34', 
            'user_id' => '1', 
            'question_list_id' => '34', 
            'explain_zh' => '没有标线或是未铺设柏油路面的地方，只要有公众或是其它车辆活动，就被认定为道路',
            'explain_en' => 'Where there is no marking or no tarmac, as long as there is public or other vehicle activity, it is recognized as a road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '35', 
            'user_id' => '1', 
            'question_list_id' => '35', 
            'explain_zh' => '三秒钟，硬性规定',
            'explain_en' => 'Three seconds, hard rules', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '36', 
            'user_id' => '1', 
            'question_list_id' => '36', 
            'explain_zh' => '要看清让行标记，如果你这一边是红色的小箭头意味着对面的车辆有优先通过权，先停车让行，等待它们通过桥梁后确认对面不再有车，你再前进',
            'explain_en' => 'To see the mark of the pass, if the small red arrow on your side means that the opposite vehicle has the priority to pass, first stop and let the line, wait for them to pass the bridge and confirm that there is no more cars on the opposite side, you will move forward.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '37', 
            'user_id' => '1', 
            'question_list_id' => '37', 
            'explain_zh' => '天气不好道路湿滑，或者你正在牵引拖挂车辆，则使用四秒规则跟随前车，因为这些情况下刹车距离会变长',
            'explain_en' => 'If the weather is bad, the road is slippery, or if you are pulling a towed vehicle, follow the front car with a four-second rule, because the braking distance will be longer in these cases.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '38', 
            'user_id' => '1', 
            'question_list_id' => '38', 
            'explain_zh' => '在你能看到的距离内停下即可',
            'explain_en' => 'Stop at the distance you can see', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '39', 
            'user_id' => '1', 
            'question_list_id' => '39', 
            'explain_zh' => '无需解释，所有的说法都',
            'explain_en' => 'No explanation, all the arguments are', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '40', 
            'user_id' => '1', 
            'question_list_id' => '40', 
            'explain_zh' => '礼让行人路口不规定汽车必须要给行人让路，但是希望能够“礼让”在先，尽可能让行人先通过',
            'explain_en' => 'Polite pedestrian crossings do not stipulate that cars must give way to pedestrians, but hope to be able to "polite" first, let pedestrians pass as much as possible', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '41', 
            'user_id' => '1', 
            'question_list_id' => '41', 
            'explain_zh' => '有安全岛的人行横道往往距离比较长，所以才会在路中间设置安全岛，如果行人不在你这一侧过马路，则不需要停车等待他们通过；如果在你这一侧通行，则必须停车让行',
            'explain_en' => 'Crosswalks with safe islands tend to be long, so a safe island will be set in the middle of the road. If pedestrians are not crossing the road on your side, you don`t need to wait for them to pass; if you are on your side, you must stop.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '42', 
            'user_id' => '1', 
            'question_list_id' => '42', 
            'explain_zh' => '如果人行横道中间没有安全岛，那么无论从什么方向穿行马路的行人，只要他们的脚步踏上了人行道，你就必须停车让行',
            'explain_en' => 'If there is no safe island in the middle of the crosswalk, then no matter the direction of the pedestrians crossing the road, as long as their footsteps on the sidewalk, you must stop and let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '43', 
            'user_id' => '1', 
            'question_list_id' => '43', 
            'explain_zh' => '四秒规则，可以增加与前车的距离，确保在湿滑的天气下能够安全停车',
            'explain_en' => 'Four-second rule that increases the distance to the car in front, ensuring safe parking in wet weather', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '44', 
            'user_id' => '1', 
            'question_list_id' => '44', 
            'explain_zh' => '公共停车场车辆进出频繁，可以被视为一个交通路口',
            'explain_en' => 'Public parking lots are frequently accessed and can be considered as a traffic intersection.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '45', 
            'user_id' => '1', 
            'question_list_id' => '45', 
            'explain_zh' => '继续等待直到红灯熄灭后，才能前进',
            'explain_en' => 'Continue to wait until the red light goes out before moving forward', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '46', 
            'user_id' => '1', 
            'question_list_id' => '46', 
            'explain_zh' => '紧急车辆在拉响警报和亮起警灯的时候，社会车辆要无条件让行，但是在让行的时候要确保自己和其它社会车辆的安全，不要直接急刹车或是开上路牙，没有必要这么做，降低车速尽量靠边行驶给它们让出位置即可',
            'explain_en' => 'When the emergency vehicle is ringing the alarm and lighting the warning light, the social vehicle must be unconditionally allowed to go, but to ensure the safety of yourself and other social vehicles when you let the line, do not directly brake or open the road, there is no need to do so. Do, lower the speed as much as possible and drive them to the position.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '47', 
            'user_id' => '1', 
            'question_list_id' => '47', 
            'explain_zh' => '这种说法很正确，也很重要，如果对面没有足够的空间容纳你的车身，你越过道口后堵在了那里，车尾部还在铁道上，这样很危险',
            'explain_en' => 'This statement is correct and important. If there is not enough space on the opposite side to accommodate your body, you will be stuck there after crossing the crossing, and the rear of the car is still on the railway. This is very dangerous.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '48', 
            'user_id' => '1', 
            'question_list_id' => '48', 
            'explain_zh' => '路口适用的让行规则是转弯的让直行，右转的让左转，不分车辆大小也不按照先来后到',
            'explain_en' => 'The applicable rule of the intersection is to make a straight turn, turn right and let the left turn, regardless of the size of the vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '49', 
            'user_id' => '1', 
            'question_list_id' => '49', 
            'explain_zh' => '如果对方不变换为近光灯，则不要跟他们斗气，把视线从对面转移到道路的左边即可，必要的时候降低车速',
            'explain_en' => 'If the other party does not change to a low beam, don`t swear with them, move the line of sight from the opposite side to the left side of the road, and reduce the speed if necessary.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '50', 
            'user_id' => '1', 
            'question_list_id' => '50', 
            'explain_zh' => '有人受伤，则24小时内必须通知警方，这是硬性规定',
            'explain_en' => 'If someone is injured, the police must be notified within 24 hours. This is a mandatory requirement.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '51', 
            'user_id' => '1', 
            'question_list_id' => '51', 
            'explain_zh' => '100米，这个数字需要死记硬背，没有需要特别解释的地方',
            'explain_en' => '100 meters, this number needs to be memorized, there is no need for special explanation', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '52', 
            'user_id' => '1', 
            'question_list_id' => '52', 
            'explain_zh' => '尽可能多打开灯光让别人能够看到你，增加安全性，但不要使用远光灯。',
            'explain_en' => 'Turn on the lights as much as possible so others can see you, increase safety, but don`t use high beams.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '53', 
            'user_id' => '1', 
            'question_list_id' => '53', 
            'explain_zh' => '这个数字需要死记硬背，没有需要解释的地方',
            'explain_en' => 'This number needs to be memorized and there is no place to explain.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '54', 
            'user_id' => '1', 
            'question_list_id' => '54', 
            'explain_zh' => '这个数字需要死记硬背，没有需要解释的地方',
            'explain_en' => 'This number needs to be memorized and there is no place to explain.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '55', 
            'user_id' => '1', 
            'question_list_id' => '55', 
            'explain_zh' => '只有警官才可以要求你提供血样用以检测酒精含量，其他的人都不行',
            'explain_en' => 'Only police officers can ask you to provide blood samples to detect alcohol levels. Others will not.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '56', 
            'user_id' => '1', 
            'question_list_id' => '56', 
            'explain_zh' => '别人希望超越你的时候，尽可能给他们让出足够的空间，阻挡他人超车也是违章行为',
            'explain_en' => 'When others want to surpass you, it is also illegal to give them enough space to stop others from overtaking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '57', 
            'user_id' => '1', 
            'question_list_id' => '57', 
            'explain_zh' => '菱形的钻石花纹标识前方有人行横道',
            'explain_en' => 'Diamond-shaped diamond pattern logo in front of a crosswalk', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '58', 
            'user_id' => '1', 
            'question_list_id' => '58', 
            'explain_zh' => '不需要解释，请记下1.25米这个数字和上面这张图片',
            'explain_en' => 'No need to explain, please write down the number 1.25 meters and the picture above', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '59', 
            'user_id' => '1', 
            'question_list_id' => '59', 
            'explain_zh' => '超速20公里以内，扣分20分，请牢记',
            'explain_en' => 'Within 20 kilometers of speeding, deduct 20 points, please keep in mind', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '60', 
            'user_id' => '1', 
            'question_list_id' => '60', 
            'explain_zh' => '这些情况都允许不系安全带，无需解释，请牢记',
            'explain_en' => 'These situations allow no seat belts, no explanation, please keep in mind', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '61', 
            'user_id' => '1', 
            'question_list_id' => '61', 
            'explain_zh' => '开启近光灯是车队中的常见要求，非紧急情况下双闪、鸣笛都是不被允许的，葬礼车队不符合紧急情况这个条件',
            'explain_en' => 'Turning on the low beam is a common requirement in the team. Double flashing and whistling in non-emergency situations are not allowed. The funeral team does not meet the emergency conditions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '62', 
            'user_id' => '1', 
            'question_list_id' => '62', 
            'explain_zh' => '无需解释，请牢记；再犯则加重惩罚',
            'explain_en' => 'No need to explain, please keep in mind;', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '63', 
            'user_id' => '1', 
            'question_list_id' => '63', 
            'explain_zh' => '不需要解释，以上所有答案都是购买二手车的时候应该检查的要点',
            'explain_en' => 'No need to explain, all the above answers are the main points that should be checked when buying used cars.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '64', 
            'user_id' => '1', 
            'question_list_id' => '64', 
            'explain_zh' => '超过20岁，则呼气酒精检测的上限为250微克/L',
            'explain_en' => 'Above 20 years of age, the upper limit of breath alcohol testing is 250 μg / L', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '65', 
            'user_id' => '1', 
            'question_list_id' => '65', 
            'explain_zh' => '这种标识往往告知过往的司机此处弯道的最舒适通过时速是多少，可以不遵守，只是推荐数值；数字越小表明弯道越急',
            'explain_en' => 'This kind of sign often tells the driver of the past where the most comfortable speed of the curve is, and can be ignored, only the recommended value; the smaller the number, the more urgent the curve', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '66', 
            'user_id' => '1', 
            'question_list_id' => '66', 
            'explain_zh' => '100公里每小时是新西兰境内开放公路或是高速公路的最高限速值，没有更高的了',
            'explain_en' => '100 km/h is the maximum speed limit for open roads or highways in New Zealand, no higher', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '67', 
            'user_id' => '1', 
            'question_list_id' => '67', 
            'explain_zh' => '不需要解释，作为母语非英语人士，将这个缩写硬性记下来即可',
            'explain_en' => 'No need to explain, as a non-native English speaker, write down this abbreviation', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '68', 
            'user_id' => '1', 
            'question_list_id' => '68', 
            'explain_zh' => '白色猫眼只会出现在道路的中间，请牢记',
            'explain_en' => 'White cat eyes only appear in the middle of the road, please keep in mind', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '69', 
            'user_id' => '1', 
            'question_list_id' => '69', 
            'explain_zh' => '不需要解释，实在不能理解请百度或谷歌“转向过度”',
            'explain_en' => 'No need to explain, I really can`t understand Baidu or Google "oversteer"', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '70', 
            'user_id' => '1', 
            'question_list_id' => '70', 
            'explain_zh' => '白色黑色斜纹表示桥梁的左侧，死记硬背的题目',
            'explain_en' => 'White black twill indicates the left side of the bridge, the topic of rote', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '71', 
            'user_id' => '1', 
            'question_list_id' => '71', 
            'explain_zh' => '橙色黑色斜纹表示桥梁的右侧，死记硬背的题目',
            'explain_en' => 'Orange black twill indicates the right side of the bridge, the topic of rote', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '72', 
            'user_id' => '1', 
            'question_list_id' => '72', 
            'explain_zh' => '该标志总会出现在道路转弯的外侧路面，向左转的弯角则会出现在道路的右手边',
            'explain_en' => 'The sign will always appear on the outside road of the road turn, and the left turn will appear on the right hand side of the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '73', 
            'user_id' => '1', 
            'question_list_id' => '73', 
            'explain_zh' => 'C是直行，且它的前方车辆后面留出了足够的该空间让其通过这个路口，所以C可以通过',
            'explain_en' => 'C is straight, and there is enough space behind the vehicle in front of it to let it pass through the intersection, so C can pass', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '74', 
            'user_id' => '1', 
            'question_list_id' => '74', 
            'explain_zh' => '不需要解释，牢记图形和答案即可',
            'explain_en' => 'No need to explain, keep in mind the graphics and answers', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '75', 
            'user_id' => '1', 
            'question_list_id' => '75', 
            'explain_zh' => '这个标识意味着只有公交车可以停在这里，其它车辆一概不许',
            'explain_en' => 'This sign means that only buses can park here, and no other vehicles are allowed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '76', 
            'user_id' => '1', 
            'question_list_id' => '76', 
            'explain_zh' => '环岛标识，注意让行右侧车辆，请牢记',
            'explain_en' => 'Round the island logo, pay attention to the right side of the vehicle, please keep in mind', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '77', 
            'user_id' => '1', 
            'question_list_id' => '77', 
            'explain_zh' => '这是一种只有新西兰大城市才有的通行标识，亮起的时候自行车、公交车、轨道车辆可以继续前进，不需要遵守其他灯光标识',
            'explain_en' => 'This is a pass sign that is only available in New Zealand`s big cities. When it is on, bicycles, buses, and rail vehicles can move on and do not need to follow other lights.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '78', 
            'user_id' => '1', 
            'question_list_id' => '78', 
            'explain_zh' => '如果只有直行绿灯亮起，那么可以右转弯，只要确定让行对面的直行车辆即可',
            'explain_en' => 'If only the straight green light is on, you can turn right, just make sure you are on the right side of the line.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '79', 
            'user_id' => '1', 
            'question_list_id' => '79', 
            'explain_zh' => '直行是红灯，如果路口没有其它特殊标明红灯的时候左转不限制的标记，那么直行红灯亮起的时候左转弯的车辆也必须停车等待',
            'explain_en' => 'Straight line is a red light. If there is no other sign indicating that the left turn is not restricted when the red light is marked at the intersection, then the left turning vehicle must stop when the straight red light is on.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '80', 
            'user_id' => '1', 
            'question_list_id' => '80', 
            'explain_zh' => '小型车辆需要新西兰CLASS 1类型的驾照即可驾驶，新西兰驾照CLASS后面的数字越大表明能够驾驶的车型越大、载重越高',
            'explain_en' => 'Small vehicles require a New Zealand CLASS 1 driver`s license to drive. The greater the number behind the New Zealand driver`s license CLASS, the larger the model can drive and the higher the load.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '81', 
            'user_id' => '1', 
            'question_list_id' => '81', 
            'explain_zh' => '只要不越过黄线，且前方的车辆愿意为你留出足够的右侧空间进行超车，你的超车行为就是合乎法规的',
            'explain_en' => 'As long as you don`t cross the yellow line, and the vehicle ahead is willing to leave enough space for you to overtake, your overtaking behavior is legal.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '82', 
            'user_id' => '1', 
            'question_list_id' => '82', 
            'explain_zh' => '四秒规则，不需要解释，请牢记四秒规则适用于湿滑天气或是拖车，即可',
            'explain_en' => 'Four-second rule, no explanation required, please keep in mind that the four-second rule applies to wet weather or trailers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '83', 
            'user_id' => '1', 
            'question_list_id' => '83', 
            'explain_zh' => '可以从其他车辆的左侧超车，确保安全即可',
            'explain_en' => 'You can overtake from the left side of other vehicles to ensure safety.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '84', 
            'user_id' => '1', 
            'question_list_id' => '84', 
            'explain_zh' => '你的一侧有白色虚线，代表着你可以借用对向车道超越你这一边的慢车，但是超车完毕后要马上回到自己的车道上来。如果你这边是黄色实线则严谨借道超越',
            'explain_en' => 'There is a white dashed line on your side, which means you can borrow the slow lane over the opposite lane, but you should return to your lane immediately after the overtaking. If you are a solid yellow line here, you should be rigorously', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '85', 
            'user_id' => '1', 
            'question_list_id' => '85', 
            'explain_zh' => '不可以，必须使用拖车，货物的任何部分不得与地面接触',
            'explain_en' => 'No, the trailer must be used and no part of the cargo should be in contact with the ground.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '86', 
            'user_id' => '1', 
            'question_list_id' => '86', 
            'explain_zh' => 'D不正确其余都正确，你无需关注对面是什么限速，只需要关注如何安全通过道口即可',
            'explain_en' => 'D is not correct, the rest are correct, you do not need to pay attention to what is the speed limit on the opposite side, just need to pay attention to how to safely pass the crossing', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '87', 
            'user_id' => '1', 
            'question_list_id' => '87', 
            'explain_zh' => '如果能够安全的停下来，后面的车也不会追你的尾部，那么就停车吧',
            'explain_en' => 'If you can safely stop, the car behind will not chase your tail, then stop.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '88', 
            'user_id' => '1', 
            'question_list_id' => '88', 
            'explain_zh' => '只要是与湿滑天气相关的问题，回答四秒没有错',
            'explain_en' => 'As long as it is a problem related to slippery weather, there is nothing wrong with answering four seconds.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '89', 
            'user_id' => '1', 
            'question_list_id' => '89', 
            'explain_zh' => '不要鸣笛，会惊吓到动物产生危险；晃大灯对动物完全不管用；你的乘客不可以下车驱赶动物，因为动物可能对乘客的人身安全产生危害',
            'explain_en' => 'Don`t whistle, it will scare the animals to danger; the headlights don`t work for the animals completely; your passengers can`t drive the animals in the following cars, because the animals may harm the passenger`s personal safety.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '90', 
            'user_id' => '1', 
            'question_list_id' => '90', 
            'explain_zh' => '不需要解释，所有的都',
            'explain_en' => 'No need to explain, all of them', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '91', 
            'user_id' => '1', 
            'question_list_id' => '91', 
            'explain_zh' => '小孩子的行为具有不确定性，所以必须要优先关注、额外关注',
            'explain_en' => 'Children’s behavior is uncertain, so priority attention and extra attention must be paid', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '92', 
            'user_id' => '1', 
            'question_list_id' => '92', 
            'explain_zh' => 'B在倒车，而你的车子可能正好在它的盲点中，所以要减速，必要的时候随时刹车，避免碰撞。当然，如果碰撞，责任在于B',
            'explain_en' => 'B is reversing, and your car may be in its blind spot, so slow down and brake whenever necessary to avoid collision. Of course, if it collides, the responsibility lies in B.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '93', 
            'user_id' => '1', 
            'question_list_id' => '93', 
            'explain_zh' => '蓝色的车辆正在直行，D准备右转弯，与你的行车路线有交叉点，所以D最危险',
            'explain_en' => 'The blue vehicle is going straight, D is going to make a right turn, and there is an intersection with your driving route, so D is the most dangerous.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '94', 
            'user_id' => '1', 
            'question_list_id' => '94', 
            'explain_zh' => '自行车A正在准备超越停放在路边的B，这个时候道路的宽度已经不太够了，所以作为蓝色车辆的驾驶员要额外关注自行车A',
            'explain_en' => 'Bicycle A is preparing to go beyond the B parked on the side of the road. At this time, the width of the road is not enough, so the driver of the blue vehicle should pay extra attention to the bicycle A.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '95', 
            'user_id' => '1', 
            'question_list_id' => '95', 
            'explain_zh' => '无需解释，全部',
            'explain_en' => 'No explanation, all', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '96', 
            'user_id' => '1', 
            'question_list_id' => '96', 
            'explain_zh' => '新西兰骑车人的速度往往很快，开车门的时候一定要注意他们，否则会造成严重伤害',
            'explain_en' => 'New Zealand bikers tend to be very fast, and you must pay attention to them when driving the door, otherwise it will cause serious injury.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '97', 
            'user_id' => '1', 
            'question_list_id' => '97', 
            'explain_zh' => '自行车距离路口已经很近了，如果你强行加速超过他然后左转弯，会给直行的自行车带来极大的危险，慢慢的跟着他，等他过了路口你再转弯不迟',
            'explain_en' => 'The bicycle is very close to the intersection. If you force it faster than him and then turn left, it will bring great danger to the straight bicycle. Follow him slowly. When he crosses the intersection, you will not turn later.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '98', 
            'user_id' => '1', 
            'question_list_id' => '98', 
            'explain_zh' => '再少的酒精也会减缓你的反应速度，影响你驾驶时候的分辨能力',
            'explain_en' => 'Less alcohol will slow down your reaction and affect your ability to resolve when driving.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '99', 
            'user_id' => '1', 
            'question_list_id' => '99', 
            'explain_zh' => '不可以对行人按喇叭，也不可以与他抢道，因为行人手中的物体可能与你的车子剐蹭，造成行人的人身伤害',
            'explain_en' => 'It is not possible to honk a pedestrian or to rob him, because the object in the hands of the pedestrian may be paralyzed with your car, causing personal injury to the pedestrian.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '100', 
            'user_id' => '1', 
            'question_list_id' => '100', 
            'explain_zh' => '阳光强烈的时候贴道路左边只会增加危险而不会降低危险，因为你可能看不清路边的障碍物；开启灯光不会对你有任何帮助',
            'explain_en' => 'When the sun is strong, sticking to the left side of the road will only increase the danger without reducing the danger, because you may not see the obstacles on the side of the road; turning on the lights will not help you.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '101', 
            'user_id' => '1', 
            'question_list_id' => '101', 
            'explain_zh' => '所有的答案都是正确的，汇入已有交通的时候要留意盲点、并记得打转向灯表明自己的意图',
            'explain_en' => 'All the answers are correct. Pay attention to blind spots when you import existing traffic, and remember to turn the lights to indicate your intentions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '102', 
            'user_id' => '1', 
            'question_list_id' => '102', 
            'explain_zh' => '不要考虑后车是否违章，如果他非要超过你，你就让他超吧，自己的安全第一',
            'explain_en' => 'Don`t consider whether the rear car is illegal. If he has to surpass you, let him super, his safety first.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '103', 
            'user_id' => '1', 
            'question_list_id' => '103', 
            'explain_zh' => '酒精只会让你的驾驶变得更差，绝不会有改善，司机一滴酒，亲人两行泪',
            'explain_en' => 'Alcohol will only make your driving worse, there will be no improvement, the driver will have a drop of wine, and the two will tears.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '104', 
            'user_id' => '1', 
            'question_list_id' => '104', 
            'explain_zh' => '打转向灯方面的问题，都是至少三秒，记住“三秒”这个数值没错的',
            'explain_en' => 'The problem with turning lights is at least three seconds. Remember that the value of "three seconds" is correct.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '105', 
            'user_id' => '1', 
            'question_list_id' => '105', 
            'explain_zh' => '并线的时候，要根据实际情况加速或是减速，踩刹车提醒他人则肯定是不正确的，所以只有检查盲点这一项是正确的',
            'explain_en' => 'When connecting the line, it is necessary to accelerate or decelerate according to the actual situation. It is definitely not correct to step on the brakes to remind others, so it is only correct to check the blind spot.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '106', 
            'user_id' => '1', 
            'question_list_id' => '106', 
            'explain_zh' => '方便他人也是安全自己的行为，尽量让出空间给心急的人吧！',
            'explain_en' => 'Convenience to others is also a safe act of yourself, try to make room for the worried person!', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '107', 
            'user_id' => '1', 
            'question_list_id' => '107', 
            'explain_zh' => '无需解释，答案是B和C，记住在新西兰开车打手机会被罚款甚至被判“危险驾驶”的罪名',
            'explain_en' => 'No need to explain, the answer is B and C. Remember to drive a mobile phone in New Zealand and be fined or even sentenced to “dangerous driving”.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '108', 
            'user_id' => '1', 
            'question_list_id' => '108', 
            'explain_zh' => '发短信比打电话还危险，任何时候都不行',
            'explain_en' => 'Texting is more dangerous than calling, not at any time.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '109', 
            'user_id' => '1', 
            'question_list_id' => '109', 
            'explain_zh' => '不需要解释，从下一个出口出去再慢慢的想办法转回来好了，高速路上倒车极其危险',
            'explain_en' => 'No need to explain, go out from the next exit and slowly find a way to turn it back. It is extremely dangerous to reverse the car on the highway.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '110', 
            'user_id' => '1', 
            'question_list_id' => '110', 
            'explain_zh' => '只有A的描述是正确的，记得开车门之前一定看一下后视镜，有没有物体在快速接近你，如果有，等它/他过去了再开门不迟',
            'explain_en' => 'Only the description of A is correct. Remember to look at the rearview mirror before driving the door. Is there any object that is approaching you quickly? If so, wait for it/he has passed and then open the door no later than', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '111', 
            'user_id' => '1', 
            'question_list_id' => '111', 
            'explain_zh' => '新西兰很多地方车流汇聚处都有Merge like a Zip的标识，指的就是左边一辆、右边一辆大家交替行驶融合到一条车道中，公平又有序',
            'explain_en' => 'There are Merge like a Zip signs in many places in New Zealand. It means that the left one and the right one are alternately driving into one lane, fair and orderly.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '112', 
            'user_id' => '1', 
            'question_list_id' => '112', 
            'explain_zh' => '后备箱是最安全的，放在自己身上是最不安全的',
            'explain_en' => 'The trunk is the safest, and it is the least safe to put on your own.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '113', 
            'user_id' => '1', 
            'question_list_id' => '113', 
            'explain_zh' => '如果医生告诉你这个药物没有影响，那么就可以正常开车；如果医生说这个药物会影响驾驶，那么就不要开车',
            'explain_en' => 'If the doctor tells you that the drug has no effect, then you can drive normally; if the doctor says that the drug will affect driving, then don`t drive.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '114', 
            'user_id' => '1', 
            'question_list_id' => '114', 
            'explain_zh' => '下山车辆要默认给上山车辆让行，因为如果上山车辆停车让行的话，再启动车辆相对困难（爬坡起步）',
            'explain_en' => 'Downhill vehicles should give way to the uphill vehicles by default, because if the uphill vehicles are parked, it is relatively difficult to start the vehicle (starting from the slope).', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '115', 
            'user_id' => '1', 
            'question_list_id' => '115', 
            'explain_zh' => '不能开启远光灯，因为雾气中的远光灯会产生炫光，影响对面的司机，双闪灯只允许在紧急情况中使用，雾中不要使用',
            'explain_en' => 'The high beam can not be turned on, because the high beam in the fog will produce glare, affecting the driver on the opposite side. The double flash is only allowed to be used in emergency situations. Do not use in the fog.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '116', 
            'user_id' => '1', 
            'question_list_id' => '116', 
            'explain_zh' => '土路上超过前车是极其危险的行为，除非前车示意你这么做。开远光灯只会让对面的司机诅咒你，而不会帮助你什么；在路的中央行驶是不对的，土路上都没有标识标线，那么默认的应该靠左侧行驶',
            'explain_en' => 'Exceeding the front of the road on the dirt road is extremely dangerous, unless the front car signals you to do so. Driving the high beam will only make the opposite driver curse you, but will not help you; driving in the middle of the road is wrong, there is no marking line on the dirt road, then the default should be driven to the left', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '117', 
            'user_id' => '1', 
            'question_list_id' => '117', 
            'explain_zh' => '给骑车人至少1.5米的距离，才不会影响他们的安全',
            'explain_en' => 'Give the rider a distance of at least 1.5 meters without affecting their safety.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '118', 
            'user_id' => '1', 
            'question_list_id' => '118', 
            'explain_zh' => '按喇叭只会惊吓到羊群；打开双闪灯？你觉得羊知道双闪灯是什么意思嘛？',
            'explain_en' => 'The horn will only scare the flock; turn on the double flash? Do you think the sheep know what the double flash is?', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '119', 
            'user_id' => '1', 
            'question_list_id' => '119', 
            'explain_zh' => '必要的时候允许从左侧超车，这种行为被允许。剩下的行为都不被允许，十分的危险',
            'explain_en' => 'This is allowed when overtaking is allowed from the left when necessary. The rest of the behavior is not allowed, very dangerous', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '120', 
            'user_id' => '1', 
            'question_list_id' => '120', 
            'explain_zh' => '如果你开着拖拉机在路上行驶，那么应该尽可能的靠左，把路的大部分留给车速较快的交通参与者；堵在路中间慢慢行驶的行为是不道德的',
            'explain_en' => 'If you drive a tractor on the road, you should leave it as far as possible to the left, leaving most of the road to traffic participants with faster speeds; it is immoral to block slowly in the middle of the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '121', 
            'user_id' => '1', 
            'question_list_id' => '121', 
            'explain_zh' => '见到动物，减速甚至停车才是正确的选择。闪灯、鸣笛、加速，都是无用功甚至是危险的',
            'explain_en' => 'Seeing animals, slowing down or even parking is the right choice. Flashing lights, whistling, and accelerating are all useless or even dangerous.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '122', 
            'user_id' => '1', 
            'question_list_id' => '122', 
            'explain_zh' => 'A不正确的原因：如果路上没有其它车辆，那么在有路灯的时候也是可以使用远光灯的',
            'explain_en' => 'Reason for A incorrect: If there are no other vehicles on the road, you can also use the high beam when there is a street light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '123', 
            'user_id' => '1', 
            'question_list_id' => '123', 
            'explain_zh' => '红灯停、绿灯行，不解释',
            'explain_en' => 'Red light stop, green light line, do not explain', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '124', 
            'user_id' => '1', 
            'question_list_id' => '124', 
            'explain_zh' => '你的一方是红色的小箭头，意味着对面的车辆具有优先通行权，你需要看清侨的那一边，是否有车辆准备过桥，如果没有，你可以前进，如果有，你必须停在桥的这一头，让他们先过；没有先来后到之说，也没有按照车型大小相让的规则，更不可以抢行',
            'explain_en' => 'Your party is a small red arrow, meaning that the opposite vehicle has priority access. You need to see the side of the overseas Chinese. Is there a vehicle ready to cross the bridge? If not, you can move forward. If there is, you must stop at the bridge. This one, let them go first; if you don’t come first, then you don’t have the rules to match the size of the car, you can’t steal it.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '125', 
            'user_id' => '1', 
            'question_list_id' => '125', 
            'explain_zh' => 'T2表明车中有两个或两个以上的乘客，才可以使用这个车道',
            'explain_en' => 'T2 indicates that there are two or more passengers in the car before using this lane.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '126', 
            'user_id' => '1', 
            'question_list_id' => '126', 
            'explain_zh' => 'A不对的原因，是因为你在过铁道的时候没有观察两侧就通过，道口没有栏杆并不意味着这里是安全的，可能是栏杆损坏了，所以一定要左看右看再通过；记住你的车子跟火车相撞，绝对没有赢的可能',
            'explain_en' => 'The reason why A is wrong is because you did not observe the sides when passing the railway. There is no railing at the crossing. It does not mean that it is safe. It may be that the railing is damaged, so you must look left and right and pass it; remember Your car collided with the train, there is absolutely no possibility of winning.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '127', 
            'user_id' => '1', 
            'question_list_id' => '127', 
            'explain_zh' => '黄灯亮起，如果安全的话就刹车停下等待下一个绿灯吧',
            'explain_en' => 'The yellow light is on. If it is safe, stop the brakes and wait for the next green light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '128', 
            'user_id' => '1', 
            'question_list_id' => '128', 
            'explain_zh' => '学生过马路的标识出现，双方向的车辆都需要停车等待，没有减速一说，必须停车等待旗子收回去再前进',
            'explain_en' => 'The sign of the student crossing the road appears. Both sides of the vehicle need to wait for parking. Without deceleration, they must stop and wait for the flag to be taken back.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '129', 
            'user_id' => '1', 
            'question_list_id' => '129', 
            'explain_zh' => '校车正在上下儿童，那么社会车辆必须要以不超过20公里/小时的速度行驶，防止随时出现在路上的儿童',
            'explain_en' => 'School buses are getting on and off children, so social vehicles must travel at speeds of no more than 20 km/h to prevent children from appearing on the road at any time.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '130', 
            'user_id' => '1', 
            'question_list_id' => '130', 
            'explain_zh' => '黄色虚线就一个意思：禁止停车',
            'explain_en' => 'The yellow dotted line means one thing: no parking', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '131', 
            'user_id' => '1', 
            'question_list_id' => '131', 
            'explain_zh' => '不解释，图片和答案说明了一切',
            'explain_en' => 'No explanation, pictures and answers explain everything', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '132', 
            'user_id' => '1', 
            'question_list_id' => '132', 
            'explain_zh' => '这种标识通常出现在繁忙的道路两侧，在其中标明的时段内，路边禁止停车，其余的时间停车OK',
            'explain_en' => 'This type of sign usually appears on both sides of a busy road. During the time period indicated, no parking is allowed on the roadside. The rest of the time is OK.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '133', 
            'user_id' => '1', 
            'question_list_id' => '133', 
            'explain_zh' => '这个停车区域专为装卸货物或上下乘客而设计，如果没有写Commercial的字样，那么什么车都可以在这里停留；车中可以无人，但是不能超过5分钟',
            'explain_en' => 'This parking area is designed for loading and unloading cargo or getting on and off passengers. If you don`t write Commercial words, then you can stay here. No one in the car, but no more than 5 minutes.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '134', 
            'user_id' => '1', 
            'question_list_id' => '134', 
            'explain_zh' => '只有单行线可以在右侧停车，如果在双向道路上右侧停车，则会被罚款',
            'explain_en' => 'Only one-way line can park on the right side, if you park on the right side of the two-way road, you will be fined', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '135', 
            'user_id' => '1', 
            'question_list_id' => '135', 
            'explain_zh' => 'P指的是停车，蓝底白字意思是“可以停车”，40代表着分钟数，下面没有任何附加条件表示各种车辆都可以停在这里不超过40分钟',
            'explain_en' => 'P refers to parking, white on a blue background means “can park”, 40 represents minutes, and there are no additional conditions below that all vehicles can park here no more than 40 minutes.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '136', 
            'user_id' => '1', 
            'question_list_id' => '136', 
            'explain_zh' => '请牢记，消防栓上可以停车，但是车中一定要有可以移动车辆的人',
            'explain_en' => 'Please keep in mind that the fire hydrant can be parked, but there must be people in the car who can move the vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '137', 
            'user_id' => '1', 
            'question_list_id' => '137', 
            'explain_zh' => '陡坡停车，手刹车是最重要的；手动档车辆挂在倒档上，自动档车辆挂在P档上，利用波箱进行附加制动；把车轮转向停车边的路牙也是非常好的办法，万一车辆移动的话也会被路牙挡住',
            'explain_en' => 'On the steep slope parking, the hand brake is the most important; the manual gear is hung on the reverse gear, the automatic gear is hung on the P gear, and the gearbox is used for additional braking; it is also a good way to turn the wheel to the parking side. If the vehicle moves, it will be blocked by the road teeth.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '138', 
            'user_id' => '1', 
            'question_list_id' => '138', 
            'explain_zh' => '蓝底红叉表示不能停车，下面的FOR 4KM表示这个“禁止停车”的距离为4公里',
            'explain_en' => 'The red cross on the blue bottom means that you can`t stop. The following FOR 4KM means that the distance from this "no parking" is 4 kilometers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '139', 
            'user_id' => '1', 
            'question_list_id' => '139', 
            'explain_zh' => 'ENDS表示“禁止停车”的规则过了这个标识就失效了，这时候路边可以停车了',
            'explain_en' => 'ENDS means that the rule of "no parking" has expired after this sign, and the roadside can be parked.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '140', 
            'user_id' => '1', 
            'question_list_id' => '140', 
            'explain_zh' => '无论何时，私车都不能停在公车站上',
            'explain_en' => 'Whenever the private car can`t stop at the bus stop', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '141', 
            'user_id' => '1', 
            'question_list_id' => '141', 
            'explain_zh' => '这是残疾人停车位专用标识，只有风挡玻璃上放置了“残疾人停车证明”的车辆才可以使用，其它车辆放在上面将处以很重的罚款',
            'explain_en' => 'This is a special sign for disabled parking spaces. Only vehicles with a “disabled parking permit” on the windshield can be used. Other vehicles placed on it will be heavily fined.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '142', 
            'user_id' => '1', 
            'question_list_id' => '142', 
            'explain_zh' => '硬性规定，请牢记6米这个数字',
            'explain_en' => 'Hard rules, please keep in mind the number 6 meters', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '143', 
            'user_id' => '1', 
            'question_list_id' => '143', 
            'explain_zh' => '硬性规定，请牢记6米这个数字',
            'explain_en' => 'Hard rules, please keep in mind the number 6 meters', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '144', 
            'user_id' => '1', 
            'question_list_id' => '144', 
            'explain_zh' => '可以停放在消防栓上，只要车中随时有人能够挪动这辆车即可',
            'explain_en' => 'Can be parked on the fire hydrant, as long as someone in the car can move the car at any time.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '145', 
            'user_id' => '1', 
            'question_list_id' => '145', 
            'explain_zh' => 'B不正确是因为，转向相反方向，路牙起不到阻挡车辆的作用；开双闪灯对于陡坡停车没有任何帮助',
            'explain_en' => 'B is incorrect because, in the opposite direction, the road teeth do not function to block the vehicle; the double flashing lights do not help the steep slope parking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '146', 
            'user_id' => '1', 
            'question_list_id' => '146', 
            'explain_zh' => '无需解释，请牢记答案C的说法',
            'explain_en' => 'No need to explain, please remember the answer to the answer C', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '147', 
            'user_id' => '1', 
            'question_list_id' => '147', 
            'explain_zh' => '请死记硬背这个数字，关于最近的停车距离只有两种数字，1米和6米，1米指的是到停车场或是Driveway的最小距离，6米指的是停车距离无黄线的路口或是人行横道的最小值',
            'explain_en' => 'Please remember this number. There are only two numbers for the nearest parking distance, 1 meter and 6 meters. 1 meter refers to the minimum distance to the parking lot or Driveway. 6 meters refers to the intersection with no yellow line. Or the minimum of the crosswalk', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '148', 
            'user_id' => '1', 
            'question_list_id' => '148', 
            'explain_zh' => '减速、让行，必要的时候靠边停车让它先过',
            'explain_en' => 'Slow down, let the line, if necessary, stop by the side to let it go first', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '149', 
            'user_id' => '1', 
            'question_list_id' => '149', 
            'explain_zh' => 'A不正确的原因，你在路边招手会对自己的人身安全产生危害，万一过路的车辆撞到你怎么办？',
            'explain_en' => 'A is not the correct reason, you beckoning on the roadside will be harmful to your personal safety, what if the passing vehicle hits you?', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '150', 
            'user_id' => '1', 
            'question_list_id' => '150', 
            'explain_zh' => 'A不正确是因为急刹车会让后车追你的尾；D不正确的原因是把头伸出车外开车很危险',
            'explain_en' => 'A is not correct because the sudden braking will let the rear car chase your tail; D is not the correct reason is that it is dangerous to drive the car out of the car.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '151', 
            'user_id' => '1', 
            'question_list_id' => '151', 
            'explain_zh' => '小汽车后胎爆胎，车子的尾部会不断摇晃，这时候不要紧张，慢慢的将车速降下来，停在道路的左边即可；千万不要猛踩刹车，这样车辆会失控或是翻滚。',
            'explain_en' => 'The rear tire of the car will burst, and the tail of the car will constantly shake. Don`t be nervous at this time, slowly lower the speed and stop at the left side of the road; do not slam on the brakes, so the vehicle will get out of control or roll.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '152', 
            'user_id' => '1', 
            'question_list_id' => '152', 
            'explain_zh' => '前胎爆胎比较危险，爆胎的时候车子会向爆胎的一侧甩过去，这时候要用双手控制住方向盘，慢慢将车停到路边；高速爆胎猛踩刹车会让车辆侧翻，千万小心不要在爆胎的时候猛踩刹车。',
            'explain_en' => 'The front tire puncture is more dangerous. When the tire is puncture, the car will smash to the side of the puncture. At this time, use both hands to control the steering wheel and slowly stop the car to the side of the road. The high-speed puncture will brake the vehicle side. Turn over, be careful not to slam on the brakes during a puncture.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '153', 
            'user_id' => '1', 
            'question_list_id' => '153', 
            'explain_zh' => '消防站门口的双红灯交替亮起代表消防车马上要从里面出来，所有车辆必须马上刹车，等待红灯熄灭再继续前进',
            'explain_en' => 'The double red lights at the entrance of the fire station alternately illuminate to indicate that the fire truck is coming out from the inside. All vehicles must brake immediately, waiting for the red light to go out and move on.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '154', 
            'user_id' => '1', 
            'question_list_id' => '154', 
            'explain_zh' => '玻璃落在路面上通常都会破碎成小颗粒，如果能够保证人身安全的情况下，尽量清理路面；如果路上车辆很多，那么打电话通知警察寻求帮助。A的说法不正确，请牢记。',
            'explain_en' => 'Glass falling on the road will usually break into small particles. If you can ensure personal safety, try to clean the road. If there are many vehicles on the road, call the police to ask for help. A`s statement is incorrect, please keep in mind.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '155', 
            'user_id' => '1', 
            'question_list_id' => '155', 
            'explain_zh' => '前方有事故的时候，警察会在距离事故现场几百米的后方放置这种蓝底白字的事故警告牌，看到这个标记，要减低车速到20公里/小时',
            'explain_en' => 'When there is an accident ahead, the police will place this blue-white accident warning sign at a distance of a few hundred meters from the scene of the accident. When you see this mark, you should reduce the speed to 20 km/h.',
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '156', 
            'user_id' => '1', 
            'question_list_id' => '156', 
            'explain_zh' => '突然出现的皮球，往往意味着路边有小朋友正在玩耍，小孩子的行为不可预料，而且身材很小会被路边的车辆挡住；所以看到皮球的时候，第一个想法就是马上停车，而不是绕过皮球之类的办法',
            'explain_en' => 'The sudden appearance of the ball often means that the children on the side of the road are playing, the behavior of the child is unpredictable, and the small body will be blocked by the roadside vehicles; so when you see the ball, the first idea is to stop immediately. Not to bypass the ball or the like', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '157', 
            'user_id' => '1', 
            'question_list_id' => '157', 
            'explain_zh' => '红色的反光三角标识代表着车辆损坏停在前方或是有事故发生，请降低车速',
            'explain_en' => 'The red reflective triangle symbol indicates that the vehicle damage is parked in front or there is an accident. Please reduce the speed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '158', 
            'user_id' => '1', 
            'question_list_id' => '158', 
            'explain_zh' => '如果救护车或救火车没有亮灯、鸣笛，代表他们目前没有事故需要紧急前往，这时他们就是普通的社会车辆，不需要给他们让行；但是警报拉响，你必须让路',
            'explain_en' => 'If the ambulance or fire truck does not light up and whistle, it means that they have no accidents and need to go urgently. At this time they are ordinary social vehicles and do not need to give them a pass; but the alarm sounds, you must give way', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '159', 
            'user_id' => '1', 
            'question_list_id' => '159', 
            'explain_zh' => '无论是事故的哪一方，只要有人在事故中受伤，且你是某方的驾驶员，则必须在24小时内通知警方',
            'explain_en' => 'Regardless of which side of the accident, as long as someone is injured in the accident and you are the driver of one side, you must notify the police within 24 hours.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '160', 
            'user_id' => '1', 
            'question_list_id' => '160', 
            'explain_zh' => '车子坏了的时候，请使用双闪灯。双闪灯不能用来斗气，而路边的黄色虚线上，无论你是否打双闪都是不允许停车的，哪怕是临时停车也不行',
            'explain_en' => 'When the car is broken, please use the double flash. Double flashing lights can`t be used for vindicting, and the yellow dotted line on the roadside, no matter whether you play double flash or not, it is not allowed to stop, even if it is temporary parking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '161', 
            'user_id' => '1', 
            'question_list_id' => '161', 
            'explain_zh' => '在新西兰，没什么事情比人的健康和生命更重要，第一件事不是通知警方、也不是通知朋友或家人，更不是看自己的车子有多大问题；而是迅速询问是否有人受伤或感觉不舒服',
            'explain_en' => 'In New Zealand, nothing is more important than human health and life. The first thing is not to inform the police, not to inform friends or family members, not to see how big your car is. It is to quickly ask if someone is hurt or feel uncomfortable.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '162', 
            'user_id' => '1', 
            'question_list_id' => '162', 
            'explain_zh' => '头灯失效的情况下，不仅你看不到路面，对面的车辆也可能看不到你；所以要打开双闪、尽快找到安全的地方停车等待修理或救援',
            'explain_en' => 'In the case of failure of the headlights, not only you can`t see the road, but the opposite vehicle may not see you; so you need to turn on the double flash, find a safe place as soon as possible, stop waiting for repair or rescue.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '163', 
            'user_id' => '1', 
            'question_list_id' => '163', 
            'explain_zh' => 'C不正确的原因是，新西兰交规中涉及到打转向灯的，肯定都是三秒钟以上，打转向灯是正确的但是两秒钟的时间长度是不对的',
            'explain_en' => 'The reason why C is not correct is that the New Zealand traffic regulations involve turning lights, it must be more than three seconds, the turn signal is correct, but the length of two seconds is wrong.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '164', 
            'user_id' => '1', 
            'question_list_id' => '164', 
            'explain_zh' => '如果你停在路中间等待右转，可能由于对面的直行车辆很多造成你一时间不能右转，堵塞住你身后直行的车辆，如果发生这种情况，则最好按照C的办法去做',
            'explain_en' => 'If you stop in the middle of the road and wait for a right turn, it may be because you have a lot of straight vehicles on the opposite side that you can`t turn right at the same time and block the vehicle that goes straight behind you. If this happens, it is best to follow C`s method.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '165', 
            'user_id' => '1', 
            'question_list_id' => '165', 
            'explain_zh' => 'B不正确的原因是，离开环岛的时候要打左转向灯。D不正确的原因是，进入环岛后，由于你是右转弯，所以应该在右边行驶，左边留给将要驶离环岛的车辆',
            'explain_en' => 'The reason why B is not correct is to turn left turn lights when leaving the island. The reason why D is not correct is that after entering the roundabout, since you are turning right, you should drive on the right side and leave the left side for the vehicle that will leave the roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '166', 
            'user_id' => '1', 
            'question_list_id' => '166', 
            'explain_zh' => '路上没有划线，那么你应该尽可能的贴着道路的左边行驶',
            'explain_en' => 'There is no line on the road, then you should drive as far as possible to the left of the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '167', 
            'user_id' => '1', 
            'question_list_id' => '167', 
            'explain_zh' => '右转弯进入多车道单行线，请直接进入最右侧的车道',
            'explain_en' => 'Turn right into the multi-lane one-way line, please go directly to the rightmost lane', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '168', 
            'user_id' => '1', 
            'question_list_id' => '168', 
            'explain_zh' => '无需解释，全部',
            'explain_en' => 'No explanation, all', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '169', 
            'user_id' => '1', 
            'question_list_id' => '169', 
            'explain_zh' => '黄色反光标识（猫眼）等于黄色实线，代表着禁止超车',
            'explain_en' => 'The yellow reflective logo (cat`s eye) is equal to the yellow solid line, which means no overtaking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '170', 
            'user_id' => '1', 
            'question_list_id' => '170', 
            'explain_zh' => '白色反光标识（猫眼）出现在道路的中央，表示道路的中间',
            'explain_en' => 'The white reflective logo (cat`s eye) appears in the middle of the road, indicating the middle of the road', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '171', 
            'user_id' => '1', 
            'question_list_id' => '171', 
            'explain_zh' => '在这里可以任意时间右转，不过要记得让行对面的直行车辆',
            'explain_en' => 'You can turn right at any time here, but remember to let the straight-going vehicle across the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '172', 
            'user_id' => '1', 
            'question_list_id' => '172', 
            'explain_zh' => '缓冲区禁止用于超车，也不可以用于任何目的的停车',
            'explain_en' => 'The buffer zone is forbidden for overtaking and cannot be used for parking for any purpose.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '173', 
            'user_id' => '1', 
            'question_list_id' => '173', 
            'explain_zh' => '缓冲区只能用于缓冲等待、右转弯等待，禁止用于超车',
            'explain_en' => 'The buffer can only be used for buffer waiting, right turn waiting, and for overtaking', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '174', 
            'user_id' => '1', 
            'question_list_id' => '174', 
            'explain_zh' => '全新西兰都使用这个规则，划有黄色虚线的地方，禁止停车，临时停车也不可以',
            'explain_en' => 'All New Zealand uses this rule, with a yellow dotted line, no parking, no parking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '175', 
            'user_id' => '1', 
            'question_list_id' => '175', 
            'explain_zh' => '蓝色反光标识（猫眼）代表附近有消防栓',
            'explain_en' => 'Blue reflective logo (cat`s eye) represents a nearby fire hydrant', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '176', 
            'user_id' => '1', 
            'question_list_id' => '176', 
            'explain_zh' => '右转弯让左转弯，也就是常说的大弯让小弯',
            'explain_en' => 'Turn right to make a left turn, which is often said to make a small bend', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '177', 
            'user_id' => '1', 
            'question_list_id' => '177', 
            'explain_zh' => '右转弯让左转弯，不分车辆的大小',
            'explain_en' => 'Turn right to make a left turn, regardless of the size of the vehicle', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '178', 
            'user_id' => '1', 
            'question_list_id' => '178', 
            'explain_zh' => '在双方都是绿灯的情况下，右转弯要让行左转弯',
            'explain_en' => 'In the case where both sides are green, turn right to make a left turn', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '179', 
            'user_id' => '1', 
            'question_list_id' => '179', 
            'explain_zh' => '蓝车行驶在主路上，而红车在岔路上，岔路车辆必须让行主路车辆',
            'explain_en' => 'The blue car is on the main road, while the red car is on the winding road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '180', 
            'user_id' => '1', 
            'question_list_id' => '180', 
            'explain_zh' => '红色摩托车是右转弯，蓝色小轿车是左转弯，右转让行左转，不区分车型',
            'explain_en' => 'The red motorcycle is a right turn, the blue car is a left turn, the right transfer line turns left, does not distinguish the model', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '181', 
            'user_id' => '1', 
            'question_list_id' => '181', 
            'explain_zh' => '红蓝双方都是停车让行标识，在对等的情况下，红车由于是右转弯必须让行左转弯的蓝车',
            'explain_en' => 'Both red and blue are parking lanes. In the case of reciprocity, the red car must make a left turn because it is a right turn.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '182', 
            'user_id' => '1', 
            'question_list_id' => '182', 
            'explain_zh' => '蓝车行驶在主路上而红车在岔路上等待，岔路上的车辆必须让行主路上各个方向的车辆',
            'explain_en' => 'The blue car is on the main road and the red car is waiting on the winding road. The vehicles on the road must be in all directions on the main road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '183', 
            'user_id' => '1', 
            'question_list_id' => '183', 
            'explain_zh' => '摩托车正在主路上直行，蓝车准备从岔路上转弯进入主路，所以蓝车必须让行',
            'explain_en' => 'The motorcycle is going straight on the main road, the blue car is ready to turn from the winding road into the main road, so the blue car must let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '184', 
            'user_id' => '1', 
            'question_list_id' => '184', 
            'explain_zh' => '蓝车一方有让行标识，而摩托车一方没有，在这个路口摩托车方向的车辆有优先行驶权，所以蓝车需要让行',
            'explain_en' => 'The blue car has a pass sign, and the motorcycle does not have a car. The car in the direction of the motorcycle at this intersection has priority to travel, so the blue car needs to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '185', 
            'user_id' => '1', 
            'question_list_id' => '185', 
            'explain_zh' => '不需要，因为红车已经打灯表明左转意图，二车不会有交叉点，所以即使红车在蓝车的右边，蓝车也不需要让行',
            'explain_en' => 'No, because the red car has been lit to indicate the left turn intention, the second car will not have an intersection, so even if the red car is on the right side of the blue car, the blue car does not need to let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '186', 
            'user_id' => '1', 
            'question_list_id' => '186', 
            'explain_zh' => '红车和蓝车的行驶路线没有交点，所以蓝车不需要让行',
            'explain_en' => 'There is no intersection between the red and blue cars, so the blue car does not need to let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '187', 
            'user_id' => '1', 
            'question_list_id' => '187', 
            'explain_zh' => '蓝车等同于右转弯，所以必须让行对面的直行车辆，即便看起来蓝车的行车路线是直的，但是要根据路上的白色虚线来判断哪个方向才是主路',
            'explain_en' => 'The blue car is equivalent to a right turn, so you must let the straight-going vehicle across the line. Even if the blue-car`s driving route is straight, you should judge which direction is the main road according to the white dotted line on the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '188', 
            'user_id' => '1', 
            'question_list_id' => '188', 
            'explain_zh' => '蓝车在红车的右侧进入环岛，自然不用让行；红色车辆要让行',
            'explain_en' => 'The blue car enters the roundabout on the right side of the red car, naturally there is no need to let the line; red vehicles have to let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '189', 
            'user_id' => '1', 
            'question_list_id' => '189', 
            'explain_zh' => '红车在右侧，所以蓝车必须让行',
            'explain_en' => 'The red car is on the right side, so the blue car must let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '190', 
            'user_id' => '1', 
            'question_list_id' => '190', 
            'explain_zh' => '双方都是绿灯，双方都是右转，行车路线没有交点，所以蓝车无需让行红车',
            'explain_en' => 'Both sides are green lights, both sides are turning right, the driving route has no intersection, so the blue car does not need to let the red car', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '191', 
            'user_id' => '1', 
            'question_list_id' => '191', 
            'explain_zh' => '双方都是绿灯的情况下，大弯让小弯，也就是右转弯的车辆让行左转弯的车辆，所以蓝车需要让行',
            'explain_en' => 'In the case where both sides are green light, the big bend makes the small bend, that is, the right-turning vehicle makes the left-turning vehicle, so the blue car needs to make way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '192', 
            'user_id' => '1', 
            'question_list_id' => '192', 
            'explain_zh' => '蓝车方向是绿灯，且蓝车准备直行，所以不需要让行等待转弯的红车',
            'explain_en' => 'The direction of the blue car is green light, and the blue car is ready to go straight, so there is no need to let the red car waiting for the turn.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '193', 
            'user_id' => '1', 
            'question_list_id' => '193', 
            'explain_zh' => '蓝车是左转弯，红车右转弯，右转让行左转，所以蓝车不需要让行',
            'explain_en' => 'The blue car is turning left, the red car turns right, the right transfer line turns left, so the blue car does not need to let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '194', 
            'user_id' => '1', 
            'question_list_id' => '194', 
            'explain_zh' => '对面的红车直行，蓝车右转弯，所以蓝车必须让行',
            'explain_en' => 'The opposite red car goes straight, the blue car turns right, so the blue car must let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '195', 
            'user_id' => '1', 
            'question_list_id' => '195', 
            'explain_zh' => '蓝车行驶在主路上，而红车在岔路上，岔路必须让行主路因而蓝车无需让路',
            'explain_en' => 'The blue car is driving on the main road, while the red car is on the winding road, the road must be made to the main road, so the blue car does not need to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '196', 
            'user_id' => '1', 
            'question_list_id' => '196', 
            'explain_zh' => '蓝车的方向有停车等待标识，必须让行主路上的红车',
            'explain_en' => 'There is a parking waiting sign in the direction of the blue car, and the red car on the main road must be allowed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '197', 
            'user_id' => '1', 
            'question_list_id' => '197', 
            'explain_zh' => '蓝车的方向有减速让行标识，必须让行主路上的红车',
            'explain_en' => 'The direction of the blue car has a deceleration and a sign, and the red car on the main road must be allowed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '198', 
            'user_id' => '1', 
            'question_list_id' => '198', 
            'explain_zh' => '蓝车正在主路上直行，所以不需要给红车让路',
            'explain_en' => 'The blue car is going straight on the main road, so there is no need to give way to the red car.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '199', 
            'user_id' => '1', 
            'question_list_id' => '199', 
            'explain_zh' => '蓝车行驶在主路上，不需要给红车让路',
            'explain_en' => 'Blue car driving on the main road, no need to give way to the red car', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '200', 
            'user_id' => '1', 
            'question_list_id' => '200', 
            'explain_zh' => '蓝车有“停车等待”标识，所以它要给所有方向的来车让行（这道题基本停留在理论上，因为新西兰境内几乎没有这种两边设立不对称的交通标识情况出现）',
            'explain_en' => 'The blue car has a “parking waiting” sign, so it has to give way to all directions. (This question basically stays in theory, because there is almost no such asymmetrical traffic sign on both sides in New Zealand)', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '201', 
            'user_id' => '1', 
            'question_list_id' => '201', 
            'explain_zh' => '尽管红车在蓝车的右边，但是请注意图中蓝车方向没有减速让行标识，说明蓝车是主路，不需要给岔路上的红车让路',
            'explain_en' => 'Although the red car is on the right side of the blue car, please note that there is no deceleration in the direction of the blue car in the picture, indicating that the blue car is the main road, and there is no need to give way to the red car on the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '202', 
            'user_id' => '1', 
            'question_list_id' => '202', 
            'explain_zh' => '蓝车从岔路上等待转上主路，必须要给主路上的红车让路',
            'explain_en' => 'The blue car is waiting to turn to the main road from the winding road, and must give way to the red car on the main road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '203', 
            'user_id' => '1', 
            'question_list_id' => '203', 
            'explain_zh' => '蓝车在主路上直行，不需要给岔路上的车辆让行',
            'explain_en' => 'The blue car goes straight on the main road and does not need to give way to the vehicles on the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '204', 
            'user_id' => '1', 
            'question_list_id' => '204', 
            'explain_zh' => '红车方向有停车让行标识，蓝车方向没有说明蓝车行驶在主路上，主路上的车辆无需给岔路上的车辆让行',
            'explain_en' => 'There is a parking sign in the direction of the red car. The direction of the blue car does not indicate that the blue car is driving on the main road. The vehicles on the main road do not need to give way to the vehicles on the road.',
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '205', 
            'user_id' => '1', 
            'question_list_id' => '205', 
            'explain_zh' => '图中路口的四个方向都没有让行标识，所以所有方向的车辆都要让行右侧的车辆，蓝车在红车的右侧所以蓝车不需要给红车让行',
            'explain_en' => 'In the figure, there are no signs in the four directions of the intersection, so the vehicles in all directions should let the right side of the vehicle, the blue car on the right side of the red car, so the blue car does not need to give way to the red car.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '206', 
            'user_id' => '1', 
            'question_list_id' => '206', 
            'explain_zh' => '蓝车方向有停车让行标识，而红车方向没有这个标识，所以蓝车必须给主路上的红车让行',
            'explain_en' => 'There is a parking sign in the direction of the blue car, and there is no such sign in the direction of the red car, so the blue car must give way to the red car on the main road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '207', 
            'user_id' => '1', 
            'question_list_id' => '207', 
            'explain_zh' => '蓝车行驶在主路上，红车方向有停车让行标识，所以蓝车不需要让行',
            'explain_en' => 'The blue car is driving on the main road, there is a parking sign in the direction of the red car, so the blue car does not need to let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '208', 
            'user_id' => '1', 
            'question_list_id' => '208', 
            'explain_zh' => '红车行驶在主路上，蓝车在岔路上等待转弯上主路，所以蓝车需要让行',
            'explain_en' => 'The red car is driving on the main road, the blue car is waiting for the main road on the winding road, so the blue car needs to make way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '209', 
            'user_id' => '1', 
            'question_list_id' => '209', 
            'explain_zh' => '蓝车行驶在主路上，红车在岔路上，所以蓝车不需要给红车让路',
            'explain_en' => 'The blue car is on the main road, the red car is on the winding road, so the blue car does not need to give way to the red car.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '210', 
            'user_id' => '1', 
            'question_list_id' => '210', 
            'explain_zh' => '红蓝二车都行驶在主路上，二者都需要转向岔路的时候，右转弯让行左转弯，所以蓝车不需要让路',
            'explain_en' => 'Both the red and blue cars are driving on the main road. When both need to turn to the road, turn right to make a left turn, so the blue car does not need to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '211', 
            'user_id' => '1', 
            'question_list_id' => '211', 
            'explain_zh' => '蓝车行驶在主路上，红车方向有减速让行标识，所以蓝车不需要让路',
            'explain_en' => 'The blue car is driving on the main road, and the red car has a deceleration to let the line sign, so the blue car does not need to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '212', 
            'user_id' => '1', 
            'question_list_id' => '212', 
            'explain_zh' => '红车是直行，所以蓝车必须要让路',
            'explain_en' => 'The red car is going straight, so the blue car has to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '213', 
            'user_id' => '1', 
            'question_list_id' => '213', 
            'explain_zh' => '红车在主路上直行，蓝车在岔路上等待右转弯，所以蓝车必须让行',
            'explain_en' => 'The red car goes straight on the main road, the blue car waits for a right turn on the winding road, so the blue car must let the line', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '214', 
            'user_id' => '1', 
            'question_list_id' => '214', 
            'explain_zh' => '蓝车在主路上直行，不需要给辅路上准备转弯的车辆让行',
            'explain_en' => 'The blue car goes straight on the main road and does not need to give the vehicle on the auxiliary road to make a turn.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '215', 
            'user_id' => '1', 
            'question_list_id' => '215', 
            'explain_zh' => '蓝车在岔路上等待右转，而红车在主路上直行，所以蓝车必须让路',
            'explain_en' => 'The blue car waits for a right turn on the winding road, while the red car goes straight on the main road, so the blue car must give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '216', 
            'user_id' => '1', 
            'question_list_id' => '216', 
            'explain_zh' => '蓝车行驶在主路上，不需要给岔路上的车辆让行',
            'explain_en' => 'The blue car is on the main road and does not need to give way to the vehicles on the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '217', 
            'user_id' => '1', 
            'question_list_id' => '217', 
            'explain_zh' => '不需要解释，请看答案即可',
            'explain_en' => 'No need to explain, please see the answer.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '218', 
            'user_id' => '1', 
            'question_list_id' => '218', 
            'explain_zh' => '如果地面上只有左转的箭头，那么必须跟随箭头左转',
            'explain_en' => 'If there is only a left turn arrow on the ground, then you must follow the arrow and turn left.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '219', 
            'user_id' => '1', 
            'question_list_id' => '219', 
            'explain_zh' => '八角形的红色停车让行标识，意味着无论路口是否有车，都需要先停车下来，左右双方向观察安全后再前进',
            'explain_en' => 'The octagonal red parking allows the line to be marked, meaning that regardless of whether there is a car at the intersection, it is necessary to stop it first, and then observe the safety in both directions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '220', 
            'user_id' => '1', 
            'question_list_id' => '220', 
            'explain_zh' => 'A不正确是因为你停在线的后面可能看不到双方向的车辆；C不正确是因为见到停车标识，无论是否有其他车辆都需要先停下；D不正确是因为压在停止线上可能你的车头就探出去了，可能会被主路上的车辆撞击',
            'explain_en' => 'A is incorrect because you may not see the two-way vehicle behind the line; C is incorrect because you see the parking sign, you need to stop first, whether or not there are other vehicles; D is incorrect because it is pressed on the stop line. Maybe your front of the car will go out and may be hit by the vehicle on the main road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '221', 
            'user_id' => '1', 
            'question_list_id' => '221', 
            'explain_zh' => '绿色的左转相位信号灯明确的告知你可以左转',
            'explain_en' => 'The green left-turn phase signal clearly tells you that you can turn left', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '222', 
            'user_id' => '1', 
            'question_list_id' => '222', 
            'explain_zh' => '夜间使用拖车，拖车后面必须加上红色的灯光',
            'explain_en' => 'Use the trailer at night, the red light must be added to the back of the trailer', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '223', 
            'user_id' => '1', 
            'question_list_id' => '223', 
            'explain_zh' => '即便贴在车窗上的WOF标识，也有可能是过期的车检证明，这时车辆不能上路，所以A的说法不',
            'explain_en' => 'Even if the WOF logo attached to the window may be an expired vehicle inspection certificate, the vehicle cannot be on the road, so A’s statement is not', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '224', 
            'user_id' => '1', 
            'question_list_id' => '224', 
            'explain_zh' => '超过十五岁，自己负责；小于十五岁，司机负责',
            'explain_en' => 'More than fifteen years old, responsible for himself; less than fifteen years old, the driver is responsible', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '225', 
            'user_id' => '1', 
            'question_list_id' => '225', 
            'explain_zh' => '只要开车，必须携带驾照',
            'explain_en' => 'As long as you drive, you must bring your driver`s license', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '226', 
            'user_id' => '1', 
            'question_list_id' => '226', 
            'explain_zh' => '不到十五岁的乘客安全带，由司机负责，超过十五岁，乘客自己负责',
            'explain_en' => 'The passenger seat belt, which is less than fifteen years old, is the responsibility of the driver. If the driver is over fifteen years old, the passenger is responsible for it.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '227', 
            'user_id' => '1', 
            'question_list_id' => '227', 
            'explain_zh' => '不需要解释，答案B说的很清楚了',
            'explain_en' => 'No need to explain, answer B is very clear', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '228', 
            'user_id' => '1', 
            'question_list_id' => '228', 
            'explain_zh' => '初学者驾照搭载乘客，必须经过Supervisor的同意',
            'explain_en' => 'The beginner’s license is carried by the passenger and must be approved by Supervisor.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '229', 
            'user_id' => '1', 
            'question_list_id' => '229', 
            'explain_zh' => '如果有Supervisor在车中，限制性驾照可以搭载非亲属的乘客；如果没有Supervisor，那么限制性驾照只允许搭载自己的孩子、配偶或是事实上的伴侣',
            'explain_en' => 'If a Supervisor is in the car, the restricted driver`s license can carry non-relative passengers; if there is no Supervisor, the restricted driver`s license is only allowed to carry your own child, spouse or de facto partner.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '230', 
            'user_id' => '1', 
            'question_list_id' => '230', 
            'explain_zh' => '小备胎不是全尺寸的轮胎，抓地力与其它的轮胎不相同，所以不能以高速行进，否则车辆急刹车的时候会跑偏；80公里/小时是必须死记硬背的数值',
            'explain_en' => 'The small spare tire is not a full-size tire. The grip is not the same as other tires, so it cannot travel at high speed. Otherwise, the vehicle will go off when it is suddenly braked; 80 km/h is a value that must be memorized.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '231', 
            'user_id' => '1', 
            'question_list_id' => '231', 
            'explain_zh' => '小备胎不是全尺寸的轮胎，抓地力与其它的轮胎不相同，所以不能以高速行进，否则车辆急刹车的时候会跑偏；80公里/小时是必须死记硬背的数值；小备胎不安全也不方便，应该尽快找到补胎的地方修理或是更换原始尺寸的轮胎',
            'explain_en' => 'The small spare tire is not a full-size tire. The grip is not the same as other tires, so it can`t travel at high speed. Otherwise, the vehicle will go off when it is suddenly braked; 80 km/h is the value that must be memorized; the small spare tire is not It is not convenient for safety. It should be found as soon as possible to repair or replace the original size tires.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '232', 
            'user_id' => '1', 
            'question_list_id' => '232', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '233', 
            'user_id' => '1', 
            'question_list_id' => '233', 
            'explain_zh' => '开放道路最高时速限制在100公里/小时，如果牵引拖车前进，则降低到90公里/小时',
            'explain_en' => 'The maximum speed of the open road is limited to 100 km/h, and if the towing trailer advances, it is reduced to 90 km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '234', 
            'user_id' => '1', 
            'question_list_id' => '234', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '235', 
            'user_id' => '1', 
            'question_list_id' => '235', 
            'explain_zh' => '新西兰Class 1驾照，可以驾驶排量不超过50CC的轻便摩托车(机器脚踏车)，也就是俗称的“小绵羊”，不需要使用摩托车驾照',
            'explain_en' => 'New Zealand Class 1 driver`s license, you can drive a moped with a displacement of no more than 50cc (machine bicycle), also known as the "little sheep", do not need to use a motorcycle license', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '236', 
            'user_id' => '1', 
            'question_list_id' => '236', 
            'explain_zh' => '改装车辆后，必须重新通过车辆安全性能指标检测',
            'explain_en' => 'After the vehicle is modified, it must be re-tested by the vehicle safety performance indicator.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '237', 
            'user_id' => '1', 
            'question_list_id' => '237', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '238', 
            'user_id' => '1', 
            'question_list_id' => '238', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '239', 
            'user_id' => '1', 
            'question_list_id' => '239', 
            'explain_zh' => '没有通过WOF的车辆上路，自然会被罚款，至少200一次；并且如果这辆车出现交通事故，保险公司也会拒赔',
            'explain_en' => 'If a vehicle that does not pass the WOF is on the road, it will naturally be fined at least 200 times; and if the vehicle has a traffic accident, the insurance company will also refuse to pay.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '240', 
            'user_id' => '1', 
            'question_list_id' => '240', 
            'explain_zh' => '使用拖车，必须给拖车安装红色尾灯',
            'explain_en' => 'To use the trailer, the trailer must be fitted with a red taillight', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '241', 
            'user_id' => '1', 
            'question_list_id' => '241', 
            'explain_zh' => '消声器防止产生大的噪音，工作良好的排气管会把废气排放到车辆的尾部，远离乘客舱',
            'explain_en' => 'The muffler prevents large noise, and a well-operated exhaust pipe discharges exhaust gas to the rear of the vehicle, away from the passenger compartment.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '242', 
            'user_id' => '1', 
            'question_list_id' => '242', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '243', 
            'user_id' => '1', 
            'question_list_id' => '243', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '244', 
            'user_id' => '1', 
            'question_list_id' => '244', 
            'explain_zh' => '全新车头三年不需要检测，随后一年一检验；2000年后注册的车辆也是一年一检；2000年之前的车辆半年检验一次',
            'explain_en' => 'The new car does not need to be tested for three years, and then the annual inspection; the vehicle registered after 2000 is also a one-year inspection; the vehicle before 2000 is semi-annual inspection.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '245', 
            'user_id' => '1', 
            'question_list_id' => '245', 
            'explain_zh' => '只有警官有资格拦截你，其他人都不行',
            'explain_en' => 'Only police officers are qualified to intercept you, others will not', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '246', 
            'user_id' => '1', 
            'question_list_id' => '246', 
            'explain_zh' => '全新车头三年不需要检测，随后一年一检验；2000年后注册的车辆也是一年一检；2000年之前的车辆半年检验一次',
            'explain_en' => 'The new car does not need to be tested for three years, and then the annual inspection; the vehicle registered after 2000 is also a one-year inspection; the vehicle before 2000 is semi-annual inspection.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '247', 
            'user_id' => '1', 
            'question_list_id' => '247', 
            'explain_zh' => '刹车灯不工作，别人有可能会追尾，所以赶紧去修理',
            'explain_en' => 'The brake light does not work, others may catch up, so hurry to repair', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '248', 
            'user_id' => '1', 
            'question_list_id' => '248', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '249', 
            'user_id' => '1', 
            'question_list_id' => '249', 
            'explain_zh' => '全部都正确，请看答案的描述并牢记',
            'explain_en' => 'All are correct, please see the description of the answer and keep in mind', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '250', 
            'user_id' => '1', 
            'question_list_id' => '250', 
            'explain_zh' => '不平整的道路，会有这个提示',
            'explain_en' => 'Uneven road, there will be this prompt', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '251', 
            'user_id' => '1', 
            'question_list_id' => '251', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '252', 
            'user_id' => '1', 
            'question_list_id' => '252', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '253', 
            'user_id' => '1', 
            'question_list_id' => '253', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '254', 
            'user_id' => '1', 
            'question_list_id' => '254', 
            'explain_zh' => '死记硬背题，这个标识标明双方向的车辆拥有相同的道路优先权，分左右行驶',
            'explain_en' => 'Rote memorization, this sign indicates that vehicles in both directions have the same road priority and drive around', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '255', 
            'user_id' => '1', 
            'question_list_id' => '255', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '256', 
            'user_id' => '1', 
            'question_list_id' => '256', 
            'explain_zh' => '这个标识只会出现在环岛之前，提醒司机要注意让行环岛右侧的车辆',
            'explain_en' => 'This sign will only appear in front of the roundabout, reminding the driver to pay attention to the vehicle on the right side of the roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '257', 
            'user_id' => '1', 
            'question_list_id' => '257', 
            'explain_zh' => '小心农场上的牛',
            'explain_en' => 'Beware of cattle on the farm', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '258', 
            'user_id' => '1', 
            'question_list_id' => '258', 
            'explain_zh' => '蓝底白字的P表示可以停车，30表示可以停留的最长时间',
            'explain_en' => 'P on a blue background indicates parking, and 30 indicates the longest time to stay.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '259', 
            'user_id' => '1', 
            'question_list_id' => '259', 
            'explain_zh' => '出现这个标识说明道路上有小砂石，别的车辆行驶的时候会溅起来打在你的挡风玻璃上造成裂纹',
            'explain_en' => 'This logo appears to indicate that there are small gravel on the road. When other vehicles are driving, they will splash and hit the crack on your windshield.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '260', 
            'user_id' => '1', 
            'question_list_id' => '260', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '261', 
            'user_id' => '1', 
            'question_list_id' => '261', 
            'explain_zh' => '白底红字表示只允许规定的车辆停靠，左右双方向箭头表示这块标志牌的左右两边都是公车站',
            'explain_en' => 'The red text on white indicates that only the specified vehicles are allowed to stop, and the left and right double-directional arrows indicate that the left and right sides of the sign are bus stops.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '262', 
            'user_id' => '1', 
            'question_list_id' => '262', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '263', 
            'user_id' => '1', 
            'question_list_id' => '263', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '264', 
            'user_id' => '1', 
            'question_list_id' => '264', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '265', 
            'user_id' => '1', 
            'question_list_id' => '265', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '266', 
            'user_id' => '1', 
            'question_list_id' => '266', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '267', 
            'user_id' => '1', 
            'question_list_id' => '267', 
            'explain_zh' => '无论是超高、超宽、超长、还是超重，只要是车，就必须注意限高是多少',
            'explain_en' => 'Whether it is super high, super wide, super long, or overweight, as long as it is a car, you must pay attention to the limit height.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '268', 
            'user_id' => '1', 
            'question_list_id' => '268', 
            'explain_zh' => '大号的白色箭头表示你这个方向拥有道路的优先权，对面的车辆要给你让路',
            'explain_en' => 'The large white arrow indicates that you have the priority of the road in this direction, and the opposite vehicle will give you the way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '269', 
            'user_id' => '1', 
            'question_list_id' => '269', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '270', 
            'user_id' => '1', 
            'question_list_id' => '270', 
            'explain_zh' => '不做特殊标注的情况下，公交车道允许公交车、自行车、摩托车、轻便摩托车使用',
            'explain_en' => 'Bus lanes allow buses, bicycles, motorcycles, mopeds to be used without special markings.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '271', 
            'user_id' => '1', 
            'question_list_id' => '271', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'Rote memorabilia', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '272', 
            'user_id' => '1', 
            'question_list_id' => '272', 
            'explain_zh' => '红色是救护车或救火车、红蓝双色是警车、纯黄色是道路施工和维护车辆、开道车通常都是黄紫双色的',
            'explain_en' => 'Red is an ambulance or fire truck, red and blue are police cars, pure yellow is road construction and maintenance vehicles, and road cars are usually yellow and purple.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '273', 
            'user_id' => '1', 
            'question_list_id' => '273', 
            'explain_zh' => '红色是救护车或救火车、红蓝双色是警车、纯黄色是道路施工和维护车辆、开道车通常都是黄紫双色的',
            'explain_en' => 'Red is an ambulance or fire truck, red and blue are police cars, pure yellow is road construction and maintenance vehicles, and road cars are usually yellow and purple.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '274', 
            'user_id' => '1', 
            'question_list_id' => '274', 
            'explain_zh' => '无需解释，禁止掉头的标记',
            'explain_en' => 'No need to explain, prohibit the U-turn mark', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '275', 
            'user_id' => '1', 
            'question_list_id' => '275', 
            'explain_zh' => '这是i-site的标记，也就是信息中心的指路牌',
            'explain_en' => 'This is the i-site tag, which is the signpost of the information center.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '276', 
            'user_id' => '1', 
            'question_list_id' => '276', 
            'explain_zh' => '靠左行驶标记，主要出现在道路的中央，提醒车辆在正确的方向前进',
            'explain_en' => 'The left-hand drive mark, mainly in the center of the road, reminds the vehicle to move in the right direction', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '277', 
            'user_id' => '1', 
            'question_list_id' => '277', 
            'explain_zh' => '无需解释',
            'explain_en' => 'No need to explain', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '278', 
            'user_id' => '1', 
            'question_list_id' => '278', 
            'explain_zh' => '路上有施工的情况下，需要单侧放行的时候，道路上的施工人员将人工指挥交通，请服从他们的停车请求',
            'explain_en' => 'When there is construction on the road, when the one-side release is required, the construction personnel on the road will manually direct the traffic, please obey their parking request.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '279', 
            'user_id' => '1', 
            'question_list_id' => '279', 
            'explain_zh' => '这个标识出现在学校、幼儿园附近，注意儿童过马路',
            'explain_en' => 'This logo appears near schools and kindergartens, paying attention to children crossing the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '280', 
            'user_id' => '1', 
            'question_list_id' => '280', 
            'explain_zh' => '人行横道的标记，死记硬背题',
            'explain_en' => 'Crosswalk mark', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '281', 
            'user_id' => '1', 
            'question_list_id' => '281', 
            'explain_zh' => '铁道交叉口标记，死记硬背题',
            'explain_en' => 'Railway crossing mark, rote hardback', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '282', 
            'user_id' => '1', 
            'question_list_id' => '282', 
            'explain_zh' => '砂石路面，溅起来的石子会把风挡玻璃打出裂纹，所以要慢速前进',
            'explain_en' => 'On gravel roads, the stones that are splashed will crack the windshield, so move slowly.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '283', 
            'user_id' => '1', 
            'question_list_id' => '283', 
            'explain_zh' => '开放道路标记，表示从这个标记后所有之前的限速要求全部取消，但是最高速度不能超过100公里/小时',
            'explain_en' => 'Open road marking, indicating that all previous speed limit requests are cancelled after this marking, but the maximum speed cannot exceed 100 km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '284', 
            'user_id' => '1', 
            'question_list_id' => '284', 
            'explain_zh' => '限速标志，新西兰境内以公里/小时计算，所以是70公里/小时',
            'explain_en' => 'The speed limit sign is calculated in kilometers/hour in New Zealand, so it is 70 km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '285', 
            'user_id' => '1', 
            'question_list_id' => '285', 
            'explain_zh' => '左侧车道可能有临时施工因而关闭，需要左边的车流与右侧的汇集在一起，注意让行',
            'explain_en' => 'The left lane may have temporary construction and thus close, and the left traffic flow needs to be brought together with the right side.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '286', 
            'user_id' => '1', 
            'question_list_id' => '286', 
            'explain_zh' => '居民区最常见的限速，意思是最高前进速度不能超过50公里/小时',
            'explain_en' => 'The most common speed limit in residential areas means that the maximum forward speed cannot exceed 50 km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '287', 
            'user_id' => '1', 
            'question_list_id' => '287', 
            'explain_zh' => '不管是蓝底白字还是黄底黑字，只要有ACCIDENT的字样就应该把车速降到20公里/小时',
            'explain_en' => 'Whether it is white on a blue background or black on a yellow background, as long as there is the word ACCIDENT, the speed should be reduced to 20 km / h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '288', 
            'user_id' => '1', 
            'question_list_id' => '288', 
            'explain_zh' => 'C代表窄桥梁标识，同时你的方向需要让行对面的车辆；因而这个标识不会出现在火车道口',
            'explain_en' => 'C stands for the narrow bridge sign, and your direction needs to make the opposite side of the vehicle; therefore this sign does not appear at the train crossing', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '289', 
            'user_id' => '1', 
            'question_list_id' => '289', 
            'explain_zh' => '你这边是白色较大的箭头，代表着你有道路的优先通过权',
            'explain_en' => 'Your side is a white arrow, which means that you have the right to pass the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '290', 
            'user_id' => '1', 
            'question_list_id' => '290', 
            'explain_zh' => '这个标记标明弯道比较急，下面的数字是推荐的时速，你可以超过这个速度，不犯法，但是可能过弯过得不舒服',
            'explain_en' => 'This mark indicates that the curve is more urgent. The number below is the recommended speed. You can exceed this speed, don`t break the law, but may be too uncomfortable.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '291', 
            'user_id' => '1', 
            'question_list_id' => '291', 
            'explain_zh' => '见到事故标记，必须以20公里/小时的速度前进',
            'explain_en' => 'When you see the accident mark, you must advance at a speed of 20 km / h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '292', 
            'user_id' => '1', 
            'question_list_id' => '292', 
            'explain_zh' => '天气良好的情况下，小型车辆在道路最高限速为100公里；如果你驾驶的是卡车或者牵引着拖车，那么最高时速为90公里/小时',
            'explain_en' => 'In good weather, small vehicles have a top speed limit of 100 km; if you are driving a truck or hauling a trailer, the top speed is 90 km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '502', 
            'user_id' => '1', 
            'question_list_id' => '502', 
            'explain_zh' => '有一条让路规则适用于任何车辆，具体取决于其转向的方向。',
            'explain_en' => 'There is a give way rule that applies to any vehicle based upon which direction it is turning.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '503', 
            'user_id' => '1', 
            'question_list_id' => '503', 
            'explain_zh' => '如果车里没人，不能在这里停车',
            'explain_en' => 'You should not leave your car unattended too close to this marking.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '504', 
            'user_id' => '1', 
            'question_list_id' => '504', 
            'explain_zh' => '这个信号能让公交车优先通过',
            'explain_en' => 'This traffic signal is used to expedite public transport.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '505', 
            'user_id' => '1', 
            'question_list_id' => '505', 
            'explain_zh' => '这个标志告诉司机他们最快可以走多快。',
            'explain_en' => 'This sign tells drivers how fast they may go.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '506', 
            'user_id' => '1', 
            'question_list_id' => '506', 
            'explain_zh' => '您必须在限速范围内安全行驶。',
            'explain_en' => 'You must drive safely within the speed limit.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '507', 
            'user_id' => '1', 
            'question_list_id' => '507', 
            'explain_zh' => '车上必须有证才能停，否则罚款没商量',
            'explain_en' => 'This park is designed to assist those who may have difficulty with mobility or entering and exiting their vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '508', 
            'user_id' => '1', 
            'question_list_id' => '508', 
            'explain_zh' => '选择范围最大的就对了',
            'explain_en' => 'The legal definition of a road is broad, so you should drive accordingly.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '509', 
            'user_id' => '1', 
            'question_list_id' => '509', 
            'explain_zh' => '让路标志 比 停车标志 优先级高',
            'explain_en' => 'Stop signs and Give Way signs are not equal.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '510', 
            'user_id' => '1', 
            'question_list_id' => '510', 
            'explain_zh' => '一般停在这里仅限于装卸货物',
            'explain_en' => 'Vehicles may park here for a limited time only.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '511', 
            'user_id' => '1', 
            'question_list_id' => '511', 
            'explain_zh' => '车检要求轮胎深度必须大于1.5mm。当胎面深度小于1mm的轮胎为保证安全，应予以更换。',
            'explain_en' => 'Tyres with one millimetre of tread should be replaced.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '512', 
            'user_id' => '1', 
            'question_list_id' => '512', 
            'explain_zh' => '让行规则，死记硬背，主路直行 > 主路转弯 > 支路直行 > 支路小弯 > 支路大弯',
            'explain_en' => 'Give way rules are in place to remove any uncertainty over who may go first on New Zealand`s roads.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '513', 
            'user_id' => '1', 
            'question_list_id' => '513', 
            'explain_zh' => '通常，迎面驶来的汽车会因为您的驾驶员睡着或分神而进入您的车道。按喇叭闪灯让对面车注意',
            'explain_en' => 'Often an oncoming car will enter your lane because its driver is asleep or distracted.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '514', 
            'user_id' => '1', 
            'question_list_id' => '514', 
            'explain_zh' => '如果还有一个绿色的右箭头，那么证明对面直行是红灯，您可以不用给直行车辆和行人让路',
            'explain_en' => 'Generally green means go.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '515', 
            'user_id' => '1', 
            'question_list_id' => '515', 
            'explain_zh' => '你这样超车非常不安全，任何情况，您都需要在后面等着',
            'explain_en' => 'Pedestrian crossings allow pedestrians to safely cross the road. Drivers must take care in these areas.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '516', 
            'user_id' => '1', 
            'question_list_id' => '516', 
            'explain_zh' => '不系安全带会被罚款，已满15周岁罚本人，不满15周岁罚司机',
            'explain_en' => 'Safety belts save lives.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '517', 
            'user_id' => '1', 
            'question_list_id' => '517', 
            'explain_zh' => '正常跟车2秒规则，雨天是4秒规则，您可以计算与前车距离通过这些规则。',
            'explain_en' => 'You can measure your following distance by counting how may seconds pass between the car ahead and your car passing a marker.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '518', 
            'user_id' => '1', 
            'question_list_id' => '518', 
            'explain_zh' => '不解释，记住了，你敢停，警察就敢罚',
            'explain_en' => 'You must not park in front of a bus stop sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '519', 
            'user_id' => '1', 
            'question_list_id' => '519', 
            'explain_zh' => '不系安全带会被罚款，已满15周岁罚本人，不满15周岁罚司机，驾驶员对年轻乘客的安全负责。',
            'explain_en' => 'The driver is responsible for the safety of younger passengers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '520', 
            'user_id' => '1', 
            'question_list_id' => '520', 
            'explain_zh' => '在离开车之前，您应该确保自己的汽车安全。手动挡上坡驻车挂一档，下坡驻车挂倒档。如果题目没有指定上坡下坡，默认选1挡，手动挡车注意，点火前千万不要忘了放到空挡！',
            'explain_en' => 'You should ensure that your car is secure before you leave it unattended.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '521', 
            'user_id' => '1', 
            'question_list_id' => '521', 
            'explain_zh' => '超速可能会导致罚款，法院判处罚款和累积记分。如果您累积了太多的记分，您的执照将被暂停。一旦您扣了超过50分（含），您将收到一封警告信。',
            'explain_en' => 'Committing a driving offense can result in a fine, a court imposed penalty, and the accumulation of demerit points. Your license will be suspended if you accumulate too many demerit points. You will receive a warning letter once you receive 50 or more points.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '522', 
            'user_id' => '1', 
            'question_list_id' => '522', 
            'explain_zh' => '限制性驾照可以自由载客，但必须得到superviser的同意。',
            'explain_en' => 'A restricted licence holder can freely carry passengers, but only while accompanied by a supervisor.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '523', 
            'user_id' => '1', 
            'question_list_id' => '523', 
            'explain_zh' => '双闪就是告诉其他车辆你可能已经抛锚，让你更容易被其他车辆注意到',
            'explain_en' => 'Your hazard lights make your car more visible to other motorists. They do not give you clearance to ignore the road rules.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '524', 
            'user_id' => '1', 
            'question_list_id' => '524', 
            'explain_zh' => '您需要确保粘贴了健身保证（WoF）标签，并且您的汽车适合驾驶。警察很NB，啥时候想查就查。',
            'explain_en' => 'You are required to ensure that your Warrant of Fitness (WoF) label is attached and that your car is fit to drive. The police do have the power to check and enforce this.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '525', 
            'user_id' => '1', 
            'question_list_id' => '525', 
            'explain_zh' => '自行车，摩托车，汽车，都是一个行车单位，规则当然也是一样的',
            'explain_en' => 'Pedestrians and cyclists are much more vulnerable than motorists. Drive with care.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '526', 
            'user_id' => '1', 
            'question_list_id' => '526', 
            'explain_zh' => '您应将车辆停在与车流相同的方向上。',
            'explain_en' => 'You should park in the same direction as the flow of traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '527', 
            'user_id' => '1', 
            'question_list_id' => '527', 
            'explain_zh' => '某些汽车熄火后将转向灯打到右边，右侧示宽灯亮，这样晚上能让其他车辆看到你。然而，这种做法大约2天将耗尽电池的电。尽量不要晚上将汽车停在路旁，否则其他驾驶员将不容易看到它。',
            'explain_en' => 'You should not park your car by the road at night where it will not be easily visible to other motorists.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '528', 
            'user_id' => '1', 
            'question_list_id' => '528', 
            'explain_zh' => '在某些情况下，您可以在公交专用道上短暂行驶。但是注意，如果道路写了BUS ONLY 那么任何情况，您都不能占有这条车道',
            'explain_en' => 'You are permitted to briefly drive in a bus lane under certain circumstances.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '529', 
            'user_id' => '1', 
            'question_list_id' => '529', 
            'explain_zh' => '老生常谈，让行规则，主路直行 > 主路转弯 > 支路直行 > 支路小弯 > 支路大弯',
            'explain_en' => 'Two cars facing Stop signs should follow the standard give way rules.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '530', 
            'user_id' => '1', 
            'question_list_id' => '530', 
            'explain_zh' => '一般修路时候能见到，告诉驾驶员应该从哪里走',
            'explain_en' => 'This sign may help motorists find their way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '531', 
            'user_id' => '1', 
            'question_list_id' => '531', 
            'explain_zh' => '死记硬背，数字题，您只应在安全且有足够安全空间的地方通过骑自行车的人。您应该设法与所骑行的自行车手保持最小距离。',
            'explain_en' => 'You should only pass a cyclist where it is safe and where there is enough room to proceed safely. There is a minimum distance you should try to maintain from any cyclist you are passing.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '532', 
            'user_id' => '1', 
            'question_list_id' => '532', 
            'explain_zh' => '某些车辆在通过T型道口之前，可能因为它过大，影响你的视线。',
            'explain_en' => 'Certain vehicles are required to take extra precautions before crossing a level crossing.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '533', 
            'user_id' => '1', 
            'question_list_id' => '533', 
            'explain_zh' => '您的后雾灯会产生强烈的向后红光。后车驾驶员长时间看到这种灯光，会令人烦躁',
            'explain_en' => 'Your rear fog lights produce an intense rear facing red light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '534', 
            'user_id' => '1', 
            'question_list_id' => '534', 
            'explain_zh' => '此标志将在没有速度限制的区域内使用。',
            'explain_en' => 'This sign will be used in an area without posted speed limits.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '535', 
            'user_id' => '1', 
            'question_list_id' => '535', 
            'explain_zh' => '这些迹象警告即将发生事故。您应该准备停止并继续小心。',
            'explain_en' => 'These signs warn that there is an accident ahead. You should prepare to stop and proceed with care.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '536', 
            'user_id' => '1', 
            'question_list_id' => '536', 
            'explain_zh' => '20岁以下0容忍，20岁以上呼吸不超过250mcg，血液酒精浓度应不超过50毫克。',
            'explain_en' => 'The blood alcohol concentration should be no more than 50 mg.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '537', 
            'user_id' => '1', 
            'question_list_id' => '537', 
            'explain_zh' => '车辆可以在消防栓处停车，但是车里必须有驾驶员。',
            'explain_en' => 'You must not leave a vehicle unattended on or too near a blue cat`s eye marker.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '538', 
            'user_id' => '1', 
            'question_list_id' => '538', 
            'explain_zh' => '死记硬背，限制性驾照晚上不能开车',
            'explain_en' => 'A restricted license holder can drive unsupervised between certain hours.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '539', 
            'user_id' => '1', 
            'question_list_id' => '539', 
            'explain_zh' => '如果您选择酒后驾车，总有被抓的机会。',
            'explain_en' => 'There is always a chance that you will be caught if you choose to drink and drive.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '540', 
            'user_id' => '1', 
            'question_list_id' => '540', 
            'explain_zh' => '如果看不到行进路线，就无法开车。向左看可以减少眩光',
            'explain_en' => 'You cannot drive if you cannot see where you are going. Take care and don`t do anything that will make the situation any more dangerous.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '541', 
            'user_id' => '1', 
            'question_list_id' => '541', 
            'explain_zh' => '沟通是道路安全的重要组成部分。',
            'explain_en' => 'Communication is an important part of road safety.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '542', 
            'user_id' => '1', 
            'question_list_id' => '542', 
            'explain_zh' => '警告三角形，你车里就有，任何人车只要抛锚了，就需要在车后面放上这个，防止追尾。',
            'explain_en' => 'Warning triangles are temporary signs that can be placed by anyone.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '543', 
            'user_id' => '1', 
            'question_list_id' => '543', 
            'explain_zh' => '如果您在clearway上停车，可能会面临罚款的风险。',
            'explain_en' => 'You risk more than a fine if you park in a clearway.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '544', 
            'user_id' => '1', 
            'question_list_id' => '544', 
            'explain_zh' => '您任何情况下都不能停在人行横道上，您不得阻塞行人或交通流量。',
            'explain_en' => 'You must not block the flow of pedestrians or traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '545', 
            'user_id' => '1', 
            'question_list_id' => '545', 
            'explain_zh' => '如果标志不全，请给右侧让路。',
            'explain_en' => 'When in doubt, give way to your right.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '546', 
            'user_id' => '1', 
            'question_list_id' => '546', 
            'explain_zh' => '更高的超速驾驶犯罪会自动吊销驾照。对于那些在具有永久（非临时）速度限制的区域超速行驶的人尤其如此。',
            'explain_en' => 'Higher range speeding offenses attract an automatic license suspension. This is especially true for those who are caught speeding in an area with a permanent (non-temporary) speed limit.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '547', 
            'user_id' => '1', 
            'question_list_id' => '547', 
            'explain_zh' => '记住吧。',
            'explain_en' => 'Road signs are used to regulate where U-turns may be performed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '548', 
            'user_id' => '1', 
            'question_list_id' => '548', 
            'explain_zh' => '这个标志可以让司机更容易找到道路在哪，不至于行驶到对向道路上去',
            'explain_en' => 'This signs tells motorists where they may drive.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '549', 
            'user_id' => '1', 
            'question_list_id' => '549', 
            'explain_zh' => '小心，您的车可能无法承受任何超出前排座椅前缘的负载。',
            'explain_en' => 'You may not drive with any load that extends too far beyond the front edge of the front seat.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '550', 
            'user_id' => '1', 
            'question_list_id' => '550', 
            'explain_zh' => '没驾照，不能开车，easy！',
            'explain_en' => 'A suspension will effectively cancel your licence.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '551', 
            'user_id' => '1', 
            'question_list_id' => '551', 
            'explain_zh' => '停车标志可能放置在繁忙和危险的区域。不论任何情况，您必须完全停止3秒，然后根据车况决定能否继续前进',
            'explain_en' => 'Stop signs may be placed in busier and more dangerous areas.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '552', 
            'user_id' => '1', 
            'question_list_id' => '552', 
            'explain_zh' => '你必须礼貌地开车。考虑其他驾驶者的需求。',
            'explain_en' => 'You must drive courteously. Consider the needs of other motorists.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '553', 
            'user_id' => '1', 
            'question_list_id' => '553', 
            'explain_zh' => '在山坡上停车时，应正确放置前轮。如果您的驻车制动器失效，您的车不至于滑到马路中央。',
            'explain_en' => 'You should position your front wheels correctly when you park on a hill. This will stop your car from rolling should your parking brake fail.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '554', 
            'user_id' => '1', 
            'question_list_id' => '554', 
            'explain_zh' => '老生常谈，让行规则，主路直行 > 主路转弯 > 支路直行 > 支路小弯 > 支路大弯',
            'explain_en' => 'Turning vehicles must be prepared to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '555', 
            'user_id' => '1', 
            'question_list_id' => '555', 
            'explain_zh' => '限速标志就是限速，任何时候，您必须按照标志执行。',
            'explain_en' => 'Road work areas may have restrictions in place for the safety of motorists and road workers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '556', 
            'user_id' => '1', 
            'question_list_id' => '556', 
            'explain_zh' => '在任何的道路有弯的地方，超车，变道都是不可以的。',
            'explain_en' => 'You must consider the road layout, conditions, and whether your signals would be misleading before you pass anyone.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '557', 
            'user_id' => '1', 
            'question_list_id' => '557', 
            'explain_zh' => '紧急情况下，ABS可以保证车轮不抱死，达到最短的制动距离。高速情况下，使用手刹会让你甩尾，容易发生危险！',
            'explain_en' => 'ABS stands for Anti-Lock Braking System.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '558', 
            'user_id' => '1', 
            'question_list_id' => '558', 
            'explain_zh' => '能考虑的都要考虑，这样才能更安全',
            'explain_en' => 'You should always drive lawfully and to the conditions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '559', 
            'user_id' => '1', 
            'question_list_id' => '559', 
            'explain_zh' => '每位乘客必须系上安全带或儿童约束装置。',
            'explain_en' => 'Every passenger must wear a safety belt or child restraint. You must not drive a vehicle if doing so will endanger a child.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '560', 
            'user_id' => '1', 
            'question_list_id' => '560', 
            'explain_zh' => '该标志警告即将到来的弯道，并给出速度建议，防止车辆失控。',
            'explain_en' => 'This sign warns of an upcoming corner and recommends a speed for said corner.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '561', 
            'user_id' => '1', 
            'question_list_id' => '561', 
            'explain_zh' => '幼儿必须坐在经批准的儿童座椅中。',
            'explain_en' => 'Young children must be seated in an approved child restraint.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '562', 
            'user_id' => '1', 
            'question_list_id' => '562', 
            'explain_zh' => '很难预测酒精会如何影响您，所以不要酒后驾车',
            'explain_en' => 'It can be hard to predict how alcohol will affect you.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '563', 
            'user_id' => '1', 
            'question_list_id' => '563', 
            'explain_zh' => '您应谨慎通过此标志。',
            'explain_en' => 'You should proceed passed this sign with caution.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '564', 
            'user_id' => '1', 
            'question_list_id' => '564', 
            'explain_zh' => '通常，迎面驶来的汽车会因为您的驾驶员睡着或分神而进入您的车道。因此，您应该计划一条躲避路线，以避免正面碰撞。请注意，遇到这种情况，需要使用喇叭和远光灯提醒对面的驾驶员！',
            'explain_en' => 'Often an oncoming car will enter your lane because its driver is asleep or distracted. You should therefore plan an escape route to avoid a head-on collision. Be aware that a near collision may wake up the oncoming driver at the last minute. This may cause the startled oncoming driver to swerve suddenly and re-enter their correct lane, regardless of where you are driving.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '565', 
            'user_id' => '1', 
            'question_list_id' => '565', 
            'explain_zh' => '交通箭头控制着沿特定方向移动的交通流。',
            'explain_en' => 'Traffic arrows control the flow of traffic that is moving in a certain direction. Non-directional round signals direct the remaining traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '566', 
            'user_id' => '1', 
            'question_list_id' => '566', 
            'explain_zh' => '这个是禁止短时间和长时间停车的标志。',
            'explain_en' => 'A clearway limits where motorists may park.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '567', 
            'user_id' => '1', 
            'question_list_id' => '567', 
            'explain_zh' => '停车时，您必须在任何车辆入口旁边至少留一个小间隙。这样别人家进车的时候也可以尽可能保证不刮到你的车',
            'explain_en' => 'You must leave at least a small clearance beside any vehicle entrance when you park.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '568', 
            'user_id' => '1', 
            'question_list_id' => '568', 
            'explain_zh' => '限速标志在你过限速标志的时候就生效了，意思是你必须以不大于50的速度过限速牌',
            'explain_en' => 'Speed limit signs illustrate an area`s maximum speed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '569', 
            'user_id' => '1', 
            'question_list_id' => '569', 
            'explain_zh' => '你需要注意提前12秒的距离中所有可能发生的情况',
            'explain_en' => 'You should look well ahead while you drive to identify hazards early.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '570', 
            'user_id' => '1', 
            'question_list_id' => '570', 
            'explain_zh' => '2000年前的车半年一检，2000年后的车1年一检',
            'explain_en' => 'Your Warrant of Fitness (WoF) label demonstrates that your car is safe and lawful to drive on New Zealand`s roads.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '571', 
            'user_id' => '1', 
            'question_list_id' => '571', 
            'explain_zh' => '限速标志，不解释',
            'explain_en' => 'This sign tells motorists what the speed limit is.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '572', 
            'user_id' => '1', 
            'question_list_id' => '572', 
            'explain_zh' => '中央隔离带是用来转弯待转的，并不是用来超车的',
            'explain_en' => 'Flush medians may be used by vehicles before and directly after they perform a turn.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '573', 
            'user_id' => '1', 
            'question_list_id' => '573', 
            'explain_zh' => '您应尽可能避开高压线掉落的任何地方。',
            'explain_en' => 'You should avoid any area with fallen power lines if at all possible.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '574', 
            'user_id' => '1', 
            'question_list_id' => '574', 
            'explain_zh' => '您不得阻碍交通。',
            'explain_en' => 'You must not block the flow of traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '575', 
            'user_id' => '1', 
            'question_list_id' => '575', 
            'explain_zh' => '车顶载物，注意不要刮到其他车辆',
            'explain_en' => 'Your load must not extend too far out from the centre of your vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '576', 
            'user_id' => '1', 
            'question_list_id' => '576', 
            'explain_zh' => '绿色表示安全进行。',
            'explain_en' => 'Green means safely proceed.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '577', 
            'user_id' => '1', 
            'question_list_id' => '577', 
            'explain_zh' => '使用手机将会影响您的判断力，除非紧急情况，不要使用手机',
            'explain_en' => 'Hand held cell phones can take a driver`s attention away from the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '578', 
            'user_id' => '1', 
            'question_list_id' => '578', 
            'explain_zh' => '遇到这种车辆，你不需要靠边停车或者让行',
            'explain_en' => 'You may not be required to pull over or stop for this vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '579', 
            'user_id' => '1', 
            'question_list_id' => '579', 
            'explain_zh' => '通常在狭窄的单向路段附近会发现此标志。谁的标志粗谁先行。',
            'explain_en' => 'This sign will often be found near a narrow one-way section of road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '580', 
            'user_id' => '1', 
            'question_list_id' => '580', 
            'explain_zh' => '如果您的驻车制动器失效，您的齿轮将有助于阻止汽车溜车。如果您的汽车很重或山坡陡峭，请保持正确的档位很重要。',
            'explain_en' => 'Your gears will help stop your car from rolling should your parking brake fail. It is important to leave your car in the correct gear if your car is heavy or the hill is steep.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '581', 
            'user_id' => '1', 
            'question_list_id' => '581', 
            'explain_zh' => '通过上下乘客停下来的校车时，您必须以慢速行驶。',
            'explain_en' => 'You must drive at a slow speed while you pass any school bus that has stopped for passengers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '582', 
            'user_id' => '1', 
            'question_list_id' => '582', 
            'explain_zh' => '黄灯也意味着停车，没想到吧！',
            'explain_en' => 'A yellow light is used to clear an intersection before a red light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '583', 
            'user_id' => '1', 
            'question_list_id' => '583', 
            'explain_zh' => '驾驶员应在进入环岛之前和离开环岛之前打转向信号。',
            'explain_en' => 'The driver should signal before entering and before leaving the roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '584', 
            'user_id' => '1', 
            'question_list_id' => '584', 
            'explain_zh' => '您必须停车并停下来，让红色车辆优先行驶。某些装有这些照明灯的车辆有权让您靠边停车，而让其他车辆快速通过。',
            'explain_en' => 'You must pull over and stop for a vehicle with red flashing lights. Certain vehicles fitted with these lights have the right to pull you over while others may merely need to quickly pass.', 
            'like' => '1',
            ]);
            
            
            
            DB::table('explains')->insert([ 
            'id' => '586', 
            'user_id' => '1', 
            'question_list_id' => '586', 
            'explain_zh' => '在引擎故障后，发动机已经失灵，请不要使用发动机制动，您应该尽快安全地离开道路。请记住正确地选项。',
            'explain_en' => 'You should aim to safely pull off the road as soon as possible after suffering an engine failure. Remember to indicate correctly.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '587', 
            'user_id' => '1', 
            'question_list_id' => '587', 
            'explain_zh' => '在地震中开车可能很危险。在地震期间，道路可能会移动，折断，改变形状。',
            'explain_en' => 'Driving during an earthquake can be dangerous. The road may move, break, change shape, or be littered with debris during the event.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '588', 
            'user_id' => '1', 
            'question_list_id' => '588', 
            'explain_zh' => '在进入环岛执行转弯之前和退出环岛之前，您应该发出信号。',
            'explain_en' => 'You should signal before you enter a roundabout to perform a turn and before you exit a roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '589', 
            'user_id' => '1', 
            'question_list_id' => '589', 
            'explain_zh' => '靠近火车路口，不能超车',
            'explain_en' => 'You must not pass another car when you are too close to a level crossing.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '590', 
            'user_id' => '1', 
            'question_list_id' => '590', 
            'explain_zh' => '您不得将车停在任何车道的入口处。',
            'explain_en' => 'You must not park across the entrance to any driveway.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '591', 
            'user_id' => '1', 
            'question_list_id' => '591', 
            'explain_zh' => '闪烁的灯光，障碍物和警钟用于警告驾驶员火车来了。',
            'explain_en' => 'Flashing lights, barriers, and warning bells are used to warn motorists of approaching trains.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '592', 
            'user_id' => '1', 
            'question_list_id' => '592', 
            'explain_zh' => 'ABS代表防抱死制动系统，没有这个系统的车辆驾驶员一定要保证紧急制动时候轮胎不打滑',
            'explain_en' => 'ABS stands for Anti-Lock Braking System.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '593', 
            'user_id' => '1', 
            'question_list_id' => '593', 
            'explain_zh' => '有时会使用黄色的闪烁灯来标记前方危险',
            'explain_en' => 'Yellow flashing lights are sometimes used to mark out hazards.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '594', 
            'user_id' => '1', 
            'question_list_id' => '594', 
            'explain_zh' => '您不得阻止其他车辆驶过您。如果可行，您应该帮助其他驾驶员超过您。被超时，请不要执行任何不可预测的动作。',
            'explain_en' => 'You must not stop another car from passing you. You should help the other driver pass you if it is practical. Try not to perform any unpredictable actions while you are being overtaken.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '595', 
            'user_id' => '1', 
            'question_list_id' => '595', 
            'explain_zh' => '如果可以，尽早进入隔离带可以减少对其他车辆的影响',
            'explain_en' => 'There are times when you may drive over a diagonally striped area of road before a right turn bay.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '596', 
            'user_id' => '1', 
            'question_list_id' => '596', 
            'explain_zh' => '您可以在转弯之前短暂进入公交专用道。',
            'explain_en' => 'You may briefly enter a bus lane before you make a turn.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '597', 
            'user_id' => '1', 
            'question_list_id' => '597', 
            'explain_zh' => '学校交叉口周围的交通可能由学校交叉口巡逻队（一般是学生志愿者）控制。驾驶员必须在这种停车标志之前停车。',
            'explain_en' => 'Traffic around school crossings may be controlled by a school crossing patrol. Drivers will have to stop before a raised handheld Stop sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '598', 
            'user_id' => '1', 
            'question_list_id' => '598', 
            'explain_zh' => '在这里停车会被拖车罚款！',
            'explain_en' => 'This sign affects where motorists may park.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '599', 
            'user_id' => '1', 
            'question_list_id' => '599', 
            'explain_zh' => '这种是推荐时速标志，通常会在弯道，拐角找到该标志。',
            'explain_en' => 'This sign will often be found attached to a warning sign for a curve, corner, or bend in the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '600', 
            'user_id' => '1', 
            'question_list_id' => '600', 
            'explain_zh' => '校车正在上下儿童，那么社会车辆必须要以不超过20公里',
            'explain_en' => 'You must slow down to a safe and lawful speed and pass with care.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '601', 
            'user_id' => '1', 
            'question_list_id' => '601', 
            'explain_zh' => '一般右侧车道是超车道',
            'explain_en' => 'Some lanes should be reserved for faster vehicles.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '602', 
            'user_id' => '1', 
            'question_list_id' => '602', 
            'explain_zh' => 'Loading Zone 可以接送乘客和装卸货物',
            'explain_en' => 'This is a loading zone where you may temporarily park.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '603', 
            'user_id' => '1', 
            'question_list_id' => '603', 
            'explain_zh' => 'Learner司机必须获得Supervisor的允许才能上路',
            'explain_en' => 'A supervisor driver must be appropriately licenced and experienced in the class of vehicle being driven.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '604', 
            'user_id' => '1', 
            'question_list_id' => '604', 
            'explain_zh' => '您必须停车并停下来，让烁蓝灯的车辆行驶。这些车辆有权让您停下来检查您的车辆。',
            'explain_en' => 'You must pull over and stop for a vehicle with blue flashing lights. These vehicles have the right to pull you over and inspect your vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '605', 
            'user_id' => '1', 
            'question_list_id' => '605', 
            'explain_zh' => '看到此标志后，您应该放慢速度并准备让行。',
            'explain_en' => 'You should slow down and prepare to give way after you see this sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '606', 
            'user_id' => '1', 
            'question_list_id' => '606', 
            'explain_zh' => '您的 WoF 标签表明您的汽车在新西兰的道路上行驶是安全合法的。',
            'explain_en' => 'Your Warrant of Fitness (WoF) label demonstrates that your car is safe and lawful to drive on New Zealand`s roads.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '607', 
            'user_id' => '1', 
            'question_list_id' => '607', 
            'explain_zh' => '这条车道的设计优先考虑了多人乘车。这是一条T3车道。',
            'explain_en' => 'Transit lanes are designed to give priority to vehicles with multiple occupants. This is a T3 transit lane.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '608', 
            'user_id' => '1', 
            'question_list_id' => '608', 
            'explain_zh' => '有一条让路规则适用于需要从车道进入主路的任何车辆。',
            'explain_en' => 'There is a give way rule that applies to any vehicle that needs to enter the road from a driveway.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '609', 
            'user_id' => '1', 
            'question_list_id' => '609', 
            'explain_zh' => '费用一般不在牌子上显示',
            'explain_en' => 'You may park in front of this sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '610', 
            'user_id' => '1', 
            'question_list_id' => '610', 
            'explain_zh' => '晴朗天气2秒规则，恶略天气4买秒规则',
            'explain_en' => 'You can measure your following distance by counting how may seconds pass between the car ahead and your car passing a marker.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '611', 
            'user_id' => '1', 
            'question_list_id' => '611', 
            'explain_zh' => '您必须确保所有儿童均得到正确且安全的保护。请注意安全气囊的位置，因为它们会危害儿童安全。',
            'explain_en' => 'You must make sure any children are properly and safely secured. Be aware of the location of airbags as they are not designed to work with child safety devices.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '612', 
            'user_id' => '1', 
            'question_list_id' => '612', 
            'explain_zh' => '大灯将使您的汽车对其他驾驶员更可见。如果使用正确，它们还将提高您看到前方道路的能力。',
            'explain_en' => 'Your headlights will make your car more visible to other drivers. If used correctly, they will also improve your ability to see the road ahead.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '613', 
            'user_id' => '1', 
            'question_list_id' => '613', 
            'explain_zh' => '如果您认为酒精测试结果不正确，则可以采取某种手段。',
            'explain_en' => 'You do have some means of recourse if you feel a positive alcohol test result is in error.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '614', 
            'user_id' => '1', 
            'question_list_id' => '614', 
            'explain_zh' => '人行横道为行人提供过马路的安全通道。',
            'explain_en' => 'Pedestrian crossings provide safe passage for pedestrians to cross the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '615', 
            'user_id' => '1', 
            'question_list_id' => '615', 
            'explain_zh' => '您必须停车，让闪烁蓝灯和红灯的车辆行驶。这些车辆有权让你靠边停车。',
            'explain_en' => 'You must pull over and stop for a vehicle with blue and red flashing lights. These vehicles have the right to pull you over.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '616', 
            'user_id' => '1', 
            'question_list_id' => '616', 
            'explain_zh' => '老生常谈，让行规则，主路先行',
            'explain_en' => 'Vehicles on the through-road of a T-intersection have priority.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '617', 
            'user_id' => '1', 
            'question_list_id' => '617', 
            'explain_zh' => '冒烟的车辆有害于公共健康，环境和道路安全。',
            'explain_en' => 'Vehicles that emit smoke are harmful to public health, the environment, and road safety. Therefore, there are limits as to how much smoke your vehicle may emit before it is deemed unfit for use.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '618', 
            'user_id' => '1', 
            'question_list_id' => '618', 
            'explain_zh' => '许可证持有人受到拖车重量的限制。',
            'explain_en' => 'License holders are subject to trailer weight restrictions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '619', 
            'user_id' => '1', 
            'question_list_id' => '619', 
            'explain_zh' => '当您接近“Give Way”标志时，您应该准备停车准备。',
            'explain_en' => 'You should prepare to encounter traffic as you approach a Give Way sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '620', 
            'user_id' => '1', 
            'question_list_id' => '620', 
            'explain_zh' => '该交通信号用于加快公共交通。',
            'explain_en' => 'This traffic signal is used to expedite public transport.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '621', 
            'user_id' => '1', 
            'question_list_id' => '621', 
            'explain_zh' => '在某些情况下，您只能在左侧超过',
            'explain_en' => 'You can only pass on the left under certain conditions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '622', 
            'user_id' => '1', 
            'question_list_id' => '622', 
            'explain_zh' => '您应始终小心地腾出车辆。',
            'explain_en' => 'You should always vacate your vehicle with care.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '623', 
            'user_id' => '1', 
            'question_list_id' => '623', 
            'explain_zh' => '通常在狭窄的单向路段附近会发现此标志。',
            'explain_en' => 'This sign will often be found near a narrow one-way section of road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '624', 
            'user_id' => '1', 
            'question_list_id' => '624', 
            'explain_zh' => '对于年轻的驾驶员有严格的限制。',
            'explain_en' => 'There are strict limits in place for younger drivers.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '625', 
            'user_id' => '1', 
            'question_list_id' => '625', 
            'explain_zh' => '您必须打转向够长的时间，以将您的意图传达给其他驾驶员。',
            'explain_en' => 'You must indicate for long enough to communicate your intentions to other road users. There is a legally set minimum number of seconds for which you must indicate.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '626', 
            'user_id' => '1', 
            'question_list_id' => '626', 
            'explain_zh' => '在道路工作区附近可能会发现诸如此类的标志。',
            'explain_en' => 'A sign such as this may be found around a road work zone.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '627', 
            'user_id' => '1', 
            'question_list_id' => '627', 
            'explain_zh' => '绿色意味着走。',
            'explain_en' => 'Green means go.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '628', 
            'user_id' => '1', 
            'question_list_id' => '628', 
            'explain_zh' => '您的鸣笛可以帮助您警告其他道路使用者有危险或危险情况。',
            'explain_en' => 'Your horn can help you alert other road users of a hazard or dangerous situation.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '629', 
            'user_id' => '1', 
            'question_list_id' => '629', 
            'explain_zh' => '自行车是一个行车单位，拥有与汽车相同的让行规则。',
            'explain_en' => 'Cycle lanes are areas of road specially designated for bicycles.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '630', 
            'user_id' => '1', 
            'question_list_id' => '630', 
            'explain_zh' => '公交车站不能停车',
            'explain_en' => 'This sign tells you when you may park in front of a bus stop.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '631', 
            'user_id' => '1', 
            'question_list_id' => '631', 
            'explain_zh' => '您不得将停车位停在消火栓附近，以免紧急工作人员进入。发生火灾时，急救人员可能需要在消防栓上连接软管。',
            'explain_en' => 'You must not park so close to a fire hydrant as to block emergency worker access. Emergency workers may need to attach a hose to the hydrant during a fire.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '632', 
            'user_id' => '1', 
            'question_list_id' => '632', 
            'explain_zh' => '黄灯是如果可以安全停下 就停下',
            'explain_en' => 'A yellow light is used to clear an intersection before a red light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '633', 
            'user_id' => '1', 
            'question_list_id' => '633', 
            'explain_zh' => '这是行人横穿的地方，礼让路口，但不是典型的人行横道。',
            'explain_en' => 'This is a place where pedestrians may cross, but it is not a typical pedestrian crossing.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '634', 
            'user_id' => '1', 
            'question_list_id' => '634', 
            'explain_zh' => '为了您自己的安全，以及其他道路使用者的安全和便利，在某些区域内您不得停车。',
            'explain_en' => 'For your own safety, and the safety and convenience of other road users, there are certain areas where you must not park.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '635', 
            'user_id' => '1', 
            'question_list_id' => '635', 
            'explain_zh' => '在进入环形交叉路口之前，您应该始终让路给驶近的车辆。',
            'explain_en' => 'You should always give way to approaching vehicles before you enter a roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '636', 
            'user_id' => '1', 
            'question_list_id' => '636', 
            'explain_zh' => '您应该尝试在汽车周围保持安全距离。尽量避免跟车太近。',
            'explain_en' => 'You should try to maintain a safety cushion around your car. Try to avoid following and being followed too closely.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '637', 
            'user_id' => '1', 
            'question_list_id' => '637', 
            'explain_zh' => '留空右侧车道，以加快交通速度。仅在必要时使用正确的车道。',
            'explain_en' => 'The right lane is reserved for faster moving traffic. Only use the right lane when you must.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '638', 
            'user_id' => '1', 
            'question_list_id' => '638', 
            'explain_zh' => '您的汽车两侧都有较大的盲区。',
            'explain_en' => 'Your car has large blind spots on either side.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '639', 
            'user_id' => '1', 
            'question_list_id' => '639', 
            'explain_zh' => '汽车要给自行车和行人让行',
            'explain_en' => 'Cycle lanes are areas of road specially designated for bicycles, but what are footpaths for?', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '640', 
            'user_id' => '1', 
            'question_list_id' => '640', 
            'explain_zh' => '切勿让没有驾驶员的汽车挡住消防栓。',
            'explain_en' => 'You must not leave an unattended car blocking a fire hydrant.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '641', 
            'user_id' => '1', 
            'question_list_id' => '641', 
            'explain_zh' => '如果您的记分过多，您的驾照将被暂停数月。',
            'explain_en' => 'Your licence will be suspended for a number of months if you accrue too many demerit points.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '642', 
            'user_id' => '1', 
            'question_list_id' => '642', 
            'explain_zh' => '交通箭头控制着沿特定方向移动的交通流。圆形信号指示剩余的车辆。',
            'explain_en' => 'Traffic arrows control the flow of traffic that is moving in a certain direction. Non-directional round signals direct the remaining traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '643', 
            'user_id' => '1', 
            'question_list_id' => '643', 
            'explain_zh' => '一般酒精测试后会有毒品测试！',
            'explain_en' => 'You must comply with an alcohol test.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '644', 
            'user_id' => '1', 
            'question_list_id' => '644', 
            'explain_zh' => '大灯可以帮助您看到并帮助其他驾驶员看到您。当能见度差时，必须使用大灯。',
            'explain_en' => 'Your headlights can help you see and help other drivers see you. You must use your headlights when visibility is poor.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '645', 
            'user_id' => '1', 
            'question_list_id' => '645', 
            'explain_zh' => '红色表示停止。',
            'explain_en' => 'Red means stop.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '646', 
            'user_id' => '1', 
            'question_list_id' => '646', 
            'explain_zh' => '黄猫的眼睛标记器通常用于危险或繁忙的路段。',
            'explain_en' => 'Yellow cat`s eye markers will often be used in dangerous or busy sections of road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '647', 
            'user_id' => '1', 
            'question_list_id' => '647', 
            'explain_zh' => '提前进入缓冲区，不要阻挡后面的车辆。',
            'explain_en' => 'Watch out for oncoming vehicles and for pedestrians who have stopped on a flush median while crossing the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '648', 
            'user_id' => '1', 
            'question_list_id' => '648', 
            'explain_zh' => '每当天黑或能见度不佳时，都应使用大灯。从法律上讲，您必须在日落前后打开大灯并保持打开状态。如果路灯已经亮了，您没有打开大灯，那么就要被罚款呢了',
            'explain_en' => 'Your headlights should be used whenever it is dark or visibility is poor. Legally, you are required to switch on your headlights around sunset and keep them on until daylight.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '649', 
            'user_id' => '1', 
            'question_list_id' => '649', 
            'explain_zh' => '诸如此类的强制性标志用于告知驾驶员他们必须或不可以做什么。',
            'explain_en' => 'Compulsory signs such as these are used to tell drivers what they must or must not do.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '650', 
            'user_id' => '1', 
            'question_list_id' => '650', 
            'explain_zh' => '人行横道被交通岛分开，行人更加安全。',
            'explain_en' => 'This pedestrian crossing is split by a raised traffic island: it means more safety for pedestrians.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '651', 
            'user_id' => '1', 
            'question_list_id' => '651', 
            'explain_zh' => '制动失败后，您应尽量避免其他道路使用者碰撞。',
            'explain_en' => 'You should try to avoid other road users after a brake failure.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '652', 
            'user_id' => '1', 
            'question_list_id' => '652', 
            'explain_zh' => '火车路口要注意',
            'explain_en' => 'You should take extra care around level crossings that have no automated lights, bells, or barricade.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '653', 
            'user_id' => '1', 
            'question_list_id' => '653', 
            'explain_zh' => 'STOP 的车辆 必须给 Give Way的让路',
            'explain_en' => 'A car at a Stop sign must give way to a car at a Give Way sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '654', 
            'user_id' => '1', 
            'question_list_id' => '654', 
            'explain_zh' => '您只应在晚上使用远光灯，因为它们会改善您的视线。',
            'explain_en' => 'You should only use your high beams at night when they will improve your ability to see. You should not use your high beams when they might reduce someone else`s ability to see.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '655', 
            'user_id' => '1', 
            'question_list_id' => '655', 
            'explain_zh' => '雾灯会产生白色或黄色的光束。',
            'explain_en' => 'Your fog lights produce a wide but low intensity beam of white or yellow light.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '656', 
            'user_id' => '1', 
            'question_list_id' => '656', 
            'explain_zh' => '如果需要，您必须遵守血液检查。',
            'explain_en' => 'You must comply with a blood test if requested.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '657', 
            'user_id' => '1', 
            'question_list_id' => '657', 
            'explain_zh' => '从车道进入道路之前，您应该始终准备让路于其他车辆。',
            'explain_en' => 'You should always be prepared to give way to other vehicles before you enter a road from a driveway.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '658', 
            'user_id' => '1', 
            'question_list_id' => '658', 
            'explain_zh' => 'L型板帮助驾驶者识别初学驾驶者，从而为他们提供更多的空间和时间。',
            'explain_en' => 'L-plates help reduce road rage and improve road safety. They help motorists identify learner drivers so they can give them more space and time.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '659', 
            'user_id' => '1', 
            'question_list_id' => '659', 
            'explain_zh' => '如果刹车失灵，您应该尽一切可能减慢速度。首先尝试更安全的方法。',
            'explain_en' => 'You should try to slow down any way you can should your brakes fail. Try safer methods first.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '660', 
            'user_id' => '1', 
            'question_list_id' => '660', 
            'explain_zh' => '红色表示停止。',
            'explain_en' => 'Red means stop.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '661', 
            'user_id' => '1', 
            'question_list_id' => '661', 
            'explain_zh' => '死记硬背题',
            'explain_en' => 'License holders are subject to trailer weight restrictions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '662', 
            'user_id' => '1', 
            'question_list_id' => '662', 
            'explain_zh' => '请勿将远光灯直接照在其他道路使用者身上。',
            'explain_en' => 'You must not shine your high beams directly onto any other road user.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '663', 
            'user_id' => '1', 
            'question_list_id' => '663', 
            'explain_zh' => '向左转的汽车将优先于向右转的汽车。',
            'explain_en' => 'A car that is turning left will have priority over a car that is turning right.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '664', 
            'user_id' => '1', 
            'question_list_id' => '664', 
            'explain_zh' => '记住吧',
            'explain_en' => 'Many cars have powered steering and brakes.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '665', 
            'user_id' => '1', 
            'question_list_id' => '665', 
            'explain_zh' => '转弯车辆必须准备让路。',
            'explain_en' => 'Turning vehicles must be prepared to give way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '666', 
            'user_id' => '1', 
            'question_list_id' => '666', 
            'explain_zh' => '如果您的驻车制动器失效，您的齿轮将有助于阻止汽车滚动。如果您的汽车很重或山坡陡峭，请保持正确的档位很重要。',
            'explain_en' => 'Your gears will help stop your car from rolling should your parking brake fail. It is important to leave your car in the correct gear if your car is heavy or the hill is steep.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '667', 
            'user_id' => '1', 
            'question_list_id' => '667', 
            'explain_zh' => '行人路专为行人设计。',
            'explain_en' => 'The footpath is designed for pedestrians.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '668', 
            'user_id' => '1', 
            'question_list_id' => '668', 
            'explain_zh' => '汽车在环岛左转。',
            'explain_en' => 'The car is turning left at a roundabout.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '669', 
            'user_id' => '1', 
            'question_list_id' => '669', 
            'explain_zh' => '手机可以影响驾驶员的注意力。',
            'explain_en' => 'Cell phones can take a driver`s attention away from the road.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '670', 
            'user_id' => '1', 
            'question_list_id' => '670', 
            'explain_zh' => '更高级别的超速驾驶犯罪会自动吊销牌照。对于那些在具有永久（非临时）速度限制的区域超速行驶的人尤其如此。',
            'explain_en' => 'Higher range speeding offenses attract an automatic license suspension. This is especially true for those who are caught speeding in an area with a permanent (non-temporary) speed limit.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '671', 
            'user_id' => '1', 
            'question_list_id' => '671', 
            'explain_zh' => '您一定阻碍支路交通。',
            'explain_en' => 'You must not unnecessarily block the free lawful movement of traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '672', 
            'user_id' => '1', 
            'question_list_id' => '672', 
            'explain_zh' => '记住吧！',
            'explain_en' => 'You may not drive with any load that extends too far beyond your rear axle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '673', 
            'user_id' => '1', 
            'question_list_id' => '673', 
            'explain_zh' => '除非有指定的停车位或允许停车的标志，否则您不能在交叉路口附近停车。',
            'explain_en' => 'You cannot park too close to an intersection, unless there are designated parking spaces or a permissive sign present.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '674', 
            'user_id' => '1', 
            'question_list_id' => '674', 
            'explain_zh' => '交通箭头控制着沿特定方向移动的交通流。无方向回合信号指示剩余的流量。',
            'explain_en' => 'Traffic arrows control the flow of traffic that is moving in a certain direction. Non-directional round signals direct the remaining traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '675', 
            'user_id' => '1', 
            'question_list_id' => '675', 
            'explain_zh' => '可以通过拨打111与紧急服务联系。',
            'explain_en' => 'Emergency services can be contacted by dialling 111.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '676', 
            'user_id' => '1', 
            'question_list_id' => '676', 
            'explain_zh' => '旨在为行动不便或进出车辆困难的人提供帮助。',
            'explain_en' => 'This park is designed to assist those who have difficulty with mobility or entering and exiting their vehicle.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '677', 
            'user_id' => '1', 
            'question_list_id' => '677', 
            'explain_zh' => '这种操作比传统的通行更为危险，因为您前面的汽车可能没有注意到您。如果必须通过这种方式，请确保前面的汽车知道您的意图。',
            'explain_en' => 'This manoeuvre is more dangerous than a traditional pass, as the car you are passing may not see you coming. If you must pass this way, try to make it as safe as possible, and ensure that the car you are passing knows your intentions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '678', 
            'user_id' => '1', 
            'question_list_id' => '678', 
            'explain_zh' => '当您遇到黄色信号时，请考虑您后面的跟车是否能够安全的停下来。',
            'explain_en' => 'Consider the traffic behind you as you approach a yellow signal.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '679', 
            'user_id' => '1', 
            'question_list_id' => '679', 
            'explain_zh' => '停车让行',
            'explain_en' => 'This sign is used to control who has right of way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '680', 
            'user_id' => '1', 
            'question_list_id' => '680', 
            'explain_zh' => '高速公路上一般不能停车，掉头，上下乘客',
            'explain_en' => 'Motorways are designed to handle high quantities of high speed traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '681', 
            'user_id' => '1', 
            'question_list_id' => '681', 
            'explain_zh' => 'T形交叉口有一个特殊的通行权规则。',
            'explain_en' => 'A special right of way rule exists for T-intersections.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '682', 
            'user_id' => '1', 
            'question_list_id' => '682', 
            'explain_zh' => '已经开始超车的车辆请尽快回到自己的道路上，没有开始超车的车辆禁止超车',
            'explain_en' => 'Road markings may be used to warn you that the road conditions will change ahead.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '683', 
            'user_id' => '1', 
            'question_list_id' => '683', 
            'explain_zh' => '变道之前，必须确保旁边没有汽车。',
            'explain_en' => 'Your car has blind spots large enough to hide another vehicle. You must ensure that there are no cars beside you before you change lanes.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '684', 
            'user_id' => '1', 
            'question_list_id' => '684', 
            'explain_zh' => '您应尝试将车辆停在安全的地方并引起其他车辆的注意。',
            'explain_en' => 'You should try to stop somewhere safe and gain the attention of other vehicles.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '685', 
            'user_id' => '1', 
            'question_list_id' => '685', 
            'explain_zh' => '除非另有说明，否则在大多数地方都可以掉头。',
            'explain_en' => 'U-turns are allowed in most places unless otherwise specified.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '686', 
            'user_id' => '1', 
            'question_list_id' => '686', 
            'explain_zh' => '一个非常通用的规则。',
            'explain_en' => 'There is a very general rule that applies here.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '687', 
            'user_id' => '1', 
            'question_list_id' => '687', 
            'explain_zh' => '注意左侧道路变窄',
            'explain_en' => 'This is a permanent warning sign.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '688', 
            'user_id' => '1', 
            'question_list_id' => '688', 
            'explain_zh' => '您必须考虑其他人，并安全驾驶。',
            'explain_en' => 'You must consider others on the road and drive safely.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '689', 
            'user_id' => '1', 
            'question_list_id' => '689', 
            'explain_zh' => '绿灯告诉驾驶员在安全的情况下可以通过。',
            'explain_en' => 'A green light tells motorists to go when safe.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '690', 
            'user_id' => '1', 
            'question_list_id' => '690', 
            'explain_zh' => '绿灯告诉驾驶员在安全的情况下可以通过。',
            'explain_en' => 'A green light tells motorists to go when safe.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '691', 
            'user_id' => '1', 
            'question_list_id' => '691', 
            'explain_zh' => '返回车道前，请始终目视检查您驶过的汽车是否在您的盲点',
            'explain_en' => 'Always visually check that the road is clear before you return to your lane. If the car you are passing is in your blind spot, it is not yet safe to return.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '692', 
            'user_id' => '1', 
            'question_list_id' => '692', 
            'explain_zh' => '有时您的指示灯或刹车灯可能会模糊不清或看不到。在这些时候，可以使用手势来帮助其他驾驶员理解您的意图。',
            'explain_en' => 'There are times when your indicators or brake lights may be obscured or hard to see. At these times it may be appropriate to use hand a signal to help other drivers understand your intentions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '693', 
            'user_id' => '1', 
            'question_list_id' => '693', 
            'explain_zh' => '检查周围车辆行人，并小心行进。',
            'explain_en' => 'You may have to stop ahead. Check your surrounds and proceed with care.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '694', 
            'user_id' => '1', 
            'question_list_id' => '694', 
            'explain_zh' => '这里的通行权可以通过判断每辆车的转弯方向来确定。',
            'explain_en' => 'Right of way here can be determined by examining which way each car is turning.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '695', 
            'user_id' => '1', 
            'question_list_id' => '695', 
            'explain_zh' => '骑自行车的人比汽车更脆弱，容易发生危险',
            'explain_en' => 'You must take care around all vulnerable round users.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '696', 
            'user_id' => '1', 
            'question_list_id' => '696', 
            'explain_zh' => '在没有任何标志的交通路口需要给右侧车辆让路',
            'explain_en' => 'When two cars are coming from opposing directions, the car continuing straight has right of way over the turning car. But here, the cars are approaching from different roads, so where each car is turning does not affect right of way.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '697', 
            'user_id' => '1', 
            'question_list_id' => '697', 
            'explain_zh' => '如果您要在没有刚性牵引系统的情况下（例如，使用绳索或滑索）牵引另一辆车，则最大允许速度为50km / h。',
            'explain_en' => 'If you are towing another vehicle without a rigid towing system, eg with a rope or a strop, the maximum allowable speed is 50km/h.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '698', 
            'user_id' => '1', 
            'question_list_id' => '698', 
            'explain_zh' => '速度限制是您可以行驶的最大速度。',
            'explain_en' => 'The speed limit is the maximum speed you may travel.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '699', 
            'user_id' => '1', 
            'question_list_id' => '699', 
            'explain_zh' => '谁的粗，谁先行',
            'explain_en' => 'You will find a regulatory sign here. This sign`s purpose is to tell motorists that they must give way to oncoming traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '700', 
            'user_id' => '1', 
            'question_list_id' => '700', 
            'explain_zh' => '此标志告诉您在这里没有优先通行权。',
            'explain_en' => 'This sign tells you that you do not have right of way here.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '701', 
            'user_id' => '1', 
            'question_list_id' => '701', 
            'explain_zh' => '您可能需要在这里停车。在您到达之前，检查前方，左侧和右侧的道路，观察是否有行人通过',
            'explain_en' => 'You may have to stop here. Check the road ahead, to the left, and to the right before you arrive.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '702', 
            'user_id' => '1', 
            'question_list_id' => '702', 
            'explain_zh' => '当您等待向右转的机会时，应该尝试在不阻碍交通的地方停下来。',
            'explain_en' => 'You should try to stop somewhere out of the path of traffic when you are waiting for a chance to turn right.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '703', 
            'user_id' => '1', 
            'question_list_id' => '703', 
            'explain_zh' => '有时您的指示灯或刹车灯可能会模糊不清或看不到。在这些时候，可以使用手势来帮助其他驾驶员理解您的意图。',
            'explain_en' => 'There are times when your indicators or brake lights may be obscured or hard to see. At these times it may be appropriate to use a hand signal to help other drivers understand your intentions.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '704', 
            'user_id' => '1', 
            'question_list_id' => '704', 
            'explain_zh' => '这是您在道路施工区域附近可能会发现的临时标志。',
            'explain_en' => 'This is a temporary sign that you may find around a road work area.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '705', 
            'user_id' => '1', 
            'question_list_id' => '705', 
            'explain_zh' => '黄线就是不能超车',
            'explain_en' => 'You must observe all painted road markings. These markings will tell you which lanes you can use, where you must stop, where you must give way, and where you can pass.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '706', 
            'user_id' => '1', 
            'question_list_id' => '706', 
            'explain_zh' => 'Give way 比 stop 的先走。',
            'explain_en' => 'Give way and stop signs are not equal.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '707', 
            'user_id' => '1', 
            'question_list_id' => '707', 
            'explain_zh' => '正确使用转向灯会使道路更安全。',
            'explain_en' => 'Other motorists do not expect you to change directions. Your indicators help communicate your intentions. Proper indicator use makes the road a much safer place.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '708', 
            'user_id' => '1', 
            'question_list_id' => '708', 
            'explain_zh' => '即使您无法以限速行驶，也不应阻塞交通。',
            'explain_en' => 'Even if you cannot travel at the speed limit, you should not hold up traffic.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '709', 
            'user_id' => '1', 
            'question_list_id' => '709', 
            'explain_zh' => '请谨慎处理所有黄色闪烁的交通信号。',
            'explain_en' => 'Proceed with caution through any yellow flashing traffic signal.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '710', 
            'user_id' => '1', 
            'question_list_id' => '710', 
            'explain_zh' => '谨慎行事并准备停车，前方可能有危险。请注意，这辆车的车顶上装有标志。',
            'explain_en' => 'Proceed with caution and be ready to pull over, there may be a hazard ahead. Note that this vehicle has a sign mounted on its roof.', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '711', 
            'user_id' => '1', 
            'question_list_id' => '711', 
            'explain_zh' => '拖车问题，请背下来。',
            'explain_en' => 'A trailer will handle how your car behaves on the road. You will take longer to stop, your car will manoeuvre differently, and you will be slower to accelerate. Therefore, drive at a safe and cautious speed, don`t tailgate, and leave yourself more room for error.', 
            'like' => '1',
            ]);
            
          
            
    }
}
