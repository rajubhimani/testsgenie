SELECT QS.id,QS.insdata,QSDET.dtype,QSDET.details,QSDET.lang FROM `questions` QS INNER JOIN quesdet QSDET ON QS.id=QSDET.refid
where QSDET.dtype='Instructions'
and QS.id='6628'
order by QS.id desc

SELECT QS.id,QS.expdata,QSDET.dtype,QSDET.details,QSDET.lang FROM `questions` QS INNER JOIN quesdet QSDET ON QS.id=QSDET.refid
where QSDET.dtype='Explanations'
order by QS.id desc

SELECT QS.id,QS.quesdata,QSDET.dtype,QSDET.details,QSDET.lang FROM `questions` QS INNER JOIN quesdet QSDET ON QS.id=QSDET.refid
where QSDET.dtype='Questions'
order by QS.id desc

SELECT QS.id,QS.optiondata,QSDET.dtype,QSDET.details,QSDET.lang FROM `questions` QS INNER JOIN quesdet QSDET ON QS.id=QSDET.refid
where QSDET.dtype='Options'
order by QS.id desc

create view qdet_Instructions as(
  select
    quesdet.refid,
    case when lang = 'English' then details end as English,
    case when lang = 'Hindi' then details end as Hindi
  from quesdet
  where dtype='Instructions'
);


select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Instructions group by refid;


create view qdet_Explanations as(
  select
    quesdet.refid,
    case when lang = "English" then details end as English,
    case when lang = "Hindi" then details end as Hindi
  from quesdet
  where dtype='Explanations'
);

select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Explanations group by refid;

create view qdet_Questions as(
  select
    quesdet.refid,
    case when lang = "English" then details end as English,
    case when lang = "Hindi" then details end as Hindi
  from quesdet
  where dtype='Questions'
);

select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Questions group by refid;

create view qdet_Options as(
  select
    quesdet.refid,
    quesdet.ordno,
    case when lang = "English" then details end as English,
    case when lang = "Hindi" then details end as Hindi
  from quesdet
  where dtype='Options'
);

select refid,ordno,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Options group by refid,ordno;


create view qdet_OptionsImg as(
  select
    quesdetimg.refid,
    case when ordno = "1" then dimg end as Op1,
    case when ordno = "2" then dimg end as Op2,
    case when ordno = "3" then dimg end as Op3,
    case when ordno = "4" then dimg end as Op4,
    case when ordno = "5" then dimg end as Op5
  from quesdetimg
  where dtype='Options'
);

select refid,
GROUP_CONCAT(`Op1`) as `Opt1`,
GROUP_CONCAT(`Op2`) as `Opt2`,
GROUP_CONCAT(`Op3`) as `Opt3`,
GROUP_CONCAT(`Op4`) as `Opt4`,
GROUP_CONCAT(`Op5`) as `Opt5`
from qdet_OptionsImg group by refid


create view qdet_OtherImg as(
  select
    quesdetimg.refid,
    case when dtype = "Instructions" then dimg end as Instructions,
    case when dtype = "Questions" then dimg end as Questions,
    case when dtype = "Explanations" then dimg end as Explanations
  from quesdetimg
  where dtype!='Options'
);

select refid,
GROUP_CONCAT(`Instructions`) as `Instructions1`,
GROUP_CONCAT(`Questions`) as `Questions1`,
GROUP_CONCAT(`Explanations`) as `Explanations1`
from qdet_OtherImg group by refid

create view qdet_Options1 as(
  select refid,
  ordno,
  GROUP_CONCAT(`English`) as `English1`,
  GROUP_CONCAT(`Hindi`) as `Hindi1`
  from qdet_options
  GROUP BY refid,ordno
);
