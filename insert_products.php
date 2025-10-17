<?php include "includes/header.php";
include "admin/connect.php";
    session_start();
    require 'includes/functions.php'; 
    
    // Your complete JSON data
    $json_data = '{
      "products": [
        {
          "category": "أزياء",
          "items": [
            {
              "id": 1,
              "name": "فستان ماكسي زهري مزين بالزهور",
              "price": 299.99,
              "description": "فستان طويل أنيق بتصميم مزهر، مثالي للمناسبات الخاصة واللقاءات الصيفية",
              "images": [
                "https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=500",
                "https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=500"
              ],
              "user": "أميرة محمد"
            },
            {
              "id": 2,
              "name": "بدلة عمل أنيقة باللون الأسود",
              "price": 450.0,
              "description": "بدلة عمل احترافية من قطعتين، مصممة من خامات عالية الجودة",
              "images": [
                "https://images.unsplash.com/photo-1485231183945-fffde7cb34f1?w=500",
                "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500"
              ],
              "user": "سارة أحمد"
            },
            {
              "id": 3,
              "name": "جينز ضيق باللون الأزرق",
              "price": 189.99,
              "description": "جينز ضيق مريح يناسب جميع المناسبات اليومية، مصنوع من قماش دينيم عالي الجودة",
              "images": [
                "https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=500",
                "https://images.unsplash.com/photo-1582418702059-97ebafb35d09?w=500"
              ],
              "date_added": "2024-02-05",
              "user": "فاطمة خالد"
            },
            {
              "id": 4,
              "name": "بلوزة حرير بيضاء أنيقة",
              "price": 220.0,
              "description": "بلوزة حرير بيضاء عالية الجودة، مثالية للعمل والمناسبات الرسمية",
              "images": [
                "https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=500",
                "https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=500"
              ],
              "user": "لمى عبدالله"
            },
            {
              "id": 5,
              "name": "تنورة قلمية باللون الرمادي",
              "price": 175.0,
              "description": "تنورة قلمية كلاسيكية باللون الرمادي، مثالية للعمل والمناسبات الرسمية",
              "images": [
                "https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500",
                "https://images.unsplash.com/photo-1539008835657-9e8e9680c956?w=500"
              ],
              "user": "نورة سعيد"
            },
            {
              "id": 6,
              "name": "جاكيت جلد طبيعي",
              "price": 650.0,
              "description": "جاكيت جلد طبيعي فاخر، يوفر الدفء والأناقة في نفس الوقت",
              "images": [
                "https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500",
                "https://images.unsplash.com/photo-1556906781-2a0a243666e6?w=500"
              ],
              "user": "هناء محمود"
            },
            {
              "id": 7,
              "name": "سواريه سهرة أسود مطرز",
              "price": 899.99,
              "description": "فستان سهرة أسود فاخر مع تطريزات لامعة، مثالي للحفلات المسائية",
              "images": [
                "https://images.unsplash.com/photo-1566479179816-d53e6d03f359?w=500",
                "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500"
              ],
              "user": "ريم علي"
            },
            {
              "id": 8,
              "name": "هودي رياضي مريح",
              "price": 120.0,
              "description": "هودي قطني مريح للارتداء اليومي والأنشطة الرياضية",
              "images": [
                "https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500",
                "https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500"
              ],
              "user": "أسماء حسن"
            },
            {
              "id": 9,
              "name": "بنطلون واسع باللون البيج",
              "price": 210.0,
              "description": "بنطلون واسع مريح وعصري، يناسب جميع فصول السنة",
              "images": [
                "https://images.unsplash.com/photo-1582418702059-97ebafb35d09?w=500",
                "https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=500"
              ],
              "user": "جواهر ناصر"
            },
            {
              "id": 10,
              "name": "تيشيرت قطني بأكمام طويلة",
              "price": 85.0,
              "description": "تيشيرت قطني عالي الجودة بأكمام طويلة، مثالي للارتداء اليومي",
              "images": [
                "https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500",
                "https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500"
              ],
              "date_added": "2024-03-15",
              "user": "دعاء كمال"
            }
          ]
        },
        {
          "category": "حقائب",
          "items": [
            {
              "id": 11,
              "name": "حقيبة يد جلدية سوداء",
              "price": 350.0,
              "description": "حقيبة يد جلدية أنيقة باللون الأسود، مناسبة للعمل والمناسبات",
              "images": [
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500",
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500"
              ],
              "user": "مها عبدالرحمن"
            },
            {
              "id": 12,
              "name": "حقيبة ظهر جلدية بنية",
              "price": 280.0,
              "description": "حقيبة ظهر عملية وجميلة، مثالية للعمل والرحلات اليومية",
              "images": [
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500",
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500"
              ],
              "user": "لينه محمد"
            },
            {
              "id": 13,
              "name": "حقيبة كروس بودي صغيرة",
              "price": 190.0,
              "description": "حقيبة كروس بودي عملية وصغيرة الحجم، مناسبة للخروج اليومي",
              "images": [
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500",
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500"
              ],
              "user": "رنا سعد"
            },
            {
              "id": 14,
              "name": "حقيبة سفر كبيرة متعددة الاستخدام",
              "price": 520.0,
              "description": "حقيبة سفر كبيرة الحجم مع عجلات، مثالية للسفر والرحلات الطويلة",
              "images": [
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500",
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500"
              ],
              "user": "نادين خليل"
            },
            {
              "id": 15,
              "name": "حقيبة كلاتش ذهبية للسهرات",
              "price": 180.0,
              "description": "حقيبة كلاتش صغيرة ومتألقة، مثالية لحفلات السهر والمناسبات الخاصة",
              "images": [
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500",
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500"
              ],
              "user": "يارا فؤاد"
            },
            {
              "id": 16,
              "name": "حقيبة توت بيغ قماشية",
              "price": 95.0,
              "description": "حقيبة توت بيغ قماشية مريحة، مثالية للتسوق والاستخدام اليومي",
              "images": [
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500",
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500"
              ],
              "user": "سلمى راشد"
            },
            {
              "id": 17,
              "name": "حقيبة كتف جلدية باللون البني",
              "price": 320.0,
              "description": "حقيبة كتف جلدية فاخرة، تجمع بين الأناقة والعملية",
              "images": [
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500",
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500"
              ],
              "user": "ميار ناصر"
            },
            {
              "id": 18,
              "name": "حقيبة مستندات جلدية",
              "price": 275.0,
              "description": "حقيبة مستندات مهنية أنيقة، مثالية لرجال الأعمال والموظفين",
              "images": [
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500",
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500"
              ],
              "date_added": "2024-03-08",
              "user": "هديل كمال"
            },
            {
              "id": 19,
              "name": "حقيبة شاطئ قماشية ملونة",
              "price": 65.0,
              "description": "حقيبة شاطئ كبيرة وملونة، مثالية للرحلات البحرية والإجازات",
              "images": [
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500",
                "https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=500"
              ],
              "user": "جنى وليد"
            },
            {
              "id": 20,
              "name": "حقيبة ظهر رياضية",
              "price": 150.0,
              "description": "حقيبة ظهر رياضية عملية، مناسبة للتمارين والأنشطة الخارجية",
              "images": [
                "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500",
                "https://images.unsplash.com/photo-1591561954557-26941169b49e?w=500"
              ],
              "user": "رغد عماد"
            }
          ]
        },
        {
          "category": "أحذية",
          "items": [
            {
              "id": 21,
              "name": "كعب عالي أسود أنيق",
              "price": 220.0,
              "description": "كعب عالي كلاسيكي باللون الأسود، مثالي للعمل والحفلات",
              "images": [
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500",
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500"
              ],
              "user": "آلاء حسن"
            },
            {
              "id": 22,
              "name": "صنادل صيفية مفتوحة",
              "price": 130.0,
              "description": "صنادل صيفية مريحة ومناسبة للطقس الحار والإجازات",
              "images": [
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500",
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500"
              ],
              "user": "بسمة علي"
            },
            {
              "id": 23,
              "name": "أحذية رياضية بيضاء",
              "price": 280.0,
              "description": "أحذية رياضية عصرية باللون الأبيض، مناسبة للرياضة واليومي",
              "images": [
                "https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=500",
                "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500"
              ],
              "user": "تالا محمد"
            },
            {
              "id": 24,
              "name": "بوت طويل باللون الأسود",
              "price": 380.0,
              "description": "بوت طويل أنيق باللون الأسود، مثالي لفصل الشتاء والأناقة اليومية",
              "images": [
                "https://images.unsplash.com/photo-1542280756-74b2f55e73ab?w=500",
                "https://images.unsplash.com/photo-1605812860427-4024433a70fd?w=500"
              ],
              "user": "ثناء أحمد"
            },
            {
              "id": 25,
              "name": "أحذية بلاطة مريحة",
              "price": 160.0,
              "description": "أحذية بلاطة عملية ومريحة، مناسبة للمشي لمسافات طويلة",
              "images": [
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500",
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500"
              ],
              "user": "جمانة خالد"
            },
            {
              "id": 26,
              "name": "صنادل كعب منخفض",
              "price": 145.0,
              "description": "صنادل أنيقة بكعب منخفض، مثالية للخروج اليومي والمناسبات غير الرسمية",
              "images": [
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500",
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500"
              ],
              "user": "حنين محمود"
            },
            {
              "id": 27,
              "name": "أحذية مكتبية مغلقة",
              "price": 195.0,
              "description": "أحذية مكتبية أنيقة ومريحة، مناسبة للعمل والمناسبات الرسمية",
              "images": [
                "https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=500",
                "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500"
              ],
              "user": "ديمة سعيد"
            },
            {
              "id": 28,
              "name": "أحذية كاجوال باللون البيج",
              "price": 175.0,
              "description": "أحذية كاجوال مريحة وعصرية، تناسب جميع الأوقات",
              "images": [
                "https://images.unsplash.com/photo-1542280756-74b2f55e73ab?w=500",
                "https://images.unsplash.com/photo-1605812860427-4024433a70fd?w=500"
              ],
              "user": "رواء ناصر"
            },
            {
              "id": 29,
              "name": "أحذية رياضية متعددة الألوان",
              "price": 240.0,
              "description": "أحذية رياضية ملونة وعصرية، مثالية للشباب والأنشطة اليومية",
              "images": [
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500",
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500"
              ],
              "user": "زينب وليد"
            },
            {
              "id": 30,
              "name": "صنادل شاطئ مريحة",
              "price": 85.0,
              "description": "صنادل شاطئ خفيفة ومريحة، مثالية للإجازات والرحلات البحرية",
              "images": [
                "https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500",
                "https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500"
              ],
              "user": "سهام راشد"
            }
          ]
        },
        {
          "category": "إكسسوارات",
          "items": [
            {
              "id": 31,
              "name": "ساعة يد ذهبية فاخرة",
              "price": 450.0,
              "description": "ساعة يد أنيقة بإطار ذهبي، تجمع بين الدقة والأناقة",
              "images": [
                "https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=500",
                "https://images.unsplash.com/photo-1547996160-81dfd9c4b1b3?w=500"
              ],
              "user": "شذى محمد"
            },
            {
              "id": 32,
              "name": "قلادة فضية مرصعة",
              "price": 180.0,
              "description": "قلادة فضية رائعة مع أحجار كريمة، إضافة مثالية لأناقتك",
              "images": [
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500",
                "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=500"
              ],
              "user": "ضحى أحمد"
            },
            {
              "id": 33,
              "name": "نظارات شمسية designer",
              "price": 320.0,
              "description": "نظارات شمسية عصرية من ماركة عالمية، تحمي عينيك وتضيف لأناقتك",
              "images": [
                "https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=500",
                "https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=500"
              ],
              "user": "علا خالد"
            },
            {
              "id": 34,
              "name": "أساور متعددة الطبقات",
              "price": 95.0,
              "description": "مجموعة أساور أنيقة متعددة الطبقات، يمكن ارتداؤها معاً أو منفردة",
              "images": [
                "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=500",
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500"
              ],
              "user": "غادة محمود"
            },
            {
              "id": 35,
              "name": "خاتم خطوبة ماسي",
              "price": 1200.0,
              "description": "خاتم خطوبة فاخر مرصع بالماس، تصميم كلاسيكي وأنيق",
              "images": [
                "https://images.unsplash.com/photo-1605100804763-247f67b3557e?w=500",
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500"
              ],
              "user": "فيروز سعيد"
            },
            {
              "id": 36,
              "name": "وشاح حريري مطبوع",
              "price": 120.0,
              "description": "وشاح حريري أنيق بمطبوعات عصرية، يضيف لمسة جمالية لأناقتك",
              "images": [
                "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=500",
                "https://images.unsplash.com/photo-1445205170230-053b83016050?w=500"
              ],
              "user": "كارين ناصر"
            },
            {
              "id": 37,
              "name": "حلقان ذهبية كلاسيكية",
              "price": 140.0,
              "description": "حلقان ذهبية بتصميم كلاسيكي، تناسب جميع المناسبات",
              "images": [
                "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=500",
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500"
              ],
              "user": "لارا وليد"
            },
            {
              "id": 38,
              "name": "سلسلة رقبة متدرجة",
              "price": 210.0,
              "description": "سلسلة رقبة أنيقة بتصميم متدرج، تضيف لمسة من الأناقة",
              "images": [
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500",
                "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=500"
              ],
              "user": "ميرا راشد"
            },
            {
              "id": 39,
              "name": "بروش زهري أنيق",
              "price": 85.0,
              "description": "بروش زهري جميل، مثالي لتزيين الملابس والحقائب",
              "images": [
                "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=500",
                "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=500"
              ],
              "user": "نادين كمال"
            },
            {
              "id": 40,
              "name": "حزام جلد طبيعي",
              "price": 110.0,
              "description": "حزام جلد طبيعي متين، يضيف لمسة نهائية لأناقتك",
              "images": [
                "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=500",
                "https://images.unsplash.com/photo-1445205170230-053b83016050?w=500"
              ],
              "user": "هبة عماد"
            }
          ]
        },
        {
          "category": "عطور",
          "items": [
            {
              "id": 41,
              "name": "عطر فلورال ناعم",
              "price": 280.0,
              "description": "عطر نسائي برائحة زهرية ناعمة، يدوم طويلاً ويناسب اليومي",
              "images": [
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500",
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500"
              ],
              "user": "وردية محمد"
            },
            {
              "id": 42,
              "name": "عطر شرقي غامق",
              "price": 350.0,
              "description": "عطر برائحة شرقية غامقة وجذابة، مثالي للسهرات",
              "images": [
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500",
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500"
              ],
              "user": "ياسمين أحمد"
            },
            {
              "id": 43,
              "name": "عطر الحمضيات المنعش",
              "price": 240.0,
              "description": "عطر منعش برائحة الحمضيات، مثالي للصيف والنهار",
              "images": [
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500",
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500"
              ],
              "user": "أبرار خالد"
            },
            {
              "id": 44,
              "name": "عطر المسك الأبيض",
              "price": 320.0,
              "description": "عطر نقي برائحة المسك الأبيض، أنيق ومنعش",
              "images": [
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500",
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500"
              ],
              "user": "بتول محمود"
            },
            {
              "id": 45,
              "name": "عطر الأخشاب النادرة",
              "price": 420.0,
              "description": "عطر فاخر برائحة الأخشاب النادرة، للنساء الواثقات",
              "images": [
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500",
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500"
              ],
              "user": "جوري سعيد"
            },
            {
              "id": 46,
              "name": "عطر الفواكه الاستوائية",
              "price": 260.0,
              "description": "عطر مميز برائحة الفواكه الاستوائية، منعش ومثير",
              "images": [
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500",
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500"
              ],
              "user": "داليا ناصر"
            },
            {
              "id": 47,
              "name": "عطر الياسمين النقي",
              "price": 290.0,
              "description": "عطر نقي برائحة الياسمين، رومانسي وأنثوي",
              "images": [
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500",
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500"
              ],
              "user": "ربى وليد"
            },
            {
              "id": 48,
              "name": "عطر الفانيليا الدافئة",
              "price": 275.0,
              "description": "عطر دافئ برائحة الفانيليا، مريح وجذاب",
              "images": [
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500",
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500"
              ],
              "user": "سندس راشد"
            },
            {
              "id": 49,
              "name": "عطر البحر المنعش",
              "price": 230.0,
              "description": "عطر منعش برائحة البحر، يذكرك بالإجازات والاسترخاء",
              "images": [
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500",
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500"
              ],
              "user": "شمس كمال"
            },
            {
              "id": 50,
              "name": "عطر الورد الملكي",
              "price": 380.0,
              "description": "عطر ملكي برائحة الورد، فاخر وأنيق",
              "images": [
                "https://images.unsplash.com/photo-1590736968-fc8b8b70507a?w=500",
                "https://images.unsplash.com/photo-1541643600914-78b084683601?w=500"
              ],
              "user": "لونا عماد"
            }
          ]
        },
        {
          "category": "عناية بالبشرة",
          "items": [
            {
              "id": 51,
              "name": "مرطب يومي للبشرة الجافة",
              "price": 85.0,
              "description": "مرطب يومي غني يرطب البشرة الجافة بعمق ويحميها من الجفاف",
              "images": [
                "https://images.unsplash.com/photo-15562285785-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "سارة أحمد"
            },
            {
              "id": 52,
              "name": "غسول الوجه اللطيف",
              "price": 45.0,
              "description": "غسول وجه لطيف ينظف البشرة بعمق دون تجفيفها، مناسب لجميع أنواع البشرة",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "لمى عبدالله"
            },
            {
              "id": 53,
              "name": "مصل فيتامين سي",
              "price": 120.0,
              "description": "مصل فيتامين سي يضيء البشرة ويقلل من ظهور البقع الداكنة والتجاعيد",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "نورة سعيد"
            },
            {
              "id": 54,
              "name": "كريم عيون مضاد للتجاعيد",
              "price": 95.0,
              "description": "كريم عيون خاص يقلل من الهالات السوداء والتجاعيد حول منطقة العين",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "هناء محمود"
            },
            {
              "id": 55,
              "name": "واقي شمس SPF 50",
              "price": 65.0,
              "description": "واقي شمس عالي الحماية يحمي البشرة من الأشعة فوق البنفسجية الضارة",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "ريم علي"
            },
            {
              "id": 56,
              "name": "مقشر الوجه الناعم",
              "price": 55.0,
              "description": "مقشر لطيف يزيل الخلايا الميتة وينظف المسام بعمق",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "أسماء حسن"
            },
            {
              "id": 57,
              "name": "قناع الطين المنقي",
              "price": 75.0,
              "description": "قناع طين طبيعي ينقي البشرة ويمنحها النضارة والحيوية",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "جواهر ناصر"
            },
            {
              "id": 58,
              "name": "تونر مهدئ للبشرة",
              "price": 60.0,
              "description": "تونر لطيف يهدئ البشرة ويعيد توازنها الطبيعي بعد التنظيف",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "دعاء كمال"
            },
            {
              "id": 59,
              "name": "مرطب ليلي مكثف",
              "price": 110.0,
              "description": "مرطب ليلي غني يعمل على إصلاح البشرة أثناء النوم",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "مها عبدالرحمن"
            },
            {
              "id": 60,
              "name": "زيت تنظيف البشرة",
              "price": 80.0,
              "description": "زيت طبيعي ينظف البشرة بعمق ويزيل الماكياج بفعالية",
              "images": [
                "https://images.unsplash.com/photo-1556228578-5f4b0b9e2b2a?w=500",
                "https://images.unsplash.com/photo-1556228578-1a8b8c9b6a8a?w=500"
              ],
              "user": "لينه محمد"
            }
          ]
        },
        {
          "category": "مستحضرات تجميل",
          "items": [
            {
              "id": 61,
              "name": "أحمر شفاه سائل مات",
              "price": 45.0,
              "description": "أحمر شفاه سائل بتشطيب مات يدوم طويلاً ولا يبهت",
              "images": [
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500",
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500"
              ],
              "user": "رنا سعد"
            },
            {
              "id": 62,
              "name": "ماسكرا طويلة الرموش",
              "price": 35.0,
              "description": "ماسكرا تمنح الرموش طولاً وكثافة فائقة دون التكتل",
              "images": [
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500",
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500"
              ],
              "user": "نادين خليل"
            },
            {
              "id": 63,
              "name": "أحمر خدود بودرة",
              "price": 40.0,
              "description": "أحمر خدود ناعم يمنح الخدود لوناً طبيعياً وجذاباً",
              "images": [
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500",
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500"
              ],
              "user": "يارا فؤاد"
            },
            {
              "id": 64,
              "name": "كونسيلر عالي التغطية",
              "price": 50.0,
              "description": "كونسيلر يغطي الهالات السوداء والعيوب بشكل كامل",
              "images": [
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500",
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500"
              ],
              "user": "سلمى راشد"
            },
            {
              "id": 65,
              "name": "ظلال عيون متعددة الألوان",
              "price": 65.0,
              "description": "باليت ظلال عيون بألوان متنوعة تناسب جميع المناسبات",
              "images": [
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500",
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500"
              ],
              "user": "ميار ناصر"
            },
            {
              "id": 66,
              "name": "أساس سائل خفيف",
              "price": 70.0,
              "description": "أساس سائل خفيف يمنح البشرة مظهراً طبيعياً ومتجدداً",
              "images": [
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500",
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500"
              ],
              "user": "هديل كمال"
            },
            {
              "id": 67,
              "name": "برونزر بودرة",
              "price": 55.0,
              "description": "برونزر يمنح البشرة توهجاً طبيعياً وشمسياً",
              "images": [
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500",
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500"
              ],
              "user": "جنى وليد"
            },
            {
              "id": 68,
              "name": "آيلاينر سائل",
              "price": 30.0,
              "description": "آيلاينر سائل بدقة عالية لرسم خطوط عيون مثالية",
              "images": [
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500",
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500"
              ],
              "user": "رغد عماد"
            },
            {
              "id": 69,
              "name": "بودرة وجه شفافة",
              "price": 60.0,
              "description": "بودرة شفافة تثبت الماكياج وتمنح البشرة مظهراً ناعماً",
              "images": [
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500",
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500"
              ],
              "user": "آلاء حسن"
            },
            {
              "id": 70,
              "name": "هيلايت سائل",
              "price": 48.0,
              "description": "هيلايت سائل يمنح البشرة توهجاً طبيعياً وأنيقاً",
              "images": [
                "https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=500",
                "https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=500"
              ],
              "user": "بسمة علي"
            }
          ]
        }
      ]
    }';
    
    function insertProductsFromJson($con, $jsonFile) {
        // Read JSON file
        if (!file_exists($jsonFile)) {
            return "<div class='alert alert-danger'>JSON file not found</div>";
        }
        
        $jsonContent = file_get_contents($jsonFile);
        $data = json_decode($jsonContent, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return "<div class='alert alert-danger'>JSON decode error: " . json_last_error_msg() . "</div>";
        }
        
        $insertedCount = 0;
        $errorCount = 0;
        $messages = [];
        
        foreach ($data['products'] as $category) {
            // Get category ID from category name
            $catStmt = $con->prepare("SELECT id FROM categories WHERE name = ?");
            $catStmt->execute([$category['category']]);
            $catRow = $catStmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$catRow) {
                $messages[] = "<div class='alert alert-warning'>Category not found: " . $category['category'] . "</div>";
                continue;
            }
            
            $cat_id = $catRow['id'];
            $user_id = $_SESSION['user_id'] ?? 1; // Default to 1 if no session
            
            foreach ($category['items'] as $product) {
                try {
                    $name = $product['name'];
                    $price = $product['price'];
                    $desc = $product['description'];
                    $stock = $product['stock'] ?? 10; // Default stock if not provided
                    
                    // Check if product already exists
                    $checkStmt = $con->prepare("SELECT * FROM products WHERE name = ?");
                    $checkStmt->execute([$name]);
                    
                    if ($checkStmt->rowCount() > 0) {
                        $messages[] = "<div class='alert alert-warning'>Product already exists: " . $name . "</div>";
                        $errorCount++;
                        continue;
                    }
                    
                    // Validate required fields
                    if (empty($name) || empty($price) || empty($desc)) {
                        $messages[] = "<div class='alert alert-warning'>Missing required fields for: " . $name . "</div>";
                        $errorCount++;
                        continue;
                    }
                    
                    // Handle images - convert URLs to local paths or keep as URLs
                    $uploadedImages = [];
                    if (isset($product['images']) && is_array($product['images'])) {
                        foreach ($product['images'] as $imageUrl) {
                            $uploadedImages[] = $imageUrl;

                        }
                    }
                    
                    // Insert product
                    $stmt = $con->prepare("INSERT INTO 
                        products(name, price, stock, description, images, category_id, user_id, created_at)
                        VALUES(:zname, :zprice, :zstock, :zdesc, :zimages, :zcat, :zuser, NOW())");
                    
                    $stmt->execute([
                        'zname'   => $name,
                        'zprice'  => $price,
                        'zstock'  => $stock,
                        'zdesc'   => $desc,
                        'zimages' => !empty($uploadedImages) ? json_encode($uploadedImages) : null,
                        'zcat'    => $cat_id,
                        'zuser'   => $user_id
                    ]);
                    
                    $insertedCount++;
                    $messages[] = "<div class='alert alert-success'>Inserted: " . $name . "</div>";
                    
                } catch (PDOException $e) {
                    $messages[] = "<div class='alert alert-danger'>Error inserting " . $name . ": " . $e->getMessage() . "</div>";
                    $errorCount++;
                }
            }
        }
        
        // Summary message
        $summary = "<div class='alert alert-info'><strong>Import Summary:</strong><br>
                    ✅ Successfully inserted: $insertedCount products<br>
                    ⚠️ Errors/Skipped: $errorCount products</div>";
        
        return $summary . implode('', $messages);
    }
    
    // Optional: Function to download images
    function downloadImage($imageUrl, $uploadDir) {
        try {
            $imageData = file_get_contents($imageUrl);
            if ($imageData === false) {
                return false;
            }
            
            $fileName = time() . '_' . basename($imageUrl);
            $filePath = $uploadDir . $fileName;
            
            if (file_put_contents($filePath, $imageData)) {
                return $fileName;
            }
            
            return false;
        } catch (Exception $e) {
            return false;
        }
    }
    
    // Main execution
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['import_json'])) {
        $result = insertProductsFromJson($con, 'products.json');
        echo $result;
    }
    ?>
  
        <div class="container mt-5">
            <div class="row">
              
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Import Products from JSON File</h3>
                        </div>
                        <div class="card-body">
                            <p>This will import products from <code>data/products.json</code> into the database.</p>
                            
                            <form method="post">
                                <div class="mb-3">
                                    <label class="form-label">JSON File Path:</label>
                                    <input type="text" class="form-control" value="data/products.json" readonly>
                                    <div class="form-text">Make sure your JSON file is properly formatted.</div>
                                </div>
                                
                                <button type="submit" name="import_json" class="btn btn-primary" 
                                        onclick="return confirm('Are you sure you want to import products? This may take a while.')">
                                    📥 Import Products
                                </button>
                                
                                <a href="/alien_style" class="btn btn-secondary">← Back to Products</a>
                            </form>
                            
                            <?php
                            // Display results if available
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['import_json'])) {
                                echo $result;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/header.php";
